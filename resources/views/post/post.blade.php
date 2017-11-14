@extends('layouts.main')

@section('content')

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="first-slide" src="{{ URL::asset('/images/' . $post->id . '__big_image.jpg') }}" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1 id="name">{{ $post->title }}</h1>
                        <p id="header">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aspernatur consectetur consequuntur dicta, laudantium rerum velit. A ab corporis, debitis deleniti ea esse non possimus qui saepe veritatis. Id, tempora?{{ $post->header }}</p>
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

                    {!! $post->body !!}

                </div><!-- /.blog-post -->

                @include('post.comments')

            </div><!-- /.blog-main -->
        </div>
    </div>




    {{--<div class="container-fluid">--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-3">--}}
    {{--<div class="list-group">--}}
    {{--<a href="#" class="list-group-item active">Home</a>--}}
    {{--<div class="list-group-item">--}}
    {{--List header--}}
    {{--</div>--}}
    {{--<div class="list-group-item">--}}
    {{--<h4 class="list-group-item-heading">--}}
    {{--List group item heading--}}
    {{--</h4>--}}
    {{--<p class="list-group-item-text">--}}
    {{--...--}}
    {{--</p>--}}
    {{--</div>--}}
    {{--<div class="list-group-item">--}}
    {{--<span class="badge">14</span>Help--}}
    {{--</div>--}}
    {{--<a class="list-group-item active"><span class="badge">14</span>Help</a>--}}
    {{--</div>--}}
    {{--<table class="table">--}}
    {{--<thead>--}}
    {{--<tr>--}}
    {{--<th>#</th>--}}
    {{--<th>Product</th>--}}
    {{--<th>Payment Taken</th>--}}
    {{--<th>Status</th>--}}
    {{--</tr>--}}
    {{--</thead>--}}
    {{--<tbody>--}}
    {{--<tr>--}}
    {{--<td>1</td>--}}
    {{--<td>TB - Monthly</td>--}}
    {{--<td>01/04/2012</td>--}}
    {{--<td>Default</td>--}}
    {{--</tr>--}}
    {{--<tr class="active">--}}
    {{--<td>1</td>--}}
    {{--<td>TB - Monthly</td>--}}
    {{--<td>01/04/2012</td>--}}
    {{--<td>Approved</td>--}}
    {{--</tr>--}}
    {{--<tr class="success">--}}
    {{--<td>2</td>--}}
    {{--<td>TB - Monthly</td>--}}
    {{--<td>02/04/2012</td>--}}
    {{--<td>Declined</td>--}}
    {{--</tr>--}}
    {{--<tr class="warning">--}}
    {{--<td>3</td>--}}
    {{--<td>TB - Monthly</td>--}}
    {{--<td>03/04/2012</td>--}}
    {{--<td>Pending</td>--}}
    {{--</tr>--}}
    {{--<tr class="danger">--}}
    {{--<td>4</td>--}}
    {{--<td>TB - Monthly</td>--}}
    {{--<td>04/04/2012</td>--}}
    {{--<td>Call in to confirm</td>--}}
    {{--</tr>--}}
    {{--</tbody>--}}
    {{--</table>--}}
    {{--</div>--}}
    {{--<div class="col-md-9">--}}

    {{--<div class="page-header">--}}
    {{--<h1>--}}
    {{--LayoutIt!--}}
    {{--<small>Interface Builder for Bootstrap</small>--}}
    {{--</h1>--}}

    {{--<script type="text/javascript">tinymce.init({ selector:'textarea' });</script>--}}

    {{--<textarea>Next, start a free trial!</textarea>--}}

    {{--</div>--}}
    {{--<dl>--}}
    {{--<dt>Description lists</dt>--}}
    {{--<dd>A description list is perfect for defining terms.</dd>--}}
    {{--<dt>Euismod</dt>--}}
    {{--<dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>--}}
    {{--<dd>Donec id elit non mi porta gravida at eget metus.</dd>--}}
    {{--<dt>Malesuada porta</dt>--}}
    {{--<dd>Etiam porta sem malesuada magna mollis euismod.</dd>--}}
    {{--<dt>Felis euismod semper eget lacinia</dt>--}}
    {{--<dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>--}}
    {{--</dl>--}}
    {{--<div class="alert alert-success alert-dismissable">--}}
    {{--<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>--}}
    {{--<h4>Alert!</h4>--}}
    {{--<strong>Warning!</strong> Best check yo self, you're not looking too good.--}}
    {{--<a href="#" class="alert-link">alert link</a>--}}
    {{--</div>--}}
    {{--<div class="progress">--}}
    {{--<div class="progress-bar progress-success">--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<form role="form">--}}
    {{--<div class="form-group">--}}

    {{--<label for="exampleInputEmail1">Email address</label>--}}
    {{--<input type="email" class="form-control" id="exampleInputEmail1"/>--}}
    {{--</div>--}}
    {{--<div class="form-group">--}}
    {{--<label for="exampleInputPassword1">Password</label>--}}
    {{--<input type="password" class="form-control" id="exampleInputPassword1"/>--}}
    {{--</div>--}}
    {{--<div class="form-group">--}}
    {{--<label for="exampleInputFile">File input</label>--}}
    {{--<input type="file" id="exampleInputFile"/>--}}
    {{--<p class="help-block">Example block-level help text here.</p>--}}
    {{--</div>--}}
    {{--<div class="checkbox">--}}
    {{--<label>--}}
    {{--<input type="checkbox"/> Check me out--}}
    {{--</label>--}}
    {{--</div>--}}
    {{--<button type="submit" class="btn btn-default">Submit</button>--}}
    {{--</form>--}}
    {{--<img alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/"/>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

@endsection
