function startSlider() {
    $(".menu li :not(.home_btn)").click(function(event) {
        $(".page").hide();
        var id = "#" + $(this).attr("href");
        $(id).show();
        event.preventDefault();
        $(".banner").animate({
            height: 0,
            opacity: 0
        }, 'slow').hide();
    });
    $(".home_btn").click(function(event) {
        $(".page").hide();
        $("#home").show();
        event.preventDefault();
        $(".banner").show();
        $(".banner").animate({
            height: 320,
            opacity: 1
        }, 'slow');
    });
}

function startNav(){
    $('.nav li.dropdown').hover(function() {
        $(this).addClass('open');
    }, function() {
        $(this).removeClass('open');
    });
}

function submitForm(){
    $("div.message button").click(function(event){
        event.preventDefault();

        $("div.message").hide();
        $("div.darkbox").animate({
            opacity: 0
        }, 'fast').hide();
    });
    $('form').on( 'submit', function( event ) {
        console.log( $( this ).serialize() );
        $.post('post.php', $(this).serialize());
        
        $("div.message").show();
        $("div.darkbox").show().animate({
            opacity: .7
        }, 'slow');

        $("form input").not("form input[type=submit]").val("");
        $("form textarea").val("");
        $("form select").val("");
        $("form submit").text("Submit");
        $("div.message h1").text("Message Sent");
        $("div.message p").text("Thankyou for your inqury, someone will be in touch with you shortly.  ~Team BoatYard");
        

        event.preventDefault();
    });
}