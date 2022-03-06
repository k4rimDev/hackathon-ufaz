$(document).ready(function(){

    // slider start
    $('.slider').slick({
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
    });
    // slider end

    $(document).on("mouseenter", ".green-zone", function() {
        
        $(this).addClass("active");
        });
        $(document).on("mouseleave", ".green-zone", function() {
            $(this).removeClass("active");
        });
        
    $(document).on("mouseenter", ".yellow-zone", function() {
    
        $(this).addClass("active");
        });
        $(document).on("mouseleave", ".yellow-zone", function() {
            $(this).removeClass("active");
        });

    $(document).on("mouseenter", ".red-zone", function() {

        $(this).addClass("active");
        });
        $(document).on("mouseleave", ".red-zone", function() {
            $(this).removeClass("active");
        });
});