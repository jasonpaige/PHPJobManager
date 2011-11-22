<?php
$this->breadcrumbs=array(
    'Users',
);

$this->menu=array(
    array('label'=>'Create User', 'url'=>array('create')),
    array('label'=>'Manage User', 'url'=>array('admin')),
);
?>
<div class="contentBlock">
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
                'dataProvider' => $dataProvider,
                'itemView' => '_view',
                'sortableAttributes'=>array(
                    'id','username','email','level'
                ),
            )); ?>
        </tbody>
    </table>
</div>
