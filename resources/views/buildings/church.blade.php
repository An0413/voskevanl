@include('layouts.header')

@yield('header')

<div class="container" style="margin-top: 10%">
    @foreach($church as $value)
    <h1 class="text-center">{{$value->title}}</h1>
    <img src="{{asset('assets/img/church/'.$value['img'] )}}" style="width: 100%; margin-top: 2%">

    <div style="margin: 8%; background-color: rgb(152 202 224 / 90%); padding: 5%">
        {{$value->description}}
    </div>
    @endforeach
</div>


<section id="portfolio" class="portfolio">
    <div class="container">
        <div class="row portfolio-container" data-aos="fade-up">

            @foreach($images as $value)
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="{{asset('assets/img/church/'. $value['src'])}}" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="{{asset('assets/img/church/'. $value['src'])}}"
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
