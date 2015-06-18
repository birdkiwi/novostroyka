$(document).ready(function(){
    $('body').append(
        '<div id="verstka" style="position: fixed; top: 0; right: 0; background: #fff; border: 1px solid #cecece; box-shadow: 2px 3px 10px #808080; padding: 15px; z-index: 999;"><span  id="close" style="cursor:pointer; border: 1px solid #cecece;">X</span> Страницы верстки:<br />' +
        '1. √ <a href="index.php">Главная</a><br />' +
        '2. √ <a href="building.php">Карточка объекта</a><br />' +
        '3. √ <a href="search.php">Выдача</a><br />' +
        '4. √ <a href="news.php">Все новости</a><br />' +
        '5. √ <a href="news-item.php">Одна новость</a><br />' +
        '6. √ <a href="mortgage.php">Ипотека</a><br />' +
        '7. √ <a href="modals.php">Модальные окна</a><br />' +
        '<br />' +
        '<a href="bootstrap.html">Bootstrap</a>' +
        '</div>');
    $('#close').click(function(e) {
        $('#verstka').hide();
        e.preventDefault();
    });
});