<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get',
)); ?>

    <div class="row">
        <?php echo $form->label($model,'id'); ?>
        <?php echo $form->textField($model,'id',array('size'=>20,'maxlength'=>20)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'user_id'); ?>
        <?php echo $form->textField($model,'user_id'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'name'); ?>
        <?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'command'); ?>
        <?php echo $form->textArea($model,'command',array('rows'=>6, 'cols'=>50)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'cron'); ?>
        <?php echo $form->textField($model,'cron',array('size'=>60,'maxlength'=>100)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'created'); ?>
        <?php echo $form->textField($model,'created'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'termination_date'); ?>
        <?php echo $form->textField($model,'termination_date'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Search'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->