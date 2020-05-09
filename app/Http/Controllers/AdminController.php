<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Article;
use App\Comment;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

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
        $posts = Article::all()->count();
        $users = User::where('is_admin', 0)->get()->count();
        $admins = User::where('is_admin', 1)->get()->count();
        $comments = Comment::all()->count();
        $data = array(
            'title' => 'Dashboard',
            'posts' => $posts,
            'users' => $users,
            'admins' => $admins,
            'comments' => $comments,
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
            'posts' => Article::orderBy('created_at', 'DESC')->paginate(15)
        );
        return view('admin.posts')->with('data', $data);
    }

    /**
     * Edit post
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
            'category' => 'required',
            'image' => 'required|image|max:1024'
        ]);

        //filename with extension
        $filenameWithExt = $request->file('image')->getClientOriginalName();
        //filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //extension
        $extension = $request->file('image')->getClientOriginalExtension();
        //filename to store
        $fileToStore = $filename.'_'.time().'.'.$extension;
        //image path
        $img_path = 'storage/uploads/'.$fileToStore;
        //upload image
        $path = $request->file('image')->storeAs('public/uploads', $fileToStore);

        $article = new Article;
        $article->title = $request->input('title');
        $article->description = $request->input('description');
        $article->content = $request->input('content');
        $article->category = $request->input('category');
        $article->img_path = $img_path;
        $article->save();
        return redirect('/admin/posts')->with('success', 'Post created!');
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
            'category' => 'required',
            'image' => 'required|image|max:1024'
        ]);

        //filename with extension
        $filenameWithExt = $request->file('image')->getClientOriginalName();
        //filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //extension
        $extension = $request->file('image')->getClientOriginalExtension();
        //filename to store
        $fileToStore = $filename.'_'.time().'.'.$extension;
        //image path
        $img_path = 'storage/uploads/'.$fileToStore;
        //upload image
        $path = $request->file('image')->storeAs('public/uploads', $fileToStore);

        $article = Article::find($id);
        $article->title = $request->input('title');
        $article->description = $request->input('description');
        $article->content = $request->input('content');
        $article->category = $request->input('category');
        $article->img_path = $img_path;
        $article->save();
        return redirect('/admin/posts')->with('success', 'Post updated!');
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

    /**
     * Display all users
     *
     * @return \Illuminate\Http\Response
     */
    public function users(){
        $data = array(
            'title' => 'Users',
            'users' => User::where('is_admin', 0)->orderBy('id', 'asc')->paginate(15)
        );
        return view('admin.users')->with('data', $data);
    }

    /**
     * Create user
     *
     * @return \Illuminate\Http\Response
     */
    public function newUser(){
        $data = array(
            'title' => 'Creating user'
        );
        return view('admin.newuser')->with('data', $data);
    }

    /**
     * Save post 
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function saveUser(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'role' => 'required'
        ]);

        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->is_admin = $request->input('role');
        $user->save();
        return redirect('/admin/users')->with('success', 'User created!');
    }

    /**
     * Delete user
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function deleteUser($id){
        $user = User::find($id);
        $user->delete();
        return redirect('/admin/users')->with('success', 'User deleted!');
    }

    /**
     * Edit user
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function editUser($id){
        $data = array(
            'title' => 'Editing user',
            'user' => User::find($id)
        );
        return view('admin.update-user')->with('data', $data);
    }

    /**
     * Update post 
     * 
     * @param int $id
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function updateUser(Request $request, $id){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'role' => 'required'
        ]);

        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->is_admin = $request->input('role');
        $user->save();
        return redirect('/admin/users')->with('success', 'User updated!');
    }

    /**
     * Display all admins
     *
     * @return \Illuminate\Http\Response
     */
    public function admins(){
        $data = array(
            'title' => 'Admins',
            'users' => User::where('is_admin', 1)->orderBy('id', 'asc')->paginate(15)
        );
        return view('admin.admins')->with('data', $data);
    }

    /**
     * Display admin profile
     *
     * @return \Illuminate\Http\Response
     */
    public function profile(){
        $data = array(
            'title' => 'Profile',
            'admin' => User::find(Auth::id()),
        );
        return view('admin.profile')->with('data', $data);
    }

    /**
     * Edit admin profile
     *
     * @return \Illuminate\Http\Response
     */
    public function editProfile(){
        $data = array(
            'title' => 'Updating profile',
            'admin' => User::find(Auth::id()),
        );
        return view('admin.updateprofile')->with('data', $data);
    }

    /**
     * Update post 
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function updateProfile(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::find(Auth::id());
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->is_admin = 1;
        $user->save();
        return redirect('/admin/profile')->with('success', 'Profile updated!');
    }
}
