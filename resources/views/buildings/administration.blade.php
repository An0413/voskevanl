@include('layouts.header')

@yield('header')


<div class="container">
    <h1 class="text-center administration_header mt-5">Գյուղապետարան</h1>
    <div class="row mt-5 n_p p-5 cta">
        <div class="col-6" data-aos="zoom-in">
            @foreach($administration as $value)
                <h3>{{ $value->title }}</h3>
                <br>
                <p>{{ $value->content }}</p>
            @endforeach
                <a class="cta-btn" href="#portfolio">Տեսնել ավելին</a>
        </div>

        <div class="col-6">
            <img src="{{asset('assets/img/gallery/mshtakan.jpg')}}"
                 style="width: 90%;margin-left: 10%; margin-bottom: 6%">
        </div>

    </div>

    <div>
        <h3 class="patm mt-5">Լուսանկարներ</h3>
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
    </section><!-- End Portfolio Section -->

    <section id="team" class="team">
        <h3 class="patm mt-5"> Ոսկեվանի գյուղապետարանի աշխատակազմը</h3>
        <div class="row">
            @foreach ($worker as $value)
                <div class="col-lg-4 col-md-6 mt-5"  data-aos="fade-up">
                    <div class="member aos-init aos-animate" {{--data-aos-delay="300"--}}>
                        <div class="pic">
                            <img src="{{asset('assets/img/worker/'.$value->img)}}"
                                 class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>{{$value->name}}  {{$value->lastname}}</h4>
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
    </section>
</div>


@include('layouts.footer')

@yield('footer')
