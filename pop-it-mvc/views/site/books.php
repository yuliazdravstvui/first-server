<link rel ="stylesheet" href="/pop-it-mvc/public/css/books.css">
<h1>Книги</h1>
<form method="post" class="input-button-container">
    <input type="text" placeholder="Поиск" name="search">
    <button type="submit">Найти</button>
    <a class="button_reset" href="<?=app()->route->getUrl('/books'); ?>">Сбросить</a>
</form>
<span><?= $message ?? '';?></span>
<!--<div class="input-button-container">-->
<!--    <input type="text" placeholder="Название книги" />-->
<!--    <button type="button">Найти</button> Иконка увеличительного стекла -->
<!--</div>-->
    <?php
    foreach ($books as $book) {
        $author = \Model\Author::where('id_author', $book->id_author)->first();
        $authorfullName = $author->name . ' ' . $author->surname . ' ' . $author->patronymic;
        $type_edition = \Model\Editions::where('id_type_edition', $book->id_type_edition)->first();
        $typeeditionname = $type_edition->type_edition;
            echo "
    
                <div class='book'>
                    <div class='info'>
                        <div class='name'>
                            <h3>$book->title</h3>
                            <p class='price'>$book->price ₽</p>
                            <p class='status'>Статус: Выдана</p>
                        </div>
                        <p class='type'>Тип издания: $typeeditionname</p>
                        <p>Год издания:$book->year_edition г.</p>
                        <p>ФИО автора: $authorfullName</p>
                    </div>
                    <a class=\"button\" href='" . app()->route->getUrl('/book?id=' . $book->id) . "'>Подробнее</a>
                </div>

                ";

    }
    ?>










