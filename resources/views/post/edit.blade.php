@extends('layouts.main')

@section('content')

    <script type="text/javascript">

        function title_edit(title) {
            $('.carousel-caption #name').html($(title).val());
        };

    </script>

    <div class="container-fluid" style="margin-top: 15%">
        <div class="row">
            <div class="col-md-9" style="margin-left: 15%;">
                <form role="form" method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="title">Post Title:</label>
                        <input type="hidden" class="form-control" name="id" value="{{ $post->id }}" onkeyup="title_edit(this)" />
                        <input type="text" class="form-control" name="title" id="title" value="{{ $post->title }}" onkeyup="title_edit(this)" />
                        <div class="header">
                            <label for="header">Header:</label>
                            <textarea name="header" id="header">{!! $post->header !!}</textarea>
                        </div>
                        <div class="body">
                            <label for="body">Body:</label>
                            <textarea name="body" id="body">{!! $post->body !!}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <img src="{{ URL::asset('/images/' . $post->id . '__big_image.jpg') }}" class="img-rounded" style="width: 40%" alt="Cinque Terre">
                        <br>
                        <label for="exampleInputFile">Big image:</label>
                        <input type="file" id="exampleInputFile" name="big_image" />
                        <p class="help-block">Example block-level help text here.</p>

                        <label for="exampleInputFile">500x500 image:</label>
                        <input type="file" id="exampleInputFile" name="500_image" />
                        <p class="help-block">Example block-level help text here.</p>

                        <label for="exampleInputFile">Circle image:</label>
                        <input type="file" id="exampleInputFile" name="circle_image" />
                        <p class="help-block">Example block-level help text here.</p>
                    </div>
                    <button type="submit" class="btn btn-success" style="width: 100%; margin-bottom: 50px;">Submit</button>
                </form>
            </div>
        </div>
    </div>


@endsection
