<link rel="stylesheet" href="/../../public/css/issue.css">
<div>
    <form class="iss_form" method="post">
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
        <h2>Выдача книги</h2>
        <div>
            <p>Книга:</p>
            <div class="book_list">
                <select name="book">
                    <?php
                    foreach ($book as $book){
                        echo "<option value=\"$book->id\">$book->title</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
        <div>
            <p>Дата возврата:</p>
            <input type="date" id="date" name="date" required>
        </div>
        <button>Выдать книгу</button>
    </form>

</div>