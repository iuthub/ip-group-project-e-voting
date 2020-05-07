<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

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
        $data = array(
            'title' => $article->title,
            'article' => $article
        );
        return view('public.article')->with('data', $data);
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
