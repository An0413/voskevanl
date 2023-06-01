@include('layouts.header')

@yield('header')

<div class="container" style="margin-top: 10%; margin-bottom: 6%">
    <h2 class="patm"><b>ՊԱՏՄՈՒԹՅՈՒՆ</b></h2>
    <?php foreach ($history as $key => $item) { ?>
    <div class="row mt-4">
        <?php if ($key % 2 == 0) { ?>
        <div class="col-4">
            <img src="assets/img/history/<?= $item['image'] ?>" alt="" class="mw100 <?= $item['class'] ?>">
        </div>
        <?php } ?>

        <div class="col-8 ps-5">
            <p class="small2">
                <?= $item['description'] ?>
            </p>
            <button class="btn"><a href="xoshxotan.php?page=<?= $item['id'] ?>" target="_blank">Կարդալ
                    ավելին</a>
            </button>
        </div>

        <?php if ($key % 2 == 1) { ?>
        <div class="col-sm-4 col-md-3">
            <img src="assets/img/history/<?= $item['image'] ?>" alt="" class="mw100 <?= $item['class'] ?>">
        </div>
        <?php } ?>
    </div>
    <?php } ?>
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
</script>

@include('layouts.footer')

@yield('footer')
