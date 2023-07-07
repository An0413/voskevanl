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
                                            <label for="name">Լուսանկար - <img src="{{asset('assets/img/gallery/'. $images->src)}}" width="150px"></label>
                                        </div>
                                        <div class="form-group">
                                            <label for="seq">Նկարի դիրքը - {{$imgPosition[$images->main_image]}} </label>
                                        </div>
                                        <div class="form-group">
                                            @php
                                                $user_info = App\Helper::getUserInfo($images->user_id);
                                            @endphp
                                            <label for="insta">Ադմին -  {{$user_info['name'] . ' ' . $user_info['lastname']}}</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </form>
                </section>
            </div>
        </div>
    </div>


@endsection
