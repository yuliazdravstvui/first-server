<link rel ="stylesheet" href="/pop-it-mvc/public/css/addHum.css">
<h1>Добавление нового автора</h1>
<div class="log">
    <h3><?= $message ?? ''; ?></h3>
    <form method="post">
        <img class="logo" src="img/logo.svg"
        <h2>Библиотека</h2>
        <div class="login">
            <p>Фамилия</p><input type="text" name="surname" placeholder="Киркоров">
            <p>Имя</p> <input type="text" name="name" placeholder="Филипок">
            <p>Отчество</p><input type="text" name="patronymic" placeholder="Бедросович">
            <button>Добавить</button>
        </div>
    </form>
</div>


