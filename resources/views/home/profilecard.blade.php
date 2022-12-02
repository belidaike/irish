<!DOCTYPE html>
    <!-- Coding by CodingLab | www.codinglabweb.com -->
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Responsive Card Slider</title>

        <!-- Swiper CSS -->
        <link href="{{asset('home/css/swiper-bundle.min.css')}}" rel="stylesheet" />

        <!-- CSS -->
        <link href="{{asset('home/css/slidercard.css')}}" rel="stylesheet" />
        <link href="{{asset('home/css/profilecard.css')}}" rel="stylesheet" />
                                        
    </head>
    <body>

        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v15.0" nonce="s9jTpIO8"></script>




        <h1 class="abouttext">Our Team</h1>
        <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    

                    <div class="cardkl swiper-slide">
                        <div class="helcardlo">
                            <div class="imgBx">
                                <img src="images/paul.jpg">
                            </div>
                            <div class="helcontentlo">
                                <div class="details">
                                    <h2>Paul Adrian <br><span>Secretary</span></h2>
                                    <div class="data">
                                        <span>If you want to change different start from yourself</span>
                                        
                                    </div>
                                    <div class="actionBtn">
                                            {{-- <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="200" data-layout="button" data-action="like" data-size="large" data-share="false"></div> --}}
                                        <a href="https://www.messenger.com/t/100006087886243"><button>Message</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cardkl swiper-slide">
                        <div class="helcardlo">
                            <div class="imgBx">
                                <img src="images/tess.jpg">
                            </div>
                            <div class="helcontentlo">
                                <div class="details">
                                    <h2>Tess <br><span>CEO / Owner</span></h2>
                                    <div class="data">
                                        <span>If you want to change different start from yourself</span>
                                        
                                    </div>
                                    <div class="actionBtn">
                                        {{-- <button>Follow</button> --}}
                                        {{-- <a href="https://www.messenger.com/t/100006087886243"><button>Message</button></a> --}}
                                        <a href="https://www.messenger.com/t/100006087886243"><button>Message</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cardkl swiper-slide">
                        <div class="helcardlo">
                            <div class="imgBx">
                                <img src="images/ghiane.jpg">
                            </div>
                            <div class="helcontentlo">
                                <div class="details">
                                    <h2>Ghiane Ausejo <br><span>Designer / Make-up Artist</span></h2>
                                    <div class="data">
                                        <span>If you want to change different start from yourself</span>
                                        
                                    </div>
                                    <div class="actionBtn">
                                        {{-- <button>Follow</button> --}}
                                        <a href="https://www.messenger.com/t/100006087886243"><button>Message</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="cardkl swiper-slide">
                        <div class="helcardlo">
                            <div class="imgBx">
                                <img src="images/akonigwapo.jpg">
                            </div>
                            <div class="helcontentlo">
                                <div class="details">
                                    <h2>Jay Calamba <br><span>Tailor</span></h2>
                                    <div class="data">
                                        <span>If you want to change different start from yourself</span>
                                        
                                    </div>
                                    <div class="actionBtn">
                                        {{-- <button>Follow</button> --}}
                                        <a href="https://www.messenger.com/t/100006087886243"><button>Message</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="cardkl swiper-slide">
                        <div class="helcardlo">
                            <div class="imgBx">
                                <img src="images/akonigwapo.jpg">
                            </div>
                            <div class="helcontentlo">
                                <div class="details">
                                    <h2>Jay Calamba <br><span>Make up Artist</span></h2>
                                    <div class="data">
                                        <span>If you want to change different start from yourself</span>
                                        
                                    </div>
                                    <div class="actionBtn">
                                        {{-- <button>Follow</button> --}}
                                        <a href="https://www.messenger.com/t/100006087886243"><button>Message</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>
    </body>

    <!-- Swiper JS -->
    <script src="home/js/swiper-bundle.min.js"></script>

    <!-- JavaScript -->
    <script src="home/js/slidercard.js"></script>
</html>