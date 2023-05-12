@include('layouts.header')

@yield('header')


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="assets/img/voskevan/https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/img/voskevan/https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

<div class="container" style="margin-bottom: 10%; margin-top: 10%;">
    <div class="row">
        <div class="col-4 mt-3">
            <img src="{{asset('assets/img/fine_art/morberd.jpg')}}" alt="nkar" class="par">
        </div>
        <div class="col-4">
            <p class="small3">
            <h3><b>Ոսկեվանի գեղարվեստի դպրոց</b></h3>
            <br>
            <br>
            <h4>Տնօրեն` Արթուր Մելքոնյան</h4>
            </p>
        </div>
        <div class="col-4">
            <img src="{{asset('assets/img/fine_art/Artur.jpg')}}" class="par">
        </div>
    </div>
    <div>
        <p class="kitar mt-4">
            Դպրոցը բացվել է 2010թ. Ապրիլի 17-ին: Նախնական շրջանում ունեցել է ավելի քան 45 աշակերտ:
            <br>
            <br>
            2010 թ. ամռանը սկսել են մասնակցել Կողբի գեղարվեստի դպրոցի կողմից կազմակերպված ամենամյա պլեներներին:
            <br>
            <br>
            2011 թ. Ապրիլի 17-ին կազմակերպվել է առաջին ցուցահանդեսը: Ցուցահանդեսները կրում են շարունակական բնույթ:
            <br>
            <br>
            2012թ. Դպրոցը տվել է առաջին շրջանավարտը, որն ընդունվել է համալսարան (ԵՊՀ Իջևանի մասնաճյուղ՝
            դիզայների մասնագիտացմամբ):
            <br>
            <br>
            2022թ. Փետրվարի 1-ից բացվել է նաև կավագործություն: Ուսուցչուհի՝ Արինա Դավթյան: Սովորում են 8 աշակերտ:
            Համագործակցում են 4u.am կայքի հետ:
        </p>
    </div>

    <div class="row">
        <div class="col-sm-3">
            <img src="{{asset('assets/img/fine_art/poqreri_xumb.jpg')}}" alt="poqer" style="width: 250px; height: 250px">
        </div>
        <div class="col-sm-3">
            <img src="{{asset('assets/img/fine_art/budka.jpg')}}" alt="budka" style="width: 250px; height: 250px">
        </div>
        <div class="col-sm-3">
            <img src="{{asset('assets/img/fine_art/senyak.jpg')}}" alt="senyak" style="max-width: 100%; height: 250px">
        </div>
        <div class="col-sm-3">
            <img src="{{asset('assets/img/fine_art/kav.jpg')}}" alt="kav" style="max-width: 100%; height: 250px"></div>
    </div>
    <div class="row mt-5 mb-5">
        <div class="col-sm-3">
            <img src="{{asset('assets/img/fine_art/pulik.jpg')}}" alt="pulik" style="width: 250px; height: 250px">
        </div>
        <div class="col-sm-3">
            <img src="{{asset('assets/img/fine_art/qandak.jpg')}}" alt="qandak" style="width: 250px; height: 250px">
        </div>
        <div class="col-sm-3">
            <img src="{{asset('assets/img/fine_art/bacik.jpg')}}" alt="bacik" style="max-width: 100%; height: 250px">
        </div>
        <div class="col-sm-3">
            <img src="{{asset('assets/img/fine_art/poqrik.jpg')}}" alt="poqrik" class="poqrik"></div>
    </div>
</div>
@include('layouts.footer')

@yield('footer')
