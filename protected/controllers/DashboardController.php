<?php

class DashboardController extends Controller
{
    public function actionIndex()
    {
        $this->render('index', array(
            'jobDataProvider' => new CActiveDataProvider('Job'),
            'userDataProvider' => new CActiveDataProvider('User'),
        ));
    }
}