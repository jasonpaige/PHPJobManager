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

    <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
    
</div>