@include('layouts.header')

@yield('header')


<div class="container" style="margin-top: 6%; margin-bottom: 6%">
    <div class="row mt-5">
        <div class="col-12">
            <section id="cta" class="cta">
                <div class="container aos-init aos-animate" data-aos="zoom-in">

                    <div class="text-center">
                        <h3>ՈՍԿԵՎԱՆԻ ՄՇԱԿՈՒՅԹԻ ԿԵՆՏՐՈՆ</h3>
                        <p>Ներկայումս Ոսկեվանի մշակույթի տունը զբաղվում է բավականին ակտիվ
                            գործունեությամբ:
                            Հաճախակի կազմակերպվում
                            են միջոցառումներ, որոնք առանձնանում են իրենց հայկական ավանդական ոճով: Գյուղում բացվել են
                            խմբակներ,
                            որոնց
                            հաճախում են ոչ միայն տեղի, այլ նաև շրջակա գյուղերի երեխաները: </p>
                        <a class="cta-btn" href="#">Կարդալ ավելին</a>
                    </div>
                    @foreach ($images as $value)
                        <img src="{{asset('assets/img/culture/'. $value['src'])}}" alt="karuyc"
                             style="width: 90%; margin-left: 5%; margin-top: 2%">
                    @endforeach
                </div>

            </section>

            <section id="portfolio" class="portfolio">
                <div class="container">

                    <div class="section-title aos-init aos-animate" data-aos="fade-in" data-aos-delay="100">
                        <h2>ՄՇԱԿՈՒՅԹ</h2>
                    </div>
                    <div class="row aos-init aos-animate" data-aos="fade-in">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <ul id="portfolio-flters">
                                <li data-filter="*" class="filter-active">ԲՈԼՈՐԸ</li>
                                <li data-filter=".culture">ՄՇԱԿՈՒՅԹ</li>
                                <li data-filter=".arvest">ԱՐՎԵՍՏ</li>
                                <li data-filter=".sport">ՍՊՈՐՏ</li>
                            </ul>
                        </div>
                    </div>

                    <div class="row portfolio-container aos-init aos-animate" data-aos="fade-up">
                        @foreach($culturem as $value)
                            <div class="col-lg-4 col-md-6 portfolio-item filter-{{$value->filter}} {{$value->filter}}">
                                <div class="portfolio-wrap">
                                    <img src="{{asset('assets/img/culture/'. $value['image'])}}" class="img-fluid"
                                         alt="">
                                    <div class="portfolio-links">
                                        <a href="{{asset('assets/img/culture/'. $value['image'])}}"
                                           data-gallery="portfolioGallery" class="portfolio-lightbox"><i
                                                class="bx bx-plus"></i></a>
                                        <a href="{{$value->url}}" title="More Details"><i class="bx bx-link"></i></a>
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
</div>
@include('layouts.footer')

@yield('footer')
