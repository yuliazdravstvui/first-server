<link rel ="stylesheet" href="/pop-it-mvc/public/css/reader.css">
<h1>Читатель</h1>
<div class="full_book">
    <div class="about_book">
        <div class="reader">
            <div class="info">
                <div class="name">
                    <p>Читательский билет № 123456</p>
                </div>
                <h3>Корнилова Юлия Константиновна</h3>
                <p>+7 - 983 - 343 - 09 - 38</p>
                <?php
                echo '<a href="/pop-it-mvc/issue" class="button_book">Выдать книгу</a>';
                ?>
            </div>
    </div>
</div>
<div class="history">
    <h4>История выдачи книги</h4>
    <div class="readers">
        <div class="one-reader">
            <div class="reader">
                <div class="info">
                    <div class="name">
                        <p>Читательский билет № 123456</p>
                    </div>
                    <h3>Корнилова Юлия Константиновна</h3>
                    <p>+7 - 983 - 343 - 09 - 38</p>
                    <?php
                    echo '<a href="/pop-it-mvc/accept" class="button">Перейти в профиль читателя</a>';
                    ?>
                </div>
                <div class="date">
                    <p class="status">Статус: Выдана</p>
                    <p>Выдана: 21.03.24</p>
                    <p>Сдана: 21.03.24</p>
                    <?php
                    echo '<a href="/pop-it-mvc/accept" class="button">Сдать книгу</a>';
                    ?>
                </div>

            </div>
            <img src="img/история.svg"
        </div>



    </div>
</div>
