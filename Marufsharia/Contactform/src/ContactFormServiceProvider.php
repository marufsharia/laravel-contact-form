<?php
    namespace Marufsharia\Contactform;

    use Illuminate\Support\ServiceProvider;

    class ContactFormServiceProvider extends ServiceProvider
    {
        public function boot()
        {
            $this->loadRoutesFrom(__DIR__.'/routes/web.php');
            $this->loadViewsFrom(__DIR__.'/resources/views', 'contactform');
            $this->loadMigrationsFrom(__DIR__.'/Database/migrations');
            $this->publishMigrations();
        }
        public function register()
        {
            //   $this->mergeConfig();
        }
        
        /* publich vebndor */

        
        // private function mergeConfig()
        // {
        //     $path = $this->getConfigPath();
        //     $this->mergeConfigFrom($path, 'bar');
        // }

        // private function publishConfig()
        // {
        //     $path = $this->getConfigPath();
        //     $this->publishes([$path => config_path('bar.php')], 'config');
        // }

        private function publishMigrations()
        {
            $path = $this->getMigrationsPath();
            $this->publishes([$path => database_path('migrations')], 'migrations');
        }

        // private function getConfigPath()
        // {
        //     return __DIR__ . '/../config/bar.php';
        // }

        private function getMigrationsPath()
        {
            return __DIR__ . '/../database/migrations/';
        }
    }