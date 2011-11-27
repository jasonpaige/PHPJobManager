<?php
$this->breadcrumbs=array(
    'Jobs'=>array('index'),
    'Create',
);
?>

<div class="contentBlock">

    <h2>Create Job</h2>

    <?= $this->renderPartial('_form', array('model'=>$model)); ?>

</div>