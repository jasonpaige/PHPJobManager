<?php
$this->breadcrumbs=array(
    'Users'=>array('index'),
    'Create',
);
?>

<div class="contentBlock">

    <h2>Create User</h2>

    <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
    
</div>