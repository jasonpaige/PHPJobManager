<?php
$this->breadcrumbs=array(
    'Users'=>array('index'),
    $model->id=>array('view','id'=>$model->id),
    'Update',
);

$this->menu=array(
    array('label'=>'List User', 'url'=>array('index')),
    array('label'=>'Create User', 'url'=>array('create')),
    array('label'=>'View User', 'url'=>array('view', 'id'=>$model->id)),
    array('label'=>'Manage User', 'url'=>array('admin')),
);
?>
<div class="contentBlock">

    <h2>Edit User <?=$model->id; ?> (<?=$model->username; ?>)</h2>

    <div class="form">
        <?php $form = $this->beginWidget('CActiveForm', array(
            'id'=>'edit-user-form',
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
                <?=CHtml::htmlButton('Save', array('type' => 'submit')); ?>
            </div>

        <?php $this->endWidget(); ?>
    </div>
    
</div>