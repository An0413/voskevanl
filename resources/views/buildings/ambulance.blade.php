@include('layouts.header')

@yield('header')


<div class="container">
    <h1 class="text-center administration_header">Ամբուլատորիա</h1>
    <div class="row mt-5 n_p p-5">
        <div class="col-6">
                @foreach($ambulance as $value)
                    <h3>{{ $value->title }}</h3>
                    <p>{{ $value->content }}</p>
                @endforeach

        </div>
        <div class="col-6">
            <img src="{{asset('assets/img/buildings/ambulatoria.jpg')}}"
                 style="width: 90%;margin-left: 10%; margin-bottom: 6%">
        </div>

    </div>

    <h3 class="patm mt-5"> Ոսկեվանի ամբուլատորիայի աշխատակազմը</h3>
    <div class="row">
        @foreach ($worker as $value)
        <div class="col-sm-3 card heru mt-5">
            <img class="card-img-top" src="{{asset('assets/img/kindergarten/'.$value->img)}}" alt="Card image"
                 style="width:100%">
            <div class="card-body">
                <h3 class="card-title">{{$value->name}}</h3>
                <h3 class="card-title">{{$value->lastname}}</h3>
                <h5 class="card-title">{{$value->positions->title}}</h5>
            </div>
        </div>
        @endforeach
    </div>
</div>


@include('layouts.footer')

@yield('footer')
