<link rel ="stylesheet" href="/pop-it-mvc/public/css/add_book.css">
<h1>Добавление книги</h1>
<form method="post">
    <div class="page">
        <p>Книга:</p>
        <div class="input-button-container">
            <input type="text" placeholder="Название книги" />
        </div>
        <div class="input-button-container">
            <input type="text" placeholder="Год издания книги" />
        </div>
        <div class="input-button-container">
            <input type="text" placeholder="Цена книги" />
        </div>
        <div class="form">
            <p>Автор:</p>
            <div class="author_list">
                <select class="input-button-container"">
                    <?php
                        foreach ($author as $author){
                            echo "<option value=\"$author->surname\">$author->surname</option>";
                        }
                    ?>
                </select>
            </div>

        </div>
        <p>Тип издания:</p>
        <select class="input-button-container"">
        <?php
        foreach ($edition as $edition){
            echo "<option value=\"$edition->type_edition\">$edition->type_edition</option>";
        }
        ?>
        </select>
        <div>
            <textarea class="input-button-container" cols="50" rows="3" name="annotation" placeholder="Краткое описание книги"></textarea>
        </div>
            <input type="file" accept="image/*">

        <button>Создать книгу</button>
    </div>
</form>
