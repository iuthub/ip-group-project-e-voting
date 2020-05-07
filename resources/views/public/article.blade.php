@extends('public.layout')

@section('content')
<!-- Main content -->
    <section id="main-content">
        <div class="container-fluid">
            <div class="container article-border rounded shadow bg-light mt-4 mb-3 p-2">
                <div class="article-title text-center mt-4">
                    <h1>{{$data['title']}}</h1>
                </div>
                <div class="mt-1 ml-lg-4 mr-lg-4">
                    <h4 class="article-head text-justify font-italic">{{$data['article']->description}}</h4>
                </div>
                <div class="m-4 p-2 text-center">
                    <img src="{{asset($data['article']->img_path)}}" class="article-img rounded">
                </div>
                <div class="mt-1 ml-lg-4 mr-lg-4">
                    <p class="text-justify article-content">{{$data['article']->content}}</p>
                </div>
                <div class="m-4">
                    <div class="section-title">
                        <h2 style="font-size:1.2rem;"><span>Comments</span></h2>
                    </div>
                    <form>
                        <input type="text" class="form-control" name="comment" id="comment" placeholder="Share your opinion...">
                        <div class="text-right">
                            <button type="submit" class="btn btn-success font-weight-bold btn-post" name="post" id="post" disabled>Post</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection