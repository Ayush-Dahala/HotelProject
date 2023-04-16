<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tour and Travel</title>
    <link rel = "icon" href = "/Users/bhavvv/Desktop/Xplore/beach-island-landscape-logo-beach-logo-design-beach-logo-outdoor-summer-travel-sun-stock-free-vector.jpeg" 
        type = "image/x-icon">
    <link rel = "stylesheet" href="travel.css">
    
</head>
<body>

<!--Header-->
<header>
    <div class="container">
        <nav>
            <div class="logo"><img src="/Users/bhavvv/Desktop/Xplore/beach-island-landscape-logo-beach-logo-design-beach-logo-outdoor-summer-travel-sun-stock-free-vector.jpeg"></div>
            <div class="logo1"><span id="X">X</span>plore & Travels</div>
            <div class="nav-right">
                <div class="nav-close-icon"></div>
                <ul class="nav-menu">
                    <li class="nav-item ">
                        <a href="#" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#packages" class="nav-link">Packages</a>
                    </li>
                    <li class="nav-item">
                        <a href="#test" class="nav-link">Testimonials</a>
                    </li>
                </ul>
                <div class="nav-form">
                    
                    <a href="logout.php" class="btn"><button id="log">Logout</button></a>
                    
                </div>
            </div>
            <div class="hamburger-menu-wrap">
                <div class="hamburger-menu">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
            </div>
        </nav>
    </div>
</header>
<!--End Header-->

<!-- Hero -->
<main>
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <div class="hero-form">
                <div id="mainh">
                <h1 class="hero-title" id="bhav">The World is waiting for you!!</h1>
                <h4 class="hero-subtitle" id="bhav2"><div id = "texts">What are you waiting for?</div></h4>
            </div>
                
                
                <div class="skills">
                    <div class="skill" id="html">
                      <span class="title">Satisfied customers</span>
                      <div class="progress-bar">
                        <div class="progress"></div>
                      </div>
                    </div>
                    
                    <div class="skill" id="css">
                      <span class="title">Repeated customers</span>
                      <div class="progress-bar">
                        <div class="progress"></div>
                      </div>
                    </div>
                    
                    <div class="skill" id="js">
                      <span class="title">Sponsors</span>
                      <div class="progress-bar">
                        <div class="progress"></div>
                      </div>
                    </div>
                  </div>
                </div>

                            
                                        
    
                        
            </div>
            <div class="hero-img">
                <div id="person">
                <img src="/Users/bhavvv/Desktop/Xplore/168119-travel-icon-free-download-image.png" alt="">
            </div>
            </div>
        </div>
    </div>
</section>
<!--End Hero -->


<!--Explore World-->
<section id = "about">
<section class="explore">
    <div class="container">
        <div class="section-content">
            <div class="section-img">
                <img src="/Users/bhavvv/Desktop/Xplore/168111-travel-icon-free-png-hq.png" alt="">
            </div>
            <div class="section-text">
                <h3 class="section-title">Plan your <span id="escape">Escape 🌴</span></h3>
                <p class="p-description">Sheesh!! The same bored and daily routine!!
                    So here WE are to your rescue and bringing you the lifetime exotic Experience of the world.
                    Pack your bags, Grab your tickets and hold hands of loved ones.
                    And JOIN US in the Journey.
               </p>
                <button><a href="file:///Users/bhavvv/Desktop/Xplore/gallery/g.html">Discover Stories</a></button>
            </div>
        </div>
    </div>
</section>
</section>
<!--Explore World-->

<!-- Features Destinations -->
<section id="packages">
    <h2 id="pack">Popular Packages</h2>
<section class="places">

    <div class="cards">
        <div class="card">
            <div class="zoom-img">
                <div class="img-card">
                    <img src="/Users/bhavvv/Desktop/Xplore/gemma-quebec-city-wits-canada.jpeg">
                </div>
            </div>

            <div class="text">
                
                
                <p class="cost">$1870 / Per Person</p>
                <div class="card-box" id="a">
                    <p class="time">&#128339; 3 Days</p>
                    <p class="location">&#9992; Vancouver, Canada</p>
                </div>
            </div>

        </div>
        <div class="card">
            <div class="zoom-img">
                <div class="img-card">
                    <img src="/Users/bhavvv/Desktop/Xplore/pexels-flo-dahm-699466.jpeg">
                </div>
            </div>

            <div class="text">
                
                
                <p class="cost">$5870 / Per Person</p>
                <div class="card-box" id="b">
                    <p class="time">&#128339; 3 Days</p>
                    <p class="location">&#9992; Paris, France</p>
                </div>
            </div>

        </div>
        <div class="card">
            <div class="zoom-img">
                <div class="img-card">
                    <img src="/Users/bhavvv/Desktop/Xplore/c842a681-eb74-443e-a68a-d4d438e5ea0f.jpeg">
                </div>
                
            </div>

            <div class="text">
               
                
                <p class="cost">$6770 / Per Person</p>
                <div class="card-box" id="c">
                    <p class="time">&#128339; 3 Days</p>
                    <p class="location">&#9992; Monaco, Monaco</p>
                </div>
            </div>

        </div>
        <div class="card">
            <div class="zoom-img">
                <div class="img-card">
                    <img src="/Users/bhavvv/Desktop/Xplore/Bern-Switzerland-things-to-see-and-do-in-Bern.jpg.webp">
                </div>
            </div>

            <div class="text">
               
               
                <p class="cost">$2830 / Per Person</p>
                <div class="card-box" id="d">
                    <p class="time">&#128339; 3 Days</p>
                    <p class="location">&#9992; Bern, Switzerland</p>
                </div>
            </div>

        </div>
        <div class="card">
            <div class="zoom-img">
                <div class="img-card">
                    <img src="/Users/bhavvv/Desktop/Xplore/south-korea-guide-seoul-hanok-village-view_featured.webp">
                </div>
            </div>

            <div class="text">
                
                
                <p class="cost">$4834 / Per Person</p>
                <div class="card-box" id="e">
                    <p class="time">&#128339; 3 Days</p>
                    <p class="location">&#9992; Seoul, South Korea</p>
                </div>
            </div>

        </div>
        <div class="card">
            <div class="zoom-img">
                <div class="img-card">
                    <img src="/Users/bhavvv/Desktop/Xplore/f8d280ec9476b0827c71fdb753b7d460.jpeg">
                </div>
            </div>

            <div class="text">
                
                <p class="cost">$8765 / Per Person</p>
                <div class="card-box" id="f">
                    <p class="time">&#128339; 3 Days</p>
                    <p class="location">&#9992; Tokyo, japan</p>
                </div>
            </div>
        </div>
    </div>

</section>
</section>
<!-- End Features Destinations -->



<!-- Testimonials -->
<section id="test">
<div class="testimonials-section">
    <input type="radio" name="slider" title="slide1" checked="checked" class="slider__nav"/>
    <input type="radio" name="slider" title="slide2" class="slider__nav"/>
    <input type="radio" name="slider" title="slide3" class="slider__nav"/>
    <input type="radio" name="slider" title="slide4" class="slider__nav"/>
    <input type="radio" name="slider" title="slide5" class="slider__nav"/>
  <div class="slider__inner">
    <div class="slider__contents">
      <quote>&rdquo;</quote>
      <p class="slider__txt">We love you guys. I was so nervous to go for this but you people exceeded my expectations..</p>
      <h2 class="slider__caption">Kenny | London</h2>
    </div>
    <div class="slider__contents">
      <quote>&rdquo;</quote>
      <p class="slider__txt">I had so much fun and gained a life time of experience. will recommend you guys to all my friends.</p>
      <h2 class="slider__caption">John | America</h2>
    </div>
    <div class="slider__contents">
      <quote>&rdquo;</quote>
      <p class="slider__txt">the trip was overall so lovely. had some issues with timings but they were shortly resolved.</p>
      <h2 class="slider__caption">Chris | Newyork</h2>
    </div>
    <div class="slider__contents">
      <quote>&rdquo;</quote>
      <p class="slider__txt">You answer my questions so kindly, always takes care of problems, and I never have a hassle.</p>
      <h2 class="slider__caption">Raj | India</h2>
    </div>
    <div class="slider__contents">
      <quote>&rdquo;</quote>
      <p class="slider__txt">staff is friendly and everybody goes above and beyond. Everyone is courteous, everything is quick and you get us what we need.we ALWAYS come back to Xplore and Travels.</p>
      <h2 class="slider__caption">Robin | Tokyo</h2>
    </div>
  </div>
</div>
</section>
    
<!-- Testimonials -->

<!--Trending Stories -->
<section class="trendings">
    <div class="container">
        <div class="trendings-content">
            <div class="section-header">
                <h3 class="section-head-title">Trending stories</h3>
                
            </div>
            <div class="stories">
                <div class="story">
                    <img src="https://raw.githubusercontent.com/mustafadalga/tour-and-travel/master/assets/img/stories/story-1.jpg" alt="" class="story-img">
                    <h4 class="story-title">The many benefits of taking a healing holiday</h4>
                    <p class="story-desc">‘Helaing holidays’ are on the rise
                        tohelp maximise your health and happines...</p>
                    <a href="https://www.tripaneer.com/news/healing-holidays#:~:text=In%20a%20few%20words%2C%20healing,relationship%20with%20yourself%20and%20others." class="read-more">Read More</a>
                </div>
                <div class="story">
                    <img src="https://raw.githubusercontent.com/mustafadalga/tour-and-travel/master/assets/img/stories/story-2.jpg" alt="" class="story-img">
                    <h4 class="story-title">The best Kyoto restaurant to try Japanese food</h4>
                    <p class="story-desc">From tofu to teahouses, here’s our guide to Kyoto’s best restaurants
                        to visit...</p>
                    <a href="https://www.tripadvisor.com/Restaurants-g298564-c27-Kyoto_Kyoto_Prefecture_Kinki.html" class="read-more">Read More</a>
                </div>
                <div class="story">
                    <img src="https://raw.githubusercontent.com/mustafadalga/tour-and-travel/master/assets/img/stories/story-3.jpg" alt="" class="story-img">
                    <h4 class="story-title">Skip Chichen Itza and head to this remote Yucatan</h4>
                    <p class="story-desc">It’s remote and challenging to get,
                        but braving the jungle and exploring
                        these ruins without the...</p>
                    <a href="https://www.lonelyplanet.com/articles/rio-bec-ruins" class="read-more">Read More</a>
                </div>
                <div class="story">
                    <img src="https://raw.githubusercontent.com/mustafadalga/tour-and-travel/master/assets/img/stories/story-4.jpg" alt="" class="story-img">
                    <h4 class="story-title">Surf’s up at these beginner spots around the world</h4>
                    <p class="story-desc">If learning to surf has in on your to-
                        do list for a while, the good news
                        is: it’s never too late...</p>
                    <a href="https://theculturetrip.com/south-america/peru/articles/the-best-surf-locations-around-the-world-for-beginners/" class="read-more">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Trending Stories -->

<div id ="our-network">
<div id="net-img">
    <img src="/Users/bhavvv/Desktop/Xplore/gbapc.jpeg">
</div>


</div>
<!--Footer-->
<section id="ok">
<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-text">
                
                    
                
            </div>
            <div class="nav-footer">
                
                <div class="nav-footer-col">
                    
                    <h4 class="nav-footer-title">Destinations</h4>
                    <ul class="nav-footer-links">
                        <li class="nav-footer-item">
                            <a href="https://www.africa.com" class="nav-footer-link">Africa</a>
                        </li>
                        <li class="nav-footer-item">
                            <a href="https://discoveringantarctica.org.uk/" class="nav-footer-link">Antarctica</a>
                        </li>
                        <li class="nav-footer-item">
                            <a href="https://asiatimes.com/" class="nav-footer-link">Asia</a>
                        </li>
                        <li class="nav-footer-item">
                            <a href="https://european-union.europa.eu/index_en" class="nav-footer-link">Europe</a>
                        </li>
                        <li class="nav-footer-item">
                            <a href="https://www.usa.gov/" class="nav-footer-link">America</a>
                        </li>
                    </ul>
                </div>
                <div class="nav-footer-col">
                    <h4 class="nav-footer-title">Shop</h4>
                    <ul class="nav-footer-links">
                        <li class="nav-footer-item">
                            <a href="#" class="nav-footer-link">Destination Guides</a>
                        </li>
                        <li class="nav-footer-item">
                            <a href="#" class="nav-footer-link">Pictorial & Gifts</a>
                        </li>
                        <li class="nav-footer-item">
                            <a href="#" class="nav-footer-link">Special Offers</a>
                        </li>
                        <li class="nav-footer-item">
                            <a href="#" class="nav-footer-link">Delivery Times</a>
                        </li>
                        <li class="nav-footer-item">
                            <a href="#" class="nav-footer-link">FAQs</a>
                        </li>
                    </ul>
                </div>
                <div class="nav-footer-col">
                    <h4 class="nav-footer-title">Interests</h4>
                    <ul class="nav-footer-links">
                        <li class="nav-footer-item">
                            <a href="#" class="nav-footer-link">Adventure Travel</a>
                        </li>
                        <li class="nav-footer-item">
                            <a href="#" class="nav-footer-link">Art And Culture</a>
                        </li>
                        <li class="nav-footer-item">
                            <a href="#" class="nav-footer-link">Wildlife And Nature</a>
                        </li>
                        <li class="nav-footer-item">
                            <a href="#" class="nav-footer-link">Family Holidays</a>
                        </li>
                        <li class="nav-footer-item">
                            <a href="#" class="nav-footer-link">Food And Drink</a>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="social-media">
                <a href="https://www.instagram.com/" class="social-link">
                    <img src="/Users/bhavvv/Desktop/Xplore/instagram.256x256.png" class="icon" alt="">
                </a>
                <a href="https://in.linkedin.com/" class="social-link">
                    <img src="/Users/bhavvv/Desktop/Xplore/linkedin-original.256x256.png" alt="">
                </a>
                <a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox" class="social-link">
                    <img src="/Users/bhavvv/Desktop/Xplore/google-gmail.256x195.png" alt="">
                </a>
                <a href="https://twitter.com/login?lang=en" class="social-link">
                    <img src="/Users/bhavvv/Desktop/Xplore/twitter-original.256x208.png" alt="">
                </a>
                
            </div>
        </div>
    </div>
</footer>
</section>
<!--Footer-->

<div class="arrow-up"><i><</i></div>


<script src="travel.js"></script>
</main>
</body>
</html>