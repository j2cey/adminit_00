<?php

namespace App\Providers;

use App\Setting;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * tell Laravel that, when the App boots,
         * which is after all other Services are already registered,
         * we are gonna add to the config array our own settings
         */
        config([
            'settings' => Setting::getAllGrouped()
        ]);

        /**
         * Laravel Macros are great way of extending Laravel's core classes and add extra functionality
         * required for our application.
         * It is a way to add somme missing functionality to Laravel's internal component with a piece of code
         * that doesn't exist in the Laravel class.
         *
         * Blueprint is macroable, so we can just define a macro on it in this service provider to get base fields
         */
        Blueprint::macro('baseFields', function () {
            $this->uuid('uuid');
            $this->string('tags')->nullable()->comment('Tags, if any');
            $this->foreignId('state_id')->nullable()
                ->comment('state reference')
                ->constrained()->onDelete('set null');
            $this->boolean('is_default')->default(false)->comment('determine whether is the default one.');
            $this->timestamps();
        });
        Blueprint::macro('dropBaseForeigns', function () {
            $this->dropForeign(['state_id']);
        });
    }
}
