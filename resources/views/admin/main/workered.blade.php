@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <section class="content">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="row">
                                <div class="col-4">
                                    <div class="card-body w-100">
                                        <div class="form-group">
                                            <label for="name">Անուն - {{$worker->name}}</label>
                                        </div>
                                        <div class="form-group">
                                            <label for="seq">Հերթականություն - {{$worker->seq}}</label>
                                        </div>
                                        <div class="form-group">
                                            <label for="insta">Instagram - {{$worker->insta_link}}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card-body w-100">
                                        <div class="form-group">
                                            <label for="lastname">Ազգանուն - {{$worker->lastname}}</label>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="fb">Facebook - {{$worker->fb_link}}</label>
                                            </div>
                                        </div>
                                        <div class="form-group">

                                            <div class="form-group">
                                                <label for="in">LinkedIn - {{$worker->in_link}}</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card-body w-100">
                                        <div class="form-group">
                                            <label>Պաշտոն - {{$worker->positions->title}}</label>
                                        </div>

                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="email">Email - {{$worker->mail_link}}</label>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputFile">Լուսանկար</label>
                                                   <img src="{{asset('assets/img/worker/'. $worker->img)}}" alt=""
                                                         id="preview_worker_img">
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
