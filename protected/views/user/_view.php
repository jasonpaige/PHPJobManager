<tr class="view">

    <td>
        <?= CHtml::encode($data->id); ?>
    </td>
    <td>
        <?= CHtml::encode($data->username); ?>
    </td>
    <td>
        <?= CHtml::encode($data->email); ?>
    </td>
    <td>
        <?= CHtml::encode($data->level); ?>
    </td>
    <td>
        <?= CHtml::link('Edit', array('/user/edit', 'id'=>$data->id)); ?>
    </td>
    <td>
        <?= CHtml::link('Delete', array('/user/delete', 'id'=>$data->id), array("onclick" => "return confirm('Are you sure you want to delete this user?');")); ?>
    </td>

</tr>