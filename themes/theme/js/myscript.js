jQuery(document).ready(function ($) {    
    $('section.hero .box .nav ul li:first-child a').addClass('before_css');
    $('section.hero .box .nav ul li').mouseover(function () {
        var num = $(this).index();        
        $("section.hero .box .nav ul li.expanded").each(function (index) {
            $(this).find("ul").css('display', 'none');
            $(this).find("a").removeClass('before_css');
        });
        $('section.hero .box .nav ul li:nth-child(' + (num + 1) + ') ul').css('display', 'block');
        $('section.hero .box .nav ul li:nth-child(' + (num + 1) + ') a').addClass('before_css');
    });    
    if ($('.filter_box ul li a').length > 0) {
        $('.filter_box ul li a').click(function (e) {
            e.preventDefault();
            var rrr = $(this).attr('rel');
            showonlyone(rrr);
        });
    }

    function showonlyone(thechosenone) {
        $('div[title|="work"]').each(function (index) {
            if ($(this).attr("id") == thechosenone) {
                $(this).show().animate({opacity: 1.0}, 1000);
            } else {
                $(this).hide().animate({opacity: 0}, 500);
            }
        });
    }
    /*    if ($(".youtube").length > 0 ) {
     var youtube = $(".youtube").attr('src');
     var ytid = youtube.match("[\\?&]v=([^&#]*)");
     ytid = ytid[1];
     $('.iframe_youtube').attr('src','//www.youtube.com/embed/'+ytid+'?autoplay=1');
     }	*/


    if ($('#Playvideo').length > 0) {
        jwplayer.key = "JHw0NI5l0LONWQy5WmAOC8OSMo8dPnmRcnI8vA==";
        var youtube = $("#Playvideo").attr('src');
        var playerInstance = jwplayer("Playvideo");
        playerInstance.setup({
            file: youtube,
            width: 640,
            autostart: true,
            height: 360
        });
    }    /* Accordian Js*/
    $('.region-crime_definitions .views-row span a').click(function (e) {
        e.preventDefault();
    });
    $('.region-crime_definitions .views-row div.a-legand').click(function () {
        $(this).next().slideToggle();
        $(this).toggleClass('current');
    });

});