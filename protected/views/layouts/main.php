<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?= CHtml::encode(Yii::app()->name); ?></title>
    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="viewport" content="width=device-width,initial-scale=1">

    <link rel="stylesheet" href="css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Ubuntu+Mono|Ubuntu:400,700' rel='stylesheet' type='text/css'>

    <script src="js/libs/modernizr-2.0.6.min.js"></script>
</head>
<body>

<div id="container">
    <header class="clearfix">
        <h1 class="left"><?= CHtml::encode(Yii::app()->name); ?></h1>
        <? $this->widget('zii.widgets.CMenu',array(
            'htmlOptions' => array('id' => 'login-logout','class' => 'right login-logout'),
            'items' => array(
                array('label' => 'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label' => 'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        )); ?>
    </header>
    
    <? if (!Yii::app()->user->isGuest): ?>
        <nav>
            <? $this->widget('zii.widgets.CMenu',array(
                'htmlOptions' => array('id' => 'login-logout','class' => 'right login-logout'),
                'items' => array(
                    array('label' => 'Dashboard', 'url' => array('/dashboard')),
                    array('label' => '+ New Job', 'url' => array('/jobs/new')),
                    array('label' => 'Manage Jobs', 'url' => array('/jobs/manage')),
                    array('label' => 'Manage Users', 'url' => array('/users/manage'))
                ),
            )); ?>
        </nav>
    <? endif; ?>
    
    <div id="main" role="main">
        <?php echo $content; ?>
    </div>
    <footer>
        
    </footer>
</div> <!--! end of #container -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/assets/js/libs/jquery-1.6.2.min.js"><\/script>')</script>
<script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']]; // Change UA-XXXXX-X to be your site's ID
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
</script>

<!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.2/CFInstall.min.js"></script>
    <script>window.attachEvent("onload",function(){CFInstall.check({mode:"overlay"})})</script>
<![endif]-->

</body>
</html>