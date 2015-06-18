<?php include_once('head.php'); ?>
<body data-btn-up>
<?php include_once('header.php'); ?>

<section class="main-content gradient-background">
    <div class="wrapper">
        <h1 class="page-title">Новости новостроек</h1>

        <div class="news-grid">
            <div id="news-grid">
                <?php include('news-grid-items.php'); ?>
            </div>
            <div class="load-more">
                <button class="btn btn-info btn-sm" data-load-more="news-grid-items.php" data-load-more-target="#news-grid">Показать еще</button>
            </div>
        </div>
    </div>
</section>

<?php include_once('feedback-block.php'); ?>
<?php include_once('footer.php'); ?>