<?php
$this->breadcrumbs=array(
	'Dashboard',
);?>

<div class="contentBlock left">
    <h2>Jobs</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Name</th>
                <th>Cron</th>
                <th>Created</th>
                <th>End Date</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <td colspan="6" class="clearfix">
                    <a href="/job/create" class="button action right">+ Job</a>
                </td>
            </tr>
        </tfoot>
        <tbody>
            <?php $this->widget('zii.widgets.CListView', array(
                'dataProvider' => $jobDataProvider,
                'itemView' => '/job/_view',
                'sortableAttributes'=>array(
                    'id','name','created','termination_date'
                ),
            )); ?>
        </tbody>
    </table>
</div>

<div class="contentBlock right">
    <h2>Users</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Level</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <td colspan="6" class="clearfix">
                    <a href="/user/create" class="button action right">+ User</a>
                </td>
            </tr>
        </tfoot>
        <tbody>
            <?php $this->widget('zii.widgets.CListView', array(
                'dataProvider' => $userDataProvider,
                'itemView' => '/user/_view',
                'sortableAttributes'=>array(
                    'id','username','email','level'
                ),
            )); ?>
        </tbody>
    </table>
</div>