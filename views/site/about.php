<?php
    /* @var $this yii\web\View */
    $this->title = 'Обо мне';
    $this->registerCssFile(Yii::getAlias('@web/css/about.css'), ['depends' => ['app\assets\AppAsset']]);
?>

<div class="wrapper about-wrapper">
    <div class="about-sidebar">
        <div class="about-block-wrapper about-main">
            <div class="about-block-container">
                <div class="card">
                    <img src="<?= Yii::getAlias('@web/img/') ?>ava.jpg" class="photo">

                    <h1 class="name-full">
                        <span class="name">Федосимов Сергей</span> <span class="nickname">m0ntm0nk</span>
                    </h1>
                </div>

                <ul class="links">
                    <li>
                        <a href="https://github.com/sfedosimov" class="link fa fa-github" target="_blank"><span class="general-font">Github</span></a>
                    </li>
                    <li>
                        <a href="https://habrahabr.ru/users/sfedosimov/topics/" class="link fa fa-header" target="_blank"><span class="general-font">Habrahabr</span></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/m0ntm0nk" class="link fa fa-twitter " target="_blank"><span class="general-font">Twitter</span></a>
                    </li>
                </ul>

                <div class="minor-data">

                    <b>Контакты</b>

                    <p>
                        Email: <a href="mailto:sergey@fedosimoff.ru" target="_blank">sergey@fedosimoff.ru</a><br> Skype:
                        <a href="skype:Urishev?call" target="_blank">Urishev</a>
                    </p>
                    <hr>

                    <b>Место нахождения</b>

                    <p> Россия, Москва</p>
                    <hr>

                    <b>Специализация</b>

                    <p>Разработка CRM и ERP систем, SaaS платформ.</p>

                    <p>Непрерывный стаж 8 лет.</p>
                    <hr>

                    <b>Часовая ставка</b>

                    <p>Строго от 500 руб/час.</p>
                </div>
            </div>
        </div>
        <div class="about-block-wrapper">
            <div class="about-block-container">
                <h2>Навыки</h2>

                <div class="about-block-content">
                    <ul class="skill-list">
                        <li class="skill">PHP5, PHP7, Yii1, Yii2, Laravel5</li>
                        <li class="skill">MySQL, Oracle</li>
                        <li class="skill">JavaScript, JQuery, HTML5, CSS3</li>
                        <li class="skill">Git</li>
                        <li class="skill">Linux (на уровне администрирования)</li>
                        <li class="skill">Delphi, Bash (поверхностно)</li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="about-content">
        <div class="about-block-wrapper">
            <div class="about-block-container">
                <h2>Опыт работы</h2>

                <div class="about-block-content about-block-text">

                </div>
            </div>
        </div>

        <div class="about-block-wrapper">
            <div class="about-block-container">
                <h2>О себе</h2>

                <div class="about-block-content about-block-text">

                </div>
            </div>
        </div>

        <div class="about-block-wrapper about-works-history">
            <div class="about-block-container">
                <h2>Места работы</h2>

                <div class="about-block-content about-block-text">
                    <div class="work-place">
                        <p class="work-place-headline">
                            <span class="organization-name">ООО "МАКС"</span>
                            <span class="work-period">с 07.2012 по настоящее время</span>
                        </p>

                        <p class="work-place-description">
                            <b>Начальник отдела портальных решений</b>. Бла бла бла</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
