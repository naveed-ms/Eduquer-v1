<?php

namespace App\Providers;

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
        \Blade::directive('svg', function($arguments) {
            list($path, $class, $style) = array_pad(explode(',', trim($arguments, "() ")), 3, '');
            $path = trim($path, "' ");
            $class = trim($class, "' ");
            $style = trim($style, "' ");
    
            $svg = new \DOMDocument();
            $svg->load(public_path($path));
            $svg->documentElement->setAttribute("class", $class);
            $svg->documentElement->setAttribute("style", $style);
            $output = $svg->saveXML($svg->documentElement);
    
            return $output;
        });
    }
}
