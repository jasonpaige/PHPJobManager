<?php
$this->breadcrumbs=array(
	'Dashboard',
);?>

<div class="contentBlock left">
    <h2>Jobs</h2>

    <?php $this->widget('zii.widgets.CListView', array(
        'dataProvider' => $jobDataProvider,
        'itemView' => '_jobview',
    )); ?>
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
                'itemView' => '_userview',
                'sortableAttributes'=>array(
                    'id','username','email','level'
                ),
            )); ?>
        </tbody>
    </table>
</div>