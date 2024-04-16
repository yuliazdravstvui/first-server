<link rel ="stylesheet" href="/pop-it-mvc/public/css/reader.css">
<h1>Читатель</h1>
<?php
foreach ($readers as $readers) {
    echo "  
            <div class=\"full_book\">
                <div class=\"about_book\">
                    <div class=\"reader\">
                        <div class=\"info\">
                            <div class=\"name\">
                                <p>Читательский билет № $readers->id</p>
                            </div>
                            <h3>$readers->surname $readers->name $readers->patronymic</h3>
                            <p>+$readers->number</p>
                             '<a href=\"/pop-it-mvc/issue\" class=\"button_book\">Выдать книгу</a>';
                        </div>
                </div>
            </div>
            <div class=\"history\">
                <h4>История выдачи книг</h4>
                <div class=\"readers\">
                    <div class=\"one-reader\">
                        <div class=\"reader\">
                            <div class=\"info\">
                                <div class=\"name\">
                                    <p>Читательский билет № 123456</p>
                                </div>
                                <h3>Корнилова Юлия Константиновна</h3>
                                <p>+7 - 983 - 343 - 09 - 38</p>
                            </div>
                            <div class=\"date\">
                                <p class=\"status\">Статус: Выдана</p>
                                <p>Выдана: 21.03.24</p>
                                <p>Сдана: 21.03.24</p>
                                <?php
                                echo '<a href=\"/pop-it-mvc/accept\" class=\"button\">Сдать книгу</a>';
                                ?>
                            </div>
            
                        </div>
                        <img src=\"img/история.svg\"
                    </div>
            
            
            
                </div>
            </div>
        ";
}
?>