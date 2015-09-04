$(document).ready(function () {

    showNewses = function (data) {
        data.news.forEach(function (item) {
            $('.block_news')
                .append(
                "<div class='news' data-id=" + item.id + "><span class='date_span'>"
                + item.created + "</span> <h2><a href=" + item.url + ">" + item.title + "</a></h2><div class='text_from_news'>" +
                item.text_news + "</div></div>")
                .append($('.loading'));

        });
        if(data.hide){
            $('.loading').remove()
        }
        $('.news h2 a').click(function () {
            $(this).parent('h2').parent('.news').children('.text_from_news').slideToggle();
            return false;
        });
    };

    $('.loading').click(function () {

        $.ajax({
            url: "show",
            data: {offset: $('.news').length},
            type: "POST",
            beforeSend: function (request) {
                return request.setRequestHeader('X-CSRF-Token', $("meta[name='csrf-token']").attr('content'));
            },
            success: function (request) {
                showNewses(request);
            }
        });
    });

    $('.add_news').click(function () {
        $('.add_news_form').slideToggle();
        if ($(this).attr('class') != 'add_news add_news_open_form')
            $(this).addClass('add_news_open_form');
        else
            $(this).removeClass('add_news_open_form');
    });

    $('.send').click(function (e) {
        e.preventDefault();
        var form_title = $('input[name=title_news]').attr('value');
        var form_text = $('textarea').val();
        if (form_title == null || form_title == '' || form_title == ' ') {
            $('input[name=title_news]').css('border-color', 'red');
        } else {
            $('input[name=title_news]').css('border-color', 'rgba(212,208,207,1)');
        }
        if (form_text == null || form_text == '' || form_text == ' ') {
            $('textarea').css('border-color', 'red');
        } else {
            $('textarea').css('border-color', 'rgba(212,208,207,1)');
        }
        if(form_title!=''&&form_text!=''){
            $.ajax({
                url: "create",
                data: {
                    title: form_title,
                    text: form_text
                },
                type: "POST",
                beforeSend: function (request) {
                    return request.setRequestHeader('X-CSRF-Token', $("meta[name='csrf-token']").attr('content'));
                },
                success: function (request) {
                    $('.block_news')
                        .prepend(
                        "<div class='news' data-id=" + request.article.id + "><span class='date_span'>"
                        + request.article.created + "</span> <h2><a href=" + request.article.url + ">" + form_title + "</a></h2><div class='text_from_news'>" +
                        form_text + "</div></div>");
                    $('#news_form')[0].reset();
                    $('.add_news_form').slideToggle();

                }
            });
        }
        return false;
    });

    $('.exit').click(function () {
        $('.add_news_form').slideToggle();
        $('#news_form')[0].reset();
        return false;
    });

    $('.news h2 a').click(function () {
        $(this).parent('h2').parent('.news').children('.text_from_news').slideToggle();
        return false;
    });
});