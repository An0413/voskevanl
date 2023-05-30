<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Ոսկեվան</title>
    <meta content="" name="description">
    <meta content="" name="keywords"    >

    <!-- Favicons -->
    <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
    <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">



    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('/assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Squadfree
    * Updated: Mar 10 2023 with Bootstrap v5.2.3
    * Template URL: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>
@section('header')
    <header id="header" class="fixed-top header-transparent">
        <div class="container d-flex align-items-center justify-content-between position-relative">

            <div class="logo">
                <h1 class="text-light"><a href="{{route('glxavor.glxavor')}}"><span>ՈՍԿԵՎԱՆ</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    @php
                        $menu = \App\Models\Menu::all();
                    @endphp
                    @foreach($menu as $value)
                        @if($_SERVER['REQUEST_URI'] == $value->url)
                            @php
                                $active = 'active';
                            @endphp
                        @else
                            @php
                                $active = '';
                            @endphp                        @endif
                        @if ($value->parent_id == 0 && $value->is_drop == 0)
                            <li><a class="nav-link scrollto  {{$active}} "
                                   href="{{ $value->url }}">{{$value->name}}</a></li>
                        @elseif ($value->parent_id == 0)
                            <li class="dropdown scrollto {{$active}}"><a
                                    href="javascript:void(0);"><span>{{ $value->name }}</span> <i
                                        class="bi bi-chevron-down"></i></a>
                                <ul>
                                    @foreach ($menu as $sub_menu)
                                        @if ($sub_menu->parent_id == $value->id)
                                            <li><a href=" {{ $sub_menu->url }}  "> {{ $sub_menu->name }} </a></li>
                                        @endif
                                    @endforeach
                                </ul>
                            </li>
                        @endif
                    @endforeach
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header>
@endsection
