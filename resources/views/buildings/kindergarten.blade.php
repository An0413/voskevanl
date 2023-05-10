@include('layouts.header')

@yield('header')


<div class="container">
    <h1 class="text-center" style="margin-top: 6%;">Մանկապարտեզ</h1>
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

    <div class="mt-5">
        <h1 class="text-center mt-5">Աշխատակազմ</h1>
    </div>
    <div class="row mt-5">
        <?php
        foreach ($kindergarten as $value) {
        ?>
        <div class="col-4">
            <div class="card" style="width:350px; margin-left: 4%; margin-bottom: 4%">
                <img class="card-img-top" src="{{asset('assets/img/kindergarten/'.$value['img'])}}" alt="Card image" style="width:100%; height: 380px">
                <div class="card-body">
                    <h4 class="card-title"><?php echo $value['name'] . '  ';
                        echo $value['lastname']; ?></h4>
                    <p class="card-text"><?php echo $value['position'] ?></p>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
    <div class="mt-5">
        <img src="{{asset('assets/img/kindergarten/ashxatakazm.jpg')}}" style="width: 90%; margin-left: 5%">
    </div>
</div>

@include('layouts.footer')

@yield('footer')
