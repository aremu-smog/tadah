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
        //
        Form::component('asText', 'components.form.text', ['name', 'value', 'attributes'=>[]]);
        Form::component('asTextArea', 'components.form.textarea', ['name', 'value', 'attributes'=>[]]);
        Form::component('asSelect', 'components.form.select', ['name', 'value', 'attributes'=>[]]);
        Form::component('asSubmit', 'components.form.submit', ['name', 'value', 'attributes'=>[]]);
        Form::component('hidden', 'components.form.hidden', ['name', 'value', 'attributes'=>[]]);
    }
}
