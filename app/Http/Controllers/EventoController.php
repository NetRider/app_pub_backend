<?php

namespace App\Http\Controllers;

use App\Evento;
use App\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use LaravelFCM\Message\OptionsBuilder;
use LaravelFCM\Message\PayloadDataBuilder;
use LaravelFCM\Message\PayloadNotificationBuilder;
use LaravelFCM\Message\Topics;
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
            $ev->immagine = asset(Storage::url($ev->immagine));
        });

        $returnArray = ["evento" => $evArray];

        return response()->json($returnArray);
    }

    //aggiorna l'elemento
    public function updateEvento(Request $request)
    {
        $evento = Evento::find($request->id);

        $path = null;

        if($request->hasFile('immagineEdit'))
        {
            $path = Storage::putFile('', $request->file('immagineEdit'));
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

		$notificationBuilder = new PayloadNotificationBuilder($evento->titolo);
		$notificationBuilder->setBody($evento->descrizione)
				    ->setSound('default');

		$notification = $notificationBuilder->build();

		$topic = new Topics();
		$topic->topic('PubNotification');

		$dataBuilder = new PayloadDataBuilder();
			$dataBuilder->addData([
				'id_evento' => $evento->id,
			]);
		$data = $dataBuilder->build();

		$topicResponse = FCM::sendToTopic($topic, null, $notification, $data);

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
