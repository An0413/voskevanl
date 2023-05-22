@include('layouts.header')

@yield('header')
<div class="container">
    <div class="mt-5">
        <h1 class="text-center" style="margin-top: 10%">Ոսկեվանի միջնակարգ դպրոց</h1>
    </div>


    <section id="cta" class="cta">
        <div class="container aos-init aos-animate" data-aos="zoom-in">

            <div class="text-center">
                <?php foreach ($school as $value) { ?>
                <div>
                    <h3 class="text-center" style="font-family: Sofia;"><?php echo $value['name']; ?></h3>
                </div>
                <p style="text-indent: 3%; padding: 1%;"><?php echo $value['description'] ?></p>
                <?php
                }
                ?>
                <a class="cta-btn" href="#">Կարդալ ավելին</a>
            </div>
        </div>
        @foreach ($imagesg as $value)
            <img src="{{asset('assets/img/school/'. $value['src'])}}"
                 style="width: 80%; margin-left: 10%; margin-top: 2%">
        @endforeach
    </section>

    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="section-title aos-init aos-animate" data-aos="fade-in" data-aos-delay="100">
                <h2>ԼՈՒՍԱՆԿԱՐՆԵՐ</h2>
            </div>

            <div class="row portfolio-container aos-init aos-animate" data-aos="fade-up"
                 style="position: relative; height: 1025.96px;">

                @foreach ($images as $value)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{asset('assets/img/school/'. $value['src'])}}" class="img-fluid">
                            <div class="portfolio-links">
                                <a href="{{asset('assets/img/school/'. $value['src'])}}" data-gallery="portfolioGallery"
                                   class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
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

</div>
@include('layouts.footer')

@yield('footer')
