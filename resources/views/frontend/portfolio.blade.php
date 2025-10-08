@extends('frontend.layout.main')
@section('main-container')
<main class="main">

  <div class="artist-cover">
    <div class="artist-cover__content">
      <h1 class="artist-cover__title">Gallery</h1>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content border-0 rounded-4 shadow">
        <div class="modal-header border-0">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center">
          <img id="modalImage" src="" class="img-fluid rounded mb-3" style="max-height: 400px; object-fit: contain;" alt="">
          <p id="modalDescription" class="text-muted"></p>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Section -->
  <section id="portfolio" class="portfolio section pt-5">
    <div class="container">
      <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
        <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">Oil Painting</li>
          <li data-filter=".filter-product">Graphic Prints</li>
          <li data-filter=".filter-branding">Coloured Drawing</li>
          <li data-filter=".filter-black">Black And White</li>
        </ul>

        <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
          @php
            // Define image data statically
            $categories = [
                'Oil Painting' => [
                    'filter' => 'filter-app',
                    'folder' => 'oilpainting',
                    'images' => [
                        ['file' => '004a.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => '007f.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => '12a.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => '24cjpg(1).jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => '24djpg.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => '59.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => '70.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Astronomar.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'CasteofRudra.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'DSCF8634.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'ThreeSisters.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled07.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled26.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled27.jpg', 'size' => '', 'title' => '', 'medium' => '']
                    ]
                ],
                'Graphic Prints' => [
                    'filter' => 'filter-product',
                    'folder' => 'graphicprint',
                    'images' => [
                        ['file' => 'Untitled01.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled02.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled-3copy.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled-4copy.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled05.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled07(1).jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled08.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled09.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled-17copy2.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled-18copy2.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled-25copy2.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled-26copy2.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled-27copy2.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled-32copy2.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled-50copy2.jpg', 'size' => '', 'title' => '', 'medium' => '']
                    ]
                ],
                'Coloured Drawing' => [
                    'filter' => 'filter-branding',
                    'folder' => 'colordrawing',
                    'images' => [
                        ['file' => '002.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => '003.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => '004.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => '005.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => '005.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => '012.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => '015.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => '018.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => '022.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => '025.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => '25a.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => '25b.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => '026.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => '029.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => '031.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => '33.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => '052.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => '053.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => '055.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => '056.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => '057.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => '058.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => '58.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => '059.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => '060.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => '062.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => '80.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => '81.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => '82.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => '83.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => '84.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => '85.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => '86.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => '87.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => '88.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => '89.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => '90.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => '91.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => '92.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => '93.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => '94.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => '95.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => '96.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => '97.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => '98.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => '99.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => '100.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'IMG_2750.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled3.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled6.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled14.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled15.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled16.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled19.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled22.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled24.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled26.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled119.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled120.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled125.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled128.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled129.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled135.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled141a.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled142.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled143.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled149.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled150.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled153.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled156.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled159.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled160.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled165.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled167.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled170a.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled170.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled167.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled171.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled173a.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled173a.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled176a.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled187.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                    ]
                ],
                'Black And White' => [
                    'filter' => 'filter-black',
                    'folder' => 'blackwhite',
                    'images' => [
                        ['file' => 'DSC01756.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'DSC01876.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'DSC02250.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled-163.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled-176.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled-184.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled-186.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled-193.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled-194.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled-195.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled-211.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled-216.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled-232.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled-243.jpg', 'size' => '', 'title' => '', 'medium' => ''],
                        ['file' => 'Untitled-244.jpg', 'size' => '', 'title' => '', 'medium' => '']
                    ]
                ]
            ];
          @endphp

          @foreach ($categories as $category => $data)
            @foreach ($data['images'] as $image)
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item {{ $data['filter'] }}">
                <img src="{{ asset('assets/img/' . $data['folder'] . '/' . $image['file']) }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <p><strong>Size:</strong> {{ $image['size'] }}</p>
                  <p><strong>Title:</strong> {{ $image['title'] }}</p>
                  <p><strong>Medium:</strong> {{ $image['medium'] }}</p>
                  <a href="{{ asset('assets/img/' . $data['folder'] . '/' . $image['file']) }}"
                     title="{{ $category }}"
                     data-bs-toggle="modal"
                     data-bs-target="#imageModal"
                     data-img="{{ asset('assets/img/' . $data['folder'] . '/' . $image['file']) }}"
                     data-description="">
                    <i class="bi bi-zoom-in"></i>
                  </a>
                </div>
              </div>
            @endforeach
          @endforeach
        </div><!-- End Portfolio Container -->
      </div>
    </div>
  </section><!-- /Portfolio Section -->
</main>

<script>
  const imageModal = document.getElementById('imageModal');
  imageModal.addEventListener('show.bs.modal', function (event) {
    const trigger = event.relatedTarget;
    const img = trigger.getAttribute('data-img');
    const description = trigger.getAttribute('data-description');
    imageModal.querySelector('#modalImage').src = img;
    imageModal.querySelector('#modalDescription').textContent = description;
  });
</script>
@endsection