<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Route;

class BlogController extends Controller
{
	/**
	 * Routes related to Pages
	 */
	public static function routes(){
		Route::get('/blog', 'BlogController@index')->name('blog::index');
	}

	public function index() {
		return view('blog.index', [
			'posts' => Post::all()
		]);
	}
}
