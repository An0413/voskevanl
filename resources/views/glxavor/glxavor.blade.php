@include('layouts.header')

@yield('header')

<div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="glxavor">
                <h1>ԲԱՐԻ ԳԱԼՈՒՍՏ ՈՍԿԵՎԱՆ</h1>
            </div>
            <img src="{{asset('assets/img/glxavor/voskevan.jpg')}}" alt="Los Angeles" class="d-block" style="width:100vw; height: 100vh">
            <div class="carousel-caption">
            </div>
        </div>
        <div class="carousel-item">
            <div class="glxavor">
                <h1>ԲԱՐԻ ԳԱԼՈՒՍՏ ՈՍԿԵՎԱՆ</h1>
            </div>
            <img src="{{asset('assets/img/glxavor/voskevan1.jpg')}}" alt="Chicago" class="d-block" style="min-width:100vw; height: 100vh">
            <div class="carousel-caption">
            </div>
        </div>
        <div class="carousel-item">
            <div class="glxavor">
                <h1>ԲԱՐԻ ԳԱԼՈՒՍՏ ՈՍԿԵՎԱՆ</h1>
            </div>
            <img src="{{asset('assets/img/glxavor/voskevan2.jpg')}}" alt="New York" class="d-block" style="min-width:100vw; height: 100vh">
            <div class="carousel-caption">
            </div>
        </div>
    </div>

    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

@include('layouts.footer')

@yield('footer')
