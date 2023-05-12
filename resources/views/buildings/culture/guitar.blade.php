@include('layouts.header')

@yield('header')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="assets/img/voskevan/https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/img/voskevan/https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

<div class="container" style="margin-top: 10%; margin-bottom: 10%">
    <div class="row">
        <div class="col-4"><img src="{{asset('assets/img/guitar/guitar.jpg')}}" alt="hush" class="guitar">
        </div>
        <div class="col-4">
            <h2><b>Ոսկեվանի կիթառի խմբակ</b></h2>
            <br>
            <br>
            <h3>Ուսուցչուհի՝ Կարինե Ալեքսանյան</h3>
        </div>
        <div class="col-4"><img src="{{asset('assets/img/guitar/karine.jpg')}}" alt="karine" class="karine">
        </div>
    </div>
    <div class="mt-5">
        <p class="kitar mt-4">Ոսկեվանում բացվել է 2022թ. հուլիս ամսից Արթուր Մելքոնյանի և Կարինե Ալեքսանյանի
            ջանքերով:
            <br>
            Խմբում սովորում են 16 աշակերտներ:
        </p>
    </div>
    <div class="col-12 mt-5">
        <img src="{{asset('assets/img/guitar/collage-guitar.jpg')}}" alt="collage-guitar.jpg" class="g_n">
    </div>
</div>
@include('layouts.footer')

@yield('footer')
