<?php
$this->breadcrumbs=array(
    'Users'=>array('index'),
    'Create',
);

$this->menu=array(
    array('label'=>'List User', 'url'=>array('index')),
    array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<div class="contentBlock">

    <h2>Create User</h2>

    <div class="form">
        <?php $form = $this->beginWidget('CActiveForm', array(
            'id'=>'create-user-form',
            'enableClientValidation'=>true,
            'clientOptions'=>array(
                'validateOnSubmit'=>true,
            ),
        )); ?>

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

            <div class="row buttons">
                <?=CHtml::htmlButton('Create', array('type' => 'submit')); ?>
            </div>

        <?php $this->endWidget(); ?>
    </div>
    
</div>