<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'job-form',
    'enableAjaxValidation'=>false,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'user_id'); ?>
        <?php echo $form->textField($model,'user_id'); ?>
        <?php echo $form->error($model,'user_id'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'name'); ?>
        <?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
        <?php echo $form->error($model,'name'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'command'); ?>
        <?php echo $form->textArea($model,'command',array('rows'=>6, 'cols'=>50)); ?>
        <?php echo $form->error($model,'command'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'cron'); ?>
        <?php echo $form->textField($model,'cron',array('size'=>60,'maxlength'=>100)); ?>
        <?php echo $form->error($model,'cron'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'created'); ?>
        <?php echo $form->textField($model,'created'); ?>
        <?php echo $form->error($model,'created'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'termination_date'); ?>
        <?php echo $form->textField($model,'termination_date'); ?>
        <?php echo $form->error($model,'termination_date'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->