<link rel ="stylesheet" href="/pop-it-mvc/public/css/book.css">
<h1>Книгa</h1>
<?php
$bookID = $_GET['id'] ?? null;
    foreach ($book as $book) {
        $author = \Model\Author::where('id_author', $book->id_author)->first();
        $authorfullName = $author->name . ' ' . $author->surname . ' ' . $author->patronymic;
        $type_edition = \Model\Editions::where('id_type_edition', $book->id_type_edition)->first();
        $typeeditionname = $type_edition->type_edition;
        if ($book->id == $bookID) {
            echo "
                                        <div class=\"full_book\">
                                            <div class=\"about_book\" style=\"background-image: linear-gradient(90deg, #3f1d1d 0%,transparent 50%), url('/pop-it-mvc/public/img/1.jpg');\">
                                                <div class=\"name\">
                                                    <h3>$book->title</h3>
                                                    <p class=\"price\">$book->price ₽</p>
                                                </div>
                                                <p class='type'>Тип издания: $typeeditionname</p>
                                                <p>Год издания:$book->year_edition г.</p>
                                                <p>ФИО автора: $authorfullName</p>
                                            </div>
                                            <p>Краткая аннотация:</p>
                                            <p>$book->annotation</p>
                                        </div>
                                          ";
            break;
        }
    }
?>