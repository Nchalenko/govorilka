@extends('layouts.main')

@section('content')

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                {{--TODO-nik add about image--}}
                <img class="first-slide" src="{{ URL::asset('/images/' . 1 . '__big_image.jpg') }}" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1 id="name">О нас</h1>
                        <p id="header">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aspernatur consectetur consequuntur dicta, laudantium rerum velit. A ab corporis, debitis deleniti ea esse non possimus qui saepe veritatis. Id, tempora?</p>
                        {{--<p id="header">{{ $post->header }}</p>--}}
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
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid error harum, repellat reprehenderit soluta tempore! Accusantium consectetur deserunt dolorum eaque earum eius esse eveniet fugit molestiae nesciunt optio pariatur, sed.
                </div><!-- /.blog-post -->
            </div><!-- /.blog-main -->
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 blog-main" style="margin-left: 20%;">
                <div class="blog-post">
                    <h1>Отзывы:</h1>

                    <a target="_blank" href="http://kiev.repetitors.info/comments.php?p=GlibkaDV">Отзывы можно просмотреть здесь</a>
                </div><!-- /.blog-post -->
            </div><!-- /.blog-main -->
        </div>
    </div>

@endsection