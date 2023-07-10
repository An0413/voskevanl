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
                                <a type="button" href="{{ route('sights_detail', $value['id']) }}">
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
    @if(ceil($sights->total()/$count_per_page) > 1)
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end">
                <li class="page-item {{$sights->currentPage() == 1 ? 'hidden' : ''}}">
                    <a class="page-link" href="{{ $sights->previousPageUrl() }}" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only"></span>
                    </a>
                </li>
                @for($i = 1; $i <= ceil($sights->total()/$count_per_page); $i++)
                    <li class="page-item"><a class="page-link {{$sights->currentPage() == $i ? 'active_page' : ''}}"
                                             href="{{$sights->url($i)}}">{{$i}}</a></li>
                @endfor
                <li class="page-item {{$sights->currentPage() == ceil($sights->total()/$count_per_page) ? 'hidden' : ''}}">
                    <a class="page-link" href="{{ $sights->nextPageUrl() }}" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only"></span>
                    </a>
                </li>
            </ul>
        </nav>
    @endif
</section><!-- End Portfolio Section -->

@include('layouts.footer')

@yield('footer')
