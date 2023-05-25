@include('layouts.header')

@yield('header')


<div class="container" style="margin-bottom: 10%; margin-top: 10%;">

    <div class="row">
        <div class="col-4 mt-5">
            @foreach($imagesg as $value)
                <img src="{{asset('assets/img/culture/' .$value['src'])}}" alt="hush" style="width: 100%">
            @endforeach
        </div>
        <div class="col-4 mt-5">
            <h3>Ոսկեվանի գեղարվեստի դպրոց</h3><br><br>
            <h4>Ուսուցիչ՝ Արթուր Մելքոնյան</h4>
        </div>
        <div class="col-4">
            <section is="team" class="team" style="padding: 0%">
                <div class="container">
                    <div class="section-title aos-init aos-animate" data-aos="fade-in" data-aos-delay="100"
                         style="padding-bottom: 0px; margin-bottom: 0%">
                    </div>
                    <div class="row mb-5">
                        @foreach ($worker as $value)
                            <div class="col-lg-4 col-md-6 mt-5" style="width: 100%;">
                                <div class="member aos-init aos-animate" data-aos="fade-up">
                                    <div class="pic">
                                        <img src="{{asset('assets/img/culture/'. $value['img'])}}" class="img-fluid"
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
    <section id="cta" class="cta mt-5">
        <div class="container aos-init aos-animate" data-aos="zoom-in">

            <div class="text-center">
                <?php foreach ($fineart as $value) { ?>
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
                            <img src="{{asset('assets/img/fine_art/'. $value['src'])}}" class="img-fluid">
                            <div class="portfolio-links">
                                <a href="{{asset('assets/img/fine_art/'. $value['src'])}}"
                                   data-gallery="portfolioGallery"
                                   class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>


    {{--    <div class="row">--}}
    {{--        <div class="col-4 mt-3">--}}
    {{--            <img src="{{asset('assets/img/fine_art/morberd.jpg')}}" alt="nkar" class="par">--}}
    {{--        </div>--}}
    {{--        <div class="col-4">--}}
    {{--            <p class="small3">--}}
    {{--            <h3><b>Ոսկեվանի գեղարվեստի դպրոց</b></h3>--}}
    {{--            <br>--}}
    {{--            <br>--}}
    {{--            <h4>Տնօրեն` Արթուր Մելքոնյան</h4>--}}
    {{--            </p>--}}
    {{--        </div>--}}
    {{--        <div class="col-4">--}}
    {{--            <img src="{{asset('assets/img/fine_art/Artur.jpg')}}" class="par">--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--    <div>--}}
    {{--        <p class="kitar mt-4">--}}
    {{--            Դպրոցը բացվել է 2010թ. Ապրիլի 17-ին: Նախնական շրջանում ունեցել է ավելի քան 45 աշակերտ:--}}
    {{--            <br>--}}
    {{--            <br>--}}
    {{--            2010 թ. ամռանը սկսել են մասնակցել Կողբի գեղարվեստի դպրոցի կողմից կազմակերպված ամենամյա պլեներներին:--}}
    {{--            <br>--}}
    {{--            <br>--}}
    {{--            2011 թ. Ապրիլի 17-ին կազմակերպվել է առաջին ցուցահանդեսը: Ցուցահանդեսները կրում են շարունակական բնույթ:--}}
    {{--            <br>--}}
    {{--            <br>--}}
    {{--            2012թ. Դպրոցը տվել է առաջին շրջանավարտը, որն ընդունվել է համալսարան (ԵՊՀ Իջևանի մասնաճյուղ՝--}}
    {{--            դիզայների մասնագիտացմամբ):--}}
    {{--            <br>--}}
    {{--            <br>--}}
    {{--            2022թ. Փետրվարի 1-ից բացվել է նաև կավագործություն: Ուսուցչուհի՝ Արինա Դավթյան: Սովորում են 8 աշակերտ:--}}
    {{--            Համագործակցում են 4u.am կայքի հետ:--}}
    {{--        </p>--}}
    {{--    </div>--}}

    {{--    <div class="row">--}}
    {{--        <div class="col-sm-3">--}}
    {{--            <img src="{{asset('assets/img/fine_art/poqreri_xumb.jpg')}}" alt="poqer" style="width: 250px; height: 250px">--}}
    {{--        </div>--}}
    {{--        <div class="col-sm-3">--}}
    {{--            <img src="{{asset('assets/img/fine_art/budka.jpg')}}" alt="budka" style="width: 250px; height: 250px">--}}
    {{--        </div>--}}
    {{--        <div class="col-sm-3">--}}
    {{--            <img src="{{asset('assets/img/fine_art/senyak.jpg')}}" alt="senyak" style="max-width: 100%; height: 250px">--}}
    {{--        </div>--}}
    {{--        <div class="col-sm-3">--}}
    {{--            <img src="{{asset('assets/img/fine_art/kav.jpg')}}" alt="kav" style="max-width: 100%; height: 250px"></div>--}}
    {{--    </div>--}}
    {{--    <div class="row mt-5 mb-5">--}}
    {{--        <div class="col-sm-3">--}}
    {{--            <img src="{{asset('assets/img/fine_art/pulik.jpg')}}" alt="pulik" style="width: 250px; height: 250px">--}}
    {{--        </div>--}}
    {{--        <div class="col-sm-3">--}}
    {{--            <img src="{{asset('assets/img/fine_art/qandak.jpg')}}" alt="qandak" style="width: 250px; height: 250px">--}}
    {{--        </div>--}}
    {{--        <div class="col-sm-3">--}}
    {{--            <img src="{{asset('assets/img/fine_art/bacik.jpg')}}" alt="bacik" style="max-width: 100%; height: 250px">--}}
    {{--        </div>--}}
    {{--        <div class="col-sm-3">--}}
    {{--            <img src="{{asset('assets/img/fine_art/poqrik.jpg')}}" alt="poqrik" class="poqrik"></div>--}}
    {{--    </div>--}}
</div>
@include('layouts.footer')

@yield('footer')
