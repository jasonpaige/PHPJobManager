<?php
$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
    'Login',
);
?>

<div class="contentBlock">

    <h2>Login</h2>

    <p>Please fill out the following form with your login credentials:</p>

    <div class="form">
    <?php $form = $this->beginWidget('CActiveForm', array(
        'id'=>'login-form',
        'enableClientValidation'=>true,
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
        ),
    )); ?>

        <p class="note">Fields with <span class="required">*</span> are required.</p>

        <div class="row">
            <?=$form->labelEx($model,'username'); ?>
            <?=$form->textField($model,'username'); ?>
            <?=$form->error($model,'username'); ?>
        </div>

        <div class="row">
            <?=$form->labelEx($model,'password'); ?>
            <?=$form->passwordField($model,'password'); ?>
            <?=$form->error($model,'password'); ?>
        </div>

        <div class="row rememberMe">
            <?=$form->checkBox($model,'rememberMe'); ?>
            <?=$form->label($model,'rememberMe'); ?>
            <?=$form->error($model,'rememberMe'); ?>
        </div>

        <div class="row buttons">
            <?=CHtml::htmlButton('Login', array('type' => 'submit')); ?>
        </div>

    <?php $this->endWidget(); ?>
    </div><!-- form -->
</div>