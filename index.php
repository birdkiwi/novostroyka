<?php include_once('head.php'); ?>
<body data-btn-up>
<?php include_once('header-with-filter.php'); ?>

<section class="buildings-block gradient-background">
    <div class="wrapper clearfix">
        <h3 class="buildings-block-title">Все новостройки Новосибирска</h3>
        <p class="buildings-block-subtitle">База <a href="#" class="dotted">новостроек</a> регулярно пополняется и актуализируется</p>
        <ul class="buildings-block-tabs">
            <li class="active"><a href="#buildings-block-grid" data-toggle="tab"><span>Плиткой</span></a></li>
            <li><a href="#buildings-block-map" data-toggle="tab"><span>На карте</span></a></li>
        </ul>
    </div>
    <div class="tab-content">
        <div id="buildings-block-grid" class="wrapper clearfix buildings-block-grid tab-pane active">
            <div class="row">
                <?php include('buildings-grid-items.php'); ?>
                <?php include('buildings-grid-items.php'); ?>
                <?php include('buildings-grid-items.php'); ?>
                <?php include('buildings-grid-items.php'); ?>
                <?php include('buildings-grid-items.php'); ?>
                <?php include('buildings-grid-items.php'); ?>
            </div>
            <div class="load-more"></div>
        </div>
        <div id="buildings-block-map" class="buildings-block-map tab-pane"></div>
    </div>
</section>

<?php include_once('feedback-block.php'); ?>
<?php include_once('footer.php'); ?>