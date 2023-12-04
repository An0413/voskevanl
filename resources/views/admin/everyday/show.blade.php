@extends('admin.layouts.main')
@section('content')
    @php
        $status = [
                0 => 'Ջնջված',
                1 => 'Հաստատված',
                2 => 'Սպասում է հաստատման',
                3 => 'Սպասում է հաստատման',
                4 => 'Մերժված',
                5 => 'Մերժված',
    ];
    @endphp


    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <ul class="nav nav-tabs justify-content-center text-muted">
                    <li class="active"><a data-toggle="tab" href="#user">Նորություններ</a></li>
                    <li style="margin-left: 70px"><a data-toggle="tab" href="#image">Լուսանկարներ</a></li>
                </ul>
                <div class="tab-content">
                    <div id="user" class="tab-pane fade in active show">
                        <div class="row mt-3">
                            <div class="col-11"><h3>Նորություններ</h3></div>
                            <div class="col-1 mt-1">
                                <button class="btn-success add_new"><a
                                        href="{{route('everyday_create')}}">+Ավելացնել</a></button>
                            </div>
                        </div>
                        <table class="table mt-3" id="workers_table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col" class="w_20">Հ/հ</th>
                                <th scope="col">Լուսանկար</th>
                                <th scope="col">Վերնագիր</th>
                                <th scope="col">Կարճ նկարագրություն</th>
                                <th scope="col">Մեկնաբանություններ</th>
                                <th scope="col">Ստատուս</th>
                                <th scope="col">Խմբագրել</th>
                                <th scope="col">Ջնջել</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($news as $key=>$value)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td scope="row"><img src="{{asset('assets/img/gallery/'. $value->img)}}"
                                                         style="width: 90px; height: 90px; object-fit: cover"></td>
                                    <td>{{$value->title}}</td>
                                    <td>{{$value->short_description}}</td>
                                    <td><button type="button" class="news_button"><a href="{{ route('newsevery_comment', $value->id)}}" style="color: black">Տեսնել բոլորը</a></button></td>
                                    <td>{{$value->news_status->status}}</td>
                                    <td>
                                        @if($value->status == 1 || $value->status == 4)
                                            <a href="{{route('everyday_edit', $value->id)}}"><i
                                                    class="nav-icon fas fa-edit text-primary"></i></a></td>
                                    @endif
                                    <td>
                                        @if($value->status == 1 || $value->status == 4)
                                            <form action="{{route('everyday_delete', $value->id)}}" method="post">
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
                    <div id="image" class="tab-pane fade">
                        <div class="row mt-3">
                            <div class="col-11"><h3>Լուսանկարներ</h3></div>
                            <div class="col-1 mt-1">
                                <button class="btn-success add_new"><a
                                        href="{{route('everyday_gallery_create')}}">+Ավելացնել</a></button>
                            </div>
                        </div>
                        <table class="table mt-3 w-50" id="workers_table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">Հ/հ</th>
                                <th scope="col">Լուսանկար</th>
                                <th scope="col">Ստատուս</th>
                                <th scope="col">Խմբագրել</th>
                                <th scope="col">Ջնջել</th>
                            </tr>
                            </thead>
                            <tbody>
{{--                            @foreach($images as $key=>$value)--}}
{{--                                <tr>--}}
{{--                                    <td>{{$key+1}}</td>--}}
{{--                                    <td scope="row"><img src="{{asset('assets/img/gallery/'. $value->src)}}"--}}
{{--                                                         style="width: 90px; height: 90px; object-fit: cover"></td>--}}
{{--                                    <td>{{$status[$value->status]}}</td>--}}
{{--                                    @if($value->status === 1 || $value->status == 4)--}}
{{--                                        <td style="width: 15px"><a href="{{route('everyday_gallery_edit', $value->id)}}"><i--}}
{{--                                                    class="nav-icon fas fa-edit text-primary"></i></a></td>--}}
{{--                                        <td style="width: 15px"><a href="{{route('everyday_gallery_delete', $value->id)}}"><i--}}
{{--                                                    class="nav-icon fas fa-trash text-danger"></i></a></td>--}}
{{--                                    @endif--}}
{{--                                </tr>--}}
{{--                            @endforeach--}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
