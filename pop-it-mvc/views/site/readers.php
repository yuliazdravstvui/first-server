<link rel ="stylesheet" href="/pop-it-mvc/public/css/readers.css">
<h1>Читатели</h1>
<div class="page">
    <div class="readers">
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
                <a href=\"/pop-it-mvc/issue\" class=\"button_book\">Выдать книгу</a>
             </div>
            </div>
            <img src=\"img/история.svg\">
                    ";
                }
            ?>

    </div>
</div>

