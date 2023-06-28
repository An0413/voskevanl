@include('layouts.header')

@yield('header')
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>

<style>
    .carousel.carousel-thumbs-top .carousel-indicators {
        top: auto;
        bottom: -40px;
    }

    .carousel .carousel-indicators button {
        width: 100px !important;
    }
</style>

<div class="container mt70">
    <div class="row">
        <div class="col-6">
            <div id="carouselExampleIndicatorsLeft" class="carousel slide carousel-fade carousel-thumbs-top" data-bs-ride="carousel" data-bs-interval="3000">
                <div class="slider carousel-indicators position-absolute">
                    @foreach($sights_gallery as $key=>$value)
                        <button type="button" data-bs-target="#carouselExampleIndicatorsLeft" data-bs-slide-to="{{$key}}" class="{{$key == 0 ? 'active' : ''}}" aria-current="true" aria-label="Slide {{$key + 1}}">
                            <img class="d-block w-100 img-fluid thumb_img"
                                 src="{{ asset('assets/img/sights/' . $value->image) }}" />
                        </button>
                    @endforeach
                </div>
                <div class="carousel-inner mb-5">
                    @foreach($sights_gallery as $key=>$value)
                        <div class="carousel-item {{$key == 0 ? 'active' : ''}}">
                            <img src="{{ asset('assets/img/sights/' . $value->image) }}" class="d-block w-100" alt="...">
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicatorsLeft" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicatorsLeft" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        @foreach($sights_detail as $value)
            <div class="col-6 colvec">
                <div data-aos="fade-up">
                <h4 class="heading">{{$value->name}}</h4>
                <p style="text-align: justify" class="mt-4"><b>{{$value->description}}</b></p>
                </div>
                </div>
        @endforeach
    </div>

</div>

<script>
    $(document).ready(function(){
        let height = $('#carouselExampleIndicatorsLeft').find('.thumb_img').css('width');
        $('#carouselExampleIndicatorsLeft').find('.thumb_img').css('height', height);
    })
</script>

@include('layouts.footer')

@yield('footer')
