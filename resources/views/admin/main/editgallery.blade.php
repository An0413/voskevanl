@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Լուսանկարի խմբագրում / {{$images->src}}</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <form action="{{route('gallery_update', $images->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card card-primary">
                    <div class="card-header">
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="card-body w-100">
                                <div class="form-group">
                                <div class="form-group">
                                    <label for="exampleInputFile">Լուսանկար</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="imgInp" name="img">
                                            <label class="custom-file-label" for="exampleInputFile"></label>
                                        </div>
                                        <img src="{{asset('assets/img/about/' . $images->src)}}" alt=""
                                             id="preview_worker_img">
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Հաստատել</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <script>
        imgInp = document.querySelector('#imgInp');
        myImg = document.querySelector('#preview_worker_img');
        imgInp.onchange = evt => {
            const [file] = imgInp.files
            if (file) {
                myImg.src = URL.createObjectURL(file)
            }
        }
    </script>
@endsection
