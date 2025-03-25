{{-- resources/views/loading.blade.php --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Bootstrap links -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HotelZone</title>

    <link rel="icon" href="{{ asset('images/LogoICO.ico') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/homestyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/size.css') }}">
    <script src="{{ asset('js/home.js') }}"></script>

    <!-- Map link  -->
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfuIvfbBS37zfreppMKMwA2tm0H0kkERI&callback=initMap">
        </script>
    <meta name="referrer" content="origin" />

</head>

<body>
    <!-- Loading Animation -->
    <div id="loadingScreen" class="loading-screen"
        style="background: #000000; color: #0f53a1; position: fixed; width: 100%; height: 100vh; display: flex; flex-direction: column; align-items: center; justify-content: center; z-index: 100;">
        <img src="Logo2.png" id="logo2">
        <h1 id="ld1"
            style="color: #0ff; text-shadow: 0 0 10px cyan, 0 0 20px cyan, 0 0 30px cyan, 0 0 80px cyan, 0 0 120px cyan;">
            HotelZone...
        </h1>
        <div class="loading-bar-container">
            <div class="loading-bar"></div>
        </div>
    </div>

    <!-- Header -->
    <header id="headnav">
        <div class="logo"><img src="logo3.png" class="hlogo">HotelZone</div>
        <nav class="nav-links">
            <a id="home" href="#home1">Home</a>
            <a id="about" href="#about1">About</a>
            <a id="location" href="#location1">Location</a>
            <a id="services" href="#services1">Services</a>
            <a id="contact" href="#contact1">Contact</a>
        </nav>

        <div class="nav-buttons">
            <a href="/booknow"><button type="button" class="btn btn-outline-success" id="btnCus">Book Now</button></a>
            <a href="/login"><button type="button" class="btn btn-outline-danger" id="btnStf">Login</button></a>

        </div>

    </header>

    <!-- Page Content -->
    <section class="home" id="home1">
        <div class="row justify-content-center">
            <div class="home__content" id="welcometext">
                <p class="home__small" id="typing-text"></p>
                <h1 class="home__title" id="title-text">
                    We're HotelZone Sri Lanka.<br>
                    <span class="home__subtitle" style="font-size: 24px">A Sri Lanka's Leading Natural Hotel
                        Group.</span>
                </h1>
                <p class="home__description" id="description-text">
                    Experience luxury and comfort like never before.
                </p>
            </div>
            <div class="row justify-content-center" id="contWelcome">
                <div class="welcomeDiv" id="welDiv1" onmouseover="startSlideshow()" onmouseout="stopSlideshow()"></div>
                <div class="welcomeDiv" id="welDiv2" onmouseover="startSlideshow()" onmouseout="stopSlideshow()"></div>
                <div class="welcomeDiv" id="welDiv3" onmouseover="startSlideshow()" onmouseout="stopSlideshow()"></div>
            </div>
        </div>
    </section>


    <section class="about py-4" id="about1">
        <div class="container">
            <div class="row align-items-right">
                <!-- About Image Wrapper -->
                <div class="col-md-4 about__img-wrapper">
                    <img src="Img1.jpg" class="about__img img-fluid" alt="About Image 1">
                    <img src="Img1.jpg" class="about__img img-fluid" alt="About Image 2">
                    <img src="Img1.jpg" class="about__img img-fluid" alt="About Image 3">
                    <img src="Img1.jpg" class="about__img img-fluid" alt="About Image 4">
                </div>

                <!-- About Content -->
                <aside class="col-md-8 about__content-wrapper">
                    <div class="about__content">
                        <h2 class="section__title" data-title="Who are us?" style="color: white; font-weight: bold">
                            About Us</h2>
                        <p class="about__description" style="color: rgba(255, 255, 255, 0.76)">
                            Utter opulence awaits at HotelZone. Constructed next to a reservoir with a traditional manor
                            house at the center, this resort sprawls out across 58 acres of idyllic paddy fields and
                            woodland. The lavish villas are utterly peaceful and private and provide everything you
                            could want with an elegant colonial-era design.
                            Nature is inescapable at HotelZone. Peacocks strut in the undergrowth, monkeys and birds
                            traverse the treetops, and the nights have the soundtrack of crickets and croaking frogs.
                            There are also endless wildlife activities to choose from, such as birdwatching, horseback
                            riding, and walking tours of the estate. Pair these experiences with some soothing
                            treatments at the sensational spa.
                        </p>

                        <hr class="about__line1" style="background: rgba(122, 5, 5, 0.664)" />
                        <ul class="about__data list-unstyled">
                            <li class="data__item">
                                <h5 class="data__title me-2" style="color: rgba(255, 255, 255, 0.616)">Name: HotelZone
                                </h5>
                            </li>
                            <li class="data__item">
                                <h5 class="data__title me-2" style="color: rgba(255, 255, 255, 0.616)">Since: 2010</h5>
                            </li>
                            <li class="data__item">
                                <h5 class="data__title me-2" style="color: rgba(255, 255, 255, 0.616)">Located in:
                                    Kurunegala</h5>
                            </li>
                            <li class="data__item">
                                <h5 class="data__title me-2" style="color: rgba(255, 255, 255, 0.616)">Email:</h5>
                                <span class="data__description about__link"><a href="mailto:denethkaviai1@gmail.com"
                                        style="color: rgba(64, 30, 145, 0.925)">HotelZone@hotel.lk</a></span>
                            </li>
                        </ul>
                    </div>
                </aside>

                <section id="about2" class="text-center py-6">
                    <div class="container text-center" id="about2img">
                        <div class="row justify-content-center" style="cursor: pointer">
                            <div class="col-md-6 d-flex justify-content-center">
                                <div class="card">
                                    <div class="image-box">
                                        <img src="Img2.jpg" alt="Natural Location">
                                    </div>
                                    <div class="card_content">
                                        <h2>Natural Locations</h2>
                                        <p>Description...</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex justify-content-center">
                                <div class="card">
                                    <div class="image-box">
                                        <img src="Img3.jpg" alt="Another Location">
                                    </div>
                                    <div class="card_content">
                                        <h2>Attractive View</h2>
                                        <p>Description...</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex justify-content-center">
                                <div class="card">
                                    <div class="image-box">
                                        <img src="Img6.jpg" alt="Another Location">
                                    </div>
                                    <div class="card_content">
                                        <h2>Rest Area</h2>
                                        <p>Description...</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex justify-content-center">
                                <div class="card">
                                    <div class="image-box">
                                        <img src="Img5.jpg" alt="Another Location">
                                    </div>
                                    <div class="card_content">
                                        <h2>Family Time</h2>
                                        <p>Description...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!--Location-->
                <div class="container-fluid">
                    <section id="location1">

                        <dl id="locDl" style="text-align: center">
                            <dt>
                                <h2 style="color: white">Our Location</h2>
                            </dt>
                            <dd>
                                <p style="font-size: 18px; color: cyan">Find us in the heart of the city, accessible
                                    from all major routes.</p>
                            </dd>
                        </dl>
                        <div id="map"></div>
                    </section>
                </div>
                <!--Services-->
                <section class="services" id="service1">
                    <img src="Logo1.png" alt="Logo" class="logo" id="serviceLogo" />
                    <h2 id="serviceh2" style="color: white">Services</h2>
                    <p id="serviceP">This may be the most memorable day of your life.</p>
                </section>
                <div class="row">
                    <!-- Card 1 -->
                    <div class="col-md-4 mb-4">
                        <div class="card flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front" style="background-image: url('/imgs/service3.jpg');"></div>
                                <div class="flip-card-back">
                                    <h5 class="card-title">Reciption</h5>
                                    <p class="card-tag">Professional & Friendly</p>
                                    <p class="description" style="text-align: justify; ont-size: 9pt">Our friendly
                                        reception team is dedicated to making your stay seamless and enjoyable. We’re
                                        here to assist you with a smile and ensure you have everything you need for a
                                        memorable experience.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-md-4 mb-4">
                        <div class="card flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front" style="background-image: url('/imgs/service6.jpg');"></div>
                                <div class="flip-card-back">
                                    <h5 class="card-title">Staff</h5>
                                    <p class="card-tag">Greatest Staff Ever</p>
                                    <p class="description" style="text-align: justify">Our Staff is friendly and
                                        efficient! They give their best! Don't warry about your privacy and security.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-md-4 mb-4">
                        <div class="card flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front" style="background-image: url('/imgs/service7.jpg');"></div>
                                <div class="flip-card-back">
                                    <h5 class="card-title">Managers</h5>
                                    <p class="card-tag">Professional & Knowledgeable</p>
                                    <p class="description" style="text-align: justify">Our managers have gt=reat
                                        knowladge about thir field and expert level experience!Professional squad.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="col-md-4 mb-4">
                        <div class="card flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front" style="background-image: url('/imgs/service5.jpg');"></div>
                                <div class="flip-card-back">
                                    <h5 class="card-title">Mini Bar</h5>
                                    <p class="card-tag">Convenient & Delightful</p>
                                    <p class="description" style="text-align: justify; font-size: 9pt">Our minibar
                                        offers a curated selection of local snacks and beverages, ensuring a delightful
                                        experience right in your room. Enjoy the convenience of having refreshing drinks
                                        and tasty treats.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="col-md-4 mb-4">
                        <div class="card flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front" style="background-image: url('/imgs/service4.jpg');"></div>
                                <div class="flip-card-back">
                                    <h5 class="card-title">Dining Areas</h5>
                                    <p class="card-tag">Sri Lankans Best Area</p>
                                    <p class="description" style="text-align: justify">This dining area is Sri Lankan's
                                        ranking area.Very clean and calm down area.Come and Enjoy your freedom.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 6 -->
                    <div class="col-md-4 mb-4">
                        <div class="card flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front" style="background-image: url('/imgs/service1.jpg');"></div>
                                <div class="flip-card-back">
                                    <h5 class="card-title">Foods</h5>
                                    <p class="card-tag">Savor & Indulge</p>
                                    <p class="description" style="text-align: justify">Our restaurant features a diverse
                                        menu crafted from the freshest ingredients, showcasing the best of Sri Lankan
                                        and international cuisine.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>


    <!--About-->
    <footer class="footer" id="contact1">
        <div class="footer__content">
            <div class="footer__section">
                <h4>ABOUT</h4>
                <p>Whether you’re here for relaxation, adventure, or a blend of both, HotelZone provides the perfect
                    escape, with elegant accommodations inspired by traditional Sri Lankan architecture and enriched
                    with modern comforts. Indulge in our exquisite culinary offerings, rejuvenate at our nature-inspired
                    spas, and embark on guided excursions that reveal the hidden wonders of Sri Lanka.</p>
                <p>At HotelZone, every detail is designed to offer a seamless blend of luxury, serenity, and natural
                    splendor, creating an experience that lingers long after your journey ends.</p>
            </div>

            <div class="footer__section">
                <h4>CATEGORIES</h4>
                <ul>
                    <li><a href="#">Accommodations</a></li>
                    <li><a href="#">Experiences</a></li>
                    <li><a href="#">Graphics Cards</a></li>
                    <li><a href="#">Dining</a></li>
                    <li><a href="#">Wellness</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Sustainability</a></li>
                </ul>
            </div>

            <div class="footer__section">
                <h4>QUICK LINKS</h4>
                <ul>
                    <li><a href="#home1">Home</a></li>
                    <li><a href="#about1">About Us</a></li>
                    <li><a href="#location1">Location</a></li>
                </ul>
                <h4>CONTACT US</h4>
                <p>076 914 6080</p>
                <p>
                    <a
                        href="mailto:denethkaviai1@gmail.com?subject=Booking Inquiry&body=Hello, I would like to inquire about...">
                        admin@hotelzone.lk
                    </a>
                </p>

                <h4>BRANCHES</h4>
                <p style="font-size: 16px; text-align: left"><strong>Kurunegala</strong> No ..., Bauddaloka rd,
                    Kurunegala</p>
                <p style="font-size: 16px; text-align: left"><strong>Ampara</strong> No ..., GalOya, Ampara</p>
                <div class="footer__social" style="margin-left: 80px; color: cyan; align-content: center">
                    <h5>Catch Us On Social Media</h5>
                    <a href="https://x.com/i/flow/login?redirect_after_login=%2Fnibmofficial" target="_blank"><img
                            src="twitter-icon.png" alt="Facebook"></a>
                    <a href="https://web.facebook.com/nibm.kurunegala" target="_blank"><img src="facebook-icon.png"
                            alt="Facebook"></a>
                    <a href="https://www.instagram.com/nibm_kurunegala?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                        target="_blank"><img src="instagram-icon.png" alt="Instagram"></a>
                    <a href="https://www.youtube.com/@tvnibm" target="_blank"><img src="youtube-icon.png"
                            alt="YouTube"></a>
                    <a href="https://www.tiktok.com/@nibm_srilanka?is_from_webapp=1&sender_device=pc"
                        target="_blank"><img src="tiktok-icon.png" alt="TikTok"></a>
                </div>
            </div>
        </div>

        <div class="footer__bottom">

            <p>Copyright © 2024 All Rights Reserved by <a href="https://www.linkedin.com/in/deneth-kavishka-338288284/"
                    target="_blank">@Deneth Kavishka</a></p>

        </div>
    </footer>

    <!-- WhatsApp Button -->
    <a href="https://wa.me/94767639561?text=Hello%20HotelZone%2C%20I%20would%20like%20to%20inquire%20about%20your%20services.%20Can%20I%20get%20full%20list%20about%20your%20services."
        target="_blank" id="whatsappButton" class="whatsapp-float">
        <div class="whatsapp-icon">
            <img src="whatsapp-icon.png" alt="WhatsApp">
            <div class="ripple"></div>
        </div>
    </a>
    </div>
</body>
</body>

</html>