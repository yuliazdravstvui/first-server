<link rel="stylesheet" href="/../../public/css/reader.css">

<div class="reader_one">

    <?php
    echo "
                                    <div class=\"info\">
                                       
                                        <h2>$reader->surname $reader->name $reader->patronymic</h2>
                                        <p>+$reader->number</p>
                                        <p>$reader->address</p>
                                        <button class='button_book'><a href='" . app()->route->getUrl('/issue?id=' . $reader->id) . "'>Выдать книгу</a></button>
                                    </div>
                                      ";
    ?>

        </div>
        <h4>Взятые книги</h4>
        <?php
        foreach ($reader->issues as $issue) {
            $book = $issue->getBook;
            $fullNameAuthor = $book->getAuthor->name . ' ' . $book->getAuthor->surname;
            $status = $issue->getStatuses;
            echo "
                    <div class=\"one-reader\">
                        <div class=\"reader\">
                            <div class=\"info\">
                                <div  class=\"name\">
                                    <h3>$book->title</h3>
                                    <p class=\"price\">$book->price P</p>
                                    
                                    <p class=\"status\">$status->name</p>
                                </div>
                                 <p class=\"type\">$book->type</p>
                                 <p >$book->year_edition</p>
                                 <p>$fullNameAuthor</p>
                             <div class=\"date\">
                                    <p>Выдана:</p>
                                    <p>$issue->date_of_issue</p>
                                    <p>Должны вернуть:</p>
                                    <p>$issue->return_date</p>
                                    <div>
                                    <p>Сдана:</p>";
                                    if ($issue->id_status == 2) {
                                        echo "
                                        <form method='post'>
                                        <button class='return' value='{$issue->id}' name='issue_id'>Вернуть</button>
                                        </form>
                                                                                        ";
                                    } else {
                                        echo "<p>$issue->actual_date</p>";
                                    }
                                    echo "
                                    </div>
                                        
                                
                            
                        </div>
                    </div>
                    </div>
                    </div>
                    
                    
                        
                    ";
        }

        ?>

    </div>

</div>