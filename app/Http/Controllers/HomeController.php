<?php

namespace App\Http\Controllers;

use App\Post;
use Auth;
use Illuminate\Http\Request;
use Route;

class HomeController extends Controller
{
	public static function routes() {
		Route::get('/home', 'HomeController@index')->name('admin::index');
		Route::get('/home/blog/add', 'HomeController@addPost')->name('admin::blog.add');

		Route::get('/home/blog/edit/{post}', 'HomeController@editPost')->name('admin::blog.edit');
		Route::post('/home/blog/edit/{post}', 'HomeController@savePost');
		Route::post('/home/blog/delete/{post}', 'HomeController@deletePost')->name('admin::blog.delete');
	}

	/**
	 * Create a new controller instance.
	 *
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
    	if(Auth::user()->admin == env('ADMIN_KEY')) {
		    return view('dashboard.home', [
			    'posts' => Post::all()
		    ]);
	    } else{
    		Auth::logout();
    		abort(403);
	    }
    }

	public function addPost() {
    	/** @var Post $post */
    	$post = new Post([
    		'slug' => 'post' . Post::all()->count()
	    ]);
    	$post->save();
    	return redirect()->route('admin::blog.edit',[
    		'post' => $post
	    ]);
    }

	public function editPost(Post $post) {
		return view('dashboard.blog.post', [
			'post' => $post
		]);
    }

	public function savePost( Post $post, Request $request ) {
		$post->update($request->all());
		return redirect()->route('admin::index');
    }

	public function deletePost( Post $post, Request $request ) {
		$post->delete();
		return redirect()->route('admin::index');
    }
}
