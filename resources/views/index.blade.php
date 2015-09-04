<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Новости (бета)</title>
    <link href='http://fonts.googleapis.com/css?family=PT+Serif+Caption:400,400italic&subset=cyrillic,latin'
          rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,900,400italic&subset=cyrillic,latin' rel='stylesheet'
          type='text/css'>
    {!! Html::style('css/template_styles.css') !!}
</head>
<body>
<div class="all">
    <header>
        <h1>Новости&nbsp;<span class="beta">&beta;</span></h1>
    </header>
    <main>

        <div class="big_block">
            <div class="add_news">Добавить новость</div>
            <div class="add_news_form">
                <form name="news_form" id="news_form">
                    <input type="text" class="input" name="title_news"
                           placeholder="Заголовок новости, максимум пара фраз" value="">
                    <textarea class="textarea" name="text_news"
                              placeholder="Текст новости, html не работает"></textarea>


                    <div class="float_right">
                        <span class="exit">Отмена</span>
                        <button type="submit" name="send_form" class="send">Отправить</button>
                    </div>
                </form>
            </div>
            <div class="block_news">
                @foreach($news as $item)
                    <div class="news" data-id="{{$item['id']}}">
                        <span class="date_span">{{$item['created']}}</span>

                        <h2><a href="{{$item['url']}}">{!!$item['title']!!}</a></h2>

                        <div class="text_from_news">
                            <a href="article/{!!$item['id']!!}&&{{$item['url']}}">
                                {!!$item['text_news']!!}
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            @if($showmore)
                <div class="loading">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         width="32px" height="32px" viewBox="0 0 32 32" enable-background="new 0 0 32 32"
                         xml:space="preserve">
<g>
    <g>
        <path fill="#E30613" d="M21.5,12.5l-3,4h2c0,2.207-1.795,4-4,4c-0.744,0-1.446-0.223-2.058-0.59l-1.215,1.619
			c0.955,0.619,2.085,0.971,3.272,0.971c3.309,0,6-2.691,6-6h2L21.5,12.5z M12.5,16.5c0-2.207,1.794-4,4-4
			c0.744,0,1.446,0.223,2.057,0.59l1.215-1.619C18.818,10.852,17.688,10.5,16.5,10.5c-3.309,0-6,2.691-6,6h-2l3,4l3-4H12.5z"/>
    </g>
</g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g></svg>

                    Загрузить еще...
                </div>
            @endif
        </div>

    </main>
    <footer>
        <div>
            &copy; <a href="http://oneway.su" target="_blank">Студия ONEWAY</a>, 2014
        </div>
    </footer>
</div>
{!! Html::script('http://code.jquery.com/jquery-1.8.3.js') !!}
{!! Html::script('javascripts/app.js') !!}
</body>
</html>
