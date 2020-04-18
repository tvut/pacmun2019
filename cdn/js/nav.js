$(document).ready(function () {
    /* Shrinks Menu When Scrolled Past 1/2 the page */
    var scroll_pos = 0;
    $(document).scroll(function () {
        scroll_pos = $(this).scrollTop();
        if(scroll_pos>(($(window).height() * .2)-100)){
            $('.blurbg').css({
                "opacity": .3
            });
            $(".fixed-top").css({
                "box-shadow": "0 4px 8px 0 rgba(0, 0, 0, 0.2)",
            });
        } else {
            $('.blurbg').css({
                "opacity": 1
            });
            $(".fixed-top").css({
                "box-shadow": "none"
            });
        }

        if ($(window).width() > 992) {
            if (scroll_pos < (($(window).height() * .2)-100)) {
                $(".fixed-top").css({
                    "height": "20vh"
                });
            } else {
                $(".fixed-top").css({
                    "height": "100px"
                });
            }
        }
    });
    /*Removes inline CSS on page resize*/
    $(window).resize(function () {
        $(".navheight").css('height', '');
        $(".navheight").css('border-bottom', '');
    });
    /*Mobile Menu Hide/Show*/
    $("#gavel").click(function () {
        $("#mobilenav").show();
        $("#hide").show();
    });
    $("#hide").click(function () {
        $("#mobilenav").hide();
        $("#hide").hide();
    });
});