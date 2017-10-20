@extends('layouts.main')

@section('content')

    <script type="text/javascript">

        function title_edit(title) {
            $('.carousel-caption #name').html($(title).val());
        };

    </script>

    <!-- Carousel
================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1 id="name"></h1>
                        <p id="header"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9" style="margin-left: 15%;">
            <form role="form">
                    <div class="form-group">
                        <label for="title">Post Title:</label>
                        <input type="text" class="form-control" id="title" onkeyup="title_edit(this)"/>
                        <div class="header">
                            <script type="text/javascript">tinymce.init({ selector:'textarea' });</script>
                            <label for="header">Header:</label>
                            <textarea id="header"></textarea>
                        </div>
                        <div class="body">
                            <script type="text/javascript">tinymce.init({ selector:'textarea' });</script>
                            <label for="body">Body:</label>
                            <textarea id="body"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Big image:</label>
                        <input type="file" id="exampleInputFile"/>
                        <p class="help-block">Example block-level help text here.</p>

                        <label for="exampleInputFile">500x500 image:</label>
                        <input type="file" id="exampleInputFile"/>
                        <p class="help-block">Example block-level help text here.</p>

                        <label for="exampleInputFile">Circle image:</label>
                        <input type="file" id="exampleInputFile"/>
                        <p class="help-block">Example block-level help text here.</p>
                    </div>
                    <button type="submit" class="btn btn-success" style="width: 100%; margin-bottom: 50px;">Submit</button>
                </form>
            </div>
        </div>
    </div>


@endsection
