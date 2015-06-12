$(document).ready(function(){
    $(window).bind('mousewheel DOMMouseScroll', function(event){
        if (event.originalEvent.wheelDelta > 0 || event.originalEvent.detail < 0) {
            $('.navbar').css('position', 'fixed');
            //$(".navbar").animate({position: "fixed"});
            //$('.menu').slideDown();
        }
        else {
            //$(".navbar").animate({position: "relative"});
            $('.navbar').css('position', 'relative');
            //$('.menu').slideup();
        }
    });

    $(".box").mouseover(function(){
        $(this).css('box-shadow','0px 0px 2px #808080');
    });
    $(".box").mouseleave(function(){
        $(this).css('box-shadow','0px 0px 0px #FFF');
    });
});