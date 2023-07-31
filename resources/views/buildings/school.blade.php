@include('layouts.header')

@yield('header')
<div class="container">
    <div class="mt-5">
        <h1 class="text-center" style="margin-top: 10%">Ոսկեվանի միջնակարգ դպրոց</h1>
    </div>

    <section id="cta" class="cta">
        <div data-aos="zoom-in">

            <div class="text-center">
                <?php foreach ($info as $value) { ?>
                <div>
                    <h3 class="text-center" style="font-family: Sofia;"><?php echo $value['name']; ?></h3>
                </div>
                <p style="text-indent: 3%; padding: 1%;"><?php echo $value['content'] ?></p>
                <?php
                }
                ?>
                <a class="cta-btn" href="#portfolio">Տեսնել ավելին</a>
            </div>
            @foreach ($imagesg as $value)
                <img src="{{asset('assets/img/gallery/'. $value['src'])}}"
                     style="width: 80%; margin-left: 10%; margin-top: 2%">
            @endforeach
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
                            <img src="{{asset('assets/img/gallery/'. $value['src'])}}" class="img-fluid">
                            <div class="portfolio-links">
                                <a href="{{asset('assets/img/gallery/'. $value['src'])}}" data-gallery="portfolioGallery"
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
                                <img src="{{asset('assets/img/worker/'. $value['img'])}}" class="img-fluid team_img">
                            </div>
                            <div class="member-info">
                                <h4>{{$value->name . ' '. $value->lastname}}</h4>
                                <span>{{$value->positions->title}}</span>
                                <div class="social">
                                    @if($value->mail_link)
                                        <a href="" data-toggle="tooltip" data-placement="bottom" title="{{$value->mail_link}}" target="_blank"><i class="bx bx-envelope"></i></a>
                                    @endif
                                    @if($value->fb_link)
                                        <a href="{{$value->fb_link}}" target="_blank"><i class="bi bi-facebook"></i></a>
                                    @endif
                                    @if($value->insta_link)
                                        <a href="{{$value->insta_link}}" target="_blank"><i class="bi bi-instagram"></i></a>
                                    @endif
                                    @if($value->in_link)
                                        <a href="{{$value->in_link}}" target="_blank"><i class="bi bi-linkedin"></i></a>
                                    @endif
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
