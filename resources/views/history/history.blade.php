@include('layouts.header')

@yield('header')

<div class="container" style="margin-top: 7%; margin-bottom: 6%">
    <h2 class="patm mb-5"><b>ՊԱՏՄՈՒԹՅՈՒՆ</b></h2>
    <?php foreach ($history as $key => $item) { ?>
    <div class="row mt-4">
        <?php if ($key % 2 == 0) { ?>
        <div class="col-4">
            <img src="assets/img/history/<?= $item['image'] ?>" alt="" class="mw100 <?= $item['class'] ?> dasht">
        </div>
        <?php } ?>

        <div class="col-8 ps-5" >
            <p class="small2 justifity">
                <?= substr($item['description'], 0, 1510) . "..." ?>
            </p>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal_<?=$item['id']?>">
                Կարդալ ավելին
            </button>
            <div class="modal modal_fon" id="myModal_<?=$item['id']?>">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content" style="width: 650px; height: 600px">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title text-center"><?= $item['name'] ?></h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body modal_style">
                            <p  class="justifity">
                                <?= $item['description'] ?>
                            </p>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Փակել</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <?php if ($key % 2 == 1) { ?>
        <div class="col-sm-4 col-md-3">
            <img src="assets/img/history/<?= $item['image'] ?>" alt="" class="mw100 <?= $item['class'] ?>">
        </div>
        <?php } ?>
    </div>
    <?php } ?>
</div>

<div>
    <h2 class="patm mt-5">Լուսանկարներ</h2>
</div>

<section id="portfolio" class="portfolio">
    <div class="container">
        <div class="row portfolio-container" data-aos="fade-up">

            @foreach($images as $value)
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        @if(is_file(asset('assets/img/history/'. $value['src'])))
                        <img src="{{asset('assets/img/history/'. $value['src'])}}" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="{{asset('assets/img/history/'. $value['src'])}}"
                               data-gallery="portfolioGallery"
                               class="portfolio-lightbox"><i class="bx bx-plus"></i>
                            </a>
                        </div>
                        @else
                            <img src="{{asset('assets/img/gallery/'. $value['src'])}}" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="{{asset('assets/img/gallery/'. $value['src'])}}"
                                   data-gallery="portfolioGallery"
                                   class="portfolio-lightbox"><i class="bx bx-plus"></i>
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section><!-- End Portfolio Section -->
<script>
    $(".small2").each(function () {
        let text = $(this).text();
        if (text.length > 270) {
            console.log(text.length);
            $(this).html(text.substr(0, 256) + '<span class="elipsis">' +
                '</span>...');
        }
    });
</script>

@include('layouts.footer')

@yield('footer')
