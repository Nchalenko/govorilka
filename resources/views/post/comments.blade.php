<hr>

@if (!empty($post->comments) && count($post->comments))
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
                            <strong>Аноним</strong> <span class="text-muted">commented {{ $comment->created_at->diffForHumans() }}</span>
                        </div>
                        <div class="panel-body comment-body">{{$comment->comment}}</div><!-- /panel-body -->
                    </div><!-- /panel panel-default -->
                </div><!-- /col-sm-5 -->
            </div><!-- /row -->
        @endforeach
    </div><!-- /container -->
    <hr>
@endif
<div class="row">
    <div class="col-lg-6 col-lg-offset-2">
        <form id="contact-form" method="post" action="{{route('comment', $post->id)}}" role="form">
            {{ csrf_field() }}
            <div class="controls">
                <div class="row">
                    <div class="col-md-10">
                        <div class="form-group">
                            <textarea id="form_comment" name="comment" class="form-control"
                                      minlength="15"
                                      placeholder="Оставьте свой комментарий" rows="4" required="required"
                                      data-error="Пожалуйста, оставьте здесь свой комментарий."></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    {{--<div class="col-md-8">--}}
                        {{--<div class="form-group">--}}
                            {{--<!-- Replace data-sitekey with your own one, generated at https://www.google.com/recaptcha/admin -->--}}
                            {{--<div class="g-recaptcha" data-callback="onloadCallback"--}}
                                 {{--data-sitekey="6LcsqTgUAAAAAF42EntG1uZJoJaODX6M3TugWKhc"></div>--}}

                        {{--</div>--}}
                    {{--</div>--}}

                    <div class="col-md-2">
                        <input type="submit" name="send_comment" class="btn btn-success btn-send" value="Отправить">
                    </div>
                </div>
            </div>
        </form>

    </div><!-- /.8 -->

</div> <!-- /.row-->

{{--<script src="https://www.google.com/recaptcha/api.js?render=explicit&onload=onScriptLoad" async defer></script>--}}
