@include('layouts.header')

@yield('header')


<div class="container" style="margin-top: 6%; margin-bottom: 6%">
    <div class="row mt-5">
        <div class="col-12">
            <h2 class="patm">ՄՇԱԿՈՒՅԹ</h2>
            <div class="row mt-4">
                <div class="col-3">
                    <img src="{{asset('assets/img/culture/karuyc.jpg')}}" alt="karuyc" class="akumb">
                </div>
                <div class="col-9">

                    <h5 class="mt-3">ՈՍԿԵՎԱՆԻ ՄՇԱԿՈՒՅԹԻ ԿԵՆՏՐՈՆ</h5>
                    <p class="paragraph">Ներկայումս Ոսկեվանի մշակույթի տունը զբաղվում է բավականին ակտիվ
                        գործունեությամբ:
                        Հաճախակի կազմակերպվում
                        են միջոցառումներ, որոնք առանձնանում են իրենց հայկական ավանդական ոճով: Գյուղում բացվել են
                        խմբակներ,
                        որոնց
                        հաճախում են ոչ միայն տեղի, այլ նաև շրջակա գյուղերի երեխաները: </p>
                </div>
            </div>

            <h3 class="patm"> Ոսկեվանի մշակույթի կենտրոնի աշխատակազմը</h3>
            <div class="row">
                <?php
                foreach ($culture as $value) {
                ?>
                <div class="col-sm-3 card heru mt-4">
                    <img class="card-img-top" src="{{asset('assets/img/culture/'.$value["image"])}}" alt="Card image"
                         style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title"><?= $value["name"] ?></h4>
                        <p class="card-text"><?= $value["description"] ?></p>
                    </div>
                </div>
                <?php
                }
                ?>

            </div>
            <div class="row">
                <h2 class="xmbak">Ոսկեվանում գործող դպրոցներ և խմբակներ</h2>

                <?php
                foreach ($culturem as $value) {
                ?>
                <div class="col-sm-3 card heru mt-4">
                    <img class="card-img-top" src="{{asset('assets/img/culture/' . $value["image"])}}" alt="Card image"
                         style="width:100%">
                    <div class="card-body">
                        <h5 class="card-title"><?= $value["name"] ?></h5>
                        <p class="card-text small2"><?= $value["description"] ?></p>
                    </div>
                    <div class="card-footer text-center">
                        <button class="btn btn-block b_1">
                            <a class="text-white" href="<?= $value["url"] . '?page=' . $value['id'] ?>"
                               target="_blank">Կարդալ ավելին</a>
                        </button>
                    </div>
                </div>
                <?php
                }
                ?>


            </div>
        </div>
    </div>
</div>
@include('layouts.footer')

@yield('footer')
