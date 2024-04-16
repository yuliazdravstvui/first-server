<link rel ="stylesheet" href="/pop-it-mvc/public/css/add_book.css">
<h1>Добавление книги</h1>
<div class="page">
    <div class="input-button-container">
        <input type="text" placeholder="Название книги" />
    </div>
    <div class="input-button-container">
        <input type="text" placeholder="Год издания книги" />
    </div>
    <div class="input-container">
        <input type="text" name="name" placeholder="Фамилия автора">
        <input type="text" name="surname" placeholder="Имя автора">
        <input type="text" name="patronymic" placeholder="Отчество автора">
    </div>
    <p>Тип издания:</p>
    <select required class="input-button-container">
        <option selected value="Новая">Новая</option>
        <option value="Старая">Старая</option>
        <option value="Очень старая">Очень старая</option>
    </select>
    <div>
        <textarea class="input-button-container" cols="50" rows="3" name="annotation" placeholder="Краткое описание книги"></textarea>
    </div>
        <input type="file" accept="image/*">
    <div class="inform">
        <div class="name">
            <h3>Война и мир</h3>
        </div>
        <p>1867 г.</p>
        <p>Толстой Лев Николаевич</p>
    </div>
    <button type="submit">Создать книгу</button>
</div>
