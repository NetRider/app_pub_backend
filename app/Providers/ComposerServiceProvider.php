<?php
/**
 * Created by PhpStorm.
 * User: mattia
 * Date: 12/12/17
 * Time: 18.51
 */

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        // Using class based composers...
        View::composer(
            'insert_piatto', 'App\Http\ViewComposers\PiattoComposer'
        );
        View::composer(
            'insert_categoria', 'App\Http\ViewComposers\CategoriaComposer'
        );

        // Using Closure based composers...
        View::composer('dashboard', function ($view) {
            //
        });
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}