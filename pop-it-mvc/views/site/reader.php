<link rel ="stylesheet" href="/pop-it-mvc/public/css/reader.css">
<h1>Читатель</h1>

            <div class="full_book">
                <div class="about_book">
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
                                        <h2>$reader->surname $reader->name $reader->patronymic</h2>
                                        <p>+$reader->number</p>
                                        <p>$reader->address</p>
                                         <a href=\"/pop-it-mvc/issue\" class=\"button_book\">Выдать книгу</a>
                                    </div>
                                      ";
                            break;
                        }
                    }
                    ?>
                    </div>
                </div>
            </div>
            <div class="history">
                <h4>История выдачи книг</h4>
                    <div class="one-reader">
                        <div class="reader">
                            <div class="info">
                                <div class="name">
                                    <h3>Война и мир</h3>
                                    <p class="price">1493 ₽</p>
                                    <p class="status">Статус: Выдана</p>
                                </div>
                                <p class="type">Старая</p>
                                <p>1867 г.</p>
                                <p>Толстой Лев Николаевич</p>
                            </div>
                            <div class="date">

                                <p>Выдана: 21.03.24</p>
                                <p>Сдана: 21.03.24</p>
                                <?php
                                echo '<a href="pop-it-mvc/accept" class="button">Сдать книгу</a>';
                                ?>
                            </div>

                        </div>
                        <img src="img/история.svg"
                    </div>



            </div>


