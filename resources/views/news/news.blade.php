@include('layouts.header')

@yield('header')


<div class="container" style="margin-top: 7%">
    <h1 class="text-center">ՆՈՐՈՒԹՅՈՒՆՆԵՐ</h1>
    <div class="d-lg-flex mt-5">
        @foreach($news as $value)
            <div class="card border-0 me-lg-4 mb-lg-0 mb-4">
                <div class="backgroundEffect"></div>
                <div class="pic"><img src="{{asset('assets/img/news/' .$value['img'])}}">
                    <div class="date"><span class="day">{{$value->add_date}}</span></div>
                </div>
                <div class="content"><p class="h-1 mt-4">{{$value->title}}</p>
                    <p class="text-muted mt-3">{{$value->description}}</p>
                    <div class="d-flex align-items-center justify-content-between mt-3 pb-3">
                        <div class="btn btn-primary"><a href="{{$value->src}}" class="text-muted">Կարդալ ավելին</a><span class="fas fa-arrow-right"></span></div>
                        <div class="d-flex align-items-center justify-content-center foot"><p class="admin">{{$value->autor}}</p>
                            <p class="ps-3 icon text-muted"><span class="fas fa-comment-alt pe-1">{{$value->status}}</span></p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


<div class="container-fluid" style="margin-top: 10%">
    <h1 class="text-center" style="color: rgba(103, 176, 209, 0.8)">ՆՈՐՈՒԹՅՈՒՆՆԵՐ</h1>
    <?php foreach ($news as $value) { ?>
    <div class="row m-3 mt-5">
        <div class="col-4">
            <img src="{{asset('assets/img/news/' .$value['img'])}}" alt="news" class="d-flex"
                 style="width: 90%; border-radius: 7%">
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
