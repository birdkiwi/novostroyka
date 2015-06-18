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
                    <li class="active"><a href="index.php">Новостройки</a></li>
                    <li><a href="mortgage.php">Ипотека</a></li>
                    <li><a href="news.php">Новости новостроек</a></li>
                    <li><a href="#">Ипотечные новости</a></li>
                    <li><a href="#">Акции</a></li>
                    <li><a href="#">Фотоотчеты</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="main-header-filter">
        <div class="wrapper">
            <h3 class="main-header-filter-title">Подобрать вариант:</h3>

            <form action="#" method="post">
                <div class="row">
                    <div class="column-1">
                        <div class="form-group">
                            <label>Район города</label>
                            <div class="multiple-custom-select">
                                <div class="multiple-custom-select-input">
                                    <span class="multiple-custom-select-text">Выбрать районы</span>
                                    <span class="multiple-custom-select-text-chosen">
                                        Выбрано <b>[<span class="multiple-custom-select-text-chosen-value">0</span>]</b>
                                        <a href="#" class="multiple-custom-select-clear"><span>сбросить</span></a>
                                    </span>
                                    <a class="multiple-custom-select-add" href="#"></a>
                                </div>
                                <div class="multiple-custom-select-box">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="custom-checkbox">
                                                <input type="checkbox" name="district" id="district-field-1" />
                                                <label for="district-field-1"><span>Дзержинский</span></label>
                                            </div>
                                            <div class="custom-checkbox">
                                                <input type="checkbox" name="district" id="district-field-2" />
                                                <label for="district-field-2"><span>Железнодорожный</span></label>
                                            </div>
                                            <div class="custom-checkbox">
                                                <input type="checkbox" name="district" id="district-field-3" />
                                                <label for="district-field-3"><span>Заельцовский</span></label>
                                            </div>
                                            <div class="custom-checkbox">
                                                <input type="checkbox" name="district" id="district-field-4" />
                                                <label for="district-field-4"><span>Калининский</span></label>
                                            </div>
                                            <div class="custom-checkbox">
                                                <input type="checkbox" name="district" id="district-field-5" />
                                                <label for="district-field-5"><span>Кировский</span></label>
                                            </div>
                                            <div class="custom-checkbox">
                                                <input type="checkbox" name="district" id="district-field-6" />
                                                <label for="district-field-6"><span>Ленинский</span></label>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="custom-checkbox">
                                                <input type="checkbox" name="district" id="district-field-7" />
                                                <label for="district-field-7"><span>Октябрьский</span></label>
                                            </div>
                                            <div class="custom-checkbox">
                                                <input type="checkbox" name="district" id="district-field-8" />
                                                <label for="district-field-8"><span>Первомайский</span></label>
                                            </div>
                                            <div class="custom-checkbox">
                                                <input type="checkbox" name="district" id="district-field-9" />
                                                <label for="district-field-9"><span>Советский</span></label>
                                            </div>
                                            <div class="custom-checkbox">
                                                <input type="checkbox" name="district" id="district-field-10" />
                                                <label for="district-field-10"><span>ЦАО</span></label>
                                            </div>
                                            <div class="custom-checkbox">
                                                <input type="checkbox" name="district" id="district-field-11" />
                                                <label for="district-field-11"><span>Центральный</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-info btn-sm">Готово</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column-1">
                        <label>Комнат</label>
                        <div class="btn-group btn-group-justified rooms-group js-rooms-group">
                            <div class="btn-group" role="group">
                                <button type="button" class="btn" data-value="C">C</button>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn" data-value="1">1</button>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn" data-value="2">2</button>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn" data-value="3">3</button>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn" data-value="4">4</button>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn" data-value="5">5+</button>
                            </div>
                        </div>
                        <input type="hidden" name="rooms" autocomplete="off" />
                    </div>
                    <div class="column-1">
                        <label>Срок сдачи</label>
                        <select class="selectpicker form-control">
                            <option>I 2015</option>
                            <option>II 2015</option>
                            <option>IIV 2015</option>
                            <option>IV 2015</option>
                        </select>
                    </div>
                    <div class="column-2">
                        <label>&nbsp;</label>
                        <div class="custom-checkbox">
                            <input type="checkbox" id="mortgage-field" />
                            <label for="mortgage-field">Ипотека</label>
                        </div>
                        <div class="custom-checkbox">
                            <input type="checkbox" id="exchange-field" />
                            <label for="exchange-field">Обмен</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="column-1 from-to-column">
                        <label>Общая площадь, м²</label>
                        <div class="row">
                            <div class="col-xs-6">
                                <input type="text" class="form-control js-numeric-input" placeholder="от" pattern="[0-9.]+" />
                            </div>
                            <div class="col-xs-6">
                                <input type="text" class="form-control js-numeric-input" placeholder="до" pattern="[0-9.]+" />
                            </div>
                        </div>
                    </div>
                    <div class="column-1 from-to-column">
                        <label>Цена, тыс. руб</label>
                        <div class="row">
                            <div class="col-xs-6">
                                <input type="text" class="form-control js-numeric-input" placeholder="от" pattern="[0-9.]+" />
                            </div>
                            <div class="col-xs-6">
                                <input type="text" class="form-control js-numeric-input" placeholder="до" pattern="[0-9.]+" />
                            </div>
                        </div>
                    </div>
                    <div class="column-1">
                        <label>Материал дома</label>
                        <select class="selectpicker form-control">
                            <option>Любой</option>
                            <option>Кирпич</option>
                            <option>Газобетон</option>
                            <option>Бетон</option>
                            <option>Дерево</option>
                        </select>
                    </div>
                    <div class="column-2">
                        <label>&nbsp;</label>
                        <input type="submit" value="Найти" class="btn btn-warning btn-block" />
                    </div>
                </div>
            </form>
        </div>
    </div>
</header>