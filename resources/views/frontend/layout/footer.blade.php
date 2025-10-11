<footer id="footer" class="footer" style="background:  #dfdfe1 ; color:  #004179; font-family: 'Poppins', sans-serif; padding: 60px 0 30px; ">
  <div class="container">
    <div class="row g-4">

      <!-- About Section -->
      <div class="col-md-8 col-lg-4 mb-4 mb-md-0">
        <a href="/" class="logo d-flex align-items-center">
      <!-- ✅ Correct image path for Laravel -->
      <img src="{{ asset('assets/img/logo.png') }}" alt="Logo">

      <div>
        <div class="foundation-title position-relative mt-2" style=" padding-left: 10px;">
          <div class="title-content position-relative" >
            <h1 class="mb-0 fw-bold"
                style="color:#b79b3d; font-size:1.8rem; line-height:1.5; font-family:'Anton', sans-serif;">
              Foundation of Libration
            </h1>
            <h4 class="mb-0"
                style="color:#0f7fc8; font-size:1.0rem; font-family:sans-serif;">
              Buddhist Imagery and Dalit Subjectivity
            </h4>
          </div>
        </div>
      </div>
    </a>
        <div class="widget">
          <h3 class="widget-heading text-uppercase my-3" style="color:  #004179; font-family:'Anton', sans-serif;">About</h3>
          <p style="font-size: 15px; line-height: 1.8; color:  #004179;">
            I'm Savindra Sawarkar — a passionate artist working in the creative field for over 40 years. 
            My artworks reflect the essence of culture, humanity, and deep spiritual connections.
          </p>
        </div>
      </div>

      <!-- Navigation Section -->
      <div class="col-md-2 col-lg-4 my-4 mb-md-0">
        <div class="widget m-4">
          <h3 class="widget-heading text-uppercase  mb-3 mx-5" style="color:  #004179; font-family:'Anton', sans-serif;">Links</h3>
          <ul class="list-unstyled mx-5" style="column-count: ; column-gap: 30px;">
            <li><a href="/about" class="footer-link" style="color:  #004179;">About</a></li>
            <li><a href="/contact" class="footer-link" style="color: #004179;">Contact</a></li>
            <li><a href="/article" class="footer-link" style="color: #004179;">Articles</a></li>
            <li><a href="/catelog" class="footer-link" style="color: #004179;">Catalogue</a></li>
            <li><a href="/" class="footer-link" style="color: #004179;">Photography</a></li>
          </ul>
        </div>
      </div>

      <!-- Connect Section -->
      <div class="col-md-2 col-lg-4 my-4 mb-md-0">
        <div class="widget m-4" >
          <h3 class="widget-heading text-uppercase mb-3 mx-4" style="color:  #004179; font-family:'Anton', sans-serif;">Connect</h3>
          <ul class="list-unstyled ms-4 my-4 gap-4">
            <li><a href="https://www.facebook.com/savi.sawarkar.73?mibextid=rS40aB7S9Ucbxw6v" class="social-link"><span class="bi bi-facebook" style="color:  #004179; padding-bottom: 15px;"></span></a></li>
            <li><a href="https://www.linkedin.com/in/savi-sawarkar/" class="social-link"><span class="bi bi-linkedin" style="color: #004179;"></span></a></li>
            <li><a href="https://wa.me/9968149430" target="_blank" class="social-link"><span class="bi bi-whatsapp" style="color: #004179;"></span></a></li>
            <li><a href="https://www.instagram.com/savindrasawarkar?utm_source=qr&igsh=Z2RweXFxcm10cXVi" class="social-link"><span class="bi bi-instagram" style="color: #004179;"></span></a></li>
          </ul>
        </div>
      </div>

    </div>

    <hr style="border-color: rgb( 0, 65, 121 ); margin: 20px 0;">

    <div class="text-center">
      <p class="mb-0" style="font-size: 16px;">
        © <span>2025</span> SaviSawarkar — All Rights Reserved
      </p>
      <p style="font-size: 15px; color: #004179; font-family:sans-serif;">Crafted with Peace and Mindfulness <i class="bi bi-peace"></i> </p>
    </div>
  </div>
</footer>

<style>
  .footer-link {
   
    text-decoration: none;
    display: block;
    padding: 3px 0;
    transition: 0.3s;
  }
  .footer-link:hover {
    color:    #b79b3d;
    padding-left: 4px;
  }

  .social-link span{
    color: #e8e4d9;
    font-size: 1.4rem;
    transition: all 0.3s ease;
  }
  .social-link:hover span{
    color: #b79b3d;;
    transform: scale(1.2);
  }

  .footer hr {
    border-color: rgba(255, 255, 255, 0.15);
  }
  /* Optional: Make logo look consistent */
  .logo img {
    height: 80px;
    width: auto;
    margin-right: 12px;
    object-fit: contain;
  }
  /* ---------- RESPONSIVE FOOTER ---------- */
@media (max-width: 992px) {
  #footer .row {
    text-align: center;
  }

  #footer .widget {
    margin-bottom: 30px;
  }

  #footer ul {
    justify-content: center !important;
  }

  #footer .list-unstyled {
    column-count: 1 !important;
    text-align: center;
  }

  #footer .social-link {
    font-size: 1.5rem;
  }

  #footer .social-link:hover {
    transform: scale(1.15);
  }
}

@media (max-width: 768px) {
  #footer {
    padding: 40px 0 20px !important;
  }

  
  #footer p {
    font-size: 14px !important;
    line-height: 1.6 !important;
  }

  #footer ul {
    padding: 0;
    margin: 0 auto;
  }

  #footer hr {
    margin: 30px 0;
  }
}

@media (max-width: 576px) {
  #footer {
    text-align: center;
  }
   #footer .widget ul.d-flex {
    display: flex;
    flex-direction: row;
    align-items: center;
    gap: 8px;
    margin-top: 40px;
  }

  #footer .social-link {
    font-size: 1.3rem !important;
  }

  #footer ul {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 5px;
  }

  #footer .social-link {
    font-size: 1.3rem;
    
  }

  #footer p {
    font-size: 13px !important;
  }
}
/* Responsive tweak */
  @media (max-width: 768px) {
    .foundation-title h1 {
      font-size: 1.5rem !important;
    }
    .foundation-title h4 {
      font-size: 1rem !important;
    }
  }
  @media (max-width: 480px) {
    .foundation-title h1 {
      font-size: 1.4rem !important;
    }
    .foundation-title h4 {
      font-size: 0.8rem !important;
    }
    .logo img {
      height: 60px;
      margin-right: 8px;
    }
  }

</style>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center" style="background:#b79b3d; color:#0b1736; margin-right: 15px;">
  <i class="bi bi-arrow-up-short"></i>
</a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
<script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>

<!-- Main JS File -->
<script src="{{asset('assets/js/main.js')}}"></script>
