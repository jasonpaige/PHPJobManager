<?php
$this->breadcrumbs=array(
	'Dashboard',
);?>

<div class="contentBlock">
    <h1>Jobs</h1>

    <?php $this->widget('zii.widgets.CListView', array(
        'dataProvider' => $jobDataProvider,
        'itemView' => '_jobview',
    )); ?>
</div>

<div class="contentBlock">
    <h1>Users</h1>

    <?php $this->widget('zii.widgets.CListView', array(
        'dataProvider' => $userDataProvider,
        'itemView' => '_userview',
    )); ?>
</div>