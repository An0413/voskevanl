@extends('admin.layouts.main')
@section('content')
    @php
        $imgPosition = ['Պատկերասրահ', 'Գլխավոր'];
    @endphp
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
                                            <label for="name">Լուսանկար - <img src="{{asset('assets/img/news/'. $news->img)}}"
                                                                               style="width: 90px; height: 90px; object-fit: cover"></label>
                                        </div>
                                        <div class="form-group">
                                            <label for="seq">Վերնագիր - {{$news->title}} </label>
                                        </div>
                                        <div class="form-group">
                                            @php
                                                $user_info = App\Helper::getUserInfo($news->user_id);
                                            @endphp
                                            <label for="insta">Ադմին -  {{$user_info['name'] . ' ' . $user_info['lastname']}}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card-body w-100">
                                        <div class="form-group">
                                            <label for="name">Նկարագրություն - {!! $news->description !!}</label>
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
