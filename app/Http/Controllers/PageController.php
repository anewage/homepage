<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Route;

class PageController extends Controller
{

	/**
	 * Routes related to Pages
	 */
    public static function routes(){
	    Route::get('/', 'PageController@index')->name('front::index');
    }

	public function index() {
		return view('welcome');
    }
}
