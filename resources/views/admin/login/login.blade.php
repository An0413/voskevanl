<!doctype html>
<html lang="en">
<head>
    <title>Ոսկեվան</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('/login/css/style.css')}}">

</head>
<body>
<section class="fon">
    <img src="{{asset('assets/img/gallery/seint.jpg')}}" class="fon_img">
    <div class="container">
        <div class="loginp">
            <div class="justify-content-center">
                <div class="text-center mb-5" style="margin-left: 58%">
                    <h2 class="heading-section">ՈՍԿԵՎԱՆ</h2>
                </div>
            </div>
            <div class="row justify-content-center w-100">
                <div class="login-wrap p-0">
                    <form action="{{route('login_check')}}" class="signin-form" method="POST" style="width: 250%">
                        @csrf
                        @if(Session::has('message'))
                            <div class="form-group">
                                <p class="text-danger">{{ Session::get('message') }}</p>
                            </div>
                        @endif
                        <div class="form-group">
                            <input type="text" class="form-control adit" placeholder="Username" name="username"
                                   required>
                        </div>
                        <div class="form-group">
                            <input id="password-field" type="password" class="form-control adit" name="password"
                                   placeholder="Password"
                                   required>
                            <span toggle="#password-field"
                                  class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group d-md-flex justify-content-center">
                            <div>
                                <input type="hidden" id="remember" name="remember" value="1">
                                <label class="checkbox-wrap checkbox-primary">Հիշել
                                    <input type="checkbox" id="check" checked>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>


                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary submit px-3">Մուտք
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="{{asset('login/js/jquery.min.js')}}"></script>
<script src="{{asset('login/js/popper.js')}}"></script>
<script src="{{asset('login/js/bootstrap.min.js')}}"></script>
<script src="{{asset('login/js/main.js')}}"></script>
<script>

    $('#check').on('change', function () {

        if ($(this).is(':checked')) {
            $('#remember').val(1);
        } else {
            $('#remember').val(0);
        }

    })

</script>
</body>
</html>
