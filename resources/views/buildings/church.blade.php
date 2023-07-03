@include('layouts.header')

@yield('header')

<div class="container" style="margin-top: 10%">
    <h1 class="text-center">{{$church->title}}</h1>

    @foreach($images as $value)
        @if($value->main_image == 1)
            <img src="{{asset('assets/img/gallery/'. $value['src'] )}}" style="width: 100%; margin-top: 2%">
            @break
        @endif
    @endforeach

        <div class="church">
            <p data-aos="fade-up"> {{$church->description}} </p>
        </div>
</div>


<section id="portfolio" class="portfolio">
    <div class="container">
        <div class="row portfolio-container" data-aos="fade-up">

            @foreach($images as $value)
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="{{asset('assets/img/gallery/'. $value['src'])}}" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="{{asset('assets/img/gallery/'. $value['src'])}}"
                               data-gallery="portfolioGallery"
                               class="portfolio-lightbox"><i class="bx bx-plus"></i></a></div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@include('layouts.footer')

@yield('footer')
