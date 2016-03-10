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
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <link rel="icon" href="/favicon.png">
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>

    <div class="wrap">
        <?php
            NavBar::begin([
                'brandLabel' => 'Здесь когда-нибудь будет лого',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-green navbar-small',
                ],
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    ['label' => 'Блог', 'url' => ['/article/index']],
                    ['label' => 'Книги', 'url' => ['/site/books']],
                    ['label' => 'Портфолио', 'url' => ['/site/portfolio']],
                    ['label' => 'Обо мне', 'url' => ['/site/about']],
                ],
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
            <p><i class="fa fa-envelope"></i> <a href="mailto:sergey@fedosimoff.ru">sergey@fedosimoff.ru</a></p>
            <p><i class="fa fa-skype"></i> <a href="skype:Urishev?call">Urishev</a></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>