<?php
require_once "protected/extensions/cron/cron.phar";

class DashboardController extends Controller
{
    public function filters()
    {
        return array(
            'accessControl',
        );
    }
    
    public function accessRules()
    {
        return array(
            array('deny',
                'actions'=>array('index'),
                'users'=>array('?'),
            ),
            array('allow',
                'actions'=>array('index'),
                'roles'=>array('@'),
            ),
        );
    }
    
    public function actionIndex()
    {
        $this->render('index', array(
            'jobDataProvider' => new CActiveDataProvider('Job'),
            'userDataProvider' => new CActiveDataProvider('User'),
        ));
    }
}