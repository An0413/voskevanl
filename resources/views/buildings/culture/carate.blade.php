@include('layouts.header')

@yield('header')


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="assets/img/voskevan/https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/img/voskevan/https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">


<div class="container" style="margin-top: 10%;">
    <div class="row">
        <div class="col-6">
            <img src="{{asset('assets/img/carate/karate.jpg')}}" alt="hush" class="car">
        </div>
        <div class="col-6">
            <p class="small3">
            <h3><b>Ոսկեվանի կարատեի խմբակ</b></h3>
            <br>
            <br>
            <h4>Մարզիչ՝ Սասուն Եգանյան</h4>
        </div>
    </div>
    <p class="kitar mt-4">Ոսկեվանում խմբակը գործում է 2022թ. հունիս ամսից:
        <br>
        Խմբում սովորում են 16 աշակերտներ:
        <br>
        Հուլիսի 1-ի10-ը խումբը մասնակցել է Թեքվոնդոյի երիտասարդների Հայաստանի առաջնությանը, որտեղից
        Յուրա Մարգարյանը վերադարձել է բրոնզե մեդալով:
        <br>
        Հուլիսի 10-ին խումբը մասնակցել է "Սևանի գավաթ" Թեքվոնդոյի ամենամյա մրցաշարին, որտեղից էլ վերադարձել են
        մեդալներով և պատվոգրերով:
        Ոսկեվան գյուղի սաների ցուցաբերած արդյունքները՝
        <br>
        <br>
        Էլիզբարյան Մարիամ ոսկե մեդալակիր,
        <br>
        <br>
        Հարությունյան Ժորա ոսկե մեդալակիր,
        <br>
        <br>
        Մարգարյան Յուրա արծաթե մեդալակիր,
        <br>
        <br>
        Սարգսյան Արմեն արծաթե մեդալակիր,
        <br>
        <br>
        Ղազարյան Արմեն արծաթե մեդալակիր,
        <br>
        <br>
        Հակոբյան Ռուբեն արծաթե մեդալակիր,
        <br>
        <br>
        Եղիազարյան Ալեքս արծաթե մեդալակիր,
        <br>
        <br>
        Սահակյան Յուրա արծաթե մեդալակիր,
        <br>
        <br>
        Եսայան Էդգար բրոնզե մեդալակիր,
        <br>
        <br>
        Դեմիրխանյան Հովհաննես բրոնզե մեդալակիր,
        <br>
        <br>
        Մարգարյան Գրիշա բրոնզե մեդալակիր:
    </p>
</>
<div class="row">

    <div class="col-md-5 m-lg-5">
        <img src="{{asset('assets/img/carate/kollaj.jpg')}}" alt="kollaj" style="max-width: 100%; height: auto;">
    </div>

    <div class="col-md-5 mt-5">
        <img src="{{asset('assets/img/carate/kollaj23.jpg')}}" alt="kollaj23" style="max-width: 100%; height: auto;">
    </div>

</div>
</div>
@include('layouts.footer')

@yield('footer')
