function loadSub(id){
    console.log("subPager.js > loadSub(" + id + ")");
    var title = $("#" + id + "Slide").attr("title");
    $("#slideArea *").hide();
    $(".subslide img").animate({
        opacity: 0
    }, 'fast');
    $("#" + id + "Slide").show();
    $("#" + id + "Slide *").show().animate({
        opacity: 1
    }, 'slow');
    $("#subpagetitle").text(title);
    $(".subNav li").css({"background": "", "color": ""});
    $("#" + id).css({"background": "#b58743", "color": "white"});


    $(".detail").hide();
    $("#" + id + "Details").show();
}

function keepInView(id){
    console.log("subPager.js keepInView(" + id + ")");

    $(window).scroll( function() {
        console.log($(window).scrollTop() + " " + $(id).offset().top);
        if ($(window).scrollTop() > $(id).offset().top){
            $(id).addClass('fixed');
        } else {
            $(id).removeClass('fixed');
        }
    } );
}
