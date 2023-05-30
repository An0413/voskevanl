@include('layouts.header')

@yield('header')

<div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="glxavor" data-aos="fade-up">
                <h1 class="text-light">ԲԱՐԻ ԳԱԼՈՒՍՏ ՈՍԿԵՎԱՆ</h1>
            </div>
            <img src="{{asset('assets/img/glxavor/voskevan.jpg')}}" alt="Los Angeles" class="d-block object_fit_cover"
                 style="width:100vw; height: 100vh">

            <div class="carousel-caption">
            </div>
        </div>
        <div class="carousel-item">
            <div class="glxavor" data-aos="fade-up">
                <h1 class="text-light">ԲԱՐԻ ԳԱԼՈՒՍՏ ՈՍԿԵՎԱՆ</h1>
            </div>
            <img src="{{asset('assets/img/glxavor/voskevan1.jpg')}}" alt="Chicago" class="d-block object_fit_cover"
                 style="min-width:100vw; height: 100vh">
            <div class="carousel-caption">
            </div>
        </div>
        <div class="carousel-item">
            <div class="glxavor" data-aos="fade-up">
                <h1 class="text-light">ԲԱՐԻ ԳԱԼՈՒՍՏ ՈՍԿԵՎԱՆ</h1>
            </div>
            <img src="{{asset('assets/img/glxavor/voskevan2.jpg')}}" alt="New York" class="d-block object_fit_cover"
                 style="min-width:100vw; height: 100vh">
            <div class="carousel-caption">
            </div>
        </div>
    </div>

    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>
<div>
    <h2 class="patm mt-5">Լուսանկարներ</h2>
</div>
<section id="portfolio" class="portfolio">
    <div class="container">
        <div class="row portfolio-container" data-aos="fade-up">

            @foreach($images as $value)
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="{{asset('assets/img/glxavor/'. $value['src'])}}" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="{{asset('assets/img/glxavor/'. $value['src'])}}"
                               data-gallery="portfolioGallery"
                               class="portfolio-lightbox"><i class="bx bx-plus"></i></a></div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section><!-- End Portfolio Section -->
<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials section-bg">
    <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
            <h2>Նորություններ</h2>
{{--            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>--}}
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                        <h3>Saul Goodman</h3>
                        <h4>Ceo &amp; Founder</h4>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                        <h3>Sara Wilsson</h3>
                        <h4>Designer</h4>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                        <h3>Jena Karlis</h3>
                        <h4>Store Owner</h4>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                        <h3>Matt Brandon</h3>
                        <h4>Freelancer</h4>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                        <h3>John Larson</h3>
                        <h4>Entrepreneur</h4>
                    </div>
                </div><!-- End testimonial item -->

            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
</section><!-- End Testimonials Section -->

<section id="cta" class="fon">
    <div class="container" data-aos="zoom-in">

        <div class="text-center">
            <h3 class="text-light">ՈՍԿԵՎԱՆ</h3>
            <p class="text-light"> Դու իմ սրբություն, իմ ոսկե հանգրվան,
                Իմ քաղցր ծննդավայր, անգին Ոսկեվան:</p>
{{--            <a class="cta-btn" href="#">Call To Action</a>--}}
        </div>

    </div>
</section><!-- End Cta Section -->

<section id="team" class="team">
    <h3 class="patm mt-5">Մեր թիմը</h3>
    <div class="row">
        @foreach ($worker as $value)
            <div class="col-lg-3 col-md-6 mt-5"  data-aos="fade-up">
                <div class="member aos-init aos-animate" {{--data-aos-delay="300"--}}>
                    <div class="pic" data-aos="fade-in">
                        <img src="{{asset('assets/img/about/'.$value->img)}}"
                             class="img-fluid team_img" alt="">
                    </div>
                    <div class="member-info">
                        <h4>{{$value->name}}  {{$value->lastname}}</h4>
                        <span>{{$value->positions->title}}</span>
                        <div class="social">
                            @if($value->mail_link)
                                <a href="{{$value->mail_link}}" target="_blank"><i class="bx bx-envelope"></i></a>
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

<section id="contact" class="contact section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Կապ մեզ հետ</h2>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="info-box mb-4">
                    <i class="bx bx-map"></i>
                    <h3>Մեր հասցեն</h3>
                    <p>մարզ Տավուշ, գյուղ Ոսկեվան</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="info-box  mb-4">
                    <i class="bx bx-envelope"></i>
                    <h3>Էլ․ հասցե</h3>
                    <p>itok.llc.2021@gmail.com</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="info-box  mb-4">
                    <i class="bx bx-phone-call"></i>
                    <h3>Հեռ․</h3>
                    <p>+374 (77) 72 52 62</p>
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-lg-6 ">
                <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30031.96449566959!2d45.04045410268168!3d41.112287270460115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40413e3aa43f452d%3A0xd72f47ee8afb679d!2z1YjVvdWv1aXVvtWh1bYgNDExMw!5e0!3m2!1shy!2sam!4v1684869920827!5m2!1shy!2sam"  width="600" height="375" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
            </div>

            <div class="col-lg-6">
                <form action="/message_to_user" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Ձեր անունը" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Էլ․ հասցե" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">

                        <select class="form-select" id="sel1" name="sellist1" required>
                            <option value="">Ընտրել հասցեատիրջը</option>
                            @php
                                $user = \App\Models\Role::all();
                            @endphp
                            @foreach($user as $value)
                                <option value="{{$value->id}}">{{$value->name_arm}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Հաղորդագրություն" required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Ձեր հաղորդագրությունն ուղարկված է։ Շնորհակալություն։</div>
                    </div>
                    <div class="text-center"><button type="submit">Ուղարկել</button></div>
                </form>
            </div>

        </div>

    </div>
</section><!-- End Contact Section -->

@include('layouts.footer')

@yield('footer')
