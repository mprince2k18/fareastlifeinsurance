
(function ($) {
    "use strict";

    
    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit',function(){
        var check = true;

        for(var i=0; i<input.length; i++) {
            if(validate(input[i]) == false){
                showValidate(input[i]);
                check=false;
            }
        }

        return check;
    });


    $('.validate-form .input100').each(function(){
        $(this).focus(function(){
           hideValidate(this);
        });
    });

    function validate (input) {
        if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        }
        else {
            if($(input).val().trim() == ''){
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }
    


    
    

})(jQuery);


/**
     * Lightbox
     */

$(window).load(function () {

    $(".fareast-gallery img").click(function () {
        $(".fareast-lightbox").fadeIn(300);
        $(".fareast-lightbox").append("<img src='" + $(this).attr("src") + "' alt='" + $(this).attr("alt") + "' />");
        $(".fareast-lightbox .filter").css("background-image", "url(" + $(this).attr("src") + ")");
        /*$(".title").append("<h1>" + $(this).attr("alt") + "</h1>");*/
        $("html").css("overflow", "hidden");
        if ($(this).is(":last-child")) {
            $(".fareast-lightbox .arrowr").css("display", "none");
            $(".fareast-lightbox .arrowl").css("display", "block");
        } else if ($(this).is(":first-child")) {
            $(".fareast-lightbox .arrowr").css("display", "block");
            $(".fareast-lightbox .arrowl").css("display", "none");
        } else {
            $(".fareast-lightbox .arrowr").css("display", "block");
            $(".fareast-lightbox .arrowl").css("display", "block");
        }
    });

    $(".fareast-lightbox .close").click(function () {
        $(".fareast-lightbox").fadeOut(300);
        $("h1").remove();
        $(".fareast-lightbox img").remove();
        $("html").css("overflow", "auto");
    });

    $(document).keyup(function (e) {
        if (e.keyCode == 27) {
            $(".fareast-lightbox").fadeOut(300);
            $(".fareast-gallery img").remove();
            $("html").css("overflow", "auto");
        }
    });

    $(".fareast-lightbox .arrowr").click(function () {
        var imgSrc = $(".fareast-lightbox img").attr("src");
        var search = $("section").find("img[src$='" + imgSrc + "']");
        var newImage = search.next().attr("src");
        /*$(".lightbox img").attr("src", search.next());*/
        $(".fareast-gallery img").attr("src", newImage);
        $(".fareast-lightbox").css("background-image", "url(" + newImage + ")");

        if (!search.next().is(":last-child")) {
            $(".fareast-lightbox .arrowl").css("display", "block");
        } else {
            $(".fareast-lightbox .arrowr").css("display", "none");
        }
    });

    $(".fareast-lightbox .arrowl").click(function () {
        var imgSrc = $(".fareast-lightbox img").attr("src");
        var search = $(".fareast-gallery").find("img[src$='" + imgSrc + "']");
        var newImage = search.prev().attr("src");
        /*$(".lightbox img").attr("src", search.next());*/
        $(".fareast-lightbox img").attr("src", newImage);
        $(".fareast-lightbox .filter").css("background-image", "url(" + newImage + ")");

        if (!search.prev().is(":first-child")) {
            $(".fareast-lightbox .arrowr").css("display", "block");
        } else {
            $(".fareast-lightbox .arrowl").css("display", "none");
        }
    });

});