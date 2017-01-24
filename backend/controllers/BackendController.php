<?php

namespace backend\controllers;

class ShopController extends \yii\web\Controller
{
    public $layout  = 'main';
    
    public function actionIndex()
    {
        return $this->render('index');
    }

}
