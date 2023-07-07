@extends('admin.layouts.main')
@section('content')

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <ul class="nav nav-tabs justify-content-center text-muted">
                    <li style="margin-left: 70px" class="active"><a data-toggle="tab" href="#user">Տեսարժան վայրեր</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="user" class="tab-pane fade in active show">

                        <div class="content-header">
                            <div class="container-fluid">
                                <div class="row mt-3">
                                    <div class="col-11"><h3>Տեսարժան վայրեր</h3></div>
                                    <div class="col-1 mt-1">
                                        <a href="{{route('sights_create')}}">
                                            <button class="btn-success">+Ավելացնել</button>
                                        </a>
                                    </div>
                                </div>
                                <table class="table mt-3" id="workers_table">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th scope="col" class="w_20">Հ/հ</th>
                                        <th scope="col">Լուսանկար</th>
                                        <th scope="col">Վերնագիր</th>
                                        <th scope="col">Նկարագրություն</th>
                                        <th scope="col">Ստատուս</th>
                                        <th scope="col">Լուսանկարներ</th>
                                        <th scope="col">Խմբագրել</th>
                                        <th scope="col">Ջնջել</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($sights as $key=>$value)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td scope="row">
                                                <img src="{{asset('assets/img/sights/'. $value->image)}}"
                                                     style="width: 90px; height: 90px; object-fit: cover">
                                            </td>
                                            <td>{{$value->name}}</td>
                                            <td>{{substr($value['description'], 0, 1000) . "..."}}</td>
                                            <td>{{$value->sights_status->status}}</td>
                                            <td>
                                                <a href="{{route('sights_gallery', $value->id)}}">
                                                    <i class="nav-icon fas fa-image text-primary"
                                                       style="margin-left: 20px"></i>
                                                </a>
                                            </td>
                                            @if($value->user_id == $admin_info['user'])
                                            <td>
                                                    @if($value->status == 1 || $value->status == 4)
                                                        <a href="{{route('sights_edit', $value->id)}}"><i
                                                                class="nav-icon fas fa-edit text-primary"></i></a>
                                                    @endif
                                            </td>
                                            <td>
                                                @if($value->status == 1 || $value->status == 4)
                                                    <form action="{{route('sights_delete', $value->id)}}"
                                                          method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="border-0 bg-transparent">
                                                            <i class="nav-icon fas fa-trash text-danger"
                                                               role="button"></i>
                                                        </button>
                                                    </form>
                                                @endif
                                            </td>
                                            @else
                                                <td></td>
                                                <td></td>
                                            @endif

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row mt-3">
                                <div class="col-1 mt-1">
                                    <a href="{{route('sights_create')}}">
                                        <button class="btn-success">+Ավելացնել</button>
                                    </a>
                                </div>
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


