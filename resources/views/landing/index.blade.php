<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BudayaConnect</title>
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
                <img src="{{ asset('build/images/logo.png') }}" height="48" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Explore</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('landing.categories') }}">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('landing.testimonials') }}">Testimonials</a>
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
    <section class="header mb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="jumbo-header mb-30">
                        Gabung Dengan BudayaConnect<br>
                        
                    </h1>
                    <p class="paragraph mb-30">
                       Dengan BudayaConnect kita dapat melestarikan budaya budaya indonesia. Budaya Connect juga dapat membantu merekomendasi 
                       budaya yang lagi trend dan mencarikan tempat teater yang lengkap.
                    </p>
                    <p class="mb-50"><a href="#" class="btn btn-primary">Explore Courses</a></p>
                    <div class="row stats text-center">
                        <div class="col-lg-4 item">
                            <h3 class="big-header">
                                23,491
                            </h3>
                            <p class="paragraph">
                                Course
                            </p>
                        </div>
                        <div class="col-lg-4 item">
                            <h3 class="big-header">
                                983
                            </h3>
                            <p class="paragraph">
                                Sertifikat
                            </p>
                        </div>
                        <div class="col-lg-4 item">
                            <h3 class="big-header">
                                182M+
                            </h3>
                            <p class="paragraph">
                                Happy People
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('build/images/banner 2.png')}}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <section class="best-items">
        <div class="container">
            <div class="row text-center mb-50">
                <div class="col-lg-12">
                    <img src="#" height="42" alt="" class="mb-16">
                    <h3 class="big-header">
                        Course
                    </h3>
                    <p class="paragraph">
                        Kursus Budaya lokal
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="item">
                        <a href="{{ route('landing.details') }}">
                            <img src="{{ asset('build/images/2.jpg') }}" alt="" class="img-fluid">
                        </a>
                        <div class="info">
                            <a href="{{ route('landing.details') }}">
                                <h3 class="small-header mb-2">
                                    Wayang
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="location d-flex flex-row ">
                                    <img src="#" height="20" alt="">
                                    <p class="small-paragraph mb-0">
                                        Wayang adalah kesenian tradisional yang telah mendunia dan diakui sebagai warisan 1 dunia
                                    </p>
                                </div>
                                @php
                                    $hasBooked = true;
                                @endphp
                                <div class="price">
                                    <p class="mb-0">
                                       {{ $hasBooked ? 'sold out' : '$28,109' }} <span class="extra-small-paragraph">
                                        {{ $hasBooked ? '' : '/mo' }} </span>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item">
                        <a href="{{ route('landing.musiks') }}">
                            <img src="{{ asset('build/images/kursus musik.jpg') }}" alt="" class="img-fluid">
                        </a>
                        <div class="info">
                            <a href="{{ route('landing.musiks') }}">
                                <h3 class="small-header mb-2">
                                    Musik
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="location d-flex flex-row ">
                                    <img src="#" height="20" alt="">
                                    <p class="small-paragraph mb-0">
                                        Musik tradisional merupakan warisan budaya yang masih trending dikalangan masyarakat
                                    </p>
                                </div>
                                <div class="price">
                                    <p class="mb-0">
                                        $28,109<span class="extra-small-paragraph">/mo</span>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item">
                        <a href="{{ route('landing.tari') }}">
                            <img src="{{ asset('build/images/kursus tari .jpg') }}" alt="" class="img-fluid">
                        </a>
                        <div class="info">
                            <a href="{{ route('landing.tari') }}">
                                <h3 class="small-header mb-2">
                                    Tari
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="location d-flex flex-row ">
                                    <img src="#" height="20" alt="">
                                    <p class="small-paragraph mb-0">
                                        Tari merupakan bagian budaya indonesia yang erat hubungannya dengan mistis
                                    </p>
                                </div>
                                <div class="price">
                                    <p class="mb-0">
                                        $28,109<span class="extra-small-paragraph">/mo</span>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item">
                        <a href="{{ route('landing.ludruk') }}">
                            <img src="{{ asset('build/images/kursus ludruk.jpg') }}" alt="" class="img-fluid">
                        </a>
                        <div class="info">
                            <a href="{{ route('landing.ludruk') }}">
                                <h3 class="small-header mb-2">
                                    Ludruk
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="location d-flex flex-row ">
                                    <img src="#" height="20" alt="">
                                    <p class="small-paragraph mb-0">
                                        kesenian berikut ini akrab hubungannya dengan comedi, menggunakan bahasa daerah
                                    </p>
                                </div>
                                <div class="price">
                                    <p class="mb-0">
                                        $28,109<span class="extra-small-paragraph">/mo</span>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item">
                        <a href="{{ route('landing.batik') }}">
                            <img src="{{ asset('build/images/kursus batik1.jpg') }}" alt="" class="img-fluid">
                        </a>
                        <div class="info">
                            <a href="{{ route('landing.batik') }}">
                                <h3 class="small-header mb-2">
                                    Batik
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="location d-flex flex-row ">
                                    <img src="#" height="20" alt="">
                                    <p class="small-paragraph mb-0">
                                        batik ini merupakan warisan budaya yang telah diakui oleh UNESCO
                                    </p>
                                </div>
                                <div class="price">
                                    <p class="mb-0">
                                        $28,109<span class="extra-small-paragraph">/mo</span>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item">
                        <a href="{{ route('landing.patungpahat') }}">
                            <img src="{{ asset('build/images/kursus pahat.jpg') }}" alt="" class="img-fluid">
                        </a>
                        <div class="info">
                            <a href="{{ route('landing.patungpahat') }}">
                                <h3 class="small-header mb-2">
                                    Pahat Patung
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="location d-flex flex-row ">
                                    <img src="#" height="20" alt="">
                                    <p class="small-paragraph mb-0">
                                       Pahat Patung adalah seni yang erat hubungannya dengan kepercayaan umat beragama
                                    </p>
                                </div>
                                <div class="price">
                                    <p class="mb-0">
                                        $28,109<span class="extra-small-paragraph">/mo</span>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item">
                        <a href="{{ route('landing.jajanan') }}">
                            <img src="{{ asset('build/images/1.png') }}" alt="" class="img-fluid">
                        </a>
                        <div class="info">
                            <a href="{{ route('landing.jajanan') }}">
                                <h3 class="small-header mb-2">
                                   Jajanan Khas
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="location d-flex flex-row ">
                                    <img src="#" height="20" alt="">
                                    <p class="small-paragraph mb-0">
                                       Jajanan Khas menjadi ciri khas saat kita sedang berwisata ke suatu daerah
                                    </p>
                                </div>
                                <div class="price">
                                    <p class="mb-0">
                                        $28,109<span class="extra-small-paragraph">/mo</span>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item">
                        <a href="{{ route('landing.makanan') }}">
                            <img src="{{ asset('build/images/kursus makan.jpg') }}" alt="" class="img-fluid">
                        </a>
                        <div class="info">
                            <a href="{{ route('landing.makanan') }}">
                                <h3 class="small-header mb-2">
                                   Makanan Khas
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="location d-flex flex-row ">
                                    <img src="#" height="20" alt="">
                                    <p class="small-paragraph mb-0">
                                       Makanan Khas menjadi ciri saat kita sedang berwisata kedaerah daerah
                                    </p>
                                </div>
                                <div class="price">
                                    <p class="mb-0">
                                        $28,109<span class="extra-small-paragraph">/mo</span>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
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