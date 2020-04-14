$(document).ready(function() { // always start a Js document with this
    /*
    $("h1").click(function() { // click is a method that accepts a function that will change an element
        $(this).css("background-color", "#ff0000") // keywork *this* will refers to the element
    })
     */

    /*
    var waypoints = $('#handler-first').waypoint(function(direction) {
        notify(this.element.id + ' hit 25% from top of window') 
    }, {
        offset: '25%'
    })
    // waypoint is a method that accept a function that is trigged when scrolling to an element
    */



    /* Sticky Navigation */ 
    $(".js--section-features").waypoint(function(direction) { // the class name has a "." in the front because it already exists on the HTML file
        if (direction == "down") {
            $("nav").addClass("sticky"); // Jquery element addClass -> no need to add a class in CSS file -> no "." before class name
        } else {
            $("nav").removeClass("sticky")
        }
    }, {
        offset: "60px;"
    });

    /* Smoth scrolling */ 
    $(".js--scroll-to-plans").click(function() {
        $("html, body").animate({scrollTop: $(".js--section-sign-up").offset().top}, 1000); //scroll to the top of the section with speed of 1s
    });
    
    $(".js--scroll-to-start").click(function() {
        $("html, body").animate({scrollTop: $(".js--section-features").offset().top}, 1000); //scroll to the top of the section with speed of 1s
    });
     
    /* Navigation scroll */
    $(function() {
    $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
            $('html,body').animate({
            scrollTop: target.offset().top
            }, 1000);
            return false;
        }
        }
    });
    });


    /* Animation */
    $(".js--wp-1").waypoint(function(direction) {
        $(".js--wp-1").addClass("animated fadeIn");
    }, {
        offset: "50%"
    });
    
    $(".js--wp-2").waypoint(function(direction) {
        $(".js--wp-2").addClass("animated fadeInUp");
    }, {
        offset: "50%"
    });

    $(".js--wp-3").waypoint(function(direction) {
        $(".js--wp-3").addClass("animated fadeIn");
    }, {
        offset: "50%"
    });

    $(".js--wp-4").waypoint(function(direction) {
        $(".js--wp-4").addClass("animated pulse");
    }, {
        offset: "50%"
    });


    /* Mobile nav */

    $(".js--nav-icon").click(function() {
        var nav = $(".js--main-nav");
        var icon = $(".js--nav-icon i");
        
        nav.slideToggle(300);
        if (icon.hasClass("ion-ios-menu")) {
            icon.addClass("ion-ios-close");
            icon.removeClass("ion-ios-menu");
        } else {
            icon.addClass("ion-ios-menu");
            icon.removeClass("ion-ios-close");
        }
    });

});




