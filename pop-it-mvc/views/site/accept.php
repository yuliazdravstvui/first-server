<link rel ="stylesheet" href="/pop-it-mvc/public/css/accept.css">
<h1>Сдача книги</h1>
<div class="page">
    <div class="input-button-container">
        <input type="text" placeholder="id Книги" />
        <button type="button">Найти</button> <!-- Иконка увеличительного стекла -->
    </div>
    <div class="inform">
        <div class="name">
            <h3>Война и мир</h3>
        </div>
        <p>1867 г.</p>
        <p>Толстой Лев Николаевич</p>
    </div>
    <div class="input-button-container">
        <input type="text" placeholder="Читательский билет №" />
        <button type="button">Найти</button> <!-- Иконка увеличительного стекла -->
    </div>
    <div class="info">
        <div class="name">
            <p>Читательский билет № 123456</p>
        </div>
        <h3>Корнилова Юлия Константиновна</h3>
        <p>+7 - 983 - 343 - 09 - 38</p>
    </div>
    <h4>Дата выдачи: 12.04.2024</h4>
    <h4>Дата сдачи: 12.04.2024</h4>
    <fieldset>
        <legend>Выберите статус:</legend>

        <div>
            <input type="radio" id="huey" name="drone" value="huey" checked />
            <label for="huey">Задержана</label>
        </div>

        <div>
            <input type="radio" id="dewey" name="drone" value="dewey" />
            <label for="dewey">Утеряна</label>
        </div>

        <div>
            <input type="radio" id="louie" name="drone" value="louie" />
            <label for="louie">Сдана</label>
        </div>
    </fieldset>
    <button type="submit">Сохранить</button>
</div>
