<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel ="stylesheet" href="/pop-it-mvc/public/css/nav.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pop it MVC</title>
</head>
<body>
<header>
    <nav>
        <div class="head">
        <img src="img/логотип.svg">
        <img src="img/Библиотека.svg">
        </div>
        <?php
            if (!app()->auth::check()):
                ?>
            <a href="<?= app()->route->getUrl('/login') ?>">Вход</a>
        <?php else: ?>
            <?php
                if (!app()->auth::checkRole()):
                ?>
                    <a href="<?= app()->route->getUrl('/addHum') ?>">Добавить читателя </a>
                    <a href="<?= app()->route->getUrl('/books') ?>">Книги</a>
                    <a href="<?= app()->route->getUrl('/readers') ?>">Читатели</a>
                    <a href="<?= app()->route->getUrl('/accept') ?>">Принять книгу</a>
<!--                    <a href="--><?php //= app()->route->getUrl('/issue') ?><!--">Выдача</a>-->
                    <a href="<?= app()->route->getUrl('/logout') ?>">Выход </a>
            <?php else: ?>
                <a href="<?= app()->route->getUrl('/logout') ?>">Выход </a>
                <a href="<?= app()->route->getUrl('/addLib') ?>">Добавить библиотекаря </a>
            <?php
                endif;
            ?>
        <?php
            endif;
        ?>
    </nav>
</header>
<main>
    <?= $content ?? '' ?>
</main>

</body>
</html>
