@extends('layouts.main')

@section('content')

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="first-slide" src="{{ URL::asset('/images/' . 1 . '__big_image.jpg') }}" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1 id="name">ASD</h1>
{{--                        <h1 id="name">{{ $post->title }}</h1>--}}
                        <p id="header">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aspernatur consectetur consequuntur dicta, laudantium rerum velit. A ab corporis, debitis deleniti ea esse non possimus qui saepe veritatis. Id, tempora?</p>
                        {{--<p id="header">{{ $post->header }}</p>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="row">

            <div class="col-lg-8 col-lg-offset-2">

                <h1>Contact us <a href="/">{{config('app.name')}}</a></h1>

                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusamus animi eius eveniet exercitationem illum impedit iure non, odit officiis porro praesentium, quidem rem repellat similique ullam ut vel voluptate!</p>


                <form id="contact-form" method="post" action="{{route('contact')}}" role="form">

                    {{ csrf_field() }}

                    <div class="messages"></div>

                    <div class="controls">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_first_name">Имя *</label>
                                    <input id="form_first_name" type="text" name="first_name" class="form-control" placeholder="Введите Ваше Имя *" required="required" data-error="Имя обязательно.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_last_name">Фамилия *</label>
                                    <input id="form_last_name" type="text" name="last_name" class="form-control" placeholder="Введите Вашу Фамилию *" required="required" data-error="Фамилия обязательна.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_email">Email *</label>
                                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Ваша электронная почта *" required="required" data-error="Эмейл Обязателен.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_phone">Телефон</label>
                                    <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Ваш телефон">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="form_message">Сообщение *</label>
                                    <textarea id="form_message" name="message" class="form-control" placeholder="Сообщение для нас *" rows="4" required="required" data-error="Пожалуйста, оставьте здесь свое сообщение."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <!-- Replace data-sitekey with your own one, generated at https://www.google.com/recaptcha/admin -->
                                    <div class="g-recaptcha" data-sitekey="6LcsqTgUAAAAAF42EntG1uZJoJaODX6M3TugWKhc"></div>

                                </div>
                            </div>

                            <div class="col-md-12">
                                <input type="submit" class="btn btn-success btn-send" value="Send message">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p class="text-muted"><strong>*</strong> These fields are required. Contact form template by <a href="https://bootstrapious.com/p/bootstrap-recaptcha" target="_blank">Bootstrapious</a>.</p>
                            </div>
                        </div>
                    </div>
                </form>

            </div><!-- /.8 -->

        </div> <!-- /.row-->

    </div> <!-- /.container-->

@endsection
