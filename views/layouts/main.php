<?php
/* @var $this \yii\web\View */
/* @var $content string */

use macgyer\yii2materializecss\lib\Html;
use macgyer\yii2materializecss\widgets\Nav;
use macgyer\yii2materializecss\widgets\NavBar;
use macgyer\yii2materializecss\widgets\Breadcrumbs;
use macgyer\yii2materializecss\widgets\Alert;

app\assets\AppAsset::register($this);
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
	<style> 
	    nav{background-color: #e91e63 !important;}
	    .breadcrumbs{padding-left: 2% !important; }
	    footer.page-footer {background-color: #546e7a !important;}
	    .brand-logo{margin-left: 2% !important;font-size: 143% !important;}
	</style>
    </head>

    <body>
	<?php $this->beginBody() ?>

	<header class="page-header">
	    <?php
	    NavBar::begin([
		'brandLabel' => 'EES',
		'brandUrl' => Yii::$app->homeUrl,
		'fixed' => true,
//		'options'=>['class'=>'blue-grey darken-4'],
		'wrapperOptions' => [
		    'class' => 'container-fluid'
		],
	    ]);

	    $menuItems = [
		['label' => 'Home', 'url' => ['/site/index']],
		['label' => 'Penyakit', 'url' => ['/penyakit']],
		['label' => 'Gejala', 'url' => ['/gejala']],
		['label' => 'Rules', 'url' => ['/rules']],
		['label' => 'About', 'url' => ['/site/about']],
//		['label' => 'Contact', 'url' => ['/site/contact']],
	    ];
	    if (Yii::$app->user->isGuest) {
//		$menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
//		$menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
	    } else {
		$menuItems[] = '<li>'
			. Html::beginForm(['/site/logout'], 'post')
			. Html::submitButton(
				'Logout (' . Yii::$app->user->identity->username . ')', ['class' => 'btn btn-flat']
			)
			. Html::endForm()
			. '</li>';
	    }

	    echo Nav::widget([
		'options' => ['class' => 'right hide-on-med-and-down'],
		'items' => $menuItems,
	    ]);

	    NavBar::end();
	    ?>
        </header>

        <main class="content">
	    <?=
	    Breadcrumbs::widget([
		'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
	    ])
	    ?>
            <div class="container-fluid" style="margin-left: 3%;margin-right: 3%;">


		<?= Alert::widget() ?>

		<?= $content ?>
            </div>
	    <div class="container-fluid" style="">
		
	    </div>
        </main>
        <footer class="footer page-footer">
            <div class="container-fluid" style="margin-left: 3%;margin-right: 3%;">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Eyes Expert System (EES)</h5>
                        <p class="grey-text text-lighten-4">Merupakan suatu sistem pakar mata yang digunakan untuk mengidentifikasi penyakit pada mata. Dalam pembuatan sistem ini menggunakan metode forward chaining dan fuzzy Sugeno</p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Anggota Kelompok</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="#!">Rianto Anggara Putra</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Tama Asrory Ridhana</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Ulfah Adzkia</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container-fluid" style="margin-left: 3%;margin-right: 3%;">
                    &copy;  <?= date('Y') ?> Sistem Pakar 
                </div>
            </div>
        </footer>

	<?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>