<html>
    <head> <title> Travel Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
        function login()
        {
            open("loginJS.php");
        }
        function places()
        {
            var s = document.getElementById("place_input").value;
            s=s.toLowerCase();
            window.location = s+".html";
        }
        function explore()
        {
            open("map_of_india.html");
        }
        function regi()
        {
            open("reg.php");    
        }
    </script>
    </head>
    <body>
        <section class="header">
            <div class="container">
                <img src="images/logo1.png">
                <button type="button" class="explore " onclick="explore()">Explore</button>
                <button type="button" class="login-btn" onclick="login()">Login</button>
                <button type="button" class="reg " onclick="regi()">Registration</button>
            </div>
            <h1> Travel Across The Globe</h1>
            <div class="input-group">
                <input type="text" class="form-control" id= "place_input" placeholder="Search place">
                <div class="input-group-append">
                    <button onclick="places()" type="submit" class="input-group-text">Search</button>
                </div>
            </div>
        </section>
        <section class="features">
            <h1>Featured Destinations</h1>
            <div class="container">
                <div class="row">
                <div class="col-md-4">
                    <div class="feature-box">
                        <div class="feature-img">
                            <img src="images/1.jpg">
                            <div class="price">
                                <p>Rs. 15000</p>
                            </div>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>                              
                                <i class="fa fa-star-o"></i>
                            </div>
                        </div>
                        <div class="feature-details">
                            <h4>Hyderabad</h4>
                            <p>Hyderabad is the capital of southern India's Telangana state.
                            A major center for the technology industry, it's home to many upscale 
                            restaurants and shops. Its historic sites include Golconda Fort, a former 
                            diamond-trading center that was once the Qutb Shahi dynastic capital. 
                            The Charminar, a 16th-century mosque whose 4 arches support towering minarets, 
                            is an old city landmark near the long-standing Laad Bazaar.</p>
                            <div>
                                <span> <i class="fa fa-map-marker"></i> Hyderabad </span>
                                <span> <i class="fa fa-sun-o"></i>   3 days       </span>
                                <span> <i class="fa fa-moon-o"></i>  4 nights       </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box">
                        <div class="feature-img">
                            <img src="images/2.jpg">
                            <div class="price">
                                <p>Rs. 16000</p>
                            </div>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>                              
                                <i class="fa fa-star-o"></i>
                            </div>
                        </div>
                        <div class="feature-details">
                            <h4>Agra</h4>
                            <p>Agra is a city on the banks of the Yamuna river in the Indian state of Uttar Pradesh.
                                It is 206 kilometres (128 mi) south of the national capital New Delhi. Agra is the 
                                fourth-most populous city in Uttar Pradesh and 24th in India.
                                Agra is a major tourist destination because of its many Mughal-era buildings, 
                                most notably the Taj Mahal, Agra Fort and Fatehpur Sikri, all of which are UNESCO World Heritage Sites. </p>
                            <div>
                                <span> <i class="fa fa-map-marker"></i> Agra </span>
                                <span> <i class="fa fa-sun-o"></i>   4 days       </span>
                                <span> <i class="fa fa-moon-o"></i>  5 nights       </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box">
                        <div class="feature-img">
                            <img src="images/3.jpg">
                            <div class="price">
                                <p>Rs. 20000</p>
                            </div>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>                              
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <div class="feature-details">
                            <h4>Jaipur</h4>
                            <p>Jaipur is the capital of India’s Rajasthan state. It evokes 
                                the royal family that once ruled the region and that, in 1727, 
                                founded what is now called the Old City, or “Pink City” for its 
                                trademark building color. At the center of its stately street grid 
                                (notable in India) stands the opulent, colonnaded City Palace complex. 
                                With gardens, courtyards and museums, part of it is still a royal residence.</p>
                            <div>
                                <span> <i class="fa fa-map-marker"></i> Jaipur </span>
                                <span> <i class="fa fa-sun-o"></i>   7 days       </span>
                                <span> <i class="fa fa-moon-o"></i>  6 nights       </span>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
        <section class="gallery">
        <h1>Travelling Gallery</h1>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="gallery-box">
                            <img src="images/hyderabad1.jpg">
                            <h4>Hyderabad</h4>
                    </div>
                    </div>
                    <div class="col-md-3">
                        <div class="gallery-box">
                            <img src="images/agra1.jpg">
                            <h4>Agra</h4>
                    </div>
                    </div>
                    <div class="col-md-3">
                        <div class="gallery-box">
                            <img src="images/jaipur1.jpg">
                            <h4>Jaipur</h4>
                    </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="banner">
            <div class="banner-highlights">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <h2>Get 30% on top destnation</h2>
                            <p>Book your tickets before 30th March and avail 30%off</p>
                        </div>
                        <div class="col-md-4">
                            <button type="button" class="booking-btn">Book now</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="users-feedback">
            <h1>User Reviews</h1>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="user-review">
                            <p>Good and comfortable stay.  </p>
                            <h5>John Doe</h5>
                            <small>Jaipur</small>
                        </div>
                        <img src="images/icon.png">
                    </div>
                    <div class="col-md-4">
                        <div class="user-review">
                            <p> </p>
                            <h5>Rahul</h5>
                            <small>Hyderabad</small>
                        </div>
                        <img src="images/icon.png">
                    </div>
                    <div class="col-md-4"> <div class="user-review">
                        <p> </p>
                        <h5>Anita</h5>
                        <small>Agra</small>
                    </div>
                    <img src="images/icon.png">
                </div>
               </div>
            </div>
        </section>
        <section class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <img src="images/logo1.png" class="footer-logo">
                    </div>
                    <div class="col-md-3">
                        <h4>Features</h4>
                        <p>Deals & Offers</p>
                        <p>Customer Reviews</p>
                        <p>Cancellation Policy</p>
                    </div>
                    <div class="col-md-3">
                        <h4>Quick Contact</h4>
                        <p> <i class="fa fa-phone-square"></i>1800 258 159 366</p>
                        <p> <i class="fa fa-envelope"></i>travelHelp@gmail.com</p>
                        <p> <i class="fa fa-home"></i>Sarvajanik College of Engineering and Technology</p>
                    </div>
                    <div class="col-md-3">
                        <h4>Follow Us On</h4>
                        <p> <i class="fa fa-facebook-official"></i>Facebook</p>
                        <p> <i class="fa fa-youtube-play"></i>YouTube</p>
                        <p> <i class="fa fa-twitter"></i>Twitter</p>
                    </div>
                </div><hr>
                <p class="copyright">Made with <i class="fa fa-heart"></i> Hopeless</p>
            </div>
        </section>
    </body>
</html>