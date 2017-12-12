<?php
/**
 * Created by PhpStorm.
 * User: mattia
 * Date: 12/12/17
 * Time: 19.22
 */
namespace App\Http\ViewComposers;

use Illuminate\View\View;

class CategoriaComposer
{
    private $menus;

    /**
     * Create a cat composer.
     *
     * @return void
     */
    public function __construct()
    {
        $men= \App\Menu::all();
        $this->menus = $men;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('menus', $this->menus);
    }
}
