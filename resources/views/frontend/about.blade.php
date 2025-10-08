@extends('frontend.layout.main')
@section('main-container')

<main class="main">

  <div class="artist-cover">
    <div class="artist-cover__content">
      <h1 class="artist-cover__title">Savi Sawarkar</h1>
      <p class="artist-cover__subtitle">Voice for Voiceless</p>
    </div>
  </div>

  <section class="artist-intro">
    <div class="artist-intro__container">
      <div class="artist-intro__img">
        <img src="{{ asset('assets/img/about/savi.jpeg') }}" alt="Artist Portrait">
      </div>
      <div class="artist-intro__text">
        <h2>About Savi</h2>
        <p>
          Savindra Haribhau Sawarkar (born 1961) (also known as Savi Sawarkar) is an Indian artist, known for his use of Buddhist
          imagery and Dalit subjectivity. He has developed a distinct pictorial language over the course of his 40-year
          career, drawing from BR Ambedkar's political philosophy, neo-Buddhist imagery, and his own experiences as a
          Dalit.
        </p>
        <p>
          Savindra Sawarkar was born in 1961 in Nagpur, India. Growing up in an Ambedkarite family, he was exposed to
          radical ideas and critical thinking from an early age. His grandparents converted to Buddhism with Dr.
          Ambedkar in 1956, and his father, the first graduate in the family, was a railway officer who prioritized
          education.[3]

          Sawarkar obtained his Bachelor of Fine Arts degree in Drawing and Painting from Nagpur University in 1982, and
          his Master of Fine Arts degree in Graphic (Print Making) from the Faculty of Fine Arts at the Maharaja
          Sayajirao University of Baroda in 1984. As part of his master's dissertation, he focused on the work of three
          German Expressionist printmakers: Max Beckmann, Kaethe Kollwitz, and Otto Dix.
        </p>
      </div>
    </div>
  </section>

  <section class="artist-vision">
    <h2>Career</h2>
    <p>
      Savindra Sawarkar has been an assistant professor at the College of Fine Arts in New Delhi since December 1996,
      where he teaches painting. Prior to that, he was an artist with the Indian People's Theatre Association (IPTA)
      Delhi chapter from December 1982 to January 1992, where he designed posters and conducted workshops. From December
      1990 to January 1996, he was also an artist with the Amateur Astronomers Association Delhi (AAAD), where he was
      part of a research group studying the effects of astronomical phenomena on painters and artists. In the early
      1990s, Sawarkar received grants to travel and study in the United States and Mexico.
    </p>
    <p>Throughout the 1980s and early 1990s, Sawarkar practiced and exhibited his work in India and abroad. He worked
      with artists Krishna Reddy at the Lalit Kala Akademi's Garhi studios and KG Subramanyan at Santiniketan.[5] He has
      held numerous solo shows, including a year-long exhibition of his paintings in Germany organized by the
      prestigious human rights organization 'Bread for World' in 2005–6. In 2006, an exclusive painting show of his
      paintings and graphics was organized at Iowa State University in the US, titled 'Savi Sawarkar and the
      Annihilation of Caste'.[6][7] He has also participated in several national and international exhibitions,
      including the National Art Exhibition by Lalit Kala Academi, New Delhi in 1982, 1985, 2004 and 2008[8] the Eighth
      Triennial International Art Exhibition, New Delhi 1991, Exhibition of Indian Painters by Casa Borda, Taxco, Mexico
      2002, Exhibition of Painting organized by Mittal Steel in Lazaro Cardenaz, Mexico, Asian Social Forum Hyderabad
      2003, World Social Forum,[1] Mumbai 2004, and 100 Years of Indian Art by National Gallery of Modern Art, New Delhi
      1994, among others.[9] His work was also published and presented as a book at the Gothenburg Book Fair in
      2006.[10] Sawarkar also exhibited at IIDS in 2008.[11] He published ‘Voice for the Voiceless’, a catalog of the
      exhibition held at M.F. Hussain Art Gallery, Jamia Millia Islamia in 2010. In the same year, Savi exhibited at the
      August Savage Gallery, which was curated by Gary Tartakov.</p>
    <p>He also illustrated a Swedish book by the name of "Detta land som aldrig var vår moder"[14] which translates to
      "This land was never our Mother".</p>
  </section>

  <section class="artist-achievements">
    <h2>Impact and recognition</h2>
    <div class="artist-achievements__grid">
      <div class="achievement">
        <p>Art critics and scholars, such as Geeta Kapur, have noted the significance of Sawarkar's work in shaping a
          new Dalit iconography within Indian art</p>

      </div>
    </div>
  </section>

  <section class="artist-cta">
    <h2>View My Portfolio</h2>
    <a class="artist-cta__btn">Explore Artworks</a>
  </section>
</main>

@endsection