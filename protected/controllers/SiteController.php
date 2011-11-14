<?php

class SiteController extends Controller
{

    public function actionIndex()
    {
        if (Yii::app()->user->isGuest) {
            $this->forward('/login');
        } else {
            $this->forward('/dashboard');
        }        
    }
    
}