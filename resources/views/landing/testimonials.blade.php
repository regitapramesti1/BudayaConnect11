<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Testimonials Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('build/assets/web.css') }}">
</head>
<body>
    <nav class="mb-70 navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src={{  asset('build/images/logo.png') }} height="48" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href={{ Route('index')}}>Explore</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('landing.categories') }}">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Testimonials</a>
                    </li>
                </ul>
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="btn btn-secondary" href="#">Sign In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
        <!--Swiper CSS-->
        <link rel="stylesheet" href="{{ asset('resources/css/swiper-bundle.min.css')}}">
        <!--client-Review-Section-->
        <section class="clien-review1">
                

        <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="{{ asset('build/images/clientreview.jpg')}}" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 class="name">Mark Lucien</h2>
                                <p class="description">Kursusnya nyaman, harga nya pas dikantong pelajar, <br>
                                    penjelasannya lengkap, jelas dan mudah dipahami, pokoknya best deh
                                </p>

                                    <button class="button">View More</button>
                            </div>
                        </div>

                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>
    
                                    <div class="card-image">
                                        <img src="{{ asset('build/images/client 2.jpg')}}" alt="" class="card-img">
                                    </div>
                                </div>
    
                                <div class="card-content">
                                    <h2 class="name">Elio E Diego</h2>
                                    <p class="description">nyaman, dapat membantu mengenalkan budaya Indonesia</p>
    
                                        <button class="button">View More</button>
                                </div>
                            </div>

                            <div class="card swiper-slide">
                                <div class="image-content">
                                    <span class="overlay"></span>
        
                                        <div class="card-image">
                                            <img src="{{ asset('build/images/client 3.jpg')}}" alt="" class="card-img">
                                        </div>
                                    </div>
        
                                    <div class="card-content">
                                        <h2 class="name">Nandhifa Raka</h2>
                                        <p class="description">kursusnya sangat keren, sangat rekomend untuk remaja remaja yang sudah sadar betapa pentingnya mempelajari kebudayaan, karena tidak 
                                            hanya ada kursus tetapi ada banyak sekali informasi yang tersedia </p>
        
                                            <button class="button">View More</button>
                                    </div>
                                </div>

                                <div class="card swiper-slide">
                                    <div class="image-content">
                                        <span class="overlay"></span>
            
                                            <div class="card-image">
                                                <img src="{{ asset('build/images/client 4.jpg')}}" alt="" class="card-img">
                                            </div>
                                        </div>
            
                                        <div class="card-content">
                                            <h2 class="name">Georgino Damian</h2>
                                            <p class="description">Keren banget bangg webnya, sangat membantu untuk saya yang suka menjelajahi 
                                                kearifan local tetapi belum menemukan sumber yang lengkap bgttttt 
                                                dan akhirnya nemu web ini. terima kasih banyak banggg dan kursusnya sangat ramah bagi kantong pelajar</p>
            
                                                <button class="button">View More</button>
                                        </div>
                                    </div>

                                    <div class="card swiper-slide">
                                        <div class="image-content">
                                            <span class="overlay"></span>
                
                                                <div class="card-image">
                                                    <img src="{{ asset('build/images/client 5.jpg')}}" alt="" class="card-img">
                                                </div>
                                            </div>
                
                                            <div class="card-content">
                                                <h2 class="name">Hardin Scott</h2>
                                                <p class="description">Overall good tapi ada beberapa yang harus di kembangin lagi biar lebih manteppp. semangat</p>
                
                                                    <button class="button">View More</button>
                                            </div>
                                        </div>

                                        <div class="card swiper-slide">
                                            <div class="image-content">
                                                <span class="overlay"></span>
                    
                                                    <div class="card-image">
                                                        <img src="{{ asset('build/images/client 6.jpg')}}" alt="" class="card-img">
                                                    </div>
                                                </div>
                    
                                                <div class="card-content">
                                                    <h2 class="name">Tessa Young</h2>
                                                    <p class="description">AAAAAA LUCU BANGETTT SUKAAA, LENGKAP BGTTT GA HARUS NYARI SATU SATU DARI SUMBER YANG BERBEDA BEDA. KURSUSNYA JUGA SANGAT AFFORDABLE🫰🏻</p>
                    
                                                        <button class="button">View More</button>
                                                </div>
                                            </div>

                                            <div class="card swiper-slide">
                                                <div class="image-content">
                                                    <span class="overlay"></span>
                        
                                                        <div class="card-image">
                                                            <img src="{{ asset('build/images/client 7.jpg')}}" alt="" class="card-img">
                                                        </div>
                                                    </div>
                        
                                                    <div class="card-content">
                                                        <h2 class="name">Clareta Abigail</h2>
                                                        <p class="description">kursus sangat nyaman, guru yang mengajari cantik, guru sangat sabar, 
                                                            <br>pengertian bintang lima buat kursus ini yang di rekomendasikan sama BudayaConnect 🥰🥰</p>
                        
                                                            <button class="button">View More</button>
                                                    </div>
                                                </div>

                                                <div class="card swiper-slide">
                                                    <div class="image-content">
                                                        <span class="overlay"></span>
                            
                                                            <div class="card-image">
                                                                <img src="{{ asset('build/images/client 8.jpg')}}" alt="" class="card-img">
                                                            </div>
                                                        </div>
                            
                                                        <div class="card-content">
                                                            <h2 class="name">Alessia Schafer</h2>
                                                            <p class="description">kursusnya nyaman sekali, mentornya bisa di ajak kerjasama, price nya juga nggak yang ngelunjak banget, saran dari aku kelasnya di tambahin hehe🫶🏼</p>
                            
                                                                <button class="button">View More</button>
                                                        </div>
                                                    </div>

                                                    <div class="card swiper-slide">
                                                        <div class="image-content">
                                                            <span class="overlay"></span>
                                
                                                                <div class="card-image">
                                                                    <img src="{{ asset('build/images/client 9.jpg')}}" alt="" class="card-img">
                                                                </div>
                                                            </div>
                                
                                                            <div class="card-content">
                                                                <h2 class="name">Azura Ruby</h2>
                                                                <p class="description">keren bgttt sampe gabisa berkata kata🫶🏼</p>
                                
                                                                    <button class="button">View More</button>
                                                            </div>
                                                        </div>
                    </div>
                </div>
                <div class="swiper-button-next swiper-navBtn"></div>
                <div class="swiper-button-prev swiper-navBtn"></div>
                <div class="swiper-pagination"></div>
            </div>
    
    </section>


    <script src="{{ asset('resources/js/swiper-bundle.min.js')}}"></script>


    <!--javaScript-->
    <script src="{{ asset('resources/js/script.js')}}"></script>
</body>
</html>