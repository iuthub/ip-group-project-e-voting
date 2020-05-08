<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Article;
use App\Comment;

class PagesController extends Controller
{
    /**
     * Display latest and recent news
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $data = array(
            'title' => 'Qaqnus - we will change together!',
            'articles' => Article::orderBy('created_at', 'DESC')->get()
        );
        return view('public.index')->with('data', $data);
    }

    /**
     * Display all news
     *
     * @return \Illuminate\Http\Response
     */
    public function allnews(){
        $data = array(
            'title' => 'All news',
            'articles' => Article::orderBy('created_at', 'DESC')->paginate(2)
        );
        return view('public.allnews')->with('data', $data);
    }

    /**
     * Display the specified category.
     *
     * @param  string  $category
     * @return \Illuminate\Http\Response
     */
    public function category($category){
        $articles =Article::orderBy('created_at', 'DESC')->where('category', $category)->paginate(2);
        $data = array(
            'title' => $category.' news',
            'articles' => $articles
        );
        return view('public.category')->with('data', $data);
    }

    /**
     * Display the specified article.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function article($id){
        $article = Article::find($id);
        $sql = 'select comments.comment as comment, users.name as name from comments join users on comments.user_id=users.id where comments.post_id='.$id.' order by comments.created_at desc;';
        $comments = DB::select($sql);
        $data = array(
            'title' => $article->title,
            'article' => $article,
            'comments' => $comments,
        );
        return view('public.article')->with('data', $data);
    }

    /**
     * Save comment 
     * 
     * @param int $id
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function comment(Request $request, $id){
        $this->validate($request,[
            'comment' => 'required',
        ]);

        $comment = new Comment;
        $comment->comment = $request->input('comment');
        $comment->user_id = Auth::id();
        $comment->post_id = $id;
        $comment->save();
        
        return redirect()->to('/article/'.$id)->with('success','Commented!');
    }

    public function contact(){
        $data['title'] = 'Contact us - Qaqnus.uz support';
        return view('public.contact')->with('data', $data);
    }

    public function about(){
        $data['title'] = 'About us - Qaqnus.uz team';
        return view('public.about')->with('data', $data);
    }
}
