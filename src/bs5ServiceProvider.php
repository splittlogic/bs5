<?php

namespace splittlogic\bs5;

use Illuminate\Support\ServiceProvider;

class bs5ServiceProvider extends ServiceProvider
{


	public function boot()
	{
		$this->loadViewsFrom(__DIR__.'/../resources/views', 'bs5');
		$this->loadRoutesFrom(__DIR__.'/routes/web.php');

		if ($this->app->runningInConsole()) {
			$this->bootForConsole();
		}
	}


	public function register()
	{
		$this->mergeConfigFrom(__DIR__.'/../config/bs5.php', 'bs5');

		$this->app->singleton('bs5', function ($app) {
			return new bs5;
		});
	}


	public function provides()
	{
		return ['bs5'];
	}


	protected function bootForConsole()
	{
		// Publishing the configuration file.
		$this->publishes([
			__DIR__.'/../config/bs5.php' => config_path('bs5.php'),
		], 'bs5.config');

		// Publishing the views.
    $this->publishes([
        __DIR__.'/../resources/views' => base_path('resources/views/vendor/splittlogic'),
    ], 'bs5.views');

    // Publishing assets.
    $this->publishes([
        __DIR__.'/../resources/assets' => public_path('vendor/splittlogic'),
    ], 'public');
	}


}
