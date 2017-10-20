@extends('layouts.main')

@section('content')

    <script type="text/javascript">

        function getFileData(myFile){
            var file = myFile.files[0];
            var filename = file.name;

            console.log(file);
            console.log(filename);

            $.ajax({
                type: "POST",
                url: '/save_image',
                data: data,
                success: success,
                dataType: dataType
            });
        }

    </script>

<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
            <div class="container">
                <div class="carousel-caption">
                    <form role="form" method="post" href="/save_image">
                        <div class="form-group">
                            {{--<label for="exampleInputFile">File input</label>--}}
                            <input type="file" id="input" onchange="getFileData(this);">
                            {{--<p class="help-block">Example block-level help text here.</p>--}}
                            <button type="submit" class="btn btn-default">Submit</button>
                        </div>
                    </form>


                    <h1>Example headline.</h1>
                    <p class="header"></p>


                </div>
            </div>
        </div>
    </div>
</div><!-- /.carousel -->

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 menu">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Product</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>TB - Monthly</td>
                </tr>
                <tr class="active">
                    <td>1</td>
                    <td>TB - Monthly</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-9">
            <form role="form">
                <div class="form-group">
                    <div class="article-header">
                        <label for="header"><h1>Header</h1></label>
                        <textarea id="header" name="header" cols="2" rows="5" placeholder="Next, start to type your Header!"></textarea>
                    </div>
                    <div class="article-body">
                        <label for="body"><h1>Article Body</h1></label>
                        <textarea id="body" name="header" cols="2" rows="20" placeholder="Next, start to type your Header!"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>

            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4>Alert!</h4>
                <strong>Warning!</strong> Best check yo self, you're not looking too good.
                <a href="#" class="alert-link">alert link</a>
            </div>


            <div class="progress">
                <div class="progress-bar progress-success"></div>
            </div>


        </div>
    </div>
</div>




@endsection
