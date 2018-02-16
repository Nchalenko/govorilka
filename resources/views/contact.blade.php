@extends('layouts.main')

@section('content')

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="first-slide" src="{{ URL::asset('/images/' . 1 . '__big_image.jpg') }}" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1 id="name">Свяжитесь с нами</h1>
                        <p class="header lead">Если Вы найдете здесь что-то полезное для себя - буду рада. А если решите, что я могу помочь Вам в решении проблемы - добро пожаловать! Пишите! </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <form id="contact-form"
                      {{--method="post" action="{{route('contact')}}" --}}
                      role="form" style="padding-left: 15%">
                    {{ csrf_field() }}
                    <div class="messages"></div>
                    <div class="controls">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="form_first_name">Имя *</label>
                                    <input id="form_first_name" type="text" name="first_name" class="form-control" placeholder="Введите Ваше Имя" required="required" data-error="Имя обязательно.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="form_email">Email *</label>
                                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Ваша электронная почта" required="required" data-error="Эмейл Обязателен.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label for="form_message">Сообщение *</label>
                                    <textarea id="form_message" name="message" class="form-control" placeholder="Сообщение для нас *" rows="4" required="required" data-error="Пожалуйста, оставьте здесь свое сообщение."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <input type="submit" class="btn btn-success btn-send" style="width: 100%" value="Отправить">
                            </div>
                        </div>
                    </div>
                </form>
            </div><!-- /.8 -->
        </div> <!-- /.row-->
    </div> <!-- /.container-->

@endsection
