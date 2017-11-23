@extends('layouts.main')

@section('content')

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            @foreach($posts as $post)
                <div class="item @if ($post->id === 1) active @endif">
                    <img class="first-slide" src="{{ URL::asset('/images/' . $post->id . '__big_image.jpg') }}" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>{!! $post->title !!}</h1>
                            <p>{!! $post->header !!}</p>
                            <p><a class="btn btn-lg btn-primary" href="/posts/{{ $post->id }}" role="button">Читать</a></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container marketing">
        <div class="row">
            @foreach($posts as $post)
                <div class="col-lg-4">
                    <img class="img-circle" src="{{ URL::asset('/images/' . $post->id . '__circle_image.jpg') }}" alt="Generic placeholder image" width="140" height="140">
                    <h1>{!! $post->title !!}</h1>
                    <p>{!! $post->header !!}</p>
                    <p><a class="btn btn-default" href="/posts/{{ $post->id }}" role="button">Читать &raquo;</a></p>
                </div>
            @endforeach
        </div>
            @foreach($posts as $post)
                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7 @if ($post->id % 2) col-md-push-5 @endif">
                        <h2 class="featurette-heading">{{ $post->title }}</h2>
                        <h3><span class="text-muted">{!! $post->header !!}</span></h3>
                        <p><a class="btn btn-lg btn-primary" href="/posts/{{ $post->id }}" role="button">Читать</a></p>
                    </div>
                    <div class="col-md-5 @if ($post->id % 2) col-md-pull-7 @endif">
                        <img class="featurette-image img-responsive center-block" src="{{ URL::asset('/images/' . $post->id . '__500_image.jpg') }}" alt="Generic placeholder image">
                    </div>
                </div>
            @endforeach

{{--</div><!-- /.container -->--}}

@endsection
