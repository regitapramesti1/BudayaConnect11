<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Categories Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link rel="stylesheet" href="{{ asset('build/assets/web.css') }}">
</head>
<body>
    
    <nav class="mb-70 navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src={{  asset('build/images/logo.png') }} height="30" alt="">
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
                        <a class="nav-link" href="#">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href={{ Route('landing.testimonials')}}>Testimonials</a>
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
     <!--budaya dekat saya section-->
     <section class="budayadekat-saya" id="#trending">
        <div class="center-text">
            <h2>Budaya Dekat<span> Saya</span></h2>
            <h5>Sidoarjo, Jawa Timur</h5>
        </div>

        <div class="gallery">


            <div class="content">
                <img src="{{ asset('build/images/lontong kupang.webp')}}">
                <h3>kupang</h3>
                <p>Lontong kupang adalah makanan khas dengan rasa menarik</p>
                <h6>15.000</h6>
                <ul> 
                    <li><i class='fa fa-star checked'></i></li>
                    <li><i class='fa fa-star checked'></i></li>
                    <li><i class='fa fa-star checked'></i></li>
                    <li><i class='fa fa-star checked'></i></li>
                    <li><i class='fa fa-star'></i></li>
                 </ul>
                 <button class="tuku-1">View More</button>
            </div>

            <div class="content">
                <img src="{{ asset('build/images/candi pari.jpeg')}}">
                <h3>Candi Pari</h3>
                <p>Candi Pari adalah candi sejarah Sidoarjo</p>
                <h6>Htm 5k</h6>
                <ul> 
                    <li><i class='fa fa-star checked'></i></li>
                    <li><i class='fa fa-star checked'></i></li>
                    <li><i class='fa fa-star checked'></i></li>
                    <li><i class='fa fa-star '></i></li>
                    <li><i class='fa fa-star'></i></li>
                 </ul>
                 <button class="tuku-2">View More</button>
            </div>


            <div class="content">
                <img src="{{ asset('build/images/batik jetis 1.jpeg')}}">
                <h3>Batik Tulis</h3>
                <p> Batik Sidoarjo memiliki keistimewaan pada motif dan warnanya yang kaya dan beragam. </p>
                <ul> 
                    <li><i class='fa fa-star checked'></i></li>
                    <li><i class='fa fa-star checked'></i></li>
                    <li><i class='fa fa-star checked'></i></li>
                    <li><i class='fa fa-star checked'></i></li>
                    <li><i class='fa fa-star checked'></i></li>
                 </ul>
                 <button class="tuku-3">View More</button>
            </div>

            <div class="content">
                <img src="{{ asset('build/images/wadercrispy.jpeg')}}">
                <h3>Kue Lumpur</h3>
                <p>Wader crispy adalah makanan ringan yang terbuat dari ikan wader yang digoreng hingga renyah.</p>
                <ul> 
                    <li><i class='fa fa-star checked'></i></li>
                    <li><i class='fa fa-star checked'></i></li>
                    <li><i class='fa fa-star checked'></i></li>
                    <li><i class='fa fa-star checked'></i></li>
                    <li><i class='fa fa-star checked'></i></li>
                 </ul>
                 <button class="tuku-4">View More</button>
            </div>




        </div>
        
       


    </section>

     <!--budaya teratas section-->
     <section class="budaya-teratas" id="atas">
        <div class="justify-text">
            <h2>Budaya <span> Teratas</span></h2>
        </div>

        <div class="galeri">


            <div class="budaya">
                <img src="{{ asset('build/images/tari bali.jpg')}}">
                <h3>Legong Bali</h3>
                <p>tarian tradisional Bali yang dibawakan oleh dua atau tiga penari wanita</p>
                <ul> 
                    <li><i class='fa fa-star checked'></i></li>
                    <li><i class='fa fa-star checked'></i></li>
                    <li><i class='fa fa-star checked'></i></li>
                    <li><i class='fa fa-star checked'></i></li>
                    <li><i class='fa fa-star checked'></i></li>
                 </ul>
                 <button class="kursus-1">View More</button>
            </div>

            <div class="budaya">
                <img src="{{ asset('build/images/tari reog.jpg')}}">
                <h3>Reog</h3>
                <p>Reog merupakan salah satu seni budaya yang berasal dari Jawa Timur bagian barat-laut.</p>
                <ul> 
                    <li><i class='fa fa-star checked'></i></li>
                    <li><i class='fa fa-star checked'></i></li>
                    <li><i class='fa fa-star checked'></i></li>
                    <li><i class='fa fa-star checked'></i></li>
                    <li><i class='fa fa-star checked'></i></li>
                 </ul>
                 <button class="kursus-2">View More</button>
            </div>


            <div class="budaya">
                <img src="{{ asset('build/images/wayang 2.jpg')}}">
                <h3>Wayang</h3>
                <p>Wayang adalah seni pertunjukkan tradisional asli Indonesia yang berasal dan berkembang pesat di pulau Jawa dan Bali.</p>
                <ul> 
                    <li><i class='fa fa-star checked'></i></li>
                    <li><i class='fa fa-star checked'></i></li>
                    <li><i class='fa fa-star checked'></i></li>
                    <li><i class='fa fa-star checked'></i></li>
                    <li><i class='fa fa-star checked'></i></li>
                 </ul>
                 <button class="kursus-3">View More</button>
            </div>

            <div class="budaya">
                <img src="{{ asset('build/images/megamendunug.jpeg')}}">
                <h3>Batik</h3>
                <p>Kain yang pembuatannya, menuliskan atau menerakan lilin, yang kemudian pengolahannya melalui proses tertentu.</p>
                <ul> 
                    <li><i class='fa fa-star checked'></i></li>
                    <li><i class='fa fa-star checked'></i></li>
                    <li><i class='fa fa-star checked'></i></li>
                    <li><i class='fa fa-star checked'></i></li>
                    <li><i class='fa fa-star checked'></i></li>
                 </ul>
                 <button class="kursus-4">View More</button>
            </div>




        </div>
        
    

        <!--teater rekomendasi section-->
        <section class="teater-rekomendasi" id="teater">
            <div class="l-text">
                <h2>Teater <span> Rekomendasi</span></h2>
            </div>
    
            <div class="pict">
    
    
                <div class="teater">
                    <img src="{{ asset('build/images/teater koma.jpg')}}">
                    <h3>Koma</h3>
                    <p>sebuah kelompok seni teater yang berdiri pada 1 Maret 1977 di Jakarta.</p>
                    <h6>45.000</h6>
                    <ul> 
                        <li><i class='fa fa-star checked'></i></li>
                        <li><i class='fa fa-star checked'></i></li>
                        <li><i class='fa fa-star checked'></i></li>
                        <li><i class='fa fa-star checked'></i></li>
                        <li><i class='fa fa-star'></i></li>
                     </ul>
                     <button class="teater-1">View More</button>
                </div>
    
                <div class="teater">
                    <img src="{{ asset('build/images/teater lenong.jpg')}}">
                    <h3>Lenong</h3>
                    <p>Teater tradisional atau sandiwara rakyat betawi yang di bawakan dalam dialek Betawi.</p>
                    <h6>50.000</h6>
                    <ul> 
                        <li><i class='fa fa-star checked'></i></li>
                        <li><i class='fa fa-star checked'></i></li>
                        <li><i class='fa fa-star checked'></i></li>
                        <li><i class='fa fa-star checked'></i></li>
                        <li><i class='fa fa-star'></i></li>
                     </ul>
                     <button class="teater-2">View More</button>
                </div>
    
    
                <div class="teater">
                    <img src="{{ asset('build/images/batik tulis.jpg')}}">
                    <h3>Batik Tulis</h3>
                    <p>Produksi batik dengan teknis pembuatan motifnya ditulis secara manual oleh pembatik.</p>
                    <h6>35.000</h6>
                    <ul> 
                        <li><i class='fa fa-star checked'></i></li>
                        <li><i class='fa fa-star checked'></i></li>
                        <li><i class='fa fa-star checked'></i></li>
                        <li><i class='fa fa-star checked'></i></li>
                        <li><i class='fa fa-star'></i></li>
                     </ul>
                     <button class="teater-3">View More</button>
                </div>
    
    
            </div>
            
    
        </section>

        
       
</body>
</html>