<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ComposerServiceProvider extends ServiceProvider {
    
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot() {
        view()->composer('*', 'App\Http\ViewComposers\IndexComposer');
    }
    
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {
        
    }

}