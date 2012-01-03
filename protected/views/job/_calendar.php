<div class="calendarContainer">
    <table class="calendar" cellspacing="0">
        <?php for ($i = 0; $i < 24; $i++): ?>
        <tr id="r_<?= str_pad($i, 2, "0", STR_PAD_LEFT); ?>00" class="hour">
            <td rowspan="2" class="time"><?= str_pad($i, 2, "0", STR_PAD_LEFT); ?>:00</td>
            <td class="jobs">&nbsp;</td>
        </tr>
        <tr id="r_<?= str_pad($i, 2, "0", STR_PAD_LEFT); ?>30">
            <td class="jobs">&nbsp;</td>
        </tr>
        <?php endfor; ?>
    </table>
</div>