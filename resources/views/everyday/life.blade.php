@include('layouts.header')

@yield('header')

<h1 class="text-center" style="margin-top: 5%">ԱՌՕՐՅԱՆ ՈՍԿԵՎԱՆՈՒՄ</h1>

<div id="demo" class="carousel slide mt48" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>

    <!-- The slideshow/carousel -->


    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>
<div class="container" style="margin-top: 7%">
    <div class="row mt-5">
        @foreach($news as $value)
            <div class="col-3 ">
                <div class="card border-0 mb-4">
                    <div class="backgroundEffect"></div>
                    <div class="pic"><img src="{{asset('assets/img/gallery/' .$value->img)}}">
                        <div class="date"><span class="day">{{$value->add_date}}</span></div>
                    </div>
                    <div class="content"><p class="h-1 mt-4 news_title">{{$value->title}}</p>
                        <p class="text-muted mt-3  news_p">{{$value->short_description}}</p>
                        <div class="d-flex align-items-center justify-content-between mt-3 pb-3">
                            <div class="btn btn-primary"><a href="{{route('everyday.news', $value->id)}}"
                                                            class="text-muted news_read_more">Կարդալ
                                    ավելին</a><span class="fas fa-arrow-right"></span></div>
                            <div class="d-flex align-items-center justify-content-center foot">
                                <p class="admin">{{$users[$value->user_id]['workers']['name'].' '.$users[$value->user_id]['workers']['lastname']}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @if(ceil($news->total()/$count_per_page) > 1)
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end">
                <li class="page-item {{$news->currentPage() == 1 ? 'hidden' : ''}}">
                    <a class="page-link" href="{{ $news->previousPageUrl() }}" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only"></span>
                    </a>
                </li>
                @for($i = 1; $i <= ceil($news->total()/$count_per_page); $i++)
                    <li class="page-item"><a class="page-link {{$news->currentPage() == $i ? 'active_page' : ''}}"
                                             href="{{$news->url($i)}}">{{$i}}</a></li>
                @endfor
                <li class="page-item {{$news->currentPage() == ceil($news->total()/$count_per_page) ? 'hidden' : ''}}">
                    <a class="page-link" href="{{ $news->nextPageUrl() }}" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only"></span>
                    </a>
                </li>
            </ul>
        </nav>
    @endif



</div>

@include('layouts.footer')

@yield('footer')
