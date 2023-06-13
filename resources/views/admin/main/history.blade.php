@extends('admin.layouts.main')
@section('content')

{{--<section id="portfolio" class="portfolio">--}}
{{--    <div class="container">--}}
{{--        <div class="row portfolio-container" data-aos="fade-up">--}}

{{--            @foreach($images as $value)--}}
{{--                <div class="col-lg-4 col-md-6 portfolio-item filter-app">--}}
{{--                    <div class="portfolio-wrap">--}}
{{--                        <img src="{{asset('assets/img/history/'. $value['src'])}}" class="img-fluid" alt="">--}}
{{--                        <div class="portfolio-links">--}}
{{--                            <a href="{{asset('assets/img/history/'. $value['src'])}}"--}}
{{--                               data-gallery="portfolioGallery"--}}
{{--                               class="portfolio-lightbox"><i class="bx bx-plus"></i></a></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section><!-- End Portfolio Section -->--}}

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mt-3">
                <div class="col-11"><h3>ՊԱՏՄՈՒԹՅՈՒՆ</h3></div>
                <div class="col-1 mt-1">
                    <a href="{{route('history_create')}}">
                        <button class="btn-success">+Ավելացնել</button>
                    </a>
                </div>
            </div>
            <table class="table mt-3" id="workers_table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col" class="w_20">Հ/հ</th>
                    <th scope="col">Լուսանկար</th>
                    <th scope="col">Վերնագիր</th>
                    <th scope="col">Կարճ նկարագրություն</th>
                    <th scope="col">Ստատուս</th>
                    <th scope="col">Խմբագրել</th>
                    <th scope="col">Ջնջել</th>
                </tr>
                </thead>
                <tbody>
                @foreach($history as $key=>$value)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td scope="row"><img src="{{asset('assets/img/history/'. $value->image)}}"
                                             style="width: 90px; height: 90px; object-fit: cover"></td>
                        <td>{{$value->name}}</td>
                        <td>{{substr($value['description'], 0, 1400) . "..."}}</td>
                        <td>{{$value->patm_status->status}}</td>
                        <td>
                            @if($value->history_status == 1)
                                <a href="{{route('history_edit', $value->id)}}"><i
                                        class="nav-icon fas fa-edit text-primary"></i></a></td>
                        @endif
                        <td>
                            @if($value->history_status == 1)
                                <form action="{{route('history_delete', $value->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="border-0 bg-transparent">
                                        <i class="nav-icon fas fa-trash text-danger" role="button"></i>
                                    </button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="row mt-3">
            <div class="col-1 mt-1">
                <a href="{{route('history_create')}}">
                    <button class="btn-success">+Ավելացնել</button>
                </a>
            </div>
        </div>
    </div>
</div>
<script>
    $(".small2").each(function () {
        let text = $(this).text();
        if (text.length > 270) {
            console.log(text.length);
            $(this).html(text.substr(0, 256) + '<span class="elipsis">' +
                '</span>...');
        }
    });
</script>
@endsection


