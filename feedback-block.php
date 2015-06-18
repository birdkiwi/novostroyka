<section class="feedback-block">
    <div class="wrapper">
        <h3 class="feedback-block-title">
            <img class="feedback-block-title-avatar" src="images/operator.png" width="72" height="72" alt="Оператор call-центра"/>
            <span class="feedback-block-title-value">Задайте вопрос специалисту по новостройкам</span>
            <p class="feedback-block-subtitle">
                Оставьте заявку на бесплатную консультацию
            </p>
        </h3>

        <form class="feedback-block-form js-validate" action="#" method="POST">
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" required placeholder="Имя" data-error-placeholder="Введите ваше имя" data-default-placeholder="Имя" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="phone" data-masked="+7 999 999-99-99" required placeholder="Телефон" data-error-placeholder="Введите контактный телефон" data-default-placeholder="Телефон"/>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-8">
                    <div class="form-group">
                        <textarea name="question" class="form-control" cols="30" rows="10" required placeholder="Здесь вы можете задать свой вопрос и указать дополнительную информацию" data-error-placeholder="Напишите ваш вопрос" data-default-placeholder="Здесь вы можете задать свой вопрос и указать дополнительную информацию"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group">
                        <input type="submit" value="Отправить" class="btn btn-info" />
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>