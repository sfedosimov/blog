<?php
    /* @var $this yii\web\View */
    $this->title = 'Обо мне | ' . \Yii::$app->name;
    $this->registerMetaTag([
        'name' => 'description',
        'content' => 'Резюме PHP разработчика.'
    ]);
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
                        <li class="skill">PHP5, PHP7, Yii1, Yii2, Laravel5, 1C-Bitrix</li>
                        <li class="skill">MySQL, Oracle</li>
                        <li class="skill">JavaScript, JQuery, AngularJS, HTML5, CSS3</li>
                        <li class="skill">Git</li>
                        <li class="skill">Linux (на уровне администрирования)</li>
                        <li class="skill">Delphi, Bash (поверхностно)</li>
                        <li class="skill">Photoshop (разрезать / подредактировать макет)</li>
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
                    <p>Занимаюсь разработкой с 2008 года. Проектирую и пишу серверную часть для сложных RESTful приложений.
                    В основном использую PHP (Yii1, Yii2) + MySQL. Специализируюсь на разработке ERP, CRM систем.
                    Если идея или концепт понравятся готов взяться за маленькие сайты / приложения.</p>
                    <p>Отлично знаю PHP (5 и 7 версии). Активно использую нововведения последних версий.
                    Прекрасно владею Yii1, Yii2. Знаком с Symfony2 и Laraver.</p>
                    <p>Проектировал и разрабатывал модульную B2B систему для банков партнеров, Личный кабинет страховой компании,
                    SOAP сервисы для интеграции партнеров,  базирующиеся на Yii1.
                    Занимался разработкой системы оплаты на Laravel5 интегрирующей эквайринги (Сбербанк, Альфа-Банк) и
                    популярные платежные системы (Яндекс Деньги, WebMoney, …). Данный блог написан на Yii2.</p>
                    <p>Понимаю паттерны проектирования и умею их применять. Имею опыт разработки высоконагруженных систем.</p>
                    <p>С клиентским программированием и версткой знаком на средне-базовом уровне. Разрабатывал интерфейс
                    Онлайн калькулятора ОСАГО с использование AngularJS. Так же почти в каждом проекте разрабатывал или
                    прикладывал руку к разработке клиентской части приложения (JQuery или нативный JavaScript).</p>
                    <p>Могу кроссбраузерно сверстать страницу, предварительно разрезав макет в Photoshop.
                    Верстал Landing Page для промо-акции страховой компании.</p>
                    <p>Могу поднять сервер на Linux и все необходимое окружение, выявить причины медленной работы и
                    оптимизировать настройки. Есть незначительный опыт работы с Delphi.
                    Так же приходилось писать bash скрипты для автоматизации бекапирования и прочих нужд.
                    Код красотой и оптимальностью не блистал, но задачи бизнеса решал.</p>
                </div>
            </div>
        </div>

        <div class="about-block-wrapper">
            <div class="about-block-container">
                <h2>О себе</h2>

                <div class="about-block-content about-block-text">
                    <p>Интересуюсь новыми технологиями. Постоянно повышаю теоретическую и практическую базу используя
                    техническую литературу и статьи. Легко обучаюсь. Умею программировать, а не кодить.</p>
                    <p>Пишу понятный, удобочитаемый код. Быстро разбираюсь в чужом коде.
                    К преждевременной оптимизации не склонен.</p>
                    <p>Хочу работать в команде квалифицированных специалистов, у которых смогу чему-то научится.
                    Что бы работа всегда заставляла расти над собой, учить что-то новое и не было профессионального застоя.
                    Наличие тестов и кодревью приветствуется.</p>
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
                            <span class="work-period">с июля 2012 по настоящее время</span>
                        </p>

                        <p class="work-place-description">
                            <b>Начальник отдела портальных решений</b>. Курирование команды разработчиков.
                            Разработка архитектуры приложений. Внедрение новых технологий.
                            Поддержка и разработка сайтов: makc.ru (включая личный кабинет и онлайн калькуляторы),
                            makcm.ru, внутреннего корпоративного портала, makcmed.ru, makclife.ru, b2b-систем.
                            Поддержка и обслуживание Linux web-серверов (CentOS, Debian).
                            Награжден исполнительным директором грамотой за значительный вклад в разработку
                            b2b-систем.
                        </p>
                    </div>
                    <div class="work-place">
                        <p class="work-place-headline">
                            <span class="organization-name">ООО "ТекстильТорг"</span>
                            <span class="work-period">с января 2011 по июль 2012</span>
                        </p>

                        <p class="work-place-description">
                            <b>Руководитель информационно-рекламного отдела</b>.
                            Курирование сотрудников (it-администратор, seo-оптимизатор, дизайнер-верстальщик,
                            PR-менеджер, Специалист службы контроля качества).
                            Работа с рекламными площадками Yandex Direct, Google Adwords, Begun итд.
                            Разработка контекстных объявлений, рекламных акций, слоганов, рекламных проектов.
                            Поддержка сайта компании (Joomla). Написание новых модулей (Доработка функционала
                            корзины, функционал каталога). Разработка WEB-приложений для ведения заказов, ведения
                            склада, онлайн расчета ЗП менеджерам продаж. Разработка кассовой программы
                            выписывания накладных. Разработка робота для автоматического проставления ставок
                            директа и пополнения средств (Яндекс API).
                        </p>
                    </div>
                    <div class="work-place">
                        <p class="work-place-headline">
                            <span class="organization-name">ООО «Нэт Бай Нэт Холдинг»</span>
                            <span class="work-period">с января 2008 по январь 2011</span>
                        </p>

                        <p class="work-place-description">
                            <b>Ведущий Сетевой инженер</b>. Настройка сетевого оборудования(D-Link, Cisco, Juniper),
                            устранение неполадок в работающей сети, запуск и тестирование сетевого оборудования.
                            Изменение топологии сети. Разработка схем построения сети. Написание скриптов и
                            web-интерфейсов для автоматизации работы. Из основных: разработка программы для
                            отслеживания и контроля линейных аварий, с привязкой к мастерам каждого локального офиса
                            по районам Москвы.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
