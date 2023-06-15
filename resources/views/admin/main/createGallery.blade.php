@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div id="image" class="tab-pane fade {{$tab == 'image' ? 'in active show' : ''}}">
                    <h3>Ավելացնել լուսանկար</h3>
                    <form action="{{route('gallery_store', [$area, 'image'])}}" method="POST"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-4">
                                <div class="card-body w-100">
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
                                    </div>
                                    <div class="form-group">
                                        <img src="" id="img" width="100px" height="100px"
                                             class="create_img">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Հաստատել</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
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
