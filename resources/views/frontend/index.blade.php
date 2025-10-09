@extends('frontend.layout.main')
@section('main-container')

<style>
    body {
       
  background: #f4f4f2; /* off-white base like raw canvas */
  background-image: 
    radial-gradient(circle at 10% 10%, rgba(255,255,255,0.9) 0%, transparent 60%),
    radial-gradient(circle at 90% 90%, rgba(255,255,255,0.9) 0%, transparent 60%),
    repeating-linear-gradient(45deg, rgba(200,200,200,0.04) 0, rgba(200,200,200,0.04) 2px, transparent 2px, transparent 4px),
    repeating-linear-gradient(-45deg, rgba(200,200,200,0.04) 0, rgba(200,200,200,0.04) 2px, transparent 2px, transparent 4px);
  background-blend-mode: multiply;
  color: #222;
  font-family: 'Poppins', sans-serif;


    }

    /* Smooth typography */
    h1, h2, h3 {
        font-family: "Playfair Display", serif;
        letter-spacing: 0.5px;
    }

    /* Hero Section */
   #about {
  position: relative;
  background: linear-gradient(135deg, #004179 0%, #276fbf 100%);
  color: #fff;
  overflow: hidden;
}

/* Wavey Canvas Texture Layer 1 */
#about::before {
  content: "";
  position: absolute;
  inset: 0;
  background: 
    radial-gradient(circle at 20% 40%, rgba(255,255,255,0.12) 0%, transparent 70%),
    radial-gradient(circle at 80% 60%, rgba(255,255,255,0.10) 0%, transparent 70%),
    radial-gradient(circle at 50% 80%, rgba(255,255,255,0.09) 0%, transparent 70%);
  background-size: 140% 140%;
  mix-blend-mode: overlay;
  animation: waveMove1 25s ease-in-out infinite alternate;
  opacity: 0.75; /* increased visibility */
  z-index: 0;
}

/* Layer 2 (depth + painterly effect) */
#about::after {
  content: "";
  position: absolute;
  inset: 0;
  background:
    radial-gradient(circle at 30% 20%, rgba(255,255,255,0.08) 0%, transparent 80%),
    radial-gradient(circle at 70% 80%, rgba(255,255,255,0.07) 0%, transparent 80%),
    radial-gradient(circle at 50% 50%, rgba(255,255,255,0.09) 0%, transparent 80%);
  background-size: 180% 180%;
  mix-blend-mode: soft-light;
  animation: waveMove2 35s ease-in-out infinite alternate;
  opacity: 0.7; /* more visible waves */
  z-index: 0;
}

/* Smooth organic motion */
@keyframes waveMove1 {
  0% { background-position: 0% 50%, 50% 100%, 100% 0%; }
  100% { background-position: 100% 0%, 0% 50%, 50% 100%; }
}

@keyframes waveMove2 {
  0% { background-position: 50% 100%, 100% 50%, 0% 0%; }
  100% { background-position: 0% 0%, 50% 50%, 100% 100%; }
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
            box-shadow: 0 4px 15px rgba(0,0,0,0.3);
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
        font-size: 18px;
        color: #d4af37;
        font-weight: 600;
        text-transform: uppercase;
    }

    .content-title {
        font-size: 28px;
        margin-top: 10px;
        color: #002d5b;
    }

    .text-content p {
        line-height: 1.8;
        color: #444;
    }

    .img-wrap img {
        border-radius: 20px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
        transition: transform 0.4s ease;
    }

    .img-wrap img:hover {
        transform: scale(1.05);
    }

    /* Carousel */
    .main-carousel {
        background-color: #002d5b;
        padding: 60px 0;
        margin-bottom: 60px ;
    }

    .carousel {
        display: flex;
        justify-content: center;
        gap: 20px;
        overflow-x: auto;
        scroll-behavior: smooth;
        padding: 20px;
        height: 230px;
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
<section id="about" class="about pb-4">
    <div class="container">
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
                <h1 class="section-subtitle" data-aos="fade-up" style="color: #ffd700;">Savi Sawarkar</h1>
                <h3 class="mb-4" style="font-style: italic; color: #3c9df1;" data-aos="fade-up">Dalit Subjectivity Artist</h3>
                <p data-aos="fade-up" style="color: #c1c3c5">
                    Assistant Professor in Delhi with a deep engagement in the fine arts — exploring the intersections of caste, gender, and visual narratives through <i>Murals, Oil Painting, and Mixed Media</i>.
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
    <div class="container-fluid px-4">
        <div class="content px-4">
            <div class="row align-items-center mb-5">
                <div class="col-lg-4 mb-4 mb-lg-0" data-aos="fade-right">
                    <div class="img-wrap">
                        <img src="{{asset('assets/img/home/001.jpg')}}" alt="Artist Image" class="img-fluid main-img">
                    </div>
                </div>
                <div class="col-lg-8" data-aos="fade-left">
                    <div class="text-content px-3">
                        <span class="content-subtitle">Artist Statement</span>
                        <h2 class="content-title">Savindra Sawarkar (b.1961, Nagpur)</h2>
                        <p class="lead">
                            My art practice engages deeply with the brutality and injustice of caste and gender hierarchies. It is an exploration of the body, identity, and resistance.
                        </p>
                        <p style="font-size: 15px;">
                            Born in a Dalit family in Nagpur — a city marked by the historic Deeksha Bhoomi — my practice carries the legacy of social transformation envisioned by Dr. B.R. Ambedkar. Each canvas is a reflection of both memory and protest.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-8 order-2 order-lg-1" data-aos="fade-right">
                    <div class="text-content px-3">
                        <p style="font-size: 15px;">
                            My journey through Baroda and Mexico shaped a visual language grounded in empathy and dissent — where the lives of the marginalized become symbols of endurance and beauty.
                        </p>
                        <p style="font-size: 15px;">
                            I continue to exhibit beyond the commercial sphere, preferring academic and activist spaces — from universities to urban streets — where art becomes a medium of dialogue, not decoration.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 order-1 order-lg-2 mb-4 mb-lg-0" data-aos="fade-left">
                    <div class="img-wrap">
                        <img src="{{asset('assets/img/home/007A.jpg')}}" alt="Art Image" class="img-fluid second-img">
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

