<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'create-job-form',
    'enableClientValidation'=>true,
    'clientOptions'=>array(
        'validateOnSubmit'=>true,
    ),
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?= $form->errorSummary($model); ?>

    <div class="row">
        <?= $form->labelEx($model,'user_id'); ?>
        <?= $form->dropDownList($model,'user_id', CHtml::listData(User::model()->findAll(), 'id', 'username'), array('prompt'=>'Select a user'));?>
        <?= $form->error($model,'user_id'); ?>
    </div>

    <div class="row">
        <?= $form->labelEx($model,'name'); ?>
        <?= $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
        <?= $form->error($model,'name'); ?>
    </div>

    <div class="row">
        <?= $form->labelEx($model,'command'); ?>
        <?= $form->textArea($model,'command',array('rows'=>6, 'cols'=>50)); ?>
        <?= $form->error($model,'command'); ?>
    </div>

    <div class="row">
        <?= $form->labelEx($model,'cron'); ?>
        <?= $form->textField($model,'cron',array('size'=>60,'maxlength'=>100)); ?>
        <?= $form->error($model,'cron'); ?>
    </div>

    <div class="row">
        <?= $form->labelEx($model,'termination_date'); ?>
        <?= $form->textField($model,'termination_date'); ?>
        <?= $form->error($model,'termination_date'); ?>
    </div>

    <div class="row buttons clearfix">
        <a href="/job/" class="button left">&#8592; Back to Jobs</a>
        <?=CHtml::htmlButton($model->isNewRecord ? 'Create' : 'Save', array('type' => 'submit', 'class' => 'action right')); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->