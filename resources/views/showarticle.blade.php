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
    {!! Html::style('css/article_styles.css') !!}
</head>
<body>

<div class="all">
    <header>
        <h1>Новости&nbsp;<span class="beta">&beta;</span></h1>
    </header>
    <main>
        <div class="big_block">
            <div class="add_news"><a href="" onclick="window.history.back()">Назад</a></div>
            @foreach($item as $it)
            <div class="block_news">
                <div class="news">
                    <span class="date_span">{{$it['created_at']}}</span>

                    <h2>{!!$it['title']!!}</h2>

                    <div class="text_from_news">
                        {!!$it['text_news']!!}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </main>
    <footer>
        <div>
            &copy; <a href="http://oneway.su" target="_blank">Студия ONEWAY</a>, 2014
        </div>
    </footer>
</div>
{!! Html::script('javascripts/app.js') !!}
</body>
</html>
