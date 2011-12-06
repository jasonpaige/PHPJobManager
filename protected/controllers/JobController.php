<?php

class JobController extends Controller
{

    /**
     * @return array action filters
     */
    public function filters()
    {
        return array(
            'accessControl', // perform access control for CRUD operations
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules()
    {
        return array(
            array('deny',
                'users'=>array('?'),
            ),
            array('allow',
                'users'=>array('@'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id)
    {
        $this->render('view',array(
            'model'=>$this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate()
    {
        $model = new Job;
        
        if (isset($_POST['Job'])) {
            if (trim($_POST['Job']['termination_date']) == "") {
                $_POST['Job']['termination_date'] = null;
            }
            $_POST['Job']['cron'] = $_POST['Job']['cron']['min'] . " " .
                                    $_POST['Job']['cron']['hr'] . " " .
                                    $_POST['Job']['cron']['day'] . " " .
                                    $_POST['Job']['cron']['month'] . " " .
                                    $_POST['Job']['cron']['yr'] . " ";
            $model->attributes = $_POST['Job'];
            $model->created = date("Y-m-d H:i:s");
            if ($model->save()) {
                $this->redirect(array('view','id'=>$model->id));
            }
        }
        // default the user to the currently logged in one
        $model->user_id = Yii::app()->user->getId(); 
        $this->render('create',array(
            'model' => $model
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionEdit($id)
    {
        $model=$this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['Job']))
        {
            if (trim($_POST['Job']['termination_date']) == "") {
                $_POST['Job']['termination_date'] = null;
            }
            $_POST['Job']['cron'] = $_POST['Job']['cron']['min'] . " " .
                                    $_POST['Job']['cron']['hr'] . " " .
                                    $_POST['Job']['cron']['day'] . " " .
                                    $_POST['Job']['cron']['month'] . " " .
                                    $_POST['Job']['cron']['yr'] . " ";
            $model->attributes = $_POST['Job'];
            if($model->save()) {
                $this->redirect(array('view','id'=>$model->id));
            }
        }

        $cron_parts = explode(" ", $model->cron);
        $model->setAttribute("cron", array(
            'min'   => $cron_parts[0],
            'hr'    => $cron_parts[1],
            'day'   => $cron_parts[2],
            'month' => $cron_parts[3],
            'year'  => $cron_parts[4],
        ));

        $this->render('edit',array(
            'model'=>$model,
        ));
    }

    /**
     * Deletes a particular model.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id)
    {
        $this->loadModel($id)->delete();
        $this->redirect(array('/job/'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex()
    {
        $model=new Job('search');
        $model->unsetAttributes();  // clear any default values
        if(isset($_GET['Job']))
            $model->attributes=$_GET['Job'];

        $this->render('index',array(
            'model'=>$model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id)
    {
        $model=Job::model()->findByPk($id);
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model)
    {
        if(isset($_POST['ajax']) && $_POST['ajax']==='job-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
}
