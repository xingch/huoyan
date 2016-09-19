<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

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

<div class="easyui-layout" style="width:100%;height:760px;">
	<div data-options="region:'north'" style="height:60px">eeeee</div>
	<div data-options="region:'west',split:true" title="West" style="width:180px;"></div>
	<div data-options="region:'center',title:'Main Title',iconCls:'icon-ok'">
        <?= $content ?>
	</div>
</div>

<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>
