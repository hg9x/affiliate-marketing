<?php
/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
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
        <?php $this->head() ?>
        <script type="application/javascript">
            var baseUrl = '<?php echo \yii\helpers\BaseUrl::home(); ?>';
            var _csrf = '<?php echo Yii::$app->request->getCsrfToken() ?>';
        </script>
    </head>
    <body>
        <?php $this->beginBody() ?>

        <div class="wrap">
            <?php
            NavBar::begin([
                'brandLabel' => Yii::$app->name,
                'brandUrl' => yii\helpers\Url::to(['deal/index']),
                'options' => [
                    'class' => 'navbar-default navbar-fixed-top',
                ],
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    ['label' => 'Admins', 'url' => ['/admin/index'], 'visible' => !Yii::$app->user->isGuest],
                    ['label' => 'Networks', 'url' => ['/network/index'], 'visible' => !Yii::$app->user->isGuest],
                    ['label' => 'Categories', 'url' => ['/category/index'], 'visible' => !Yii::$app->user->isGuest],
                    ['label' => 'Stores', 'url' => ['/store/index'], 'visible' => !Yii::$app->user->isGuest],
                    ['label' => 'CMS', 'url' => ['/cms/index'], 'visible' => !Yii::$app->user->isGuest],
                    ['label' => 'FAQS', 'url' => ['/faqs/index'], 'visible' => !Yii::$app->user->isGuest],
                    ['label' => 'Banners', 'url' => ['/banner/index'], 'visible' => !Yii::$app->user->isGuest],
                    ['label' => 'Deal', 'url' => ['/deal/index'], 'visible' => !Yii::$app->user->isGuest],
                    ['label' => 'Creative Ads', 'url' => ['/creative-ad/index'], 'visible' => !Yii::$app->user->isGuest],
                    ['label' => 'Subscriber', 'url' => ['/newsletter-subscriber/index'], 'visible' => !Yii::$app->user->isGuest],
                    ['label' => 'Banner Deal', 'url' => ['/deal-banner/index'], 'visible' => !Yii::$app->user->isGuest],
                    Yii::$app->user->isGuest ? (
                            ['label' => 'Login', 'url' => ['/site/login']]
                            ) : (
                            '<li>'
                            . Html::beginForm(['/site/logout'], 'post')
                            . Html::submitButton(
                                    'Logout (' . Yii::$app->user->identity->name . ')', ['class' => 'btn btn-link logout']
                            )
                            . Html::endForm()
                            . '</li>'
                            )
                ],
            ]);
            NavBar::end();
            ?>

            <div class="container">
                <?=
                Breadcrumbs::widget([
                    'homeLink' => [
                        'label' => 'Home',
                        'url' => yii\helpers\Url::to(['deal/index']),
                    ],
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ])
                ?>
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
        </div>

        <footer class="footer">
            <div class="container">
                <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

                <p class="pull-right"><?= Yii::powered() ?></p>
            </div>
        </footer>

        <?php $this->endBody() ?>

        <div class="global-loader">
            <div class="main-content">
                <div class="loading">
                    <img src="<?php echo \yii\helpers\BaseUrl::home() ?>images/loading-bars.svg" alt="loading"/>
                </div>
            </div>
        </div>
    </body>
</html>
<?php $this->endPage() ?>
