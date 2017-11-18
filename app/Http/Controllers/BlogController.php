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
		Route::get('/blog/{post}', 'BlogController@post')->name('blog::post');
	}

	public function index() {
		$posts = Post::paginate(2)->withPath('/blog');
		return view('blog.index', [
			'posts' => $posts
		]);
	}

	public function post( Post $post ) {
		return view('blog.post', [
			'post' => $post
		]);
	}
}
