<?php
/**
 * Created by PhpStorm.
 * User: mattia
 * Date: 13/12/17
 * Time: 11.16
 */
namespace App\Http\ViewComposers;

use Illuminate\View\View;

class EditPiattoComposer
{
    private $categorie;

    /**
     * Create a piatto composer.
     *
     * @return void
     */
    public function __construct()
    {
        $cat = \App\Categoria::all();
        $this->categorie = $cat;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('categorie', $this->categorie);
    }
}
