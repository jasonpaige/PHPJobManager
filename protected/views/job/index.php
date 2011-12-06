<?php
$this->breadcrumbs=array(
    'Jobs'=>array('index'),
    'Manage',
);
?>

<div class="contentBlock">
    <h2>Manage Jobs</h2>

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
                <th>User</th>
                <th>Name</th>
                <th>Cron</th>
                <th>Created</th>
                <th>End Date</th>
                <th>Next Run Date</th>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <th><?= $form->textField($model,'id', array("size"=>"1")); ?></th>
                <th><?= $form->dropDownList($model,'user_id', CHtml::listData(User::model()->findAll(), 'id', 'username'), array('prompt'=>''));?></th>
                <th><?= $form->textField($model,'name', array("size"=>"10")); ?></th>
                <th><?= $form->textField($model,'cron', array("size"=>"10")); ?></th>
                <th><?= $form->textField($model,'created', array("size"=>"10")); ?></th>
                <th><?= $form->textField($model,'termination_date', array("size"=>"10")); ?></th>
                <th> </th>
                <th colspan="2"><?= CHtml::htmlButton('Search', array('type' => 'submit', 'class' => 'action')); ?></th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <td colspan="7">
                    <a href="/job/create" class="button">+ Job</a>
                </td>
            </tr>
        </tfoot>
        <tbody>
            <?php $this->widget('zii.widgets.CListView', array(
                'dataProvider' => $model->search(),
                'itemView' => '_view',
                'sortableAttributes'=>array(
                    'id','name','created','termination_date'
                ),
            )); ?>
        </tbody>
    </table>
    
    <?php $this->endWidget(); ?>
</div>
