@include('layouts.header')

@yield('header')



<div class="container-fluid" style="margin-top: 10%">
    <h1 class="text-center" style="color: rgba(103, 176, 209, 0.8)">ՆՈՐՈՒԹՅՈՒՆՆԵՐ</h1>
    <?php foreach ($news as $value) { ?>
    <div class="row m-3 mt-5">
        <div class="col-4">
            <img src="{{asset('assets/img/news/' .$value['img'])}}" alt="news" class="d-flex" style="width: 90%; border-radius: 7%">
        </div>
        <div class="col-7">
            <h4 style="color: #6c757d"><?php echo $value['title'] ?></h4>
            <p><?php echo $value['description']?></p>
        </div>
    </div>
    <?php } ?>
</div>


@include('layouts.footer')

@yield('footer')
