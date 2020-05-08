<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('is_admin',['except' => 'signin'] );
    }

    public function signin(){
        return view('admin.signin');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
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

    /**
     * Update post
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function editPost($id){
        $data = array(
            'title' => 'Editing post',
            'post' => Article::find($id)
        );
        return view('admin.updatepost')->with('data', $data);
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
     * Update post 
     * 
     * @param int $id
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function updatePost(Request $request, $id){
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
            'content' => 'required',
            'category' => 'required'
        ]);

        $article = Article::find($id);
        $article->title = $request->input('title');
        $article->description = $request->input('description');
        $article->content = $request->input('content');
        $article->category = $request->input('category');
        $article->img_path = 'images/all-1.png';
        $article->save();
        return redirect('/admin/posts')->with('success', 'Post updated!');
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

    /**
     * Delete post
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function deletePost($id){
        $post = Article::find($id);
        $post->delete();
        return redirect('/admin/posts')->with('success', 'Post deleted!');
    }
    public function category(){}
    public function users(){
        $title = 'Users';
        return view('admin.users')->with('title', $title);
    }
}
