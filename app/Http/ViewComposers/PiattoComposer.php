<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;

class PiattoComposer
{
    private $categorie;

    /**
     * Create a cat composer.
     *
     * @return void
     */
    public function __construct()
    {
        $cat= \App\Categoria::all();
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
