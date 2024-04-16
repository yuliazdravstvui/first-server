<link rel ="stylesheet" href="/pop-it-mvc/public/css/addHum.css">
<h1>Добавление нового читателя</h1>
<div class="log">
    <h3><?= $message ?? ''; ?></h3>
    <form method="post">
        <img class="logo" src="img/logo.svg"
        <h2>Библиотека</h2>
        <div class="login">
            <p>Фамилия</p><input type="text" name="surname" placeholder="Киркоров">
            <p>Имя</p> <input type="text" name="name" placeholder="Филипок">
            <p>Отчество</p><input type="text" name="patronymic" placeholder="Бедросович">
            <p>Адрес проживания</p> <input type="text" name="address" placeholder="Кудыкина гора">
            <p>Контактный телефон</p><input type="text" name="number" placeholder="+7-977-777-77-77">
            <button>Добавить</button>
        </div>
    </form>
</div>


