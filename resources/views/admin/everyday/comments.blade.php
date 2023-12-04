@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mt-3">
                    <div class="col-11"><h3>Մեկնաբանություններ</h3></div>
                    <div class="col-1 mt-1">

                    </div>
                </div>
                <table class="table mt-3" id="workers_table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col" class="w_20">Հ/հ</th>
                        <th scope="col">Անուն</th>
                        <th scope="col">Ազգանուն</th>
                        <th scope="col">Մեկնաբանություն</th>
                        <th scope="col">Ստատուս</th>
                        <th scope="col">Ջնջել</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($comments as $key=>$value)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$value->first_name}}</td>
                            <td>{{$value->last_name}}</td>
                            <td>{{substr($value['comment'], 0, 60) . "..."}}</td>
                            <td>{{$value->com_status->status}}</td>
                            <td>
                                @if($value->status == 1 || $value->status == 4)
                                    <form action="{{route('commentevery_delete', $value->id)}}" method="post">
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
        </div>
    </div>

@endsection
