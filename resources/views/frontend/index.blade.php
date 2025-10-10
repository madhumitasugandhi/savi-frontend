<!-- Add this in your <head> -->
<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet"> 

@extends('frontend.layout.main')
@section('main-container')

<style>
    body {
        color: #222;
        font-family: 'Poppins', sans-serif;
        background-color: #fff
    }

    /* Smooth typography */
    h1,
    h2,
    h3 {
        font-family: sans-serif;
        letter-spacing: 0.5px;
    }
    p{
        font-family: 'Poppins', sans-serif;
        font-size: 16px;
    }

    /* Hero Section */
    #about {
        position: relative;
        background: linear-gradient(135deg, #004179 0%, #276fbf 100%);
        color: #fff;
        overflow: hidden;
    }

    /* Background image only for article section (#about-2) */
    #about-2 {
        position: relative;
        
        background-size: contain;
        /* or 'cover' if you want full stretch */
        opacity: 1;
        /* keep section visible */
        z-index: 1;
        isolation: isolate;
        /* ensures pseudo-element blends correctly */
    }

    /* Overlay to control opacity */
    #about-2::before {
        content: "";
        position: absolute;
        inset: 0;
        background: url("{{ asset('assets/img/logo.jpg') }}") center center no-repeat;
        background-size: contain;
        /* or 'cover' */
        opacity: 0.1;
        /* makes image faint */
        z-index: -1;
    }


    #about .container {
        position: relative;
        z-index: 1;
    }



    .btn-get-started {
        background-color: #d4af37;
        color: #fff;
        border-radius: 30px;
        padding: 10px 25px;
        font-weight: 500;
        transition: 0.3s;
    }

    .btn-get-started:hover {
        background-color: #b6922e;
        color: #fff;
    }

    /* Swiper Style */
    @media (min-width: 992px) {
        .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 75vh;
            overflow: hidden;
        }

        .swiper-slide img {
            max-width: 80%;
            max-height: 80%;
            object-fit: cover;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            transition: transform 0.4s ease;
        }

        .swiper-slide img:hover {
            transform: scale(1.03);
        }
    }

    /* About Section */
    #about-2 {

        padding: 80px 0;
    }

    .content-subtitle {
        font-size: 80px;
        color: #768692;
        font-weight: 600;
        text-transform: uppercase;
    }

    .content-title {
        font-family: 'Anton', sans-serif;
        font-size: 48px;
        margin-top: 10px;
        color: #002d5b;
    }

    .text-content p {
        font-size: 50px;
        line-height: 1.8;
        color:  #101820;
    }

    .img-wrap img {
        border-radius: 20px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
        transition: transform 0.4s ease;
        justify-content: flex-end;
    }
    .img-wrap2 img {
        border-radius: 20px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
        transition: transform 0.4s ease;

        
    }

    .img-wrap img:hover {
        transform: scale(1.05);
    }
    .img-wrap2 img:hover {
        transform: scale(1.05);
    }
    .artical-img1{
        display: flex;
        justify-content: flex-start;
        
    }
    .artical-img2{
        display: flex;
        justify-content: flex-end;
       
    }

    /* Carousel */
    .main-carousel {
        background-color: #002d5b;
        padding: 60px 0;
        margin-bottom: 60px;
    }

    .carousel {
        display: flex;
        justify-content: center;
        gap: 20px;
        overflow-x: auto;
        scroll-behavior: smooth;
        padding: 20px;
        height: 250px;
        
        
    }

    .carousel article img {
        width: 280px;
        height: 230px;
        object-fit: cover;
        border-radius: 15px;
        transition: transform 0.4s ease;
    }

    .carousel article img:hover {
        transform: scale(1.07);
    }
</style>

<!-- Hero Section -->
<section id="about" class="about pb-4 position-relative">
    <!-- Watermark -->
   <div class="watermark-text position-absolute top-50 start-0 translate-middle-y text-start" style="z-index: 1; padding-left: 20px;">
        <h1 style="color: rgba(230, 228, 222, 0.1); font-size: 4.6rem; line-height: 1.2; font-family:'Anton', sans-serif; pointer-events: none;">
            Foundation of Libration
        </h1>
        <h4 style="color: rgba(230, 228, 222, 0.1); font-size: 2.5rem; font-family:sans-serif; pointer-events: none;">
            Buddhist Imagery and Dalit Subjectivity
        </h4>
    </div>

    <div class="container position-relative">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2" data-aos="fade-up" data-aos-delay="400">
                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
                        {
                            "loop": true,
                            "speed": 600,
                            "autoplay": {"delay": 5000},
                            "slidesPerView": "auto",
                            "pagination": {"el": ".swiper-pagination", "type": "bullets", "clickable": true},
                            "breakpoints": {"320": {"slidesPerView": 1}, "1200": {"slidesPerView": 1}}
                        }
                    </script>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="{{asset('assets/img/home/Untitled-235.jpg')}}" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('assets/img/home/016.jpg')}}" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('assets/img/home/Untitled-244.jpg')}}" alt=""></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="col-lg-4 order-lg-1">
                <h1 class="section-subtitle" data-aos="fade-up" style="color:#b79b3d; font-family:'Anton', sans-serif;">Savi Sawarkar</h1>
                <h3 class="mb-4" style="font-style: italic; color: #3c9df1;" data-aos="fade-up">Dalit Subjectivity Artist</h3>
                <p data-aos="fade-up" style="color: #c1c3c5">
                    Assistant Professor in Delhi with a deep engagement in the fine arts — exploring the intersections
                    of caste, gender, and visual narratives through <i>Murals, Oil Painting, and Mixed Media</i>.
                </p>
                <p class="mt-5" data-aos="fade-up">
                    <a href="/about" class="btn btn-get-started">Know More</a>
                </p>
            </div>
        </div>
    </div>
</section>


<!-- Artist Statement -->
<section id="about-2" class="about-2">
    <div class="container px-4">
        <div class="content px-4">
            <div class="row align-items-center mb-5">
                <div class="artical-img1 col-lg-4 mb-4 mb-lg-0" data-aos="fade-right">
                    <div class="img-wrap"
                        style="border-left: solid 4px #002d5b; padding: 20px;">
                        <img src="{{asset('assets/img/home/001.jpg')}}" alt="Artist Image" class="img-fluid main-img">
                    </div>
                </div>
                <div class="col-lg-8 " data-aos="fade-left">
                    <div class="text-content px-3">
                        <span class="content-subtitle" style="color: #768692; font-size: 20px;">Artist Statement</span>
                        <h2 class="content-title">Savindra Sawarkar (b.1961, Nagpur)</h2>
                        <p class="lead">
                            My art practice engages deeply with the brutality and injustice of caste and gender
                            hierarchies. It is an exploration of the body, identity, and resistance.
                        </p>
                        <p class="lead" >
                            Born in a Dalit family in Nagpur — a city marked by the historic Deeksha Bhoomi — my
                            practice carries the legacy of social transformation envisioned by Dr. B.R. Ambedkar. Each
                            canvas is a reflection of both memory and protest.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-8 order-2 order-lg-1" data-aos="fade-right">
                    <div class="text-content px-3">
                        <p class="lead">
                            My journey through Baroda and Mexico shaped a visual language grounded in empathy and
                            dissent — where the lives of the marginalized become symbols of endurance and beauty.
                        </p>
                        <p class="lead" >
                            I continue to exhibit beyond the commercial sphere, preferring academic and activist spaces
                            — from universities to urban streets — where art becomes a medium of dialogue, not
                            decoration.
                        </p>
                    </div>
                </div>
                <div class="artical-img2 col-lg-4 order-1 order-lg-2 mb-4 mb-lg-0" data-aos="fade-left">
                    <div class="img-wrap2" style="border-right: solid 4px #002d5b; padding: 20px;">
                        <img src="{{asset('assets/img/home/007A.jpg')}}" alt="Art Image" class="img-fluid main-img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Art Carousel -->
<div class="main-carousel">
    <div class="carousel">
        <article><img src="{{asset('assets/img/home/32jpg.jpg')}}" alt=""></article>
        <article><img src="{{asset('assets/img/home/007.jpg')}}" alt=""></article>
        <article><img src="{{asset('assets/img/home/007A.jpg')}}" alt=""></article>
        <article><img src="{{asset('assets/img/home/010.jpg')}}" alt=""></article>
        <article><img src="{{asset('assets/img/home/014.jpg')}}" alt=""></article>
        <article><img src="{{asset('assets/img/home/001.jpg')}}" alt=""></article>
    </div>
</div>

@endsection