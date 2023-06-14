@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <h1 class="text-center">ԳՐԱՆՑՈՒՄ</h1>
                <section class="content">
                    <form action="{{route('register_user')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-6 offset-3">
                                <div class="form-group">
                                    <label for="role">Պաշտոն</label>
                                    <select class="form-select" id="role" name="role" required>
                                        <option value="">Պաշտոն</option>
                                        @foreach($roles as $value)
                                            <option value="{{$value->menu}}">{{$value->name_arm}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="worker">Աշխատակից</label>
                                    <select class="form-select" id="worker" name="worker" required>
                                        <option value="">Ընտրել</option>
                                    </select>
                                </div>
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
                                <button type="submit" class="btn btn-primary">Հաստատել</button>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>


    <script>
        $('#role').on('change', function () {
            let role = $(this).val();
            $.ajax({
                type: 'POST',
                url: '/get_workers',
                data: {
                    _token: '<?php echo csrf_token() ?>',
                    role: role
                },
                success: function (data) {
                    $("#worker").html(data);
                }
            });
        })
    </script>
@endsection
