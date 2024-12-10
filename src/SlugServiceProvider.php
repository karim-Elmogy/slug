<?php

namespace companyalexon\slug;


use Illuminate\Support\ServiceProvider;



class SlugServiceProvider extends ServiceProvider{

    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../src/views', 'companyalexon/slug');
    }

    public function register(){
        $this->app->singleton('slug', function(){});
    }

}
