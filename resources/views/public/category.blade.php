@extends('public.layout')

@section('content')
<!-- Main content -->
    <section id="main-content">
        <div class="container-fluid">

            <!-- All news -->
            <section id="all-news">
                <div class="section-title" style="margin-top: 30px;">
                    <h2><span>{{$data['title']}}</span></h2>
                </div>
                <div class="row">
                    @if(count($data['articles'])>0)
                        @foreach ($data['articles'] as $article)
                            <div class="col-lg-3 col-md-4 col-sm-6 mb-2">
                                <div class="small-card rounded shadow bg-light">
                                    <a href="/article/{{$article->id}}"><img src="/{{$article->img_path}}" class="small-card-img"></a>
                                    <div class="small-card-description card-overflow">
                                        <a href="/article/{{$article->id}}"><h4>{{$article->title}}</h4></a>
                                        <p class="p-1">{{$article->description}}</p>
                                        <div class="text-right">
                                            <div class="news-date d-inline">
                                                <small><i class="fa fa-calendar-check-o fa-lg"></i>{{$article->created_at}}</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                    <h1>No Articles Yet</h1>
                    @endif
                </div>
                {{$data['articles']->links()}}
            </section>
        </div>
    </section>
@endsection
