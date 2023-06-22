@extends('admin.layouts.main')
@section('content')

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <ul class="nav nav-tabs justify-content-center text-muted">
                    <li style="margin-left: 70px" class="active"><a data-toggle="tab" href="#user">Հաղորդագրություն</a></li>
                </ul>
                <div class="tab-content">
                    <div id="user" class="tab-pane fade in active show">

                        <div class="content-header">
                            <div class="container-fluid">
                                <div class="row mt-3">
                                    <div class="col-11"><h3>ՀԱՂՈՐԴԱԳՐՈՒԹՅՈՒՆ</h3></div>
                                </div>
                                <table class="table mt-3" id="workers_table">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th scope="col" class="w_20">Հ/հ</th>
                                        <th scope="col">Անուն</th>
                                        <th scope="col">Էլ․ հասցե</th>
                                        <th scope="col">Հասցեատեր</th>
                                        <th scope="col">Հաղորդագրություն</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($message as $key=>$value)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$value->name}}</td>
                                            <td>{{$value->email}}</td>
                                            <td>{{$roles[$value->message_to]}}</td>
                                            <td>{{$value->message}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        $(".small2").each(function () {
            let text = $(this).text();
            if (text.length > 270) {
                console.log(text.length);
                $(this).html(text.substr(0, 256) + '<span class="elipsis">' +
                    '</span>...');
            }
        });

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


