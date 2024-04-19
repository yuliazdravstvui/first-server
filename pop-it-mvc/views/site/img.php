<link rel ="stylesheet" href="/pop-it-mvc/public/css/img.css">
<h1>Картиночки</h1>

<div class="card">
    <form method="post" enctype="multipart/form-data" class="input-button-container">
        <input type="file"  name="image" accept="image/*">
        <button type="submit">Загрузить изображение</button>
    </form>

    <?php if($image->isNotEmpty()){
        foreach ($image as $image) {
            echo "<img width='250' src='/pop-it-mvc/public/img/$image->name'>";
        }
    }
    ?>
</div>