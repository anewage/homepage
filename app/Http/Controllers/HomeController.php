<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Route;

class HomeController extends Controller
{
	public static function routes() {
		Route::get('/home', 'HomeController@index')->name('admin::index');
	}

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home', [
	        'posts' => Post::all()
        ]);
    }
}
