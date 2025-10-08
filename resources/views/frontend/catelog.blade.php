@extends('frontend.layout.main')

@section('main-container')

<div class="artist-cover">
    <div class="artist-cover__content">
        <h1 class="artist-cover__title">Catalogue</h1>
        <p class="artist-cover__subtitle">Explore the catalogues showcasing the works of Savi Sawarkar.</p>
    </div>
</div>

<div class="catalog-section">
    <div class="catalog-grid">

        <!-- Catalog Card 1 -->
        <div class="catalog-card">
            <img src="{{ asset('assets/img/untouchable.jpg') }}" alt="Catalog 1" class="catalog-thumbnail">
            <div class="catalog-content">
                <h2 class="catalog-title">An Untouchable Reaches Out 2010 Amherst</h2>
                <p class="catalog-desc">The Dalit Art
                    Of Savi Savarkar.</p>
                <a href="{{ asset('assets/pdf/AnUntouchableReachesOut2010AmherstPDF.pdf') }}" class="download-btn"
                    download>Download PDF</a>
            </div>
        </div>

        <!-- Catalog Card 2 -->
        <div class="catalog-card">
            <img src="{{ asset('assets/img/eyecast.jpg') }}" alt="Catalog 2" class="catalog-thumbnail">
            <div class="catalog-content">
                <h2 class="catalog-title">Eyes Re-Cast</h2>
                <p class="catalog-desc">When there is no longer a “human minimum”, there is no culture.</p>
                <a href="{{ asset('assets/pdf/Eyes_Re_Cast_Recent_Works_of_Savi_Sawark.pdf') }}" class="download-btn"
                    download>Download PDF</a>
            </div>
        </div>

        <!-- Catalog Card 3 -->
        <div class="catalog-card">
            <img src="{{ asset('assets/img/021a.jpg') }}" alt="Catalog 3" class="catalog-thumbnail">
            <div class="catalog-content">
                <h2 class="catalog-title">Eyes of Dignity and Canvas By Santosh Raut</h2>
                <p class="catalog-desc">Eyes of Dignity and Canvas of Transcendence:Savi Sawarkar’s Aesthetic of Liberation </p>
                <a href="{{ asset('assets/pdf/SaviArticleforWeb_Santosh.pdf') }}" class="download-btn" download>Download PDF</a>
            </div>
        </div>
  
        <!-- Add more catalog cards as needed -->

    </div>
</div>

@endsection