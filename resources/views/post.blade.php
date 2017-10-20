@extends('layouts.main')

@section('content')


    {{--<div class="container">--}}

    {{--<div class="blog-header">--}}
    {{--<h1 class="blog-title">The Bootstrap Blog</h1>--}}
    {{--<p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>--}}
    {{--</div>--}}

    {{--<div class="row">--}}

    {{--<div class="col-sm-8 blog-main">--}}

    {{--<div class="blog-post">--}}
    {{--<h2 class="blog-post-title">Sample blog post</h2>--}}
    {{--<p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>--}}

    {{--<p>This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>--}}
    {{--<hr>--}}
    {{--<p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>--}}
    {{--<blockquote>--}}
    {{--<p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>--}}
    {{--</blockquote>--}}
    {{--<p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>--}}
    {{--<h2>Heading</h2>--}}
    {{--<p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>--}}
    {{--<h3>Sub-heading</h3>--}}
    {{--<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>--}}
    {{--<pre><code>Example code block</code></pre>--}}
    {{--<p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>--}}
    {{--<h3>Sub-heading</h3>--}}
    {{--<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>--}}
    {{--<ul>--}}
    {{--<li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>--}}
    {{--<li>Donec id elit non mi porta gravida at eget metus.</li>--}}
    {{--<li>Nulla vitae elit libero, a pharetra augue.</li>--}}
    {{--</ul>--}}
    {{--<p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>--}}
    {{--<ol>--}}
    {{--<li>Vestibulum id ligula porta felis euismod semper.</li>--}}
    {{--<li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>--}}
    {{--<li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>--}}
    {{--</ol>--}}
    {{--<p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.</p>--}}
    {{--</div><!-- /.blog-post -->--}}

    {{--<div class="blog-post">--}}
    {{--<h2 class="blog-post-title">Another blog post</h2>--}}
    {{--<p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p>--}}

    {{--<p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>--}}
    {{--<blockquote>--}}
    {{--<p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>--}}
    {{--</blockquote>--}}
    {{--<p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>--}}
    {{--<p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>--}}
    {{--</div><!-- /.blog-post -->--}}

    {{--<div class="blog-post">--}}
    {{--<h2 class="blog-post-title">New feature</h2>--}}
    {{--<p class="blog-post-meta">December 14, 2013 by <a href="#">Chris</a></p>--}}

    {{--<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>--}}
    {{--<ul>--}}
    {{--<li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>--}}
    {{--<li>Donec id elit non mi porta gravida at eget metus.</li>--}}
    {{--<li>Nulla vitae elit libero, a pharetra augue.</li>--}}
    {{--</ul>--}}
    {{--<p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>--}}
    {{--<p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>--}}
    {{--</div><!-- /.blog-post -->--}}

    {{--<nav>--}}
    {{--<ul class="pager">--}}
    {{--<li><a href="#">Previous</a></li>--}}
    {{--<li><a href="#">Next</a></li>--}}
    {{--</ul>--}}
    {{--</nav>--}}

    {{--</div><!-- /.blog-main -->--}}

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="#" class="list-group-item active">Home</a>
                    <div class="list-group-item">
                        List header
                    </div>
                    <div class="list-group-item">
                        <h4 class="list-group-item-heading">
                            List group item heading
                        </h4>
                        <p class="list-group-item-text">
                            ...
                        </p>
                    </div>
                    <div class="list-group-item">
                        <span class="badge">14</span>Help
                    </div>
                    <a class="list-group-item active"><span class="badge">14</span>Help</a>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Product</th>
                            <th>Payment Taken</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>TB - Monthly</td>
                            <td>01/04/2012</td>
                            <td>Default</td>
                        </tr>
                        <tr class="active">
                            <td>1</td>
                            <td>TB - Monthly</td>
                            <td>01/04/2012</td>
                            <td>Approved</td>
                        </tr>
                        <tr class="success">
                            <td>2</td>
                            <td>TB - Monthly</td>
                            <td>02/04/2012</td>
                            <td>Declined</td>
                        </tr>
                        <tr class="warning">
                            <td>3</td>
                            <td>TB - Monthly</td>
                            <td>03/04/2012</td>
                            <td>Pending</td>
                        </tr>
                        <tr class="danger">
                            <td>4</td>
                            <td>TB - Monthly</td>
                            <td>04/04/2012</td>
                            <td>Call in to confirm</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-9">

                <div class="page-header">
                    <h1>
                        LayoutIt!
                        <small>Interface Builder for Bootstrap</small>
                    </h1>

                    <script type="text/javascript">tinymce.init({ selector:'textarea' });</script>

                    <textarea>Next, start a free trial!</textarea>

                </div>
                <dl>
                    <dt>Description lists</dt>
                    <dd>A description list is perfect for defining terms.</dd>
                    <dt>Euismod</dt>
                    <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                    <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                    <dt>Malesuada porta</dt>
                    <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                    <dt>Felis euismod semper eget lacinia</dt>
                    <dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
                </dl>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4>Alert!</h4>
                    <strong>Warning!</strong> Best check yo self, you're not looking too good.
                    <a href="#" class="alert-link">alert link</a>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-success">
                    </div>
                </div>
                <form role="form">
                    <div class="form-group">

                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1"/>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1"/>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <input type="file" id="exampleInputFile"/>
                        <p class="help-block">Example block-level help text here.</p>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"/> Check me out
                        </label>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
                <img alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/"/>
            </div>
        </div>
    </div>

@endsection
