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
                        <h3>Ավելացնել աշխատակից</h3>
                        <form action="" method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="card card-primary">
                                <div class="card-header">
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="card-body w-100">
                                            <div class="form-group">
                                                <label for="name">Անուն</label>
                                                <input type="text" class="form-control" id="name" name="name">
                                            </div>
                                            <div class="form-group">
                                                <label for="seq">Հերթականություն</label>
                                                <input type="number" class="form-control" id="seq" min="1" max="100" name="seq">
                                            </div>
                                            <div class="form-group">
                                                <label for="insta">Instagram</label>
                                                <input type="url" id="insta" class="form-control" name="insta_link">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="card-body w-100">
                                            <div class="form-group">
                                                <label for="lastname">Ազգանուն</label>
                                                <input type="text" class="form-control" id="lastname" name="lastname">
                                            </div>
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="fb">Facebook</label>
                                                    <input type="url" id="fb" class="form-control" name="fb_link">
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="form-group">
                                                    <label for="in">LinkedIn</label>
                                                    <input type="url" id="in" class="form-control" name="in_link">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="card-body w-100">
                                            <div class="form-group">
                                                <label>Պաշտոն</label>
                                                <select class="form-control" name="position">
                                                    @foreach($worker_positions as $value)
                                                        <option value="{{$value->id}}">{{$value->title}}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="url" id="email" class="form-control" name="mail_link">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputFile">Լուսանկար</label>
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="imgInp"
                                                                   name="img">
                                                            <label class="custom-file-label"
                                                                   for="exampleInputFile"></label>
                                                        </div>
                                                        <img src="" alt=""
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
                            </div>
                        </form>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <h3>Ավելացնել Ինֆո</h3>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <h3>Ավելացնել լուսանկար</h3>

                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
