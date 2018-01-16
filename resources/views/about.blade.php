@extends('layouts.main')

@section('content')

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                {{--TODO-nik add about image--}}
                <img class="first-slide" src="{{ URL::asset('/images/' . 1 . '__big_image.jpg') }}" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1 id="name">Обо мне </h1>
                        <p id="header">Два в одном</p>
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
                    <p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 11pt; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">Здравствуйте, уважаемый Гость моего сайта! <br>Меня зовут Дина. Я - логопед и русский филолог. Живу в Киеве. Сайт создан, чтобы помочь нам найти друг друга. Здесь я публикую статьи, которые могут помочь людям разобраться в проблемах языка и звукопроизношения, и принять решения о способах их решения. <br>Если Вы найдете здесь что-то полезное для себя - буду рада. А если решите, что я могу помочь Вам в решении проблемы - добро пожаловать! Пишите! Звоните! А сейчас немного о себе.</span></p>
                    <hr>
                    <p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 11pt; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;"> Жила-была девочка...Довольно странная девочка...Странность была в том, что с кем бы она ни начинала говорить,- тут же перенимала манеру разговора. Собеседник &ldquo;кагтавит&rdquo; - наша девочка не может не картавить. Человек заикается - горло нашей девочки сдавливает спазм. Лучший друг шепелявит - язык нашей девочки уже между зубами. Доставалось за это не только девочке. Родителям тоже приходилось краснеть&hellip;</span></p>
                    <p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 11pt; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">Позже такое же свойство проявилось, когда слышала неграмотную речь. Намеренно многозначительно повторяла неправильно сказанные слова, фразы. Страшно вспоминать! Позже становилось стыдно&hellip;</span></p>
                    <p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 11pt; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">Когда пришло время выбирать профессию, решила усовершенствовать свои знания, чтобы уже с полной уверенностью &ldquo;выносить людям мозг&rdquo;. Родной Черновицкий университет в лице русского филфака открыл девочке все секреты &ldquo;великого и могучего&rdquo;. Что не помешало &ldquo;сходить&rdquo; поучиться бухгалтерии. А что? В жизни все пригодится! Не пригодилось...Не мое!</span></p>
                    <p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 11pt; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">А вот филология стала призванием.</span></p>
                    <p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 11pt; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">Со временем вспомнила давние детские проказы. Кто знает, может, для тех, кого я непроизвольно копировала в детстве, я стала отправной точкой для работы над собой? Возможно, поборов обиду, они пошли к логопеду? Или сами справились с этим.</span></p>
                    <p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 11pt; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">Так вот, я поняла, что для успешных социализации и карьеры мало знать, что сказать. Недостаточно грамотно оформить фразу,- необходимо уметь это красиво, благозвучно и уверенно подать.</span></p>
                    <p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 11pt; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">Дополнила недостающие пазлы в своем образовании на факультете &ldquo;Логопедия. Специальная психология&rdquo; в университете им.М.П. Драгоманова. И вот, пожалуйста,- перед вами 2 в 1.</span></p>
                    <p>&nbsp;</p>
                    <p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 11pt; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">А теперь серьезно. Я могу, хочу и знаю, как научить Ваших детей (а если надо - Вас) &nbsp;говорить на родном языке красиво и уверенно. </span></p>
                </div><!-- /.blog-post -->
            </div><!-- /.blog-main -->
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 blog-main" style="margin-left: 20%;">
                <div class="blog-post">
                    <br>
                    <hr>
                    <b><em>Отзывы о моей работе можно просмотреть <a target="_blank" href="http://kiev.repetitors.info/comments.php?p=GlibkaDV">здесь</a></em></b>
                </div><!-- /.blog-post -->
            </div><!-- /.blog-main -->
        </div>
    </div>

@endsection