@include('layouts.header')

@yield('header')



    <section is="team" class="team">
        <div class="container">
            <div class="section-title aos-init aos-animate" data-aos="fade-in" data-aos-delay="100">
                <h2>Team</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>
            <div class="row mt-5 mb-5">
                @foreach ($worker as $value)
                    <div class="col-lg-4 col-md-6 mt-5">
                        <div class="member aos-init aos-animate" data-aos="fade-up">
                            <div class="pic">
                                <img src="{{asset('assets/img/school/'. $value['img'])}}" class="img-fluid"
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


                    {{--        <div class="col-3">--}}
                    {{--            <div class="card" style="width:280px; margin-left: 2%; margin-bottom: 2%; height: 450px">--}}
                    {{--                <img class="card-img-top" src="{{asset('assets/img/school/'. $value['img'])}}" alt="Card image" style="width: 95%; height: 70%%">--}}
                    {{--                <div class="card-body">--}}
                    {{--                    <h4 class="card-title"><?php echo $value['name'] . '  ';--}}
                    {{--                        echo $value['lastname']; ?></h4>--}}
                    {{--                    <p class="card-text "><?php echo $value['position'] ?></p>--}}
                    {{--                </div>--}}
                    {{--            </div>--}}
                    {{--        </div>--}}
                @endforeach
            </div>
        </div>
    </section>





@include('layouts.footer')

@yield('footer')
