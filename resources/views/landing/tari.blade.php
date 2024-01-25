<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Details Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('build/assets/style.css') }}">
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
    <section class="house-details pb-5">
        <div class="container">
            <div class="row align-items-center mb-30">
                <div class="col-lg-6">
                    <h1 class="jumbo-header">
                        Tari
                    </h1>
                    <p class="paragraph">
                        Tari adalah bentuk seni pertunjukan yang melibatkan gerakan tubuh yang diatur secara ritmis, ekspresi, dan koreografi, seringkali dipertunjukkan sebagai ungkapan budaya atau ekspresi seni.
                    </p>
                </div>
                <div class="col-lg-6 header">

                    <h3 class="small-header">
                        (28,309)
                    </h3>
                    <div class="rating">
                        <img src={{  asset('build/images/ic_star.svg')}} height="28" alt="">
                        <img src={{  asset('build/images/ic_star.svg')}} height="28" alt="">
                        <img src={{  asset('build/images/ic_star.svg')}} height="28" alt="">
                        <img src={{  asset('build/images/ic_star.svg')}} height="28" alt="">
                        <img src={{  asset('images/ic_star_inactive.svg')}} height="28" alt="">
                    </div>
                </div>
            </div>
            <div class="row gallery">
                <div class="col-lg-5 mb-30">
                    <img src="{{ asset('build/images/tari 1.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-5 mb-30">
                    <img src="{{ asset('build/images/tari 2.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-5 mb-30">
                    <img src="{{ asset('build/images/tari 3.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-5 mb-30">
                    <img src="{{ asset('build/images/tari 4.jpg') }}" class="img-fluid" alt="">
                </div>
            </div>
            <div class="row house-informations">
                <div class="col-lg-7">
                    <h3 class="small-header mb-10">
                        Course Details
                    </h3>
                    <p class="paragraph mb-30">
                        Kursus tari merupakan suatu pengalaman mendalam yang memberikan peserta pelatihan kesempatan untuk memahami dan mengasah keterampilan tari mereka. Dalam kursus ini, peserta akan diajak untuk mengeksplorasi berbagai jenis gerakan tari, teknik koreografi, dan ekspresi artistik.
                         Para peserta akan belajar tentang sejarah tari, menggali berbagai gaya tari tradisional dan kontemporer, serta mendalami unsur-unsur fundamental seperti ritme, postur tubuh, dan interaksi antarpenari. Instruktur yang berkualifikasi akan memberikan panduan yang cermat dan konstruktif, 
                         memfasilitasi proses belajar dengan memberikan umpan balik yang berguna untuk perkembangan setiap individu. Selain itu, kursus tari juga seringkali mencakup sesi latihan fisik untuk meningkatkan kekuatan, kelenturan, dan daya tahan peserta, yang semuanya menjadi bagian integral dari pembentukan seorang penari yang komprehensif. 
                        Melalui kursus ini, peserta dapat mengembangkan kreativitas mereka, meningkatkan keterampilan teknis, dan memperdalam pemahaman mereka tentang seni tari secara menyeluruh.
                    </p>
                    <h3 class="small-header mb-10">
                        Fasilitas
                    </h3>
                    <div class="row features">
                        <div class="col-lg-10">
                            <div class="row">
                                <div class="col-lg-6">
                                    <img src={{  asset('images/ic_wifi.svg')}}" class="icon" alt="">
                                    <div class="info">
                                        <h3 class="small-header mb-0">
                                            Studio Tari
                                        </h3>
                                        <p class="paragraph">
                                            Tersedia
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <img src={{  asset('images/ic_card.svg')}}" class="icon" alt="">
                                    <div class="info">
                                        <h3 class="small-header mb-0">
                                            Mulai Course
                                        </h3>
                                        <p class="paragraph">
                                            16.00-19.00
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <img src={{  asset('images/ic_bell.svg')}}" class="icon" alt="">
                                    <div class="info">
                                        <h3 class="small-header mb-0">
                                            Mentor 
                                        </h3>
                                        <p class="paragraph">
                                            Tersedia Online dan Offline
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <img src={{  asset('images/ic_park.svg')}}" class="icon" alt="">
                                    <div class="info">
                                        <h3 class="small-header mb-0">
                                            Video
                                        </h3>
                                        <p class="paragraph">
                                            Tersedia Online dan Offline
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-4">
                    <div class="booking">
                        <h3 class="small-header mb-16">
                            Start Renting
                        </h3>
                        <form>
                            <div class="mb-3">
                                <input placeholder="Choose Date" type="date" class="form-control"
                                    id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-4">
                                <input placeholder="How many month?" type="number" class="form-control"
                                    id="exampleInputPassword1">
                            </div>

                            <h3 class="small-header mb-16">
                                Payment
                            </h3>
                            <div class="item d-flex justify-content-between">
                                <p class="title paragraph2">
                                    Harga Perbulan
                                </p>
                                <p class="value medium-header">
                                    Rp. 350.000
                                </p>
                            </div>
                            <div class="item d-flex justify-content-between">
                                <p class="title paragraph2">
                                    Diskon (0%)
                                </p>
                                <p class="value medium-header">
                                    Rp. 0
                                </p>
                            </div>
                            <div class="item d-flex justify-content-between">
                                <p class="title paragraph2">
                                    Uang Muka
                                </p>
                                <p class="value medium-header">
                                    Rp. 300.000
                                </p>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 mt-3">Continue to Book</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>