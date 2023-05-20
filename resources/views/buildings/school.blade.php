@include('layouts.header')

@yield('header')





<section id="portfolio" class="portfolio">
    <div class="container">

        <div class="section-title aos-init aos-animate" data-aos="fade-in" data-aos-delay="100">
            <h2>ԼՈՒՍԱՆԿԱՐՆԵՐ</h2>
        </div>

{{--        <div class="row aos-init aos-animate" data-aos="fade-in">--}}
{{--            <div class="col-lg-12 d-flex justify-content-center">--}}
{{--                <ul id="portfolio-flters">--}}
{{--                    <li data-filter="*" class="filter-active">All</li>--}}
{{--                    <li data-filter=".filter-app">App</li>--}}
{{--                    <li data-filter=".filter-card">Card</li>--}}
{{--                    <li data-filter=".filter-web">Web</li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}

        <div class="row portfolio-container aos-init aos-animate" data-aos="fade-up" style="position: relative; height: 1025.96px;">

            <div class="col-lg-4 col-md-6 portfolio-item filter-app" style="position: absolute; left: 0px; top: 0px;">
                <div class="portfolio-wrap">
                    <img src="{{asset('assets/img/school/dproc.jpg')}}" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="{{asset('assets/img/school/dproc.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web" style="position: absolute; left: 439.987px; top: 0px;">
                <div class="portfolio-wrap">
                    <img src="{{asset('assets/img/school/aybenaran.jpg')}}" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="{{asset('assets/img/school/aybenaran.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app" style="position: absolute; left: 879.974px; top: 0px;">
                <div class="portfolio-wrap">
                    <img src="{{asset('assets/img/school/durs.jpg')}}" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="{{asset('assets/img/school/durs.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card" style="position: absolute; left: 0px; top: 341.987px;">
                <div class="portfolio-wrap">
                    <img src="{{asset('assets/img/school/shabat.jpg')}}" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="{{asset('assets/img/school/shabat.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web" style="position: absolute; left: 439.987px; top: 341.987px;">
                <div class="portfolio-wrap">
                    <img src="{{asset('assets/img/school/zatik.jpg')}}" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="{{asset('assets/img/school/zatik.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app" style="position: absolute; left: 879.974px; top: 341.987px;">
                <div class="portfolio-wrap">
                    <img src="{{asset('assets/img/school/nkar.jpg')}}" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="{{asset('assets/img/school/nkar.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                    </div>
                </div>
            </div>

{{--            <div class="col-lg-4 col-md-6 portfolio-item filter-card" style="position: absolute; left: 0px; top: 683.974px;">--}}
{{--                <div class="portfolio-wrap">--}}
{{--                    <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">--}}
{{--                    <div class="portfolio-links">--}}
{{--                        <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>--}}
{{--                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-lg-4 col-md-6 portfolio-item filter-card" style="position: absolute; left: 439.987px; top: 683.974px;">--}}
{{--                <div class="portfolio-wrap">--}}
{{--                    <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">--}}
{{--                    <div class="portfolio-links">--}}
{{--                        <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>--}}
{{--                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-lg-4 col-md-6 portfolio-item filter-web" style="position: absolute; left: 879.974px; top: 683.974px;">--}}
{{--                <div class="portfolio-wrap">--}}
{{--                    <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">--}}
{{--                    <div class="portfolio-links">--}}
{{--                        <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>--}}
{{--                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

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
