$("#megamenu-button-mobile").click(function() {
    $(".megamenu").slideToggle(400);
    $(this).toggleClass("active");
});

$(document).ready(function() {
    $(".megamenu .drop-down").click(function() {
        if ($(this).next("div").is(":visible")) {
            $(this).next("div").slideToggle("normal");
        } else {
            $(".megamenu .drop-down-container").fadeOut("fast");
            $(this).next("div").slideToggle("slow");
            $("#map_1").each(function() {
                var embed = "<iframe style='height:300px; width:100%; border:0' frameborder='0' scrolling='no'  marginheight='0' marginwidth='0'   src='https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2482.336900888852!2d-0.18850530000000001!3d51.52538029999999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x10d04b6d1a254faa!2sMaida+Vale+Library!5e0!3m2!1sit!2sit!4v1410245771307'></iframe>";
                $(this).html(embed);
            });
        }
    });
});

$('body').on('click', 'ul.tabs > li > a', function(e) {
    var contentLocation = $(this).attr('href');
    if (contentLocation.charAt(0) == "#") {
        e.preventDefault();
        $(this).parent().siblings().children('a').removeClass('active');
        $(this).addClass('active');
        $(contentLocation).show().addClass('active').siblings().hide().removeClass('active');
    }
});
