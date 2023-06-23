@extends('admin.layouts.main')
@section('content')
    @php
        $imgPosition = ['Պատկերասրահ', 'Գլխավոր'];
    @endphp
    <div class="content-wrapper">
        <h3 class="text-center">Հաստատման սպասող փոփոխություններ</h3>
        <div class="content-header">
            <div class="container-fluid">
                <ul class="nav nav-tabs justify-content-center text-muted">
                    <li class="active"><a data-toggle="tab" href="#user">Աշխատակիցներ</a></li>
                    <li style="margin-left: 70px"><a data-toggle="tab" href="#info">Ինֆո</a></li>
                    <li style="margin-left: 70px"><a data-toggle="tab" href="#image">Լուսանկարներ</a></li>
                </ul>
                <div class="tab-content">
                    <div id="user" class="tab-pane fade in active show">
                        <div class="row mt-3">
                            <div class="col-11"><h3>Աշխատակիցներ</h3></div>
                            <div class="col-1 mt-1">
                            </div>
                        </div>
                        <table class="table mt-3" id="workers_table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">Հ/հ</th>
                                <th scope="col">Լուսանկար</th>
                                <th scope="col">Անուն</th>
                                <th scope="col">Ազգանուն</th>
                                <th scope="col">Պաշտոն</th>
                                <th scope="col">Ադմին</th>
                                <th scope="col">Տեսնել</th>
                                <th scope="col">Հաստատել</th>
                                <th scope="col">Մերժել</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($worker as $key=>$value)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td scope="row"><img src="{{asset('assets/img/worker/'. $value->img)}}"
                                                         style="width: 90px; height: 90px; object-fit: cover"></td>
                                    <td>{{$value->name}}</td>
                                    <td>{{$value->lastname}}</td>
                                    <td>{{$value->positions->title}}</td>
                                    <td>
                                        {{$value->name . ' ' . $value->lastname}}
                                    </td>
                                    <td><a href="{{route('workered', $value->id)}}"><i
                                                class="nav-icon fas fa-edit text-primary"></i></a></td>
{{--                                    <form action="{{route('worker_store')}}" method="POST" enctype="multipart/form-data">--}}
                                        <td class="text-center"><a href="" id="confirm"><i
                                                    class="nav-icon fas fa-check text-success"></i></a></td>
{{--                                    </form>--}}
                                    <td><a href="" id="refuse" class="text-danger text-bold">X</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div id="info" class="tab-pane fade">
                        <div class="row mt-3">
                            <div class="col-11"><h3>Ինֆո</h3></div>
                            <div class="col-1 mt-1">
                            </div>
                        </div>
                        <table class="table mt-3" id="workers_table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col" class="w_20">Հ/հ</th>
                                <th scope="col">Վերնագիր</th>
                                <th scope="col">Տեղեկություն</th>
                                <th scope="col">Ադմին</th>
                                <th scope="col">Տեսնել</th>
                                <th scope="col">Հաստատել</th>
                                <th scope="col">Մերժել</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($info as $key=>$value)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <th scope="col">{{$value->name}}</th>
                                    <th scope="col">{{$value->content}}</th>
                                    <td>
                                        @php
                                            $user_info = App\Helper::getUserInfo($value['user_id']);
                                        @endphp
                                        {{$user_info['name'] . ' ' . $user_info['lastname']}}
                                    </td>
                                    <td><a href="{{route('info_show', $value->id)}}"><i
                                                class="nav-icon fas fa-edit text-primary"></i></a></td>
                                    <td class="text-center"><a href=""><i
                                                class="nav-icon fas fa-check text-success"></i></a></td>
                                    <td><a href="{{route('worker_delete', $value->id)}}"
                                           class="text-danger text-bold">X</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div id="image" class="tab-pane fade">
                        <div class="row mt-3">
                            <div class="col-11"><h3>Լուսանկարներ</h3></div>
                            <div class="col-1 mt-1">
                            </div>
                        </div>
                        <table class="table mt-3 w-50" id="workers_table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">Հ/հ</th>
                                <th scope="col">Լուսանկար</th>
                                <th scope="col">Նկարի դիրքը</th>
                                <th scope="col">Ադմին</th>
                                <th scope="col">Խմբագրել</th>
                                <th scope="col">Հաստատել</th>
                                <th scope="col">Մերժել</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($images as $key=>$value)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td scope="row"><img src="{{asset('assets/img/gallery/'. $value->src)}}"
                                                         style="width: 90px; height: 90px; object-fit: cover"></td>
                                    <td>
                                        {{$imgPosition[$value->main_image]}}
                                    </td>
                                    <td>
                                        @php
                                            $user_info = App\Helper::getUserInfo($value['user_id']);
                                        @endphp
                                        {{$user_info['name'] . ' ' . $user_info['lastname']}}
                                    </td>
                                    <td style="width: 15px"><a href="{{route('gallery_show', $value->id)}}"><i
                                                class="nav-icon fas fa-edit text-primary"></i></a></td>
                                    <td class="text-center"><a href=""><i
                                                class="nav-icon fas fa-check text-success"></i></a></td>
                                    <td><a href="{{route('worker_delete', $value->id)}}"
                                           class="text-danger text-bold">X</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
