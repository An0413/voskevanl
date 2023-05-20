@include('layouts.header')

@yield('header')


<div data-spy="scroll" data-target=".navbar" data-offset="150"
     style="position: relative;">
    <div class="mt-5">
        <h1 class="text-center" style="margin-top: 10%; font-size: 60px">Կառույցներ</h1>
    </div>
    <div class="bul_div">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark navbar-inverse navbar-fixed-top" id="bul_div"
             style="margin-top: 70px">
            <div class="container-fluid">
                <ul class="navbar-nav" >
                    <?php foreach ($buildings as $value) {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link href" href="#section_<?php echo $value['id']; ?>"><?php echo $value['name']; ?></a>
                    </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </nav>
        <div id="for_scroll"></div>
        <?php
        foreach ($buildings as $value) {
        ?>
        <div class="row">
            <div id="section_<?php echo $value['id']; ?>" class="div_kar">
                <h3 class="text-center"><?php echo $value['name']; ?></h3>
                <div class="col-3">
                    <img src="{{asset('assets/img/buildings/'. $value['img'])}}" class="bul_img">
                </div>
                <div class="col-9">
                    <p class="bul_p"><?php echo $value['description']; ?><br>
                        <a href="<?php echo $value['url']; ?>">
                            <button type="button" class="btn_k btn">Կարդալ ավելին</button>
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
    <script src = "{{asset('assets/js/buildings.js')}}"></script>
@include('layouts.footer')

@yield('footer')
