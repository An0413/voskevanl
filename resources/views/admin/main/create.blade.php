@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <ul class="nav nav-tabs justify-content-center text-muted">
                    <li class="active"><a data-toggle="tab" href="#user">Աշխատակիցներ</a></li>
                    <li style="margin-left: 70px"><a data-toggle="tab" href="#info">Ինֆո</a></li>
                    <li style="margin-left: 70px"><a data-toggle="tab" href="#image">Լուսանկարներ</a></li>
                </ul>
                <div class="tab-content">
                    <div id="user" class="tab-pane fade {{$tab == 'user' ? 'in active show' : ''}}">
                        <h3>Ավելացնել աշխատակից</h3>
                        <form action="{{route('worker_store', $area)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card card-primary">
                                <div class="card-header">
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="card-body w-100">
                                            <div class="form-group">
                                                <label for="name">Անուն</label>
                                                <input type="text" class="form-control" id="name" name="name" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="seq">Հերթականություն</label>
                                                <input type="number" class="form-control" id="seq" min="1" max="100"
                                                       name="seq" required>
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
                                                <input type="text" class="form-control" id="lastname" name="lastname"
                                                       required>
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
                                                <select class="form-control" name="position" required>
                                                    @foreach($worker_positions as $value)
                                                        <option value="{{$value->id}}">{{$value ->title}}</option>
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
                                                            <input type="file" class="custom-file-input" id="wimg"
                                                                   name="img" required>
                                                            <label class="custom-file-label"
                                                                   for="wimg"></label>
                                                        </div>
                                                        <img src="" alt="" id="">
                                                    </div>
                                                    <img src="" id="worker_img" width="100px" height="100px"
                                                         class="create_img">
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
                    <div id="info" class="tab-pane fade {{$tab == 'info' ? 'in active show' : ''}}">
                        <h3>Ավելացնել Ինֆո</h3>
                        <form action="{{route('info_store', [$area, 'info'])}}" method="POST">
                            @csrf
                            <div class="card card-primary">
                                <div class="card-header">
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="card-body w-100">
                                            <div class="form-group">
                                                <label for="name">Վերնագիր</label>
                                                <input type="text" class="form-control" id="name"
                                                       value="" required name="name">
                                            </div>
                                            <div class="form-group">
                                                <label for="seq">Հերթականություն</label>
                                                <input type="number" class="form-control" id="seq"
                                                       value="" min="1" required
                                                       max="100" name="seq">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="description">Տեղեկություն</label>
                                            <textarea class="form-control" rows="5" style="height: 180px;"
                                                      name="content" id="description"></textarea>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Հաստատել</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="image" class="tab-pane fade {{$tab == 'image' ? 'in active show' : ''}}">
                        <h3>Ավելացնել լուսանկար</h3>
                        <form action="{{route('gallery_store', [$area, 'image'])}}" method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="card card-primary">
                                <div class="card-header">
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="card-body w-100">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="image_view">Լուսանկար</label>
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="image_view"
                                                                   name="image">
                                                            <label class="custom-file-label"
                                                                   for="image"></label>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <img src="" id="img" width="100px" height="100px"
                                                             class="create_img">
                                                        <button type="submit" class="btn btn-primary">Հաստատել</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="card-body w-100">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label>Նկարի դիրքը</label>
                                                    <select class="form-control" name="main_image">
                                                        <option value="1">Գլխավոր</option>
                                                        <option value="0" selected>Պատկերասրահ</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        let worker_image = document.querySelector('#wimg');
        let myImg = document.querySelector('#worker_img');
        worker_image.onchange = evt => {
            const [file] = worker_image.files
            if (file) {
                myImg.src = URL.createObjectURL(file);
                myImg.style.visibility = 'visible';
            }
        }

        let image = document.querySelector('#image_view');
        let img = document.querySelector('#img');
        image.onchange = evt => {
            const [file] = image.files
            if (file) {
                img.src = URL.createObjectURL(file);
                img.style.visibility = 'visible';
            }
        }
    </script>
@endsection
