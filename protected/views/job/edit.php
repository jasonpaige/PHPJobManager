<?php
$this->breadcrumbs=array(
    'Jobs'=>array('index'),
    $model->name=>array('view','id'=>$model->id),
    'Update',
);
?>
<div class="contentBlock">
    
    <h2>Edit Job <?= $model->id; ?> (<?= $model->name; ?>)</h2>

    <?= $this->renderPartial('_form', array('model'=>$model)); ?>

</div>