@extends('public.layout')

@section('content')
<!-- Main content -->
    <section id="main-content">
        <div class="container-fluid">
            <div class="container article-border rounded shadow bg-light mt-4 mb-3 p-2">
                <div class="article-title text-center mt-4">
                    <h1>{{$data['title']}}</h1>
                </div>
                <div class="text-right mr-lg-5 mb-3 mt-2">
                    <div class="news-scope d-inline">
                        <a href="/category/{{$data['article']->category}}"><span class="badge badge-success rounded">{{$data['article']->category}}</span></a>
                    </div>
                    <div class="news-date d-inline">
                        <small><i class="fa fa-calendar-check-o fa-lg"></i>{{$data['article']->created_at}}</small>
                    </div>
                </div>
                <div class="mt-1 ml-lg-5 mr-lg-5">
                    <h4 class="article-head text-justify font-italic">{{$data['article']->description}}</h4>
                </div>
                <div class="m-4 p-2 text-center">
                    <img src="/{{$data['article']->img_path}}" class="article-img rounded">
                </div>
                <div class="mt-1 ml-lg-5 mr-lg-5">
                    <p class="text-justify article-content">{{$data['article']->content}}</p>
                </div>
                <div class="m-4">
                    <div class="section-title">
                        <h2 style="font-size:1.2rem;"><span>Comments <i class="fa fa-comments-o fa-2x text-info"></i></span></h2>
                    </div>
                    @if (!Auth::guest())
                        <form action="/article/{{$data['article']->id}}" method="POST">
                            @csrf
                            <input type="text" class="form-control" name="comment" id="comment" placeholder="Share your opinion...">
                            <div class="text-right">
                                <button type="submit" class="btn btn-success font-weight-bold btn-post" name="post" id="post">Post</button>
                            </div>
                        </form>
                    @endif
                    @if (count($data['comments'])>0)
                        @foreach ($data['comments'] as $comment)
                            <div class="row">
                                <div class="col-lg-8 col-sm-6 col-md-6">
                                    <div class="comment-card p-2 pl-3 mb-2 rounded shadow">
                                        <b><i class="fa fa-user-circle-o fa-lg text-primary"></i> {{$comment->name}}</b>
                                        <p>{{$comment->comment}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
