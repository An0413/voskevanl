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
                            <p class="mt-5">Հեղինակ՝ <span>{{$value->autor}}</span></p>
                        </div>
                        <div class="col-4 mt-5">
                            <img src="{{asset('assets/img/news/' .$value['img'])}}" class="w-100" style="border-radius: 5%">
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="col-xl-3 d-flex align-items-stretch">
                    <div class="icon-boxes d-flex flex-column justify-content-center">
                        @foreach($newsm as $value)
                            <div class="row mt-5">
                                <div class="card border-0 me-lg-4 mb-lg-0 mb-4">
                                    <div class="backgroundEffect"></div>
                                    <div class="pic"><img src="{{asset('assets/img/news/' .$value['img'])}}">
                                        <div class="date"><span class="day">{{$value->add_date}}</span></div>
                                    </div>
                                    <div class="content"><p class="h-1 mt-4">{{$value->title}}</p>
                                        <p class="text-muted mt-3">{{$value->description}}</p>
                                        <div class="d-flex align-items-center justify-content-between mt-3 pb-3">
                                            <div class="btn btn-primary"><a href="{{$value->src}}" class="text-muted">Կարդալ ավելին</a><span class="fas fa-arrow-right"></span></div>
                                            <div class="d-flex align-items-center justify-content-center foot"><p class="admin">{{$value->autor}}</p>
                                                <p class="ps-3 icon text-muted"><span class="fas fa-comment-alt pe-1">{{$value->status}}</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div><!-- End .content-->
                </div>
            </div>

        </div>
    </section>
</div>





@include('layouts.footer')

@yield('footer')
