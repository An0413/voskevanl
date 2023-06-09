@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Ինֆոյի խմբագրում / {{$info->name}}</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <section class="content">
            <form action="{{route('info_update', $info->id)}}" method="POST">
                @csrf
                <div class="card card-primary">
                    <div class="card-header">
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="card-body w-100">
                                <div class="form-group">
                                    <label for="name">Վերնագիր</label>
                                    <input type="text" class="form-control" id="name" value="{{$info->name}}"
                                           name="name">
                                </div>
                                <div class="form-group">
                                    <label for="seq">Հերթականություն</label>
                                    <input type="number" class="form-control" id="seq" value="{{$info->seq}}" min="1"
                                           max="100" name="seq">
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="description">Տեղեկություն</label>
                                <textarea class="form-control" rows="5" style="height: 180px;" name="content" id="description">{{$info->content}}</textarea>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Հաստատել</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    {{--    <script>--}}
    {{--        imgInp = document.querySelector('#imgInp');--}}
    {{--        myImg = document.querySelector('#preview_worker_img');--}}
    {{--        imgInp.onchange = evt => {--}}
    {{--            const [file] = imgInp.files--}}
    {{--            if (file) {--}}
    {{--                myImg.src = URL.createObjectURL(file)--}}
    {{--            }--}}
    {{--        }--}}
    {{--    </script>--}}
@endsection
