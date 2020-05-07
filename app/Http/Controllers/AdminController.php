<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class AdminController extends Controller
{
    public function signin(){
        return view('admin.signin');
    }
    public function dashboard(){
        $data = array(
            'title' => 'Dashboard'
        );
        return view('admin.dashboard')->with('data', $data);
    }

    /**
     * Display all posts
     *
     * @return \Illuminate\Http\Response
     */
    public function posts(){
        $data = array(
            'title' => 'Posts',
            'posts' => Article::orderBy('created_at', 'DESC')->paginate(2)
        );
        return view('admin.posts')->with('data', $data);
    }
    public function update(){
        $title = 'Updating post';
        return view('admin.updatepost')->with('title', $title);
    }

    /**
     * Create post
     *
     * @return \Illuminate\Http\Response
     */
    public function newPost(){
        $data = array(
            'title' => 'Creating post'
        );
        return view('admin.newpost')->with('data', $data);
    }

    /**
     * Save post 
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function savePost(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
            'content' => 'required',
            'category' => 'required'
        ]);

        $article = new Article;
        $article->title = $request->input('title');
        $article->description = $request->input('description');
        $article->content = $request->input('content');
        $article->category = $request->input('category');
        $article->img_path = 'images/all-1.png';
        $article->save();
        return redirect('/admin/posts')->with('success', 'Post created!');
    }
    public function category(){}
    public function users(){
        $title = 'Users';
        return view('admin.users')->with('title', $title);
    }
}
