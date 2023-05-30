@include('layouts.header')

@yield('header')


<div class="container-fluid" style="margin-top: 7%">
    <h1 class="text-center">ՆՈՐՈՒԹՅՈՒՆՆԵՐ</h1>
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row no-gutters">
                <div class="content col-xl-9 d-flex align-items-stretch aos-init aos-animate">
                    @foreach($news as $value)
                        <div class="row newsstyle">
                            <div class="col-8 mt-5">
                                <h1 class="text-center" style="color:white;">{{$value->title}}</h1><br>
                                <p>{{$value->description}}</p>
                                <p class="mt-5">Հեղինակ՝
                                    <span>{{$value->user_info->name.' '.$value->user_info->lastname}}</span></p>
                            </div>
                            <div class="col-4 mt-5">
                                <img src="{{asset('assets/img/news/' .$value->img)}}" class="w-100"
                                     style="border-radius: 5%">
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-xl-3">
                    @foreach($recent_news as $value)
                        <div class="row mt_2r">
                            <div class="col-4">
                                <img src="{{asset('assets/img/news/' .$value->img)}}" class="img_w_100">
                            </div>
                            <div class="col-8">
                                <p class="news_f">{{$value->title}}</p>
                                <div class="btn news_but"><a href="{{$value->src}}" class="text-muted news_f">Կարդալ
                                        ավելին</a><span class="fas fa-arrow-right"></span></div>
                            </div>
                        </div>

                    @endforeach
                </div><!-- End .content-->
            </div>

        </div>
    </section>
</div>


@include('layouts.footer')

@yield('footer')
