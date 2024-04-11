<link rel ="stylesheet" href="/pop-it-mvc/public/css/login.css">
    <h1>Авторизация</h1>

<div class="log">
    <h3><?= $message ?? ''; ?></h3>

    <h3><?= app()->auth->user()->name ?? ''; ?></h3>
    <?php
    if (!app()->auth::check()):
    ?>

    <form method="post">
        <img class="logo" src="img/logo.svg"
        <h2>Библиотека</h2>
        <div class="login">
            Логин <input type="text" name="login">
            Пароль <input type="password" name="password">
            <button>Войти</button>
        </div>

    </form>
</div>

<?php endif;
