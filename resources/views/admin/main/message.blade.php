@extends('admin.layouts.main')
@section('content')
@php
$green =['','unread'];
@endphp
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <ul class="nav nav-tabs justify-content-center text-muted">
                    <li style="margin-left: 70px" class="active"><a data-toggle="tab"
                                                                    href="#user">Հաղորդագրություններ</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="user" class="tab-pane fade in active show">

                        <div class="content-header">
                            <div class="container-fluid">
                                <div class="row mt-3">
                                    <div class="col-11"><h3>ՀԱՂՈՐԴԱԳՐՈՒԹՅՈՒՆԵՐ</h3></div>
                                </div>
                                <table class="table mt-3" id="workers_table">
                                    <thead class="thead-dark">
                                    <tr style="vertical-align: middle">
                                        <th scope="col" class="w_20">Հ/հ</th>
                                        <th scope="col">Անուն</th>
                                        <th scope="col">Էլ․ հասցե</th>
                                        <th scope="col">Հասցեատեր</th>
                                        <th scope="col">Հաղորդագրություն</th>
                                        <th scope="col">Տեսնել</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($message as $key=>$value)
                                        <tr class="{{$green[$value->status]}}">
                                            <td>{{$key+1}}</td>
                                            <td class="name">{{$value->name}}</td>
                                            <td>{{$value->email}}</td>

                                            <td>{{$roles[$value->message_to]}}</td>
                                            <td class="message">{!! $value->message !!}</td>
                                            <td style="width: 15px">
                                                <a href="javascript:void(0);" data-value="{{$value->id}}"
                                                   class="view_message" data-bs-target="#message"
                                                   data-bs-toggle="modal" data-status="{{$value->status}}"><i
                                                        class="nav-icon fas fa-eye text-primary"></i></a>
                                            </td>
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


    <div class="modal fade" id="message" tabindex="-1" aria-labelledby="refuse_modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="refuse_modalLabel">Տեսնել հաղորդագրությունը</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <b>Ուղարկող՝</b>
                    <span class="sender"></span><br>
                    <b>Հաղորդագրություն՝</b><br>
                    <div class="message_text"></div>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>


    <script>
        $('.view_message').on('click', function (e) {
            // jqueryov gnal tvyal toxic merel uma uxarkvel, ev text@ u dnel sender u message_text classnerov elementneri mej hamapatasxanabar
            let user = $(this).parents('tr').find('.name').text();
            let namak = $(this).parents('tr').find('.message').html();

            $('.sender').text(user);
            $('.message_text').html(namak);

            e.preventDefault();
            let message = $(this).data('value');
            if ($(this).data('status') == 1) {
                $(this).data('status', 0);
                $(this).parents('tr').removeClass('unread');

                $.ajax({
                    type: 'POST',
                    url: '/change_message_status',
                    data: {
                        _token: '<?php echo csrf_token() ?>',
                        message: message
                    }
                });
            }
        });
    </script>
@endsection


