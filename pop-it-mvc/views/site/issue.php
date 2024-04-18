<link rel ="stylesheet" href="/pop-it-mvc/public/css/issue.css">
<h1>Выдача книги</h1>
<div class="page">
    <div class="form">
            <p>Книга:</p>
            <div class="book_list">
                <input type="text" autocomplete="off" list="books" placeholder="Поиск...">
                <datalist id="books">
                    <?php
                    foreach ($book as $book){
                        echo "<option value=\"$book->title\">$book->title</option>";
                    }
                    ?>
                </datalist>
            </div>

    </div>
<!--    <div class="inform">-->
<!--        <div class="name">-->
<!--            <h3>Война и мир</h3>-->
<!--        </div>-->
<!--        <p>1867 г.</p>-->
<!--        <p>Толстой Лев Николаевич</p>-->
<!--    </div>-->
<!--    <div class="input-button-container">-->
<!--        <input type="text" placeholder="Читательский билет №" />-->
<!--        <button type="button">Найти</button> -->
<!--    </div>-->
    <div class="reader">
        <?php
        $readerID = $_GET['id'] ?? null;
        foreach ($reader as $reader) {
            if ($reader->id == $readerID) {
                echo "
                                       <div class=\"info\">
                        <div class=\"name\">
                            <p>Читательский билет № $reader->id</p>
                        </div>
                        <h3>$reader->surname $reader->name $reader->patronymic</h3>
                        <p>+$reader->number</p>
                    </div>
                    <h4>Дата выдачи: 12.04.2024</h4>
                 <div class='column'>
                 <button type=\"submit\">Выдать книгу</button>
                 </div>
                                          ";
                break;
            }
        }
        ?>
    </div>

<!--    <div class="info">-->
<!--        <div class="name">-->
<!--            <p>Читательский билет № 123456</p>-->
<!--        </div>-->
<!--        <h3>Корнилова Юлия Константиновна</h3>-->
<!--        <p>+7 - 983 - 343 - 09 - 38</p>-->
<!--    </div>-->
<!--    <h4>Дата выдачи: 12.04.2024</h4>-->
<!--    <button type="submit">Выдать книгу</button>-->
</div>
