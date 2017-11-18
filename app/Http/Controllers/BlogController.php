<?php

namespace App\Http\Controllers;

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
			'posts' => [
				[
					'title' => "POST TITLE",
					'created_at' => "13 Nov. 2017",
					'description' => "<p>Welcome to my homePage!
                My full name is Amir Haghighati Maleki and I was born in Tabriz but currently I am living in Tehran where
                I spend my last year of study (B.S.c) in Computer Engineering and IT
                Department (A.K.A CEIT) of Amirkabir University of Technoogy (Tehran Polytechnic).
                Interested in the study of interaction between people, technologies and computers, I have found myself
                enthusiastic about technology, social computing and the people using those technologies.
                This is my homepage and you're welcome here any time. How to reach me? You can simply, just use the links below.</p>",

				],
				[
					'title' => "POST TITLE",
					'created_at' => "13 Nov. 2017",
					'description' => "<p>Welcome to my homePage!
                My full name is Amir Haghighati Maleki and I was born in Tabriz but currently I am living in Tehran where
                I spend my last year of study (B.S.c) in Computer Engineering and IT
                Department (A.K.A CEIT) of Amirkabir University of Technoogy (Tehran Polytechnic).
                Interested in the study of interaction between people, technologies and computers, I have found myself
                enthusiastic about technology, social computing and the people using those technologies.
                This is my homepage and you're welcome here any time. How to reach me? You can simply, just use the links below.</p>",

				],
				[
					'title' => "POST TITLE",
					'created_at' => "13 Nov. 2017",
					'description' => "<p>Welcome to my homePage!
                My full name is Amir Haghighati Maleki and I was born in Tabriz but currently I am living in Tehran where
                I spend my last year of study (B.S.c) in Computer Engineering and IT
                Department (A.K.A CEIT) of Amirkabir University of Technoogy (Tehran Polytechnic).
                Interested in the study of interaction between people, technologies and computers, I have found myself
                enthusiastic about technology, social computing and the people using those technologies.
                This is my homepage and you're welcome here any time. How to reach me? You can simply, just use the links below.</p>",

				],
				[
					'title' => "POST TITLE",
					'created_at' => "13 Nov. 2017",
					'description' => "<p>Welcome to my homePage!
                My full name is Amir Haghighati Maleki and I was born in Tabriz but currently I am living in Tehran where
                I spend my last year of study (B.S.c) in Computer Engineering and IT
                Department (A.K.A CEIT) of Amirkabir University of Technoogy (Tehran Polytechnic).
                Interested in the study of interaction between people, technologies and computers, I have found myself
                enthusiastic about technology, social computing and the people using those technologies.
                This is my homepage and you're welcome here any time. How to reach me? You can simply, just use the links below.</p>",

				],
				[
					'title' => "POST TITLE",
					'created_at' => "13 Nov. 2017",
					'description' => "<p>Welcome to my homePage!
                My full name is Amir Haghighati Maleki and I was born in Tabriz but currently I am living in Tehran where
                I spend my last year of study (B.S.c) in Computer Engineering and IT
                Department (A.K.A CEIT) of Amirkabir University of Technoogy (Tehran Polytechnic).
                Interested in the study of interaction between people, technologies and computers, I have found myself
                enthusiastic about technology, social computing and the people using those technologies.
                This is my homepage and you're welcome here any time. How to reach me? You can simply, just use the links below.</p>",

				],
			]
		]);
	}
}
