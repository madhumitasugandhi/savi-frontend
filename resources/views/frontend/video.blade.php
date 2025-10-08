@extends('frontend.layout.main')
@section('main-container')

<section class="video-page-wrapper">
  <h2 class="video-page-title">Video Gallery</h2>

  <div class="video-grid">
    <div class="video-box">
      <div class="video-embed">
        <iframe src="https://www.youtube.com/embed/qnq31Nuqnv4?si=RQCWdjZWpF1XHo_T" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      </div>
      <div class="video-meta">
        <h3 class="video-name">The Power of Expression</h3>
        <p class="video-text">An exploration of artistic emotion through visual storytelling.</p>
      </div>
    </div>

    <div class="video-box">
      <div class="video-embed">
        <iframe src="https://player.vimeo.com/video/76979871" allowfullscreen></iframe>
      </div>
      <div class="video-meta">
        <h3 class="video-name">Visual Poetry</h3>
        <p class="video-text">This video highlights abstract concepts in poetic visual forms.</p>
      </div>
    </div>

    <div class="video-box">
      <div class="video-embed">
        <iframe src="https://www.youtube.com/embed/ysz5S6PUM-U" allowfullscreen></iframe>
      </div>
      <div class="video-meta">
        <h3 class="video-name">Shadows and Light</h3>
        <p class="video-text">A short concept film examining the role of light in visual art.</p>
      </div>
    </div>

    <!-- Add more static video-box blocks as needed -->
  </div>
</section>

@endsection
