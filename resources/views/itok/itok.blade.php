@include('layouts.header')

@yield('header')

<div>
    @foreach($images0 as $value)
        <img src="{{asset('assets/img/about/'. $value['src'])}}" class="w-100 h-50">
    @endforeach
</div>
<div class="container" style="margin-top: 6%; margin-bottom: 6%">

    <section id="services" class="services">
        <div class="container">

            <div class="section-title aos-init aos-animate" data-aos="fade-in" data-aos-delay="100">
                <h2>ՄԵՐ ԾԱՌԱՅՈՒԹՅՈՒՆՆԵՐԸ</h2>
            </div>

            <div class="row">
                @foreach($services as $value)
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box aos-init aos-animate" data-aos="fade-up">
                            <div class="icon"><i class="{{$value->icon}}"></i></div>
                            <h4 class="title"><a href="">{{$value->name}}</a></h4>
                            <p class="description">{{$value->description}}</p>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    <section id="cta" class="cta mt-5">
        <div class="container aos-init aos-animate" data-aos="zoom-in">
            @foreach($itok as $value)
                <div class="text-center">
                    <h3>{{$value->name}}</h3>
                    <p>{{$value->description}}</p>
                    <a class="cta-btn" href="#about">Կարդալ ավելին</a>
                </div>
            @endforeach
        </div>

    </section>


    <section is="team" class="team">
        <div class="container">
            <div class="section-title aos-init aos-animate" data-aos="fade-in" data-aos-delay="100">
                <h2>ԱՇԽԱՏԱԿԱԶՄ</h2>
            </div>
            <div class="row mt-5 mb-5">
                @foreach ($worker as $value)
                    <div class="col-lg-3 col-md-4 mt-5">
                        <div class="member aos-init aos-animate" data-aos="fade-up">
                            <div class="pic">
                                <img src="{{asset('assets/img/about/'. $value['img'])}}" class="img-fluid"
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


    <div class="row" id="about">
        <h2 class="text-center mt-5">Մեր մասին</h2>
        <div class="col-4">
            @foreach($imagesg as $value)
                <img src="{{asset('assets/img/about/'  .$value['src'])}}" class="w-100">
            @endforeach
        </div>
        @foreach($itokm as $value)
            <div class="col-4" style="margin-top: 4%">
                <p>{{$value->description}}</p>
            </div>
        @endforeach
        <div class="col-4 mt-5">
            @foreach($imagesg1 as $value)
                <img src="{{asset('assets/img/about/'  .$value['src'])}}" class="w-100">
            @endforeach
        </div>
    </div>

</div>
@include('layouts.footer')

@yield('footer')
