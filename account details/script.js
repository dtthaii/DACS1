$(document).on("scroll", function() {
    var scrollPos = $(document).scrollTop();
    var navbar = $(".navbar");
    
    //Add or remove navbar-solid based on scroll position
    if (scrollPos > 0) {
        navbar.addClass("navbar-solid");
    } else {
        navbar.removeClass("navbar-solid");
    }

    //Add or remove active class on nav-links

    $(".nav-link").each(function() {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        if (
            refElement.position().top <= scrollPos && 
            refElement.position().top + refElement.height() > 
            scrollPos
            ) {
           $(".nav-link").removeClass("active");
                currLink.addClass("active");
            } else {
                currLink.removeClass("active");
            }
    });
});

 //Mobile Menu
 $(".menu-btn").click(function() {
    $(".navbar").toggleClass("mobile");
    $(".menu-btn").toggleClass("active");
});