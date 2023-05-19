@include('layouts.header')

@yield('header')



{{--        <div class="mt-5">--}}
{{--            <h1 class="text-center" style="margin-top: 10%; margin-bottom: 3%">Ոսկեվանի միջնակարգ դպրոց</h1>--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <img src="{{asset('assets/img/school/dproc.jpg')}}" style="width: 85%; margin-left: 8%">--}}
{{--        </div>--}}


<section id="portfolio" class="portfolio">
    <div class="container">

        <div class="section-title aos-init aos-animate" data-aos="fade-in" data-aos-delay="100">
            <h2>ՈՍԿԵՎԱՆԻ ՄԻՋՆԱԿԱՐԳ ԴՊՐՈՑ</h2>
        </div>

        <div class="row aos-init aos-animate" data-aos="fade-in">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-app">App</li>
                    <li data-filter=".filter-card">Card</li>
                    <li data-filter=".filter-web">Web</li>
                </ul>
            </div>
        </div>

        <div class="row portfolio-container aos-init aos-animate" data-aos="fade-up" style="position: relative; height: 1025.96px;">
            @foreach ($images as $value)
            <div class="col-lg-4 col-md-6 portfolio-item filter-app" style="position: absolute; left: 0px; top: 0px;">
                <div class="portfolio-wrap">
                    <img src="{{asset('assets/img/school/'. $value['src'])}}" class="img-fluid">
                    <div class="portfolio-links">
                        <a href="{{asset('assets/img/school'. $value['src'])}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

    </div>
</section>



    <section is="team" class="team">
        <div class="container">
            <div class="section-title aos-init aos-animate" data-aos="fade-in" data-aos-delay="100">
                <h2>ԱՇԽԱՏԱԿԱԶՄ</h2>
            </div>
            <div class="row mt-5 mb-5">
                @foreach ($worker as $value)
                    <div class="col-lg-4 col-md-6 mt-5">
                        <div class="member aos-init aos-animate" data-aos="fade-up">
                            <div class="pic">
                                <img src="{{asset('assets/img/school/'. $value['img'])}}" class="img-fluid"
                                                  alt="" style="height: 300px">
                            </div>
                            <div class="member-info">
                                <h4>{{$value->name . ' '. $value->lastname}}</h4>
                                <span>{{$value->positions->title}}</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>





@include('layouts.footer')

@yield('footer')
