@extends('frontend.layout.main')
@section('main-container')

<div class="artist-cover">
    <div class="artist-cover__content">
      <h1 class="artist-cover__title">Articles</h1>
      <p class="artist-cover__subtitle">Explore the written narratives crafted by Savi Sawarkar.</p>
    </div>
  </div>
<section class="article-page-wrapper">
    <h2 class="article-page-title">Latest Articles</h2>

    <div class="article-grid">

        <!-- Article 1 -->
        <div class="article-card">
            <div class="article-header">
                <h3 class="article-title">Article By Scroll.in</h3>
                <h5>
                    ‘In all my years, no gallery has represented me’: Savindra Sawarkar on Brahmanism in the arts</h5>
                {{-- <p class="article-meta">By Savindra Sawarkar • July 2025</p> --}}
            </div>
            <div class="article-body">
                <p>Sawarkar is the first Indian gallery artist to foreground the Dalit experience of caste as an
                    aesthetic mode. In a broad interview, he talks about his practice.....</p>
            </div>
            <div class="article-footer">
                <a href="https://scroll.in/magazine/1033348/in-all-my-years-no-gallery-has-represented-me-savindra-sawarkar-on-brahmanism-in-the-arts"
                    class="article-readmore">Read More →</a>
            </div>
        </div>

        <!-- Article 2 -->
        <div class="article-card">
            <div class="article-header">
                <h3 class="article-title">Article By JaiBhim International</h3>
                <h5>The Bell, The Basket and The Broom: An Interview with Artist Savi Savarkar</h5>
            </div>
            <div class="article-body">
                <p>In December 2008, I met with the artist Savi Savarkar in his New Delhi studio. There were canvases on
                    every wall space, canvases on easels, canvases rolled up, cans of paint in the corners, tables
                    layered with drawings, albums on the desk filled with photographs and prints. ....</p>
            </div>
            <div class="article-footer">
                <a href="https://medium.com/@JaiBhimIntl/savi-savarkar-the-bell-the-basket-the-broom-e7db45ea9db9"
                    class="article-readmore">Read More →</a>
            </div>
        </div>

        <!-- Article 3 -->
        <div class="article-card">
            <div class="article-header">
                <h3 class="article-title">Article By Taylor & Francis Group</h3>
                <h5>Tense – past continuous: some critical reflections on the art of Savi Sawarkar</h5>
            </div>
            <div class="article-body">
                <p>This essay is an attempt to trace the casteist undercurrents of Modernism in Indian art through the
                    critiques proposed by the works of one of the most prominent Dalit artists of contemporary India:
                    Savi Sawarkar....</p>
            </div>
            <div class="article-footer">
                <a href="https://www.taylorfrancis.com/chapters/edit/10.4324/9781315684314-27/tense-past-continuous-critical-reflections-art-savi-sawarkar-santhosh-sadanandan"
                    class="article-readmore">Read More →</a>
            </div>
        </div>
        <!-- Article 4 -->
        <div class="article-card">
            <div class="article-header">
                <h3 class="article-title">Article By The Indian Express</h3>
                <h5>Unheard voices of oppression: Art exhibition at Jamia</h5>
            </div>
            <div class="article-body">
                <p>It was a learning experience for me,too,working with the students gave me more than I gave them,
                    says Sawarkar a neo-Buddhist whose faith has armed him with an iconography that talks of 500 years
                    of oppression....</p>
            </div>
            <div class="article-footer">
                <a href="https://indianexpress.com/article/cities/delhi/unheard-voices-of-oppression-art-exhibition-at-jamia/"
                    class="article-readmore">Read More →</a>
            </div>
        </div>
        <!-- Article 5 -->
        <div class="article-card">
            <div class="article-header">
                <h3 class="article-title">Article By Santosh Raut</h3>
                <h5>Savindra Sawarkar (b: 1961, Nagpur) : Artist’s statement</h5>
            </div>
            <div class="article-body">
                <p>I am New Delhi based artist and educator. My art practice has focused significantly on
                    the brutality and injustice of caste- and gender-based violence and subordination for the
                    last three decades. My imagery is based on my personal experiences of the ferocious
                    casteism, racialism and exploitation of women.....</p>
            </div>
            <div class="article-footer">
                <a href="{{ asset('assets/pdf/SantoshRautArtistStatement.pdf') }}"
                    class="article-readmore">Read More →</a>
            </div>
        </div>

        <!-- Add more articles here as needed -->

    </div>
</section>

@endsection