<?php

class LoginController extends Controller
{
    public function actionIndex()
    {
        $model=new LoginForm;

        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax']==='login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if (isset($_POST['LoginForm'])) {
            $model->attributes=$_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login()) {
                Yii::app()->request->redirect(Yii::app()->user->returnUrl);
            }
        }
        // display the login form
        $this->render('index', array('model'=>$model));
    }

    public function actionLogout()
    {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }
}