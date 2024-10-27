<link rel ="stylesheet" href="/../../public/css/book.css">
<h1>Книгa</h1>
<?php
        $author = $book->getAuthor;
        $edition = $book->getEdition;
        $fullNameAuthor = $author->name . ' ' . $author->patronymic . ' ' . $author->surname;
        $notFullNameAuthor = $author->name . ' ' . $author->surname;
    echo "
        <div class=\"full_book\">
            <div class=\"about_book\" style=\"background-image: linear-gradient(90deg, #3f1d1d 0%,transparent 50%), url('/../../public/img/1.jpg');\">
                <div class=\"name\">
                    <h2>$book->title</h2> 
                    <p class=\"price\">$book->price руб</p>
                </div>";
    if ($author->patronymic != null) {
                        echo "<p>Автор: $fullNameAuthor</p>";
                    } else {
                        echo "<p>Автор: $notFullNameAuthor</p>";
                    }
                    echo"
                 <p>Тип издания: $edition->type_edition</p>
                 <p>Год издания: $book->year_edition г.</p>
                  
            </div>
             <p>Аннотация: <br>$book->annotation</p>
        </div>

                 ";
    ?>

</div>



<div class="one-reader">
    <h4>История выдачи</h4>
    <img src='/../../img/история.svg'

        <?php
        foreach ($book->issues as $issue) {
            if ($issue->id_status == 1 || $issue->id_status == 3) {
                $reader = $issue->getReader;
                $fullNameReader = $reader->name . ' ' . $reader->patronymic . ' ' . $reader->surname;
                $notFullNameReader = $reader->name . ' ' . $reader->surname;
                echo "
                <div class='reader'>
                <div class='info''>
                <p>Читательский билет №$reader->id</p>
                 <div class='name'>
                 <p>$fullNameReader</p>
                </div>";
                echo "
                    <p>+$reader->number</p>
                </div>
                <div class='date'>
                    <div >
                        <p>Выдана:</p>
                        <p>$issue->date_of_issue</p>
                    </div>
                    <div>
                        <p>Должны вернуть:</p>
                        <p>$issue->return_date</p>
                    </div>
                    <div>
                        <p>Сдана:</p>
                        <p>$issue->actual_date</p>
                    </div> 
                </div>
               <img src='/../../img/история.svg'
            </div>
            
            ";
            }
        }
        ?>


</div>
