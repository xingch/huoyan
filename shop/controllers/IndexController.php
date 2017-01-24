<?php

namespace shop\controllers;

class IndexController extends BaseController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}


