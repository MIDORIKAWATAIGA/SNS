$(function () {
    $(".menu-trigger").click(function () {
        $(this).toggleClass("active");
        if ($(this).hasClass("active")) {
            $(".menu-trigger").addClass("active");
        } else {
            $(".menu-trigger").removeClass("active");
        }
    });
    $(".nav-wrapper ul li a").click(function () {
        $(".menu-trigger").removeClass("active");
        $(".menu-trigger").removeClass("active");
    });
});
