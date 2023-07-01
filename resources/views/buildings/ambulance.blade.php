@include('layouts.header')

@yield('header')


<div class="cross">


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
                        <img src="{{asset('assets/img/ambulance/'. $value['src'])}}" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="{{asset('assets/img/ambulance/'. $value['src'])}}" data-gallery="portfolioGallery"
                               class="portfolio-lightbox"><i class="bx bx-plus"></i></a></div>
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
                <div class="col-lg-4 col-md-6 mt-5"  data-aos="fade-up">
                    <div class="member aos-init aos-animate" {{--data-aos-delay="300"--}}>
                        <div class="pic">
                            <img src="{{asset('assets/img/kindergarten/'.$value->img)}}"
                                 class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>{{$value->name}}  {{$value->lastname}}</h4>
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
