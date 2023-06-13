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

                <form action="{{ route('history_update', $history->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 mt-3 w-50">
                        <label for="title">Վերնագիր</label>
                        <input type="text" class="form-control" name="name" value="{{ $history->name }}">
                    </div>
                    <div class="mb-3 mt-3 w-50">
                        <label for="description">Պատմություն</label>
                        <textarea class="form-control" rows="5" id="comment" name="description"
                        >{{ $history->description }}</textarea>
                </div>
                    <div>
                        <img src="{{asset('assets/img/history/'.$history->image) }}" style="width: 150px; height: 150px;">
                    </div>
                <div>
                <input type="file" id="image" name="img"><br><br>
                    </div>
                    <button type="submit" class="btn btn-primary">Խմբագրել</button>

                </form>
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
