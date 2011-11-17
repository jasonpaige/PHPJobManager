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
        <?= CHtml::link('Delete', array('/user/delete', 'id'=>$data->id)); ?>
    </td>

</tr>