<?php
$this->breadcrumbs=array(
    'Users'=>array('index'),
    $model->id,
);

$this->menu=array(
    array('label'=>'List User', 'url'=>array('index')),
    array('label'=>'Create User', 'url'=>array('create')),
    array('label'=>'Update User', 'url'=>array('update', 'id'=>$model->id)),
    array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
    array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<div class="contentBlock">
    <h2>View User <?=$model->id; ?> (<?=$model->username; ?>)</h2>

    <?php $this->widget('zii.widgets.CDetailView', array(
        'data'=>$model,
        'attributes'=>array(
            'id',
            'username',
            'email',
            'level',
        ),
    )); ?>
    <br />
    <a href="/user" class="button">&#8592; Back to Users</a>
</div>
