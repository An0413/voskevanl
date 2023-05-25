@include('layouts.header')

@yield('header')


<div class="container" style="margin-top: 10%;">


    <div class="row">
        <div class="col-4 mt-5">
            @foreach($imagesg as $value)
                <img src="{{asset('assets/img/carate/' .$value['src'])}}" alt="hush" style="width: 100%">
            @endforeach
        </div>
        <div class="col-4 mt-5">
            <h3>Ոսկեվանի կարատեի խմբակ</h3><br><br>
            <h4>Մարզիչ՝ Սասուն Եգանյան</h4>
        </div>
        <div class="col-4">
            <section is="team" class="team" style="padding: 0%">
                <div class="container">
                    <div class="section-title aos-init aos-animate" data-aos="fade-in" data-aos-delay="100" style="padding-bottom: 0px; margin-bottom: 0%">
                    </div>
                    <div class="row mb-5">
                        @foreach ($worker as $value)
                            <div class="col-lg-4 col-md-6 mt-5" style="width: 100%;">
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
    </div>
    <section id="cta" class="cta">
        <div class="container aos-init aos-animate" data-aos="zoom-in">

            <div class="text-center">
                <?php foreach ($carate as $value) { ?>
                <div>
                    <h3 class="text-center" style="font-family: Sofia;"><?php echo $value['name']; ?></h3>
                </div>
                <p style="text-indent: 3%; padding: 1%;"><?php echo $value['description'] ?></p>
                <?php
                }
                ?>
                <a class="cta-btn" href="#portfolio">Կարդալ ավելին</a>
            </div>
        </div>
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
                            <img src="{{asset('assets/img/carate/'. $value['src'])}}" class="img-fluid">
                            <div class="portfolio-links">
                                <a href="{{asset('assets/img/carate/'. $value['src'])}}" data-gallery="portfolioGallery"
                                   class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
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
