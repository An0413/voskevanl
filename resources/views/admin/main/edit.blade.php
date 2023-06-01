@extends('admin.layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
{{--            <ul class="nav justify-content-center">--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link active" aria-current="page" href="#">Աշխատակիցներ</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#">Ինֆո</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#">Լուսանկարներ</a>--}}
{{--                </li>--}}
{{--            </ul>--}}

            <ul class="nav nav-tabs justify-content-center text-muted">
                <li class="active"><a data-toggle="tab" href="#home">Աշխատակիցներ</a></li>
                <li style="margin-left: 70px"><a data-toggle="tab" href="#menu1">Ինֆո</a></li>
                <li style="margin-left: 70px"><a data-toggle="tab" href="#menu2">Լուսանկարներ</a></li>
            </ul>

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <h3>Աշխատակիցներ</h3>
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">Լուսանկար</th>
                            <th scope="col">Անուն</th>
                            <th scope="col">Ազգանուն</th>
                            <th scope="col">Պաշտոն</th>
                            <th scope="col">Հերթականություն</th>
                            <th scope="col">Խմբագրել</th>
                            <th scope="col">Ջնջել</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($worker as $value)
                        <tr>
                            <th scope="row"><img src="{{asset('assets/img/about/'. $value->img)}}" style="width: 90px; height: 90px; object-fit: cover"></th>
                            <td>{{$value->name}}</td>
                            <td>{{$value->lastname}}</td>
                            <td>{{$value->positions->title}}</td>
                            <td>{{$value->seq}}</td>
                            <td></td>
                            <td></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div id="menu1" class="tab-pane fade">
                    <h3>Menu 1</h3>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div id="menu2" class="tab-pane fade">
                    <h3>Menu 2</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                </div>
                <div id="menu3" class="tab-pane fade">
                    <h3>Menu 3</h3>
                    <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
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
