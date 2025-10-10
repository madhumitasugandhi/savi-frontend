<!-- Add this in your <head> -->
<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">

<style>
  /* Blue accent line behind text */
  .foundation-title::before {
    content: "";
    position: absolute;
    left: 0;
    right: 0;
    top: 50%;
    height: 6px;
   
    transform: translateY(-50%);
    z-index: 0;
    
  }

  .foundation-title .title-content {
    position: relative;
    z-index: 1;
  }

  /* Optional: Make logo look consistent */
  .logo img {
    height: 80px;
    width: auto;
    margin-right: 12px;
    object-fit: contain;
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
</style>

<!-- HEADER -->
<header id="header" class="header d-flex align-items-center sticky-top">
  <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between"
       style="font-family: sans-serif; font-weight: 600;">

    <a href="/" class="logo d-flex align-items-center">
      <!-- ✅ Correct image path for Laravel -->
      <img src="{{ asset('assets/img/logo.jpg') }}" alt="Logo">

      <div>
        <div class="foundation-title position-relative mt-2">
          <div class="title-content position-relative">
            <h1 class="mb-0 fw-bold"
                style="color:#b79b3d; font-size:2rem; line-height:1.5; font-family:'Anton', sans-serif;">
              Foundation of Libration
            </h1>
            <h4 class="mb-0"
                style="color:#0f7fc8; font-size:1.1rem; font-family:sans-serif;">
              Buddhist Imagery and Dalit Subjectivity
            </h4>
          </div>
        </div>
      </div>
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="/" class="active">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/portfolio">Portfolio</a></li>
        <li><a href="/videos">Video</a></li>
        <li><a href="/article">Articles</a></li>
        <li><a href="/photography" onclick="return false;">Photography</a></li>
        <li><a href="/catelog">Catalogue</a></li>
        <li><a href="/contact">Contact</a></li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

  </div>
</header>
