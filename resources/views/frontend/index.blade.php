@extends('frontend.layout.main')
@section('main-container')
<style>
    body {
        font-family: sans-serif;
    }

    @media (min-width: 992px) {
        .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
            overflow: hidden;
        }

        .swiper-slide img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            border: 1px solid black;
            box-sizing: border-box;
            display: block;
        }
    }
</style>

<!-- About Section -->
    <section id="about" class="about  pb-4" style="background-image: url('{{ asset('assets/img/home/hero-bg3.png') }}'); background-size: cover; background-position: center;">

        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2" data-aos="fade-up" data-aos-delay="400">
                    <div class="swiper init-swiper">
                        <script type="application/json" class="swiper-config">
                            {
                    "loop": true,
                    "speed": 600,
                    "autoplay": {
                        "delay": 5000
                    },
                    "slidesPerView": "auto",
                    "pagination": {
                        "el": ".swiper-pagination",
                        "type": "bullets",
                        "clickable": true
                    },
                    "breakpoints": {
                        "320": {
                        "slidesPerView": 1,
                        "spaceBetween": 40
                        },
                        "1200": {
                        "slidesPerView": 1,
                        "spaceBetween": 1
                        }
                    }
                    }
                        </script>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{asset('assets/img/home/Untitled-235.jpg')}}" alt="Image" class="img-fluid">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/img/home/016.jpg')}}" alt="Image" class="img-fluid">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/img/home/Untitled-244.jpg')}}" alt="Image" class="img-fluid">
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="col-lg-4 order-lg-1">
                    <span class="section-subtitle" data-aos="fade-up" style="font-family: sans-serif;">Savi Sawarkar</span>
                    <h1 class="mb-4" style="font-family: sans-serif; font-weight: bold;" data-aos="fade-up">
                        Delit subjectivity Artist
                    </h1>
                    <p data-aos="fade-up">
                        Assistant Professor in Delhi with a demonstrated history of working in the fine art industry.
                        Skilled in Murals, Texture Painting, Oil Painting, Chinese Painting, and Fine Art.
                    </p>
                    <p class="mt-5" data-aos="fade-up">
                        <a href="/about" class="btn btn-get-started">Know More</a>
                    </p>
                </div>
            </div>
        </div>
    </section><!-- /About Section -->

<!-- About 2 Section -->
<section id="about-2" class="about-2 section-color light-background">
    <div class="container-fluid px-4">
        <div class="content px-4">

            <!-- First Row -->
            <div class="row align-items-center">
                <!-- Image Left -->
                <div class="col-lg-4 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                    <div class="img-wrap text-center text-lg-left">
                        <img src="{{asset('assets/img/home/001.jpg')}}" alt="circle image" class="img-fluid main-img">
                    </div>
                </div>

                <!-- Text Right -->
                <div class="col-lg-8" data-aos="fade-up">
                    <div class="text-content px-3">
                        <span class="content-subtitle">Artist Statement</span>
                        <h2 class="content-title text-start" style="font-weight: bold;">
                            Savindra Sawarkar (b: 1961, Nagpur) : Artist’s statement
                        </h2>
                        <p class="lead">
                            I am New Delhi based artist and educator. My art practice has focused significantly on
                            the brutality and injustice of caste- and gender-based violence and subordination for the
                            last three decades. My imagery is based on my personal experiences of the ferocious
                            casteism, racialism and exploitation of women.
                        </p>
                        <p class="mb-5" style="font-size: 15px;">
                            I was born in a Dalit (formerly “Untouchable” in the Hindu caste system) family in
                            Nagpur, Maharashtra, the location of the Deeksha Bhoomi, on the spot where Dr.
                            Bhimrao Ambedkar, the Dalit social activist and principal author of the Indian
                            Constitution, led the great Diksha (Conversion), that was the beginning of the modern
                            Buddhist movement in India, in 1956. My grandparents were among the converts. The
                            Deeksha Bhoomi is deeply significant to my story and art.
                        </p>
                        <p class="mb-5" style="font-size: 15px;">
                            The State of Maharashtra experienced a dramatic process of urbanization and a rise of
                            Dalit politics amidst the various social movements in the 20th century. The experiences
                            that shaped my aesthetic sensibilities arose in part from the ideas and activities of
                            protest and engaging with religious sanctions based on confronting the Brahmanical
                            binary of ‘purity’ and ‘impurity’.  Thus, my art developed into a pedagogy of the down-
                            trodden, which is developed through my public exhibits such as ‘Voice for Voiceless’ of
                            1996, 2008 and 2010,  and ‘Eyes Recast’ of 2008.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Second Row -->
            <div class="row align-items-center">
                <!-- Text Left -->
                <div class="col-lg-8 order-2 order-lg-1" data-aos="fade-up">
                    <div class="text-content px-3">
                        <p class="mb-5" style="font-size: 15px;">
                            In the mid-1980s I joined the vibrant and experimental art school and creative milieu at
                            the Department of Fine Arts, Baroda.  Later, as a recipient of a Mexican Government
                            Scholarship, I apprenticed in mural art with Armando Lopez Carmona and Victor
                            Caballero Ortiz at the Universidad Nacional Autónoma de México. This academic
                            exchange and training inspired me with strength to draw the ordinary lives of common
                            people, those who dwell across multiple spaces of exclusion which can be
                            characterized as untouchables, devdasis ( women married to a god, who is then forced
                            to become the mistress of the whole village), Jogta, eunuchs, desuetude, destitute,
                            lunatics, homeless labourers and slaves. These are women and men, situated among
                            the ‘varied marginalities’ of our social world, displaying the societal vulnerability of the
                            human condition in modern of India.
                        </p>
                        <p class="mb-5" style="font-size: 15px;">
                            Beyond the glare of the white-cubes of commercial art galleries, I have exhibited my
                            work in the activist venues of academic conferences, theatrical sites, the World Social
                            Forum, Triennale, Biennale and urban street’s.  While my work has failed to attract
                            wealthy art collections, it has flourished in the more critical venues of social activism
                            and scholarship appearing in academic journals, critical newspaper reports, on
                            university walls and book covers which largely addressed the issues of caste, race,
                            gender and the human plight of India’s urban environment.
                        </p>
                    </div>
                </div>

                <!-- Image Right -->
                <div class="col-lg-4 order-1 order-lg-2 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                    <div class="img-wrap text-center text-lg-left">
                        <img src="{{asset('assets/img/home/007A.jpg')}}" alt="circle image" class="img-fluid second-img">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- /About 2 Section -->
<div class="main-carousel">
<div class="carousel" mask>
	<article>
		<img src="{{asset('assets/img/home/32jpg.jpg')}}" alt="">
	</article>

	<article>
		<img src="{{asset('assets/img/home/007.jpg')}}" alt="">
	</article>

	<article>
		<img src="{{asset('assets/img/home/007A.jpg')}}" alt="">
	</article>

	<article>
		<img src="{{asset('assets/img/home/010.jpg')}}" alt="">
	</article>

	<article>
		<img src="{{asset('assets/img/home/014.jpg')}}" alt="">
	</article>

	<article>
		<img src="{{asset('assets/img/home/001.jpg')}}" alt="">
	</article>

</div>
</div>

@endsection