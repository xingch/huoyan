<?php

namespace shop\controllers;

class BaseController extends \yii\web\Controller
{
    public $layout  = 'main-new';
    
    public function actionIndex()
    {
        return $this->render('index');
    }

}
