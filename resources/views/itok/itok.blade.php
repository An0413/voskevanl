@include('layouts.header')

@yield('header')


<div class="container" style="margin-top: 6%; margin-bottom: 6%">
    <div class="row m-5">
        <div>
            <h2 style="color: rgba(103, 176, 209, 0.8)" class="text-center mt-5">Մեր ՄԱՍԻՆ</h2>
        </div>
    </div>
    <div class="row">
        <h3 class="text-center" style="color: rgba(103, 176, 209, 0.8)"><b>ITOK</b> - Կազմակերպության հիմնադիր տնօրեն Աշոտ Սաֆարյան</h3>
        <div class="col-3">
            <img src="{{asset('assets/img/about/lider.jpg')}}" alt="Ashot" style="width: 300px; height: 300px;">
        </div>
        <div class="col-9" style="border: 2px solid; border-radius: 10%; padding: 5%">
            <p><b>Աշոտ Սուրենի Սաֆարյանը</b> ծնվել է 1995 թվականի հունիս 18-ին Նոյեմբերյանի շրջանի Ոսկեվան
                գյուղում։2001-2012թթ․ սովորել և ավարտել է տեղի դպրոցը։
                2012 թվականին ընդունվել է <b>ՀԱՊՀ << Քոմփ համակարգեր և ինֆորմատիկայի>></b> ֆակուլտետը։ 2013-2015թթ․
                ծառայել է
                ՀՀ ԶՈՒ-ում։2015-2018 թթ․ շարունակել է բակալավրիատը։
                2018-2020թթ․ ընդունվել և ավարտել է << Քոմփ համակարգեր և ինֆորմատիկայի >> մագիստրաուրան։2016-2017թթ
                աշխատել է<b> << Smart LTD>></b> կազմակերպությունում,2017-2021թթ․՝
                <b> << Tricolor imaging>></b>։2021 թվականից <span style="color: rgba(103, 176, 209, 0.8)"> <b><< ITOK>></b></span>
                ՍՊԸ-ում ։2022 թվականից համագործակցում է Շվեցիարական
                <b> << IMMOMIG SA>>-</b> հետ, որպես PHP FULL-STACK ծրագրավորող։</p>
            <p>
                <a href="https://www.facebook.com/ashot.ashot.7" target="_blank"
                   style="border: none; font-size: 40px">
                    <i class="bi bi-facebook" style="color: rgba(103, 176, 209, 0.8);"></i>
                </a>
                <button class="btn" data-bs-toggle="popover" title="ashot.safaryan219@gmail.com"
                        data-bs-content="Some content inside the popover">
                    <i class="bi bi-at" style="font-size: 40px; color: rgba(103, 176, 209, 0.8);"></i>
                </button>


                <span style="margin-left: 6%;font-size: 20px">Աշոտ Սաֆարյանի ֆեյսբուքյան էջը և E-mail-ը</span>
            </p>
        </div>
    </div>
    <div class="p-5">
        <h2 class="text-center" style="color:rgba(103, 176, 209, 0.8)">Մեր թիմի անդամները</h2>
        <div class="row" style="margin-left: 50px;">
            <?php foreach ($itok as $value) {
            ?>
            <div class="col-6  pc">
                <div class="card profile cardi" style="width:320px; height: 300px;">
                    <img class="card-img-top mimg" src="assets/img/about/<?php echo $value['img']; ?>" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $value['name'] . '   ';
                            echo $value['last_name']; ?></h4>
                        <p class="card-text"><?php echo $value['pashton'] . "  "; ?>
                            <a href="<?php echo $value['fb_url']; ?>" target="_blank"
                               style="border: none; color: #4f4fc7"><i class="bi bi-facebook"
                                                                       style="margin-right: 5px"></i></a>
                            <button class="btn" data-bs-toggle="popover" title="<?php echo $value['email']; ?>"
                                    data-bs-content="Some content inside the popover">
                                <i class="bi bi-at" style="color: #4f4fc7; font-size: 15px"></i>
                            </button>
                        </p>

                        <script>
                            var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
                            var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
                                return new bootstrap.Popover(popoverTriggerEl)
                            })
                        </script>
                    </div>
                </div>
            </div>
            <br>
            <?php }
            ?>

        </div>
    </div>

    <div class="row mt-5">
        <h2 class="text-center mt-5">Մեր մասին</h2>
        <div class="col-6">
            <!--        itok i logo-->
        </div>
        <div class="col-6">
            <p>ITOK-ը WEB ծրագրավորման և ուսուցման կենտրոն է։ Այն իր գործունեությունը սկսել է 2020 թվականից,իսկ 2021
                թվականին ստացել է իրավական կարգավիճակ,
                հիմնադիր տնօրենն է Աշոտ Սաֆարյանը։
                Այն ոչ միայն զբաղվում է WEB կայքերի պատրաստմամբ, այլ նաև ուսուցմամբ։ Այս կարճ ժամանակահատվածում կենտրոնը
                ունեցել է 5 խումբ,
                որից երեքը դպրոցի ավագ դասարանի աշակերտներ են։ Ուսանողները ոչ միայն Ոսկեվանցիներ են, այլև տարածաշրջանի
                այլ գյուղերից։
            </p>
            <p>
                ՍՊԸ պատրաստում է BACK-END,FULL-STACK,FRONT-END ծրագրավորողներ։Մենք պատրաստում ենք ինտերնետ-խանութներ,
                բարդ գործառույթներով կորպորատիվ կայքեր, բիզնես-կայքեր:
            </p>
            <p>
                ITOK-ը իր լավագույն աշակերտների ապահովում է աշխատանքով։Այն մեծ հեռանկար է ստեղծում ոչ միայն հայրենի
                գյուղի, այլ նաև տարածաշրջանի երիտասարդության համար։
            </p>
        </div>
    </div>
</div>
@include('layouts.footer')

@yield('footer')
