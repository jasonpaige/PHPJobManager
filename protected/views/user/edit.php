<?php
$this->breadcrumbs=array(
    'Users'=>array('index'),
    $model->id=>array('view','id'=>$model->id),
    'Update',
);
?>
<div class="contentBlock">

    <h2>Edit User <?=$model->id; ?> (<?=$model->username; ?>)</h2>

    <?= $this->renderPartial('_form', array('model'=>$model)); ?>
    
</div>