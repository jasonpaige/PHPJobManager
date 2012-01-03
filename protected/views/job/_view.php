<?php
    $user = User::model()->findByPk($data->user_id);    
?>
<tr class="view">

    <td>
        <?= CHtml::encode($data->id); ?>
    </td>
    <td>
        <?= CHtml::encode($user->username); ?>
    </td>
    <td>
        <?= CHtml::encode($data->name); ?>
    </td>
    <td>
        <?= CHtml::encode($data->cron); ?>
    </td>
    <td>
        <?= CHtml::encode($data->created); ?>
    </td>
    <td>
        <?= CHtml::encode($data->termination_date); ?>
    </td>
    <td>
        <?= CHtml::encode($data->getNextRunDateString("Y-m-d H:i:s")); ?>
    </td>
    <td>
        <?= CHtml::link('Edit', array('/job/edit', 'id'=>$data->id)); ?>
    </td>
    <td>
        <?= CHtml::link('Delete', array('/job/delete', 'id'=>$data->id), array('onclick' => 'return confirm("Are you sure you want to delete this job?");')); ?>
    </td>

</tr>