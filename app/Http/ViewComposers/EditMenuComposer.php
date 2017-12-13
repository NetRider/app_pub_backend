<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;

class EditMenuComposer
{
    private $menu;

    /**
     * Create a cat composer.
     *
     * @return void
     */
    public function __construct()
    {
        $m= \App\Menu::all();
        $this->menu = $m;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('menu', $this->menu);
    }
}
