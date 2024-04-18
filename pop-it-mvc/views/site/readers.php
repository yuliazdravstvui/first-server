<link rel ="stylesheet" href="/pop-it-mvc/public/css/readers.css">
<h1>Читатели</h1>
<div class="page">
    <div class="readers">
        <form method="post" class="input-button-container">
            <input type="text" placeholder="Поиск" name="search">
            <button type="submit">Найти</button>
            <a class="button_reset" href="<?=app()->route->getUrl('/readers'); ?>">Сбросить</a>
        </form>
        <span><?= $message ?? '';?></span>
        <div class="one-reader">
            <?php
                foreach ($readers as $readers) {
                    echo "
                     <div class=\"reader\">
                <div class=\"info\">
                    <div class=\"name\">
                        <p>Читательский билет № $readers->id</p>
                    </div>
                    <h3>$readers->surname $readers->name $readers->patronymic</h3>
                    <p>+$readers->number</p>
                </div>
             <div class='column'>
             <a class='button_book' href='".app()->route->getUrl('/reader?id='.$readers->id)."'>Подробнее</a>
             <a class='button_book' href='".app()->route->getUrl('/issue?id='.$readers->id)."'>Выдать книгу</a>
             </div>
            </div>
            <img src=\"img/история.svg\">
                    ";
                }
            ?>

    </div>
</div>

