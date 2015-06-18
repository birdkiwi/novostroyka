<header class="main-header">
    <div class="js-fixed-header main-header-fixed">
        <div class="wrapper clearfix">
            <a href="#" class="main-header-toggler-wrap">
                <span class="main-header-toggler"></span>
            </a>
            <div class="main-header-logo">
                <a href="index.php">
                    <?php echo file_get_contents('images/svg/logo.svg'); ?>
                </a>
            </div>
            <div class="main-header-slogan">
                Более <b>154</b> жилых комплексов <br/>
                от надежных источников
            </div>
            <div class="main-header-contacts">
                <div class="main-header-contacts-avatar">
                    <img src="images/operator.png" width="72" height="72" alt="Оператор call-центра"/>
                </div>
                <div class="main-header-contacts-phone">
                    <a href="tel:+73832631077"><small>+7 (383)</small> 263-10-77</a>
                </div>
                <div class="main-header-contacts-button">
                    <a href="#callback-modal" data-toggle="modal" class="btn btn-info btn-sm">Перезвоните мне</a>
                </div>
            </div>
        </div>
        <nav class="mainmenu">
            <div class="wrapper">
                <ul>
                    <li><a href="index.php">Новостройки</a></li>
                    <li class="active"><a href="mortgage.php">Ипотека</a></li>
                    <li><a href="news.php">Новости новостроек</a></li>
                    <li><a href="#">Ипотечные новости</a></li>
                    <li><a href="#">Акции</a></li>
                    <li><a href="#">Фотоотчеты</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="main-header-filter mortgage-calculation-block">
        <div class="wrapper">
            <h3 class="main-header-filter-title">Ипотечный калькулятор:</h3>

            <form action="#" method="post">
                <div class="form-group">
                    <select class="selectpicker form-control">
                        <option>Ипотека с господдержкой</option>
                        <option>Кирпич</option>
                        <option>Газобетон</option>
                        <option>Бетон</option>
                        <option>Дерево</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col-xs-7">
                        <div class="row">
                            <div class="col-xs-6">
                                <label>Цена квартиры, <b>3400</b> тыс. руб. *</label>
                                <input class="js-input-slider" type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="14"/>
                            </div>

                            <div class="col-xs-6">
                                <label>Собственные средства, <b>400</b> тыс. руб. *</label>
                                <input class="js-input-slider" type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="14"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label>Процентная ставка <b>15%</b></label>
                                    <input class="js-input-slider" type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="14"/>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label>Срок кредита, <b>20</b> лет</label>
                                    <input class="js-input-slider" type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="14"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-2"></div>
                    <div class="col-xs-3 mortgage-calculation-block-summary">
                        <p>Размер ежемесячного платежа:</p>
                        <div class="mortgage-calculation-block-summary-value">
                            18 159 руб
                        </div>
                        <a href="#" class="btn btn-lg btn-info btn-block">Оформить заявку</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</header>