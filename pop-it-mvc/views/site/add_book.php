<link rel ="stylesheet" href="/pop-it-mvc/public/css/add_book.css">
<h1>Добавление книги</h1>
<form method="post" enctype="multipart/form-data">
    <div class="page">
        <p>Книга:</p>
        <div class="input-button-container">
            <input type="text" name="title" placeholder="Название книги" />
        </div>
        <div class="input-button-container">
            <input type="text" name="year_edition" placeholder="Год издания книги" />
        </div>
        <div class="input-button-container">
            <input type="text" name="price" placeholder="Цена книги" />
        </div>
        <div class="form">
            <p>Автор:</p>
            <div class="author_list">
                <select class="input-button-container" name="id_author">
                    <?php
                        foreach ($author as $author){
                            echo "<option value=\"$author->id_author\">$author->name $author->surname</option>";
                        }
                    ?>
                </select>
            </div>

        </div>
        <p>Тип издания:</p>
        <select class="input-button-container" name="id_type_edition">
        <?php
            foreach ($edition as $edition){
                echo "<option value=\"$edition->id_type_edition\">$edition->type_edition</option>";
            }
        ?>
        </select>
        <div>
            <textarea class="input-button-container" cols="50" rows="3" name="annotation" placeholder="Краткое описание книги"></textarea>
        </div>


        <button type="submit">Создать книгу</button>
    </div>
</form>
