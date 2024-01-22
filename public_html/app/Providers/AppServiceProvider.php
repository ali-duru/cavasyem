<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Models\Category;
use App\Models\Privacy;
use App\Models\Trick;
// use GuzzleHttp\Client;

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
        Schema::defaultStringLength(191);
        view()->composer('*', function ($view) {
            $categories = Category::orderBy('order')->get();
            $tricks = Trick::orderBy('order', 'asc')->get();

            $privacies = Privacy::all();

            // $client = new Client();
            // $whether_res = $client->get('https://api.collectapi.com/weather/getWeather?data.lang=tr&data.city=karaman', [
            //     'headers' => [
            //         'authorization' => 'apikey 1ZhlE4XhUlZ3kh4I3BSEvv:0g3yMfxC1HfBePNQcHKTSI',
            //         'content-type' => 'application/json'
            //     ]
            // ]);
            // $wheather_response = json_decode($whether_res->getBody());
            // dd($wheather_response->result[0]);
            $wheather_response = [];
            $view->with('categories', $categories)
                ->with('wheather_response', $wheather_response)
                // ->result[0]
                ->with('tricks', $tricks)
                ->with('privacies', $privacies);
        });
    }
}
