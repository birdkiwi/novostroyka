<?php include_once('head.php'); ?>
<body data-btn-up>
<?php include_once('header.php'); ?>

<article class="main-content">
    <div class="wrapper">
        <h1 class="page-title">Примеры модальных окон</h1>
        <ul>
            <li><a href="#modal-1" data-toggle="modal">Модальное окно №1</a></li>
            <li><a href="#modal-2" data-toggle="modal">Модальное окно №2</a></li>
        </ul>
    </div>
</article>

<!-- Modal #1 -->
<div class="modal fade feedback-modal" id="modal-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form class="modal-content js-validate" action="#" method="POST">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                    <?php echo file_get_contents('images/svg/times.svg'); ?>
                </button>
                <p>Trade-in (обмен квартир) – отличный инструмент для тех, кто желает улучшить свои жилищные условия и имеет
                собственную недвижимость для обмена. Действует множество программ от застройщиков и агентств недвижимости.
                Некоторые программы позволяют вам оставаться жить в своей квартире вплоть до передачи ключей от застройщика.</p>
            </div>
            <div class="modal-body">
                <div class="media">
                    <div class="media-left">
                        <img src="images/operator.png" width="72" height="72" alt=""/>
                    </div>
                    <div class="media-body">
                        <h2>Запишитесь на экскурсию</h2>
                        <p>Специалист свяжется с вами в ближайшее время</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Имя" required />
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="phone" placeholder="Телефон" data-masked="+7 999 999-99-99" required />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <textarea cols="30" rows="3" class="form-control" name="comment" placeholder="Здесь вы можете указать информацию о вашей квартире, которую хотите передать в зачет новой" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <input type="submit" class="btn btn-info" value="Отправить">
                    </div>
                    <div class="col-xs-6 text-right">
                        <div class="modal-contacts">
                            или наберите сами – <b>(383) 263-10-77</b>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Modal #2 -->
<div class="modal fade building-info-modal" id="modal-2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                    <?php echo file_get_contents('images/svg/times.svg'); ?>
                </button>
                <div class="text-center">
                    <img src="images/tmp/building-plan-large.png" alt="" />
                </div>
            </div>
            <div class="modal-footer building-info">
                <div class="row">
                    <div class="col-xs-4">
                        <p>
                            <span class="building-info-title">2 комнатная</span>
                            <span class="building-info-area">32.8 м²</span>
                        </p>
                        <p>
                            <span class="building-info-price">1 780 тр</span>
                            <span class="building-info-floor">1 этаж</span>
                        </p>
                        <p>
                            <span class="building-info-place">Стрижи на Родниках</span>
                            <span class="building-info-date">IV 2015</span>
                        </p>
                    </div>
                    <div class="col-xs-1"></div>
                    <div class="col-xs-7">
                        <p class="building-info-contacts-title">Запись на экскурсию:</p>
                        <div>
                            <div class="building-info-contacts-phone">
                                <a href="tel:+73832631077"><small>+7 (383)</small> 263-10-77</a>
                            </div>
                            <a href="#callback-modal" data-toggle="modal" class="building-info-contacts-btn btn btn-info btn-sm">Перезвоните мне</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once('footer.php'); ?>