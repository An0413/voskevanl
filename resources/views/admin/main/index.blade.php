@extends('admin.layouts.main')
@section('content')
    @php
        $imgPosition = ['Պատկերասրահ', 'Գլխավոր'];
        $status = [
            2 => 'Ավելացման հարցում',
            3 => 'Ջնջելու հարցում'
];
    @endphp
    <div class="content-wrapper">
        <h3 class="text-center">Հաստատման սպասող փոփոխություններ</h3>
        <div class="content-header">
            <div class="container-fluid">
                <ul class="nav nav-tabs justify-content-center text-muted">
                    <li class="active"><a data-toggle="tab" href="#user">Աշխատակիցներ</a></li>
                    <li style="margin-left: 70px"><a data-toggle="tab" href="#info">Ինֆո</a></li>
                    <li style="margin-left: 70px"><a data-toggle="tab" href="#image">Լուսանկարներ</a></li>
                    <li style="margin-left: 70px"><a data-toggle="tab" href="#news">Նորություններ</a></li>
                </ul>
                <div class="tab-content">
                    <div id="user" class="tab-pane fade in active show">
                        <div class="row mt-3">
                            <div class="col-11"><h3>Աշխատակիցներ</h3></div>
                            <div class="col-1 mt-1">
                            </div>
                        </div>
                        <table class="table mt-3" id="workers_table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">Հ/հ</th>
                                <th scope="col">Լուսանկար</th>
                                <th scope="col">Անուն</th>
                                <th scope="col">Ազգանուն</th>
                                <th scope="col">Պաշտոն</th>
                                <th scope="col">Գործողություն</th>
                                <th scope="col">Ադմին</th>
                                <th scope="col">Տեսնել</th>
                                <th scope="col">Հաստատել</th>
                                <th scope="col">Մերժել</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($worker as $key=>$value)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td scope="row"><img src="{{asset('assets/img/worker/'. $value->img)}}"
                                                         style="width: 90px; height: 90px; object-fit: cover"></td>
                                    <td>{{$value->name}}</td>
                                    <td>{{$value->lastname}}</td>
                                    <td>{{$positions[$value->position]}}</td>
                                    <td>{{$status[$value->status]}}</td>
                                    <td>
                                        {{$value->name . ' ' . $value->lastname}}
                                    </td>
                                    <td><a href="{{route('workered', $value->id)}}"><i
                                                class="nav-icon fas fa-edit text-primary"></i></a></td>

                                    <td class="text-center">
                                        <a href="{{route('submit', [$value->id, 0])}}" id="confirm">
                                            <i class="nav-icon fas fa-check text-success"></i>
                                        </a>
                                    </td>
                                    <td><a href="" class="refuse text-danger text-bold" data-bs-toggle="modal"
                                           data-bs-target="#refuse_modal" data-row="{{$value->id}}" data-action="0">X</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div id="info" class="tab-pane fade">
                        <div class="row mt-3">
                            <div class="col-11"><h3>Ինֆո</h3></div>
                            <div class="col-1 mt-1">
                            </div>
                        </div>
                        <table class="table mt-3" id="workers_table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col" class="w_20">Հ/հ</th>
                                <th scope="col">Վերնագիր</th>
                                <th scope="col">Տեղեկություն</th>
                                <th scope="col">Գործողություն</th>
                                <th scope="col">Ադմին</th>
                                <th scope="col">Տեսնել</th>
                                <th scope="col">Հաստատել</th>
                                <th scope="col">Մերժել</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($info as $key=>$value)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <th scope="col">{{$value->name}}</th>
                                    <th scope="col">{!! $value->content !!}</th>
                                    <td>
                                        @php
                                            $user_info = App\Helper::getUserInfo($value->user_id);
                                        @endphp
                                        {{$user_info['name'] . ' ' . $user_info['lastname']}}
                                    </td>
                                    <td>{{$status[$value->status]}}</td>
                                    <td><a href="{{route('info_show', $value->id)}}"><i
                                                class="nav-icon fas fa-edit text-primary"></i></a></td>
                                    <td class="text-center">
                                        <a href="{{route('submit', [$value->id, 1])}}" id="confirm">
                                            <i class="nav-icon fas fa-check text-success"></i>
                                        </a>
                                    </td>
                                    <td><a href="" class="refuse text-danger text-bold" data-bs-toggle="modal"
                                           data-bs-target="#refuse_modal" data-row="{{$value->id}}" data-action="1">X</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div id="image" class="tab-pane fade">
                        <div class="row mt-3">
                            <div class="col-11"><h3>Լուսանկարներ</h3></div>
                            <div class="col-1 mt-1">
                            </div>
                        </div>
                        <table class="table mt-3 w-50" id="workers_table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">Հ/հ</th>
                                <th scope="col">Լուսանկար</th>
                                <th scope="col">Նկարի դիրքը</th>
                                <th scope="col">Գործողություն</th>
                                <th scope="col">Ադմին</th>
                                <th scope="col">Խմբագրել</th>
                                <th scope="col">Հաստատել</th>
                                <th scope="col">Մերժել</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($images as $key=>$value)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td scope="row"><img src="{{asset('assets/img/gallery/'. $value->src)}}"
                                                         style="width: 90px; height: 90px; object-fit: cover"></td>
                                    <td>
                                        {{$imgPosition[$value->main_image]}}
                                    </td>
                                    <td>
                                        @php
                                            $user_info = App\Helper::getUserInfo($value->user_id);
                                        @endphp
                                        {{$user_info['name'] . ' ' . $user_info['lastname']}}
                                    </td>
                                    <td>{{$status[$value->status]}}</td>
                                    <td style="width: 15px"><a href="{{route('gallery_show', $value->id)}}"><i
                                                class="nav-icon fas fa-edit text-primary"></i></a></td>
                                    <td class="text-center">
                                        <a href="{{route('submit', [$value->id, 2])}}" id="confirm">
                                            <i class="nav-icon fas fa-check text-success"></i>
                                        </a>
                                    </td>
                                    <td><a href="" class="refuse text-danger text-bold" data-bs-toggle="modal"
                                           data-bs-target="#refuse_modal" data-row="{{$value->id}}" data-action="2">X</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div id="news" class="tab-pane fade">
                        <div class="row mt-3">
                            <div class="col-11"><h3>Նորություններ</h3></div>
                            <div class="col-1 mt-1">
                            </div>
                        </div>
                        <table class="table mt-3" id="workers_table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col" class="w_20">Հ/հ</th>
                                <th scope="col">Լուսանկար</th>
                                <th scope="col">Վերնագիր</th>
                                <th scope="col">Կարճ նկարագրություն</th>
                                <th scope="col">Գործողություն</th>
                                <th scope="col">Տեսնել</th>
                                <th scope="col">Հաստատել</th>
                                <th scope="col">Մերժել</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($news as $key=>$value)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td scope="row"><img src="{{asset('assets/img/news/'. $value->img)}}"
                                                         style="width: 90px; height: 90px; object-fit: cover"></td>
                                    <td>{{$value->title}}</td>
                                    <td>{{$value->short_description}}</td>
                                    <td>{{$status[$value->status]}}</td>
                                    <td style="width: 15px"><a href="{{route('news_show', $value->id)}}"><i
                                                class="nav-icon fas fa-edit text-primary"></i></a></td>
                                    <td class="text-center">
                                        <a href="{{route('submit', [$value->id, 3])}}" class="confirm">
                                            <i class="nav-icon fas fa-check text-success"></i>
                                        </a>
                                    </td>
                                    <td><a href="" class="refuse text-danger text-bold" data-bs-toggle="modal"
                                           data-bs-target="#refuse_modal" data-row="{{$value->id}}" data-action="3">X</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="refuse_modal" tabindex="-1" aria-labelledby="refuse_modalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form data-action="{{route('refuse_sample')}}" method="POST" id="form_refuse">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="refuse_modalLabel">Հաղորդագրություն</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <textarea id="message" name="message"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Փակել</button>
                            <input type="submit" class="btn btn-primary" value="Ուղարկել">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        let refuse = document.querySelectorAll('.refuse');
        for (let tag of refuse){
            tag.addEventListener('click', function (){
                let row = this.dataset.row;
                let dateAction = this.dataset.action;

                let form = document.querySelector('#form_refuse');
                let action = form.dataset.action + '/' + row + '/' + dateAction;
                form.action = action;
            });
        }


    </script>
@endsection
