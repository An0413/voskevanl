@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">

                <ul class="nav nav-tabs justify-content-center text-muted">
                    <li class="active"><a data-toggle="tab" href="#home">Աշխատակիցներ</a></li>
                    <li style="margin-left: 70px"><a data-toggle="tab" href="#menu1">Ինֆո</a></li>
                    <li style="margin-left: 70px"><a data-toggle="tab" href="#menu2">Լուսանկարներ</a></li>
                </ul>

                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active show">
                        <div class="row mt-3">
                            <div class="col-11"><h3>Աշխատակիցներ</h3></div>
                            <div class="col-1 mt-1">
                                <button class="btn-success">Ավելացնել</button>
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
                                <th scope="col">Խմբագրել</th>
                                <th scope="col">Ջնջել</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($worker as $key=>$value)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td scope="row"><img src="{{asset('assets/img/about/'. $value->img)}}"
                                                         style="width: 90px; height: 90px; object-fit: cover"></td>
                                    <td>{{$value->name}}</td>
                                    <td>{{$value->lastname}}</td>
                                    <td>{{$value->positions->title}}</td>
                                    <td><a href="{{route('worker_edit', $value->id)}}"><i class="nav-icon fas fa-edit text-primary"></i></a></td>
                                    <td><a href="{{route('worker_delete', $value->id)}}"><i class="nav-icon fas fa-trash text-danger"></i></a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <div class="row mt-3">
                            <div class="col-11"><h3>Ինֆո</h3></div>
                            <div class="col-1 mt-1">
                                <button class="btn-success">+Ավելացնել</button>
                            </div>
                        </div>
                        <table class="table mt-3" id="workers_table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col" class="w_20">Հ/հ</th>
                                <th scope="col">Վերնագիր</th>
                                <th scope="col">Տեղեկություն</th>
                                <th scope="col">Խմբագրել</th>
                                <th scope="col">Ջնջել</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($info as $key=>$value)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <th scope="col">{{$value->name}}</th>
                                    <th scope="col">{{$value->description}}</th>
                                    <td><i class="nav-icon fas fa-edit text-primary"></i></td>
                                    <td><i class="nav-icon fas fa-trash text-danger"></i></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <div class="row mt-3">
                            <div class="col-11"><h3>Լուսանկարներ</h3></div>
                            <div class="col-1 mt-1">
                                <button class="btn-success">Ավելացնել</button>
                            </div>
                        </div>
                        <table class="table mt-3 w-50" id="workers_table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">Հ/հ</th>
                                <th scope="col">Լուսանկար</th>
                                <th scope="col">Խմբագրել</th>
                                <th scope="col">Ջնջել</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($images as $key=>$value)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td scope="row"><img src="{{asset('assets/img/about/'. $value->src)}}"
                                                         style="width: 90px; height: 90px; object-fit: cover"></td>
                                    <td style="width: 15px"><i class="nav-icon fas fa-edit text-primary"></i></td>
                                    <td style="width: 15px"><i class="nav-icon fas fa-trash text-danger"></i></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
