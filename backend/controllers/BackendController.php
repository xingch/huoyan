<?php

namespace backend\controllers;

class BackendController extends \yii\web\Controller
{
    public $layout  = 'main-new';
    
    public function actionIndex()
    {
        return $this->render('index');
    }

}
