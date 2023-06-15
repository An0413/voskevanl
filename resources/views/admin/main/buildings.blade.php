@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mt-3">
                    <div class="col-11"><h3>Կառույցներ</h3></div>
                    <div class="col-1 mt-1">
                        <a href="{{route('buildings_create')}}">
                            <button class="btn-success">+Ավելացնել</button>
                        </a>
                    </div>
                </div>
                <table class="table mt-3" id="workers_table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col" class="w_20">Հ/հ</th>
                        <th scope="col">Լուսանկար</th>
                        <th scope="col">Անուն</th>
                        <th scope="col">Նկարագրություն</th>
                        <th scope="col">Ստատուս</th>
                        <th scope="col">Խմբագրել</th>
                        <th scope="col">Ջնջել</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($buildings as $key=>$value)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td scope="row"><img src="{{asset('assets/img/buildings/'. $value->img)}}"
                                                 style="width: 90px; height: 90px; object-fit: cover"></td>
                            <td>{{$value->name}}</td>
                            <td>{{$value->description}}</td>
                            <td>{{$value->buildings_status->status }}</td>
                            <td>
                                @if($value->status == 1)
                                    <a href="{{route('buildings_edit', $value->id)}}"><i
                                            class="nav-icon fas fa-edit text-primary"></i></a></td>
                            @endif
                            <td>
                                @if($value->status == 1)
                                    <form action="{{route('buildings_delete', $value->id)}}" method="post">
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
                    <a href="{{route('buildings_create')}}">
                        <button class="btn-success">+Ավելացնել</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection
