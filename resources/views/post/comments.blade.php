<hr>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h3>User Comments</h3>
        </div><!-- /col-sm-12 -->
    </div><!-- /row -->

    @foreach($post->comments as $comment)
        <div class="row comment">
            <div class="col-sm-7">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong>myusername</strong> <span class="text-muted">commented {{ $comment->created_at->diffForHumans() }}</span>
                    </div>
                    <div class="panel-body comment-body">{{$comment->comment}}</div><!-- /panel-body -->
                </div><!-- /panel panel-default -->
            </div><!-- /col-sm-5 -->
        </div><!-- /row -->
    @endforeach


</div><!-- /container -->

<hr>

<div class="row">
   <div class="col-lg-8 col-lg-offset-2">
       <div class="col-sm-12">
           <h3>Оставьте свой комментарий</h3>
       </div><!-- /col-sm-12 -->
        {{--<form id="contact-form" method="post" action="{{route('comment', $post->id)}}" role="form">--}}
        <form id="contact-form" method="post" role="form">
            {{ csrf_field() }}
            <div class="controls">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="form_comment">Сообщение *</label>
                            <textarea id="form_comment" name="comment" class="form-control" placeholder="Сообщение для нас *" rows="4" required="required" data-error="Пожалуйста, оставьте здесь свое сообщение."></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="form-group">
                            <!-- Replace data-sitekey with your own one, generated at https://www.google.com/recaptcha/admin -->
                            <div class="g-recaptcha" data-callback="onloadCallback" data-sitekey="6LcsqTgUAAAAAF42EntG1uZJoJaODX6M3TugWKhc"></div>

                        </div>
                    </div>

                    <div class="col-md-4">
                        <input type="button" name="send_comment" class="btn btn-success btn-send" value="Send comment" style="height: 75px;">
                    </div>
                </div>
            </div>
        </form>

    </div><!-- /.8 -->

</div> <!-- /.row-->

{{--<script src="https://www.google.com/recaptcha/api.js?render=explicit&onload=onScriptLoad" async defer></script>--}}
