<?php
$this->breadcrumbs=array(
    'Users'=>array('index'),
    'Manage',
);
?>

<div class="contentBlock">
    <h2>Manage Users</h2>

    <p>
        You may optionally enter a comparison operator (<strong>&lt;</strong>, <strong>&lt;=</strong>, <strong>&gt;</strong>, <strong>&gt;=</strong>, <strong>&lt;&gt;</strong>
        or <strong>=</strong>) at the beginning of each of your search values to specify how the comparison should be done.
    </p>
    
    <?php $form=$this->beginWidget('CActiveForm', array(
        'action'=>Yii::app()->createUrl($this->route),
        'method'=>'get',
    )); ?>
    
    <table class="form">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Level</th>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <th><?= $form->textField($model,'id', array("size"=>"1")); ?></th>
                <th><?= $form->textField($model,'username', array("size"=>"10")); ?></th>
                <th><?= $form->textField($model,'email', array("size"=>"18")); ?></th>
                <th><?= $form->dropDownList($model,'level', array('admin'=>'admin','super'=>'super'), array('prompt'=>''));?></th>
                <th colspan="2"><?= CHtml::htmlButton('Search', array('type' => 'submit', 'class' => 'action')); ?></th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <td colspan="6">
                    <a href="/user/create" class="button">+ User</a>
                </td>
            </tr>
        </tfoot>
        <tbody>
            <?php $this->widget('zii.widgets.CListView', array(
                'dataProvider' => $model->search(),
                'itemView' => '_view',
                'sortableAttributes'=>array(
                    'id','username','email','level'
                ),
            )); ?>
        </tbody>
    </table>
    
    <?php $this->endWidget(); ?>
</div>
