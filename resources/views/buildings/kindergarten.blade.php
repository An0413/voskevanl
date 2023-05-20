@include('layouts.header')

@yield('header')


<div class="container">
    <h1 class="text-center" style="margin-top: 10%;">Մանկապարտեզ</h1>
    <div class="row mt-5 n_p p-5">
        <div class="col-6">
            <p class="text-indent:15px">
                Ոսկեվանում երկար տարիներ չի գործել մանկապարտեզը։2011 թվականին նախագահի այցելության ժամանակ գյուղապետ
                <b>Սերյոժա Ալեքսանյանը</b> բարձրաձայնում
                է այս խնդիրը և արդեն 2012 թվականին սկսվում է շինարարությունը:Շենքը կառուցվել է Հայաստանի Սոցիալիստական
                ներդրումների հիմնադրամի կողմից։
                Համայնքի անունից ներդրումը կատարվել է
                <b>Կիրակոս Վափորճյանի</b> աջակցությամբ։Շինարարական աշխատանքները կատարվում էր տեղացի Արարատ Ղազարյանի
                գլխավորությամբ։<br>
                2014 թվականի մայիսի 16-ին տեղի է ունենում մանկապարտեզի շենքի բացումը, որը դեռ ընդունում էր միայն
                նախադպրոցական երեխաներին։Այժմ մանկապարտեզում գործում է 2 խումբ։
                Մանկապարտեզ են հաճախում 46 երեխա։ Այն ունի 12 աշխատող։
            </p>
        </div>
        <div class="col-6">
            <img src="{{asset('assets/img/kindergarten/partez_shenq.jpg')}}" style="width: 90%;margin-left: 10%; margin-bottom: 6%">
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <img src="{{asset('assets/img/kindergarten/patez.jpg')}}" style="width: 100%">
        </div>
        <div class="col-12">
            <img src="{{asset('assets/img/kindergarten/partezi.jpg')}}" style="width: 100%">
        </div>
        <div class="col-12">
            <img src="{{asset('assets/img/kindergarten/mngo.jpg')}}" style="width: 100%">
        </div>
        <div class="col-12">
            <img src="{{asset('assets/img/kindergarten/patez.jpg')}}" style="width: 100%">
        </div>
    </div>


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
                                <img src="{{asset('assets/img/kindergarten/'. $value['img'])}}" class="img-fluid"
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
{{--    <div class="mt-5">--}}
{{--        <h1 class="text-center mt-5">Աշխատակազմ</h1>--}}
{{--    </div>--}}
{{--    <div class="row mt-5">--}}
{{--        <?php--}}
{{--        foreach ($kindergarten as $value) {--}}
{{--        ?>--}}
{{--        <div class="col-4">--}}
{{--            <div class="card" style="width:350px; margin-left: 4%; margin-bottom: 4%">--}}
{{--                <img class="card-img-top" src="{{asset('assets/img/kindergarten/'.$value['img'])}}" alt="Card image" style="width:100%; height: 380px">--}}
{{--                <div class="card-body">--}}
{{--                    <h4 class="card-title"><?php echo $value['name'] . '  ';--}}
{{--                        echo $value['lastname']; ?></h4>--}}
{{--                    <p class="card-text"><?php echo $value['position'] ?></p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <?php--}}
{{--        }--}}
{{--        ?>--}}
{{--    </div>--}}
    <div class="mt-5">
        <img src="{{asset('assets/img/kindergarten/ashxatakazm.jpg')}}" style="width: 90%; margin-left: 5%">
    </div>
</div>

@include('layouts.footer')

@yield('footer')
