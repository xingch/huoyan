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
<body class="easyui-layout" style="width:100%;">
<?php $this->beginBody() ?>

	<div data-options="region:'north'" style="height:60px" class="north">
	    <div class="easyui-panel" style="">
            <div class="logo" title="<?= Yii::$app->params['app_name'] ?>"></div>
        </div>
    	<div class="easyui-panel" style="">
    		<a href="#" class="easyui-menubutton" data-options="iconCls:'icon-edit'">Edit</a>
    		<a href="#" class="easyui-menubutton" data-options="iconCls:'icon-help'">Help</a>
    		<a href="#" class="easyui-menubutton" data-options="">About</a>
    	</div>
	</div>
	<div data-options="region:'south',split:true" style="height:30px;">
        <div class="footer">
            &copy;<?= Yii::$app->params['copyright'] ?>  <?= date('Y') ?></p>
        </div>
	</div>
	<div data-options="region:'west',split:true" title="操作菜单" style="width:180px;"></div>
	<div data-options="region:'center',title:'',iconCls:'icon-ok'">
        <?= $content ?>
	</div>

<?php $this->endBody() ?>

<script type="text/javascript">
(function($){

})

</script>
</body>
</html>
<?php $this->endPage() ?>
