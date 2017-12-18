<?php

namespace App\Http\Controllers;

use App\Evento;
use App\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use LaravelFCM\Message\OptionsBuilder;
use LaravelFCM\Message\PayloadDataBuilder;
use LaravelFCM\Message\PayloadNotificationBuilder;
use FCM;


class EventoController extends Controller
{
    public function editEvento($id)
    {
        $evento = Evento::find($id);
        return view('edit_evento', compact('evento'));
    }

    public function getForm()
    {
        return view('insert_evento');
    }

    //Ritorna il JSON per le api;
    public function getEventoById($id)
    {
        $evento = Evento::find($id);

        return response()->json($evento);
    }

    //Ritorna il JSON per le api;
    public function getEventi()
    {
        $evArray = Evento::all();

        $evArray->each(function ($ev) {
            $ev->immagine = secure_asset(Storage::url($ev->immagine));
        });

        $returnArray = ["evento" => $evArray];

        return response()->json($returnArray);
    }

    //aggiorna l'elemento
    public function updateEvento(Request $request)
    {
        $evento = Evento::find($request->id);

        $path = null;

        if($request->hasFile('immagine'))
        {
            $path = Storage::putFile('', $request->file('immagine'));
        }

        $evento->titolo= $request->titolo;
        $evento->descrizione= $request->descrizione;
        $evento->data= $request->data;
        $evento->ora_inizio= $request->orainizio;
        $evento->ora_fine= $request->orafine;

        if($path != null)
        {
            Storage::delete($evento->immagine);
            $evento->immagine = $path;
        }
        $evento->save();
        $this->updateSchedarioVersion();
        return redirect('/listEventi');

    }

    //cancella l'elemento
    public function destroyEvento($id)
    {
        $evento = Evento::find($id);
        Storage::delete($evento->immagine);
        $evento->delete();
        $this->updateSchedarioVersion();
        return redirect('/listEventi');
    }


    //inserisce un elemento nel DB
    public function insertEvento(Request $request)
    {
        $evento = new Evento;
        $evento->titolo= $request->titolo;
        $evento->descrizione= $request->descrizione;
        $evento->data= $request->data;
        $evento->ora_inizio= $request->orainizio;
        $evento->ora_fine= $request->orafine;

        $path = null;

        if($request->hasFile('immagine'))
        {
            $path = Storage::putFile('', $request->file('immagine'));
        }

        $evento->immagine= $path;
        $evento->save();
        $this->updateSchedarioVersion();

		$notificationBuilder = new PayloadNotificationBuilder();
		$notificationBuilder->setTitle('Nuovo evento creato')
		            		->setBody('Questo evento è bello ed è inviato con Laravel')
		            		->setSound('sound')
		            		->setBadge('badge');

		$notification = $notificationBuilder->build();

		return redirect('/listEventi');
    }

    //mostra tutti gli elementi
    public function listEventi()
    {
        return view('list_eventi', ['eventi' => Evento::all()]);
    }

    private function updateSchedarioVersion()
    {
        $sched = \App\Schedario::find(1);
        $sched->schedario_version = $sched->schedario_version + 1;
        $sched->update();
    }

}
