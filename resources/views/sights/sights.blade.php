@include('layouts.header')

@yield('header')

<div>
    <h2 class="patm mt-5">Ոսկեվանի տեսարժան վայրեր</h2>
</div>

<section id="portfolio" class="portfolio">
    <div class="container">
        <div class="row portfolio-container" data-aos="fade-up">

            @foreach($sights as $value)
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                            <img src="{{asset('assets/img/sights/'. $value['image'])}}" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="{{asset('assets/img/sights/'. $value['image'])}}"
                                   data-gallery="portfolioGallery"
                                   class="portfolio-lightbox"><i class="bx bx-plus"></i>
                                </a>
                                <a type="button" data-bs-toggle="modal" data-bs-target="#myModal_{{ $value['id'] }}">
                                    <i class="bx bx-link"></i>
                                </a>
                            </div>
                    </div>
                </div>
            @endforeach
        </div>
        @foreach($sights as $value)
        <div class="modal sights_fon" id="myModal_{{ $value['id'] }}">

            <div class="modal-dialog modal-lg">
                <div class="modal-content" style="width: 650px; height: 600px">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title text-center"> {{ $value['name'] }}</h4>
                        <button type="button" class="btn-close"
                                data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <p class="justifity">
                            {{ $value['description'] }}
                        </p>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                            Փակել
                        </button>
                    </div>

                </div>
            </div>
        </div>
        @endforeach
    </div>
</section><!-- End Portfolio Section -->

@include('layouts.footer')

@yield('footer')
