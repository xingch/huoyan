<?php

namespace backend\controllers;

class IndexController extends BackendController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
