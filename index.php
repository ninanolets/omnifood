<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-163680130-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-163680130-1');
        </script>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Omnifood is a premium food delivery service with the mission the bring affordable meals to as many people as possible">

        <link rel="stylesheet" type="text/css" href="Vendors/css_files/normalize_css.css">
        <link rel="stylesheet" type="text/css" href="Vendors/css_files/Grid.css">
        <link rel="stylesheet" type="text/css" href="Vendors/css_files/animate.css">
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="Resources/css_files/style.css">
        <link rel="stylesheet" type="text/css" href="Resources/css_files/queries.css">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400&display=swap" >
        <title>Omnifood</title>

        <link rel="apple-touch-icon" sizes="180x180" href="Resources/faviicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="Resources/faviicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="Resources/faviicons/favicon-16x16.png">
        <link rel="manifest" href="Resources/faviicons/site.webmanifest">
        <link rel="mask-icon" href="Resources/faviicons/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="Resources/faviicons/favicon.ico">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-config" content="Resources/faviicons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">

    </head>
    
    <body>

        <header>
            <nav>
                <div class="row">
                    <img src="Resources/image_files/logo-white.png" alt="Omnifood logo" class="logo">
                    <img src="Resources/image_files/logo.png" alt="Omnifood logo" class="logo-black">
                    <ul class="main-nav js--main-nav">
                        <li><a href="#features">Food delivery</a></li>
                        <li><a href="#works">How it works</a></li>
                        <li><a href="#cities">Our cities</a></li>
                        <li><a href="#plans">Sign up</a></li>
                    </ul>
                    <a class="mobile-nav-icon js--nav-icon"><i class="icon ion-ios-menu"></i></a>
                </div>
            </nav>
            <div class="hero-text-box">
                <h1>Goodbye junk food. <br>Hello super healthy meals.</h1>
                <a class="btn btn-full js--scroll-to-plans" href="#plans">I’m hungry</a>
                <a class="btn btn-ghost js--scroll-to-start" href="#features"> Show me more</a>
            </div>
        </header>

        <section class="section-features js--section-features" id="features">
            <div class="row"> <!-- to keep it centered as the css rules in .row -->
                <h2>Get food fast &mdash; not fast food</h2>
                <p class="long-copy">
                    Hello, we’re Omnifood, your new premium food delivery service. We know you’re always busy. No time for cooking. So let us take care of that, we’re really good at it, we promise!
                </p>
            </div>
            <div class="row js--wp-1">
                <div class="col span-1-of-4 box">
                    <i class="icon ion-ios-infinite icon-big"></i>
                    <h3>Up to 365 days/year</h3>
                    <p>
                        Never cook again! We really mean that. Our subscription plans include up to 365 days/year coverage. You can also choose to order more flexibly if that's your style.
                    </p>
                </div> <!-- we are taking this class styles from the Grid.css document that's why we assign a class="box", to be able to style it-->
                <div class="col span-1-of-4 box">
                    <i class="icon ion-ios-stopwatch icon-big"></i>
                    <h3>Ready in 20 minutes</h3>
                    <p>
                        You're only twenty minutes away from your delicious and super healthy meals delivered right to your home. We work with the best chefs in each town to ensure that you're 100% happy.
                    </p>
                </div>
                <div class="col span-1-of-4 box">
                    <i class="icon ion-ios-nutrition icon-big"></i>
                    <h3>100% organic</h3>
                    <p>
                        All our vegetables are fresh, organic and local. Animals are raised without added hormones or antibiotics. Good for your health, the environment, and it also tastes better!
                    </p>
                </div>
                <div class="col span-1-of-4 box">
                    <i class="icon ion-ios-cart icon-big"></i>
                    <h3>Order anything</h3>
                    <p>
                        We don't limit your creativity, which means you can order whatever you feel like. You can also choose from our menu containing over 100 delicious meals. It's up to you!
                    </p>
                </div>
            </div>
        </section>

        <section class="section-meals">
            <ul class="meals-showcase clearfix">
                <li>
                    <figure class="meal-photo">
                        <img src="Resources/image_files/1.jpg" alt="Korean bibimbap with egg and vegetables">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="Resources/image_files/2.jpg" alt="Simple italian pizza with cherry tomatoes ">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="Resources/image_files/3.jpg" alt="Chicken breast steak with vegetables">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="Resources/image_files/4.jpg" alt="Autumn pumpkin soup">
                    </figure>
                </li>
            </ul>
            <ul class="meals-showcase clearfix">
                <li>
                    <figure class="meal-photo">
                        <img src="Resources/image_files/5.jpg" alt="Paleo beef steak with vegetables">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="Resources/image_files/6.jpg" alt="Healthy baguette with egg and vegetables">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="Resources/image_files/7.jpg" alt="Burger with cheddar and bacon ">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="Resources/image_files/8.jpg" alt="Granola with cherries and strawberries">
                    </figure>
                </li>
            </ul>
        </section>

        <section class="section-steps" id="works">
            <div class="row">
                <h2>How it works &mdash; Simple as 1, 2, 3</h2>
            </div>
            <div class="row">
                <div class="col span-1-of-2 steps-box">
                    <img src="Resources/image_files/app-iPhone.png" alt="Omnifood app on iPhone" class="app-screen js--wp-2">
                </div>
                <div class="col span-1-of-2 steps-box">
                    <div class="works-step">
                        <div>1</div>
                        <p>Choose the subscription plan that best fits your needs and sign up today.</p>
                    </div>
                    <div class="works-step">
                        <div>2</div>
                        <p>Order your delicious meal using our mobile app or website. Or you can even call us!</p>
                    </div>
                    <div class="works-step">
                        <div>3</div>
                        <p>Enjoy your meal after less than 20 minutes. See you the next time!</p>
                    </div>

                    <a href="#" class="bttn-app"><img src="Resources/image_files/download-app.svg" alt="App Store button"></a>
                    <a href="#" class="bttn-app"><img src="Resources/image_files/download-app-android.png" alt="Play Store button"></a>
                </div>
            </div>
        </section>

        <section class="section-cities" id="cities">
            <div class="row">
                <h2>We're currently in these cities</h2>
            </div>
            <div class="row js--wp-3">
                <div class="col span-1-of-4 box">
                    <img src="Resources/image_files/lisbon-3.jpg" alt="Lisbon City">
                    <h3>Lisbon</h3>
                    <div class="city-feature">
                        <i class="icon ion-ios-contact icon-small"></i>
                        1600+ happy eaters
                    </div>
                    <div class="city-feature">
                        <i class="icon ion-ios-star icon-small"></i>
                        60+ top chefs
                    </div>
                    <div class="city-feature">
                        <i class="icon ion-logo-twitter icon-small"></i>
                        <a href="#">@omnifood_lx</a>
                    </div>
                </div>
                <div class="col span-1-of-4 box">
                    <img src="Resources/image_files/san-francisco.jpg" alt="San Francisco City">
                    <h3 id="tabletsize-SF">San Francisco</h3>
                    <div class="city-feature">
                        <i class="icon ion-ios-contact icon-small"></i>
                        3700+ happy eaters
                    </div>
                    <div class="city-feature">
                        <i class="icon ion-ios-star icon-small"></i>
                        160+ top chefs
                    </div>
                    <div class="city-feature">
                        <i class="icon ion-logo-twitter icon-small"></i>
                        <a href="#">@omnifood_sf</a>
                    </div>
                </div>
                <div class="col span-1-of-4 box">
                    <img src="Resources/image_files/berlin.jpg" alt="Berlin City">
                    <h3>Berlin</h3>
                    <div class="city-feature">
                        <i class="icon ion-ios-contact icon-small"></i>
                        2300+ happy eaters
                    </div>
                    <div class="city-feature">
                        <i class="icon ion-ios-star icon-small"></i>
                        110+ top chefs
                    </div>
                    <div class="city-feature">
                        <i class="icon ion-logo-twitter icon-small"></i>
                        <a href="#">@omnifood_berlin</a>
                    </div>
                </div>
                <div class="col span-1-of-4 box">
                    <img src="Resources/image_files/london.jpg" alt="London City">
                    <h3>London</h3>
                    <div class="city-feature">
                        <i class="icon ion-ios-contact icon-small"></i>
                        1200+ happy eaters
                    </div>
                    <div class="city-feature">
                        <i class="icon ion-ios-star icon-small"></i>
                        50+ top chefs
                    </div>
                    <div class="city-feature">
                        <i class="icon ion-logo-twitter icon-small"></i>
                        <a href="#">@omnifood_london</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-testimonials">
            <div class="row">
                <h2>Our customers can't live without us</h2>
            </div>
            <div class="row">
                <div class="col span-1-of-3 box">
                    <!-- <i class="icon ion-ios-quote icon-quote"></i> -->
                    <p>Omnifood is just awesome! I just launched a startup which leaves me with no time for cooking, so Omnifood is a life-saver. Now that I got used to it, I couldn't live without my daily meals!"</p>
                    <div class="testimonial-author">
                        <img src="Resources/image_files/customer-1.jpg" alt="Costumer 1">
                        <div>&mdash; Alberto Duncan</div>
                    </div>
                </div>
                <div class="col span-1-of-3 box">
                    <!-- <i class="icon ion-ios-quote icon-quote"></i> -->
                    <p>Inexpensive, healthy and great-tasting meals, delivered right to my home. We have lots of food delivery here in Lisbon, but no one comes even close to Omifood. Me and my family are so in love!"</p>
                    <div class="testimonial-author">
                        <img src="Resources/image_files/customer-2.jpg" alt="Costumer 2">
                        <div>&mdash; Joana Silva</div>
                    </div>
                </div>
                <div class="col span-1-of-3 box">
                    <!-- <i class="icon ion-ios-quote icon-quote"></i> -->
                    <p>I was looking for a quick and easy food delivery service in San Franciso. I tried a lot of them and ended up with Omnifood. Best food delivery service in the Bay Area. Keep up the great work!"</p>
                    <div class="testimonial-author">
                        <img src="Resources/image_files/customer-3.jpg" alt="Costumer 3">
                        <div>&mdash; Milton Chapman</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-sign-up js--section-sign-up" id="plans">
            <div class="row">
                <h2>Start eating healthy today</h2>
            </div>
            <div class="row">
                <div class="col span-1-of-3">
                    <div class="plan-box js--wp-4">
                        <div>
                            <h3>Premium</h3>
                            <p class="plan-price">$399 <span>per month</span></p>
                            <p class="plan-price-meal">That’s only 13.30$ / meal</p>
                        </div>
                        <div>
                            <ul>
                                <li><i class="icon ion-ios-checkmark-circle-outline icon-small"></i>1 meal every day</li>
                                <li><i class="icon ion-ios-checkmark-circle-outline icon-small"></i>Order 24/7</li>
                                <li><i class="icon ion-ios-checkmark-circle-outline icon-small"></i>Access to newest creations</li>
                                <li><i class="icon ion-ios-checkmark-circle-outline icon-small"></i>Free delivery</li>
                            </ul>
                        </div>
                        <div> 
                            <a class="btn btn-full" href="#">Sign up now</a>   
                        </div>
                    </div>    
                </div>
                <div class="col span-1-of-3">
                    <div class="plan-box">
                        <div>
                            <h3>Pro</h3>
                            <p class="plan-price">$149 <span>per month</span></p>
                            <p class="plan-price-meal">That’s only 14.90$ / meal</p>
                        </div>
                        <div>
                            <ul>
                                <li><i class="icon ion-ios-checkmark-circle-outline icon-small"></i>1 meal 10 days/month</li>
                                <li><i class="icon ion-ios-checkmark-circle-outline icon-small"></i>Order 24/7</li>
                                <li><i class="icon ion-ios-checkmark-circle-outline icon-small"></i>Access to newest creations</li>
                                <li><i class="icon ion-ios-checkmark-circle-outline icon-small"></i>Free delivery</li>
                            </ul>
                        </div>
                        <div> 
                            <a class="btn btn-ghost" href="#">Sign up now</a>   
                        </div>
                    </div>    
                </div>
                <div class="col span-1-of-3">
                    <div class="plan-box">
                        <div>
                            <h3>Starter</h3>
                            <p class="plan-price">$19 <span>per meal</span></p>
                            <p class="plan-price-meal">&nbsp;</p>
                        </div>
                        <div>
                            <ul>
                                <li><i class="icon ion-ios-checkmark-circle-outline icon-small"></i>1 meal</li>
                                <li><i class="icon ion-ios-checkmark-circle-outline icon-small"></i>Order from 8am to 12pm</li>
                                <li id="close"><i class="icon ion-ios-close-circle-outline icon-close icon-small"></i>Access to newest creations</li>
                                <li><i class="icon ion-ios-checkmark-circle-outline icon-small"></i>Free delivery</li>
                            </ul>
                        </div>
                        <div> 
                            <a class="btn btn-ghost" href="#">Sign up now</a>   
                        </div>
                    </div>    
                </div>
            </div>
        </section>

        <section class="section-form" id="form">
            <div class="row">
                <h2>We're happy to hear from you</h2>
            </div>
            <div class="row">
                <form method="POST" action="mailer-new.php" class="contact-form">
                    
                    <div class="row">
                    
                        <?php
                        if ($_GET['success'] == 1) {
                            echo "<div class=\"form-messages success\">Thank you. Your message has been sent!</div>";
                        }
                        if ($_GET['success'] == -1) {
                            echo "<div class=\"form-messages error\">Oops.. Something went wrong, try again!</div>";
                        }
                        ?>
                    
                    </div>
                    
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="name">Name</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="name" id="name" placeholder="You name" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="email">Email</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="email" name="email" id="email" placeholder="You email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="find-us">How did you find us?</label>
                        </div>
                        <div class="col span-2-of-3">
                            <select name="find-us" id="find-us">
                                <option value="friends" selected>Friends</option>
                                <option value="search">Search engine</option>
                                <option value="add">Addvertizing</option>
                                <option value="media">Social media</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="news">Newsletter</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="checkbox" name="news" id="news" checked>Yes, I would like to receive Omnifood Newsletters
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="message">Drop us a line</label>
                        </div>
                        <div class="col span-2-of-3">
                            <textarea name="message" id="message" placeholder="Write your message here"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>&nbsp;</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="submit" value="Send">
                        </div>
                    </div>
                </form>
            </div>
        </section>

        <footer>
            <div class="row">
                <div class="col span-1-of-2">
                    <ul class="footer-nav">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Press</a></li>
                        <li><a href="#">iOS App</a></li>
                        <li><a href="#">Android App</a></li>
                    </ul>
                </div>
                <div class="col span-1-of-2">
                    <ul class="footer-social-media">
                        <li><a href="#"><i class="icon ion-logo-facebook"></i></a></li>
                        <li><a href="#"><i class="icon ion-logo-twitter"></i></a></li>
                        <li><a href="#"><i class="icon ion-logo-instagram"></i></a></li>
                        <li><a href="#"><i class="icon ion-logo-googleplus"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <p>
                    Copyright &copy; 2015 by Omnifood. All rights reserved.
                </p>
            </div>
        </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> <!-- enable powerful Js plug-ins (like pop-up) | Jquery -->
    <script src="https://cdn.jsdelivr.net/npm/respond@0.9.0/main.min.js"></script> <!-- read media queries for responsive webdesign | JsDelivr -->
    <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script> <!-- enable HTML5 in older browsers | JsDelivr -->
    <script src="https://cdn.jsdelivr.net/npm/selectivizr@1.0.3/selectivizr.min.js"></script> <!-- read pseudoclasses like :last & :first child | JsDelivr -->
    <script src="Vendors/js_files/jquery.waypoints.min.js"></script> <!-- enable Js waypoint -->
    <script src="Resources/js_files/script.js"></script> <!-- our own script is always the last line of scripts -->

    </body>

</html>