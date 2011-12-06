<?php
$this->breadcrumbs=array(
    'Users'=>array('index'),
    $model->username,
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
