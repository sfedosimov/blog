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
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>

    <div class="wrap">
        <?php
            NavBar::begin([
                'brandLabel' => 'Здесь будет лого',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-green navbar-fixed-top navbar-small',
                ],
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    ['label' => 'Блог', 'url' => ['/site/index']],
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

    <footer class="footer navbar-fixed-bottom">
        <div class="container">
            <p><i class="fa fa-envelope"></i> <a class="a-green" href="mailto:sergey@fedosimoff.ru">sergey@fedosimoff.ru</a></p>
            <p><i class="fa fa-skype"></i> <a class="a-green" href="skype:Urishev?call">Urishev</a></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>