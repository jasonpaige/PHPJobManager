<div class="form">

<?php $form = $this->beginWidget('CActiveForm', array(
    'id'=>'create-user-form',
    'enableClientValidation'=>true,
    'clientOptions'=>array(
        'validateOnSubmit'=>true,
    ),
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

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

    <div class="row email">
        <?=$form->labelEx($model,'email'); ?>
        <?=$form->textField($model,'email'); ?>
        <?=$form->error($model,'email'); ?>
    </div>

    <div class="row level">
        <?=$form->labelEx($model,'level'); ?>
        <?=$form->dropDownList($model,'level', array('admin'=>'admin','super'=>'super'), array('prompt'=>'Select access level'));?>
        <?=$form->error($model,'level'); ?>
    </div>

    <div class="row buttons clearfix">
        <a href="/user/" class="button left">&#8592; Back to Users</a>
        <?=CHtml::htmlButton($model->isNewRecord ? 'Create' : 'Save', array('type' => 'submit', 'class' => 'action right')); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->