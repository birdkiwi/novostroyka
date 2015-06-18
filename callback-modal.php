<div class="modal fade" id="callback-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form class="modal-content js-validate" action="#" method="POST">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                        <?php echo file_get_contents('images/svg/times.svg'); ?>
                    </span>
                </button>
                <div class="media">
                    <div class="media-left">
                        <img src="images/operator.png" width="72" height="72" alt=""/>
                    </div>
                    <div class="media-body">
                        <h2>Перезвоните мне!</h2>
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
                            <textarea cols="30" rows="3" class="form-control" name="comment" placeholder="Здесь вы можете задать свой вопрос и указать дополнительную информацию" required></textarea>
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