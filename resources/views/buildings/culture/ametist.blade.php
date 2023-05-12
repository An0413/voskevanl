@include('layouts.header')

@yield('header')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="assets/img/voskevan/https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/img/voskevan/https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

<div class="container" style="margin-bottom: 10%; margin-top: 10%;">
    <div class="row">
        <div class="col-4">
            <img src="{{asset('assets/img/ametist/ametist.jpg')}}" alt="hush" class="par">
        </div>
        <div class="col-4"
        <p class="small3">
        <h2><b>Ամետիստ պարային համույթ</b></h2>
        <br>
        <br>
        Գեղարվեստական ղեկավար՝ Գայանե Վարդանյան/ Նասիբյան
        </p>
    </div>
    <div class="col-4">
        <img src="{{asset('assets/img/ametist/gayane.jpg')}}" alt="gayane" class="gayane">
    </div>
</div>
<p class="small3">
    Ոսկեվանում պարային համույթը բացվել է 2019թ հունիս ամսից: Խմբակը գործում է նաև Կողբ գյուղում. Տարին մեկ
    անգամ երկու գյուղերի աշակերտների հետ միասին կազմակերպվում է հաշվաետու համերգ, որի ընթացքում երեխաները
    ցույց են տալիս պարի ոլորտում իրենց ձեռքբերումները և առաջադիմությունը: Խմբերը հաճախակի մասնակցում են
    փառատոնների և համերգների, երտեղից էլ վերադառնում են մեդալներով և պատվոգրերով:
    <br>
    Այժմ Ոսկեվանն ունի 3 խումբ՝ մեծեր, միջնեկներ և փոքրեր:
    <br>
    <br>
    Մեծերի խումբ՝ 9 երեխա,
    <br>
    <br>
    Միջնեկների խումբ՝ 9 երեխա,
    <br>
    <br>
    Փոքրերի խումբ՝ 14 երեխա:


</p>

<div class="container container_c">
    <div id="carousel">
        <figure><img src="{{asset('assets/img/ametist/gorg.jpg')}}" alt="" style=""></figure>
        <figure><img src="{{asset('assets/img/ametist/karmir.jpg')}}" alt=""></figure>
        <figure><img src="{{asset('assets/img/ametist/hamerg.jpg')}}" alt=""></figure>
        <figure><img src="{{asset('assets/img/ametist/mijnek.jpg')}}" alt=""></figure>
        <figure><img src="{{asset('assets/img/ametist/kapuyt.jpg')}}" alt=""></figure>
        <figure><img src="{{asset('assets/img/ametist/dexin.jpg')}}" alt=""></figure>
        <figure><img src="{{asset('assets/img/ametist/taraz.jpg')}}" alt=""></figure>
        <figure><img src="{{asset('assets/img/ametist/jpit.jpg')}}" alt=""></figure>
        <figure><img src="{{asset('assets/img/ametist/porc.jpg')}}" alt=""></figure>
    </div>
</div>

</div>
@include('layouts.footer')

@yield('footer')
