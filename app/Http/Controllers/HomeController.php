<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Project;
use Route;

class HomeController extends Controller
{


    public static function routes()
    {
        Route::get('/', 'HomeController@index')->name('app::index');
    }

    public function index()
    {
        return view('home.index');
    }

}
