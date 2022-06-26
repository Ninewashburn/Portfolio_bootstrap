$(window).scroll(function() {
    let top_of_element = $("#temoignage").offset().top;
    let bottom_of_element = $("#temoignage").offset().top + $("#temoignage").outerHeight();
    let bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
    let top_of_screen = $(window).scrollTop();
    if ((bottom_of_screen > top_of_element) && (top_of_screen < bottom_of_element)){
        $(".temoignage1").addClass("animationTemoignage1");
        $(".temoignage2").addClass("animationTemoignage2");
        $(".temoignage3").addClass("animationTemoignage3");
    }
});    