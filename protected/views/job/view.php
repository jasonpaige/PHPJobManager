<?php
$this->breadcrumbs=array(
    'Jobs'=>array('index'),
    $model->name,
);
?>
<div class="contentBlock">
    <h2>View Job <?=$model->id; ?> (<?=$model->name; ?>)</h2>

    <?php $this->widget('zii.widgets.CDetailView', array(
        'data'=>$model,
        'attributes'=>array(
        'id',
        'user_id',
        'name',
        'command',
        'cron',
        'created',
        'termination_date',
        ),
    )); ?>
    <br />
    <a href="/job" class="button">&#8592; Back to Jobs</a>
</div>