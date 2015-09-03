
$(document).ready(function(){

    $('.news').hide();

    var i=0;

    for (i; i<5; i++) {
        $('.news').each(function(){
            if ($(this).attr('data-id')==i) {
                $(this).show();
            }
        });
    }

    $('.loading').click(function(){
        var m = $('.news').length;

        console.log(i);
        var k = i+4;
        for (i; i<=k; i++) {
            $('.news').each(function(){
                if ($(this).attr('data-id')==i) {
                    $(this).show();
                }
                if (m<i || m==i) {
                    $('.loading').hide();
                }
            });
        }


    });

    $('.add_news').click(function(){
        $('.add_news_form').slideToggle();
        if ($(this).attr('class')!='add_news add_news_open_form')
            $(this).addClass('add_news_open_form');
        else
            $(this).removeClass('add_news_open_form');
    });

    $('.send').click(function(){
        var form_title = $('input[name=title_news]').attr('value');
        var form_text = $('textarea').val();
        if (form_title==null || form_title=='' || form_title==' ') {
            $('input[name=title_news]').css('border-color','red');
        } else {
            $('input[name=title_news]').css('border-color','rgba(212,208,207,1)');
        }
        if (form_text==null || form_text=='' || form_text==' ') {
            $('textarea').css('border-color','red');
        } else {
            $('textarea').css('border-color','rgba(212,208,207,1)');
        }
        return false;
    });

    $('.exit').click(function(){
        $('.add_news_form').slideToggle();
        $('.add_news').removeClass('add_news_open_form');
        $('input[name=title_news]').attr('value','');
        $('textarea').val('');
        return false;
    });

    $('.news h2 a').click(function(){
        $(this).parent('h2').parent('.news').children('.text_from_news').slideToggle();
        return false;
    });
});