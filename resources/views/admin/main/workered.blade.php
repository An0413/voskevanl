@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <section class="content">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card card-primary">
                            <div class="card-header">
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="card-body w-100">
                                        <div class="form-group">
                                            <label for="name">Անուն</label>
                                            <input type="text" class="form-control" id="name" value="{{$worker->name}}" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="seq">Հերթականություն</label>
                                            <input type="number" class="form-control" id="seq" value="{{$worker->seq}}" min="1" max="100"  name="seq">
                                        </div>
                                        <div class="form-group">
                                            <label for="insta">Instagram</label>
                                            <input type="url" id="insta" class="form-control"  value="{{$worker->insta_link}}"  name="insta_link">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card-body w-100">
                                        <div class="form-group">
                                            <label for="lastname">Ազգանուն</label>
                                            <input type="text" class="form-control" id="lastname" value="{{$worker->lastname}}"  name="lastname">
                                        </div>
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="fb">Facebook</label>
                                                <input type="url" id="fb" class="form-control" value="{{$worker->fb_link}}"  name="fb_link">
                                            </div>
                                        </div>
                                        <div class="form-group">

                                            <div class="form-group">
                                                <label for="in">LinkedIn</label>
                                                <input type="url" id="in" class="form-control" value="{{$worker->in_link}}"  name="in_link">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card-body w-100">
                                        <div class="form-group">
                                            <label>Պաշտոն</label>
                                            <select class="form-control" name="position">

                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="url" id="email" class="form-control" value="{{$worker->mail_link}}"  name="mail_link">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputFile">Լուսանկար</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="imgInp" name="img">
                                                        <label class="custom-file-label" for="exampleInputFile"></label>
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
                </section>
            </div>
        </div>
    </div>
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
