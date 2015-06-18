<?php include_once('head.php'); ?>
<body data-btn-up>
<?php include_once('header.php'); ?>

<article class="main-content">
    <div class="wrapper">
        <h1 class="page-title">Примеры модальных окон</h1>
        <ul>
            <li><a href="#modal-1" data-toggle="modal">Модальное окно «Хочу обменять старую квартиру на новостройку»</a></li>
            <li><a href="#modal-2" data-toggle="modal">Модальное окно «Объект»</a></li>
            <li><a href="#modal-3" data-toggle="modal">Модальное окно «Хочу получить рассрочку от застройщика»</a></li>
            <li><a href="#modal-4" data-toggle="modal">Модальное окно «Оформить заявку на ипотеку»</a></li>
        </ul>

        <div class="buildings-block-item-shadow-wrap dark-blue">
            <a href="#" class="buildings-block-item dark-blue">
                <div class="buildings-block-item-photo">
                    <img width="258" height="258" src="images/tmp/building-7.jpg" alt=""/>
                </div>
                <div class="buildings-block-item-price">
                    от <b>45</b> тр/м²
                </div>
                <div class="buildings-block-item-logo">
                    <div class="buildings-block-item-logo-wrap">
                        <div class="buildings-block-item-logo-wrap-2">
                            <img src="images/tmp/building-logo-7.png" alt="Северная корона"/>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="buildings-block-item-shadow-wrap dark-red">
            <a href="#" class="buildings-block-item dark-red">
                <div class="buildings-block-item-photo">
                    <img width="258" height="258" src="images/tmp/building-7.jpg" alt=""/>
                </div>
                <div class="buildings-block-item-price">
                    от <b>45</b> тр/м²
                </div>
                <div class="buildings-block-item-logo">
                    <div class="buildings-block-item-logo-wrap">
                        <div class="buildings-block-item-logo-wrap-2">
                            <img src="images/tmp/building-logo-7.png" alt="Северная корона"/>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="buildings-block-item-shadow-wrap orange">
            <a href="#" class="buildings-block-item orange">
                <div class="buildings-block-item-photo">
                    <img width="258" height="258" src="images/tmp/building-7.jpg" alt=""/>
                </div>
                <div class="buildings-block-item-price">
                    от <b>45</b> тр/м²
                </div>
                <div class="buildings-block-item-logo">
                    <div class="buildings-block-item-logo-wrap">
                        <div class="buildings-block-item-logo-wrap-2">
                            <img src="images/tmp/building-logo-7.png" alt="Северная корона"/>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="buildings-block-item-shadow-wrap blue">
            <a href="#" class="buildings-block-item blue">
                <div class="buildings-block-item-photo">
                    <img width="258" height="258" src="images/tmp/building-7.jpg" alt=""/>
                </div>
                <div class="buildings-block-item-price">
                    от <b>45</b> тр/м²
                </div>
                <div class="buildings-block-item-logo">
                    <div class="buildings-block-item-logo-wrap">
                        <div class="buildings-block-item-logo-wrap-2">
                            <img src="images/tmp/building-logo-7.png" alt="Северная корона"/>
                        </div>
                    </div>
                </div>
            </a>
        </div>
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
                        <h2 class="multiline">Хочу обменять старую квартиру на новостройку</h2>
                        <p>Оставьте телефон и менеджер перезвонит вам в ближайшее время, чтобы рассказать вам больше о программе обмена вторичной недвижимости на квартиру в новостройке</p>
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
                <div class="building-info-meta">
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
                <div class="building-info-contacts">
                    <p class="building-info-contacts-title">Запись на экскурсию:</p>
                    <div>
                        <div class="building-info-contacts-phone">
                            <a href="tel:+73832631077"><small>+7 (383)</small> 263-10-77</a>
                        </div>
                        <a href="#callback-modal" data-dismiss="modal" data-toggle="modal" class="building-info-contacts-btn btn btn-info btn-sm">Перезвоните мне</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal #3 -->
<div class="modal fade feedback-modal" id="modal-3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form class="modal-content js-validate" action="#" method="POST">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                    <?php echo file_get_contents('images/svg/times.svg'); ?>
                </button>
                <p>Действует множество программ от застройщиков и агентств недвижимости. Некоторые программы позволяют вам оставаться жить в своей квартире вплоть до передачи ключей от застройщика.</p>
            </div>
            <div class="modal-body">
                <div class="media">
                    <div class="media-left">
                        <img src="images/operator.png" width="72" height="72" alt=""/>
                    </div>
                    <div class="media-body">
                        <h2>Хочу получить рассрочку от застройщика</h2>
                        <p>Оставьте телефон и менеджер перезвонит вам в ближайшее время</p>
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
                            <textarea cols="30" rows="3" class="form-control" name="comment" placeholder="Здесь вы можете указать информацию о интересующей квартире" required></textarea>
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

<!-- Modal #4 -->
<div class="modal fade feedback-modal" id="modal-4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form class="modal-content js-validate" action="#" method="POST">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                    <?php echo file_get_contents('images/svg/times.svg'); ?>
                </button>
                <div class="media">
                    <div class="media-left">
                        <img src="images/operator.png" width="72" height="72" alt=""/>
                    </div>
                    <div class="media-body">
                        <h2>Оформить заявку на ипотеку</h2>
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

<?php include_once('footer.php'); ?>