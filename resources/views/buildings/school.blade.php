@include('layouts.header')

@yield('header')


<div class="container mt-5">
    <div class="mt-5">
        <h1 class="text-center" style="margin-top: 10%">Ոսկեվանի միջնակարգ դպրոց</h1>
    </div>
    <div>
        <img src="{{asset('assets/img/school/dproc.jpg')}}" class="dproc_img">
    </div>

    <div>
        <?php foreach ($school as $value) { ?>
        <div>
            <h3 class="text-center" style="font-family: Sofia;"><?php echo $value['name']; ?></h3>
        </div>
        <p style="text-indent: 3%; padding: 1%;"><?php echo $value['description'] ?></p>
        <?php
        }
        ?>
    </div>
    <div class="row mt-5">
        <div>
            <h3 class="text-center mt-5" style="font-family: Sofia">Դպրոցի առաջին շրջավարտները</h3>
        </div>
        <div class="col-3 mt-5">
            <h5 style="padding-left: 10%; font-family: Sofia"><b>Ոսկեվան</b></h5>
            <ul>
                <?php
                foreach ($voskevan as $value) {
                ?>
                <li><?php echo $value['name'] . ' ';
                    echo $value['lastname']; ?>
                </li>
                <?php
                }
                ?>
            </ul>
        </div>
        <div class="col-3 mt-5">
            <h5 style="padding-left: 10%; font-family: Sofia"><b>Բաղանիս</b></h5>
            <ul>
                <?php
                foreach ($baxanis as $value) {
                ?>
                <li><?php echo $value['name'] . ' ';
                    echo $value['lastname']; ?>
                </li>
                <?php
                }
                ?>
            </ul>
        </div>
        <div class="col-3 mt-5">
            <h5 style="padding-left: 10%; font-family: Sofia"><b>Բարեկամավան</b></h5>
            <ul>
                <?php
                foreach ($barekamavan as $value) {
                ?>
                <li><?php echo $value['name'] . ' ';
                    echo $value['lastname']; ?>
                </li>
                <?php
                }
                ?>
            </ul>
        </div>
        <div class="col-3 mt-5">
            <h5 style="padding-left: 10%; font-family: Sofia"><b>Կոթի</b></h5>
            <ul>
                <?php
                foreach ($koti as $value) {
                ?>
                <li><?php echo $value['name'] . ' ';
                    echo $value['lastname']; ?>
                </li>
                <?php
                }
                ?>
            </ul>
            <h5 style="padding-left: 10%; font-family: Sofia;"><b>Ջուջեվան</b></h5>
            <ul>
                <?php
                foreach ($jujevan as $value) {
                ?>
                <li><?php echo $value['name'] . ' ';
                    echo $value['lastname']; ?>
                </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
    <div>
        <h3 class="text-center mt-5" style="font-family: Sofia">Ներկա պահին դպրոցի ուսուցչական կազմը</h3>
    </div>
    <div class="row mt-5 mb-5">
        <?php
        foreach ($teacher as $value) {
        ?>
        <div class="col-3">
            <div class="card" style="width:320px; margin-left: 4%; margin-bottom: 2%; height: 450px">
                <img class="card-img-top" src="{{asset('assets/img/school/'. $value['img'])}}" alt="Card image" style="width: 100%; height: 75%">
                <div class="card-body">
                    <h4 class="card-title"><?php echo $value['name'] . '  ';
                        echo $value['lastname']; ?></h4>
                    <p class="card-text "><?php echo $value['position'] ?></p>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </div>


</div>


@include('layouts.footer')

@yield('footer')
