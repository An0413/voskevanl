@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <h1 class="text-center">ԳՐԱՆՑՈՒՄ</h1>
                <section class="content">
                    <form action="" method="POST">
                        @csrf
                        <div class="card card-primary">
                            <div class="card-header">
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="card-body w-100">
                                        <div class="form-group mt-3">
                                            <select class="form-select" id="message_to" name="message_to" required>
                                                <option value="">Պաշտոն</option>
                                                @php
                                                    $user = \App\Models\Role::all();
                                                @endphp
                                                @foreach($user as $value)
                                                    <option value="{{$value->id}}">{{$value->name_arm}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group mt-3">
                                            <select class="form-select" id="message_to" name="message_to" required>
                                                <option value="">Պաշտոն</option>
                                                @php
                                                    $worker = \App\Models\Worker::where('id', 'worker_id')->get();
                                                @endphp
                                                @foreach($worker as $value)
                                                    <option value="{{$value->id}}">{{$value->name . '' . $value->lastname}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card-body w-100">
                                        <div class="form-group">
                                            <label for="username">Մուտքանուն</label>
                                            <input type="text" id="username" class="form-control" value=""
                                                   name="username">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Գաղտնաբառ</label>
                                            <input type="password" class="form-control" id="password" value=""
                                                   name="password">
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
@endsection
