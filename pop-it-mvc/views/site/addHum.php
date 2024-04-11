<link rel ="stylesheet" href="/pop-it-mvc/public/css/addHum.css">
<h1>Добавление нового читателя</h1>
<div class="log">
    <h3><?= $message ?? ''; ?></h3>
    <form method="post">
        <img class="logo" src="img/logo.svg"
        <h2>Библиотека</h2>
        <div class="login">
            Фамилия <input type="text" name="surname">
            Имя <input type="text" name="name">
            Отчество <input type="text" name="patronymic">
            Адрес проживания <input type="text" name="address">
            Контактный телефон <input type="number" name="phone">
            Логин <input type="text" name="login">
            Пароль <input type="password" name="password">
            <button>Добавить</button>
        </div>
    </form>
</div>


