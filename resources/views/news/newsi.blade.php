@include('layouts.header')

@yield('header')


<div class="container-fluid" style="margin-top: 7%">
    <h1 class="text-center">ՆՈՐՈՒԹՅՈՒՆՆԵՐ</h1>
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="row no-gutters">
                <div class="content col-xl-9 d-flex align-items-stretch aos-init aos-animate">
                    @foreach($news as $value)
                        <div class="row newsstyle">
                            <div class="col-8 mt-5">
                                <h1 class="text-center" style="color:white;">{{$value->title}}</h1><br>
                                <p>{{$value->description}}</p>
                                <p class="mt-5">Հեղինակ՝
                                    <span>{{$users[$value->user_id]['workers']['name'].' '.$users[$value->user_id]['workers']['lastname']}}</span>
                                </p>
                            </div>
                            <div class="col-4 mt-5">
                                <img src="{{asset('assets/img/news/' .$value->img)}}" class="w-100"
                                     style="border-radius: 5%">
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-xl-3">
                    @foreach($recent_news as $value)
                        <div class="row mt_2r">
                            <div class="col-4">
                                <img src="{{asset('assets/img/news/' .$value->img)}}" class="img_w_100">
                            </div>
                            <div class="col-8">
                                <p class="news_f">{{$value->title}}</p>
                                <div class="btn news_but"><a href="/news/{{$value->id}}" class="text-muted news_f">Կարդալ
                                        ավելին</a><span class="fas fa-arrow-right"></span></div>
                            </div>
                        </div>

                    @endforeach
                </div><!-- End .content-->
            </div>
            <div class="row">
                <div class="col-xl-9 col-md-9 col-sm-9">
                    <div class="container mt-5 mb-5">
                        <div class="row height d-flex justify-content-center align-items-center">
                            <div class="col-md-7">
                                <div class="card">
                                    <div class="p-3">
                                        <h6>Մեկնաբանություններ</h6>
                                    </div>
                                    <div class="mt-3 d-flex flex-row align-items-center p-3 form-color">
                                        <img src="" width="50"
                                             class="rounded-circle mr-2">
                                        <input type="text" class="form-control" placeholder="Թողեք Ձեր մեկնաբանությունը․․․"
                                               data-bs-toggle="modal" data-bs-target="#comment">
                                    </div>
                                    @foreach($comments as $value)
                                        <div class="mt-2">
                                            <div class="d-flex flex-row p-3">
                                                <div class="w-100">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="d-flex flex-row align-items-center"><span
                                                                class="mr-2">{{$value->first_name . ' '.$value->last_name}}</span>
                                                        </div>
                                                        <small>{{$value->created_at}}</small>
                                                    </div>
                                                    <p class="text-justify comment-text mb-0">{{$value->comment}}</p>
                                                    <div class="d-flex flex-row user-feed">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-3 col-sm-3"></div>
            </div>
        </div>

    </section>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="comment" tabindex="-1" aria-labelledby="comment" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Խնդրում ենք լրացնել</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('comment_store', $news_id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <label for="first_name" class="form-label">Անուն</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" required>
                    <label for="last_name" class="form-label">Ազգանուն</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" required>
                    <label for="comment" class="form-label">Մեկնաբանություն</label><br>
                    <textarea name="comment" cols="52" required></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Փակել</button>
                    <button type="submit" class="btn btn-primary">Հաստատել</button>
                </div>
            </form>
        </div>
    </div>
</div>
@include('layouts.footer')

@yield('footer')
