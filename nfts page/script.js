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

const search = () => {
    const searchbox = document.getElementById("search-item").value.toUpperCase()
    const storeitems = document.getElementById("box-container")
    const item = document.querySelectorAll(".blog-box")
    const blogname = storeitems.getElementsByTagName("h3")

    for(var i = 0; i < blogname.length; i++) {
        let match = item[i].getElementsByTagName('h3')[0];

        if(match) {
            let textValue = match.textContent || match.innerHTML

            if(textValue.toUpperCase().indexOf(searchbox) > -1) {
                item[i].style.display = "";
            } else {
                item[i].style.display = "none";
            }
        }
    }
}

// const search_shop = () => {
//     const searchbox = document.getElementById("search-item-shop").value.toUpperCase()
//     const storeitems = document.getElementById("products-container")
//     const item = document.querySelectorAll(".product")
//     const productname = storeitems.getElementsByTagName("h3")

//     for(var i = 0; i < productname.length; i++) {
//         let match = item[i].getElementsByTagName('h3')[0];

//         if(match) {
//             let textValue = match.textContent || match.innerHTML

//             if(textValue.toUpperCase().indexOf(searchbox) > -1) {
//                 item[i].style.display = "";
//             } else {
//                 item[i].style.display = "none";
//             }
//         }
//     }
// }