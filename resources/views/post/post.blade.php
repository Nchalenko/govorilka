@extends('layouts.main')

@section('content')

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="first-slide" src="{{ URL::asset('/images/' . $post->id . '__big_image.jpg') }}" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1 id="name">{{ $post->title }}</h1>
                        <p id="header">{!! $post->header !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-8 blog-main" style="margin-left: 20%;">
                <div class="blog-post">
                    <p class="blog-post-meta"><b>{{ date('l jS \of F Y h:i:s A')}} by <a href="#">Dina</a></b></p>
                    <br>

                    {!! $post->body !!}

                </div><!-- /.blog-post -->

                @include('post.comments')

            </div><!-- /.blog-main -->
        </div>
    </div>


@endsection
