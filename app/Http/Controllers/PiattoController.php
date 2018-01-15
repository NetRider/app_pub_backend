<?php

namespace App\Http\Controllers;

use App\Piatto;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

use LaravelFCM\Message\OptionsBuilder;
use LaravelFCM\Message\PayloadDataBuilder;
use LaravelFCM\Message\PayloadNotificationBuilder;
use LaravelFCM\Message\Topics;
use FCM;

class PiattoController extends Controller
{

    public function getForm()
    {
        return view('insert_piatto');
    }

    public function getPiatti()
    {
        return Piatto::all();
    }

    public function getPiattiByCategoria($cat_id)
    {
        $piatti = Piatto::where('categoria_id', $cat_id)->get();
        return $piatti;
    }

    public function getPiattoById($piatto_id)
    {
        return Piatto::find($piatto_id);
    }

    public function insertPiatto(Request $request)
    {
        $piatto = new Piatto;
        $piatto->nome = $request->nome;

        $path=null;

        if($request->hasFile('immagine'))
        {
            $path = Storage::putFile('', $request->file('immagine'));
        }

        $piatto->immagine = $path;
        $piatto->descrizione = $request->descrizione;
        $piatto->prezzo = $request->prezzo;
        $piatto->categoria_id = $request->categoria_id;
		if($request->aggiunte == null)
		{
			$piatto->aggiunte = false;
		}else {
			$piatto->aggiunte = true;
		}
        $this->updateMenuVersion();
        $piatto->save();

		$titolo_notifica = $request->titolo_notifica;
		$descrizione_notifica = $request->descrizione_notifica;

		if($titolo_notifica != null && $descrizione_notifica != null)
		{
			$notificationBuilder = new PayloadNotificationBuilder($titolo_notifica);
			$notificationBuilder->setBody($descrizione_notifica)
					    ->setSound('default');

			$notification = $notificationBuilder->build();

			$topic = new Topics();
			$topic->topic('PubNotification');

			$dataBuilder = new PayloadDataBuilder();
				$dataBuilder->addData([
					'id_piatto' => $piatto->id,
				]);
			$data = $dataBuilder->build();

			$topicResponse = FCM::sendToTopic($topic, null, $notification, $data);
		}

        return redirect('/listPiatti');
    }

    //popola la view di edit
    public function editPiatto($id)
    {
        $piatto = Piatto::find($id);
        return view('edit_piatto', compact('piatto'));
    }

    //aggiorna l'elemento
    public function updatePiatto(Request $request)
    {
        $path = null;

        if($request->hasFile('immagine'))
        {
            $path = Storage::putFile('', $request->file('immagine'));
        }

        $piatto = Piatto::find($request->id);
        $piatto->nome= $request->nome;
        $piatto->descrizione= $request->descrizione;

        if($path != null) {
            Storage::delete($piatto->immagine);
            $piatto->immagine = $path;
        }
        $piatto->prezzo = $request->prezzo;
        $piatto->categoria_id= $request->categoria_id;
        $this->updateMenuVersion();
        $piatto->save();
        return redirect('/listPiatti');

    }

    //cancella l'elemento
    public function destroyPiatto($id)
    {
        $piatto = Piatto::find($id);
        Storage::delete($piatto->immagine);
        $this->updateMenuVersion();
        $piatto->delete();
        return redirect('/listPiatti');
    }

    //mostra tutti gli elementi
    public function listPiatti()
    {
        return view('list_piatti', ['piatti' => Piatto::all()]);
    }

    private function updateMenuVersion()
    {
        $menu = \App\Menu::find(1);
        $menu->version = $menu->version + 1;
        $menu->update();
    }
}
