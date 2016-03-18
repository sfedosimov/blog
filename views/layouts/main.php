<?php
    /* @var $this \yii\web\View */
    /* @var $content string */
    use yii\helpers\Html;
    use yii\bootstrap\Nav;
    use yii\bootstrap\NavBar;
    use yii\widgets\Breadcrumbs;
    use app\assets\AppAsset;

    AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <link rel="icon" href="/favicon.png">
        <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700&subset=latin,cyrillic" rel="stylesheet" type="text/css">
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>

    <div class="wrap">
        <?php
            NavBar::begin([
                'brandLabel' => 'Лого',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-green navbar-small',
                ],
            ]);

            $items = [
                ['label' => 'Блог', 'url' => ['/article/index']
                    , 'active' => \Yii::$app->controller->id == 'article' && in_array(\Yii::$app->controller->action->id, ['index', 'view'])],
                ['label' => 'Книги', 'url' => ['/book/index']],
                ['label' => 'Портфолио', 'url' => ['/site/portfolio']],
                ['label' => 'Обо мне', 'url' => ['/site/about']],
            ];


            if (!Yii::$app->user->isGuest) {
                $items[] = ['label' => 'Загрузки', 'url' => ['/upload/index']];
                $items[] = (
                    '<li>'
                    . Html::beginForm(['/site/logout'], 'post')
                    . Html::submitButton(
                        'Выйти (' . Yii::$app->user->identity->username . ')',
                        ['class' => 'btn btn-link logout-link']
                    )
                    . Html::endForm()
                    . '</li>'
                );
            }

            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $items,
            ]);
            NavBar::end();
        ?>

        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <span><i class="fa fa-envelope"></i> <a href="mailto:sergey@fedosimoff.ru">sergey@fedosimoff.ru</a></span>
            <br>
            <span><i class="fa fa-skype"></i> <a href="skype:Urishev?call">Urishev</a></span>
        </div>
    </footer>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>