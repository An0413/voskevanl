@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <section class="content">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="row">
                                <div class="col-6">
                                    <div class="card-body w-100">
                                        <div class="form-group">
                                            <label for="name">Վերնագիր - {{$info->name}}</label>
                                        </div>
                                        <div class="form-group">
                                            <label for="seq">Հերթականություն - {{$info->seq}}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="insta">Տեղեկություն - {{$info->content}}</label>
                                    </div>
                                    <div class="form-group">
                                        @php
                                            $user_info = App\Helper::getUserInfo($info->user_id);
                                        @endphp
                                        <label for="insta">Ադմին -  {{$user_info['name'] . ' ' . $user_info['lastname']}}</label>
                                    </div>
                                </div>
                            </div>
                    </form>
                </section>
            </div>
        </div>
    </div>

@endsection
