@extends('public.layout')

@section('content')
<!-- Intro to Qaqnus.uz -->
    <section id="introduction-section">
        <div class="container text-center pt-4 pb-3 full-height">
            <h1 class="display-3" style="font-weight: 400;">Qaqnus.uz</h1>
            <p style="font-weight: 500;">Latest and reliable news. Informative blogs.</p>
        </div>
    </section>

    <!-- Main content -->
    <section id="main-content">
        <div class="container-fluid">
            <!-- Latest news -->
            <section id="latest-news">
                <div class="section-title">
                    <h2><span>Latest News</span></h2>
                </div>
                <div class="row">
                    @if (count($data['articles'])>0)
                        <div class="col-sm-6" style="margin-bottom: 15px;">
                            <div class="card rounded shadow bg-light">
                                <div class="p-0">
                                    <a href="/article/{{$data['articles'][0]->id}}"><img src="{{asset($data['articles'][0]->img_path)}}" class="card-img"></a>
                                </div>
                                <div class="p-3">
                                    <div class="card-title">
                                        <a href="/article/{{$data['articles'][0]->id}}"><h4>{{$data['articles'][0]->title}}</h4></a>
                                    </div>
                                    <div class="card-description">
                                        <p class="p-1">{{$data['articles'][0]->description}}</p>
                                    </div>
                                    <div class="text-right">
                                        <div class="news-scope d-inline">
                                            <a href="/category/{{$data['articles'][0]->category}}"><span class="badge-success rounded">{{$data['articles'][0]->category}}</span></a>
                                        </div>
                                        <div class="news-date d-inline">
                                            <small><i class="fa fa-calendar-check-o fa-lg"></i>{{$data['articles'][0]->created_at}}</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <h2>No Articles Yet</h2>
                    @endif

                    @if (count($data['articles'])>1)
                        <div class="col-sm-6">
                            <div class="card rounded shadow bg-light">
                                <div class="p-0">
                                    <a href="/article/{{$data['articles'][1]->id}}"><img src="{{asset($data['articles'][1]->img_path)}}" class="card-img"></a>
                                </div>
                                <div class="p-3">
                                    <div class="card-title">
                                        <a href="/article/{{$data['articles'][1]->id}}"><h4>{{$data['articles'][1]->title}}</h4></a>
                                    </div>
                                    <div class="card-description">
                                        <p class="p-1">{{$data['articles'][1]->description}}</p>
                                    </div>
                                    <div class="text-right">
                                        <div class="news-scope d-inline">
                                            <a href="/category/{{$data['articles'][1]->category}}"><span class="badge-success rounded">{{$data['articles'][1]->category}}</span></a>
                                        </div>
                                        <div class="news-date d-inline">
                                            <small><i class="fa fa-calendar-check-o fa-lg"></i>{{$data['articles'][1]->created_at}}</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </section>

            <!-- All news -->
            <section id="all-news">
                <div class="section-title" style="margin-top: 30px;">
                    <h2><span>Recent News</span></h2>
                </div>
                <div class="row">
                    @if(count($data['articles'])>2)
                        @if (count($data['articles'])>10)
                            @php $count = 10; @endphp
                        @else
                            @php $count = count($data['articles']); @endphp
                        @endif
                        @for ($i = 2; $i < $count; $i++)
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-2">
                            <div class="small-card rounded shadow bg-light">
                                <a href="/article/{{$data['articles'][$i]->id}}"><img src="{{asset($data['articles'][$i]->img_path)}}" class="small-card-img"></a>
                                <div class="small-card-description card-overflow">
                                    <a href="/article/{{$data['articles'][$i]->id}}"><h4>{{$data['articles'][$i]->title}}</h4></a>
                                    <p class="p-1">{{$data['articles'][$i]->description}}</p>
                                    <div class="text-right">
                                        <div class="news-scope d-inline">
                                            <a href="/category/{{$data['articles'][$i]->category}}"><span class="badge-success rounded">{{$data['articles'][$i]->category}}</span></a>
                                        </div>
                                        <div class="news-date d-inline">
                                            <small><i class="fa fa-calendar-check-o fa-lg"></i>{{$data['articles'][$i]->created_at}}</small>
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endfor
                    @endif
                </div>
            </section>
        </div>
    </section>
@endsection