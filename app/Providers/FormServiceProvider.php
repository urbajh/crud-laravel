<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;



class FormServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Form::component('bsText','components.form.text',['nombre','value' => null,'attributes' => []]);  
        Form::component('bsSubmit','components.form.submit',['value' => 'Enviar','attributes' => []]);  
    }
}
