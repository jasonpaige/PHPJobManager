<?php
$this->pageTitle=Yii::app()->name . ' - Error';
$this->breadcrumbs=array(
    'Error',
);
?>

<h2>Error <?= $code; ?></h2>

<div class="error">
<?= CHtml::encode($message); ?>
</div>

<?php if ($code == 404): ?>
<script>
var GOOG_FIXURL_LANG = (navigator.language || '').slice(0,2),
    GOOG_FIXURL_SITE = location.host;
</script>
<script src="http://linkhelp.clients.google.com/tbproxy/lh/wm/fixurl.js"></script>
<?php endif; ?>
