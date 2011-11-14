<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get',
)); ?>

    <div class="row">
        <?php echo $form->label($model,'id'); ?>
        <?php echo $form->textField($model,'id'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'username'); ?>
        <?php echo $form->textField($model,'username',array('size'=>20,'maxlength'=>20)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'email'); ?>
        <?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'level'); ?>
        <?php echo $form->textField($model,'level',array('size'=>5,'maxlength'=>5)); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Search'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->