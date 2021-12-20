$(function () {
    $("#menu-open-btn").click(function () { 
        $("header nav").css("left", "0");
    });
    $("#menu-close-btn").click(function () { 
        $("header nav").css("left", "100%");
    });
});