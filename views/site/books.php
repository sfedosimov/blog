<?php
    $this->title = 'Книги';
    $this->registerCssFile(\Yii::getAlias('@web/css/books.css'), ['depends' => ['app\assets\AppAsset']]);
    $dir = \Yii::getAlias('@web/img/books/');
?>

<div class="books-list">
    <div class="book">
        <div class="cover">
            <img class="books-img" src="<?= $dir ?>yii1.jpg" alt="Yii. Сборник рецептов (Александр Макаров)" title="Yii. Сборник рецептов (Александр Макаров)">
        </div>
        <div class="description">
            <span><b>Yii. Сборник рецептов</b><br/>(Александр Макаров)</span>
        </div>
    </div>
    <div class="book">
        <div class="cover">
            <img class="books-img" src="<?= $dir ?>yii2.jpg" alt="Разработка веб-приложений в Yii 2 (Марк Сафронов)" title="Разработка веб-приложений в Yii 2 (Марк Сафронов)">
        </div>
        <div class="description">
            <span><b>Разработка веб-приложений в Yii 2</b><br/>(Марк Сафронов)</span>
        </div>
    </div>
    <div class="book">
        <div class="cover">
            <img class="books-img" src="<?= $dir ?>perfect_code.jpg" alt="Совершенный код. Мастер-класс (Стив Макконнелл)" title="Совершенный код. Мастер-класс (Стив Макконнелл)">
        </div>
        <div class="description">
            <span><b>Совершенный код. Мастер-класс</b><br/>(Стив Макконнелл)</span>
        </div>
    </div>
    <div class="separator-3"></div>
    <div class="book">
        <div class="cover">
            <img class="books-img" src="<?= $dir ?>php_patterns.jpg" alt="PHP. Объекты, шаблоны и методики программирования (Мэт Зандстра)" title="PHP. Объекты, шаблоны и методики программирования (Мэт Зандстра)">
        </div>
        <div class="description">
            <span><b>PHP. Объекты, шаблоны и методики программирования</b><br/>(Мэт Зандстра)</span>
        </div>
    </div>
    <div class="separator-4"></div>
    <div class="book">
        <div class="cover">
            <img class="books-img" src="<?= $dir ?>modern_php.jpg" alt="Современный PHP (Дж. Локхарт)" title="Современный PHP (Дж. Локхарт)">
        </div>
        <div class="description">
            <span><b>Современный PHP</b><br/>(Дж. Локхарт)</span>
        </div>
    </div>
    <div class="book">
        <div class="cover">
            <img class="books-img" src="<?= $dir ?>php56.jpg" alt="Самоучитель PHP 5/6 (Максим Кузнецов, Игорь Симдянов)" title="Самоучитель PHP 5/6 (Максим Кузнецов, Игорь Симдянов)">
        </div>
        <div class="description">
            <span><b>Самоучитель PHP 5/6</b><br/>(Максим Кузнецов, Игорь Симдянов)</span>
        </div>
    </div>
    <div class="separator-3"></div>
    <div class="book">
        <div class="cover">
            <img class="books-img" src="<?= $dir ?>php_and_mysql.jpg" alt="Разработка веб-приложений с помощью PHP и MySQL (Люк Веллинг, Лаура Томсон)" title="Разработка веб-приложений с помощью PHP и MySQL (Люк Веллинг, Лаура Томсон)">
        </div>
        <div class="description">
            <span><b>Разработка веб-приложений с помощью PHP и MySQL</b><br/>(Люк Веллинг, Лаура Томсон)</span>
        </div>
    </div>
    <div class="book">
        <div class="cover">
            <img class="books-img" src="<?= $dir ?>sql_collection.jpg" alt="SQL. Сборник рецептов (Энтони Молинаро)" title="SQL. Сборник рецептов (Энтони Молинаро)">
        </div>
        <div class="description">
            <span><b>SQL. Сборник рецептов</b><br/>(Энтони Молинаро)</span>
        </div>
    </div>
    <div class="separator-4"></div>
    <div class="book">
        <div class="cover">
            <img class="books-img" src="<?= $dir ?>learn_sql.JPG" alt="Изучаем SQL (Алан Бьюли)" title="Изучаем SQL (Алан Бьюли)">
        </div>
        <div class="description">
            <span><b>Изучаем SQL</b><br/>(Алан Бьюли)</span>
        </div>
    </div>
    <div class="separator-3"></div>
    <div class="book">
        <div class="cover">
            <img class="books-img" src="<?= $dir ?>little_mongodb.jpg" alt="The Little MongoDB Book (Karl Seguin)" title="The Little MongoDB Book (Karl Seguin)">
        </div>
        <div class="description">
            <span><b>The Little MongoDB Book</b><br/>(Karl Seguin)</span>
        </div>
    </div>
    <div class="book">
        <div class="cover">
            <img class="books-img" src="<?= $dir ?>little_redis.jpg" alt="The Little Redis Book (Karl Seguin)" title="The Little Redis Book (Karl Seguin)">
        </div>
        <div class="description">
            <span><b>The Little Redis Book</b><br/>(Karl Seguin)</span>
        </div>
    </div>
    <div class="book">
        <div class="cover">
            <img class="books-img" src="<?= $dir ?>git_magic.jpg" alt="Магия Git (Линн Бен)" title="Магия Git (Линн Бен)">
        </div>
        <div class="description">
            <span><b>Магия Git</b><br/>(Линн Бен)</span>
        </div>
    </div>
    <div class="separator-3"></div>
    <div class="separator-4"></div>
    <div class="book">
        <div class="cover">
            <img class="books-img" src="<?= $dir ?>delphi_hackers.jpg" alt="Delphi в шутку и всерьез: что умеют хакеры (Михаил Фленов)" title="Delphi в шутку и всерьез: что умеют хакеры (Михаил Фленов)">
        </div>
        <div class="description">
            <span><b>Delphi в шутку и всерьез: что умеют хакеры</b><br/>(Михаил Фленов)</span>
        </div>
    </div>
    <div class="book">
        <div class="cover">
            <img class="books-img" src="<?= $dir ?>delphi_gold.jpg" alt="Золотая книга Delphi (Михаил Сухарев)" title="Золотая книга Delphi (Михаил Сухарев)">
        </div>
        <div class="description">
            <span><b>Золотая книга Delphi</b><br/>(Михаил Сухарев)</span>
        </div>
    </div>
    <div class="book">
        <div class="cover">
            <img class="books-img" src="<?= $dir ?>cipher_books.jpg" alt="Книга шифров (Сингх Саймон)" title="Книга шифров (Сингх Саймон)">
        </div>
        <div class="description">
            <span><b>Книга шифров</b><br/>(Сингх Саймон)</span>
        </div>
    </div>
    <div class="separator-3"></div>
</div>
