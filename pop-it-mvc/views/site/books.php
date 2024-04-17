<link rel ="stylesheet" href="/pop-it-mvc/public/css/books.css">
<h1>Книги</h1>
<div class="input-button-container">
    <input type="text" placeholder="Название книги" />
    <button type="button">Найти</button> <!-- Иконка увеличительного стекла -->
</div>
    <?php
    foreach ($books as $book) {
        $author = \Model\Author::where('id', $book->author)->first();
        $authorfullName = $author->name . ' ' . $author->surname . ' ' . $author->patronymic;
        $type_edition = \Model\Editions::where('id', $book->type_edition)->first();
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










