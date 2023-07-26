@include('layouts.header')

@yield('header')


<div class="cross">


</div>
<div class="row mt-5 n_p p-5 cta">
    <div data-aos="zoom-in">
        @foreach($ambulance as $value)
            <h3 class="text-center">{{$value->name}}</h3>
            <br>
            <p class="text-center">{!! $value->content !!}</p>
        @endforeach
        <div class="text-center">
            <a class="cta-btn" href="#portfolio">Տեսնել ավելին</a>
        </div>
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
                            <a href="{{asset('assets/img/gallery/'. $value['src'])}}" data-gallery="portfolioGallery"
                               class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section><!-- End Portfolio Section -->


<section id="team" class="team">
    <div class="container">
        <div class="section-title aos-init aos-animate" data-aos="fade-in" data-aos-delay="100">
            <h2 class="patm mt-5"> Ոսկեվանի ամբուլատորիայի աշխատակազմը</h2>
        </div>
        <div class="row">
            @foreach ($worker as $value)
                <div class="col-lg-4 col-md-6 mt-5" data-aos="fade-up">
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
    </div>
</section>


@include('layouts.footer')

@yield('footer')
