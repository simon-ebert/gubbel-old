<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

            <!-- blueprint CSS framework -->
            <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
            <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
            <!--[if lt IE 8]>
            <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
            <![endif]-->

            <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
            <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

            <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/jquery.mobile-1.4.2/jquery.mobile-1.4.2.css" />

            <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/gubbel.css" />

            <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/jquery/jquery.min.js"></script>
            <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/jquery.mobile-1.4.2/jquery.mobile-1.4.2.min.js"></script>
            <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/dragend.min.js"></script>

            <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body style="padding-top:170px;">
        
        <div class="container" id="page" style="margin-top: 40px; ">
             <?php echo $content; ?>
        
        <div data-role="footer" class="nav-glyphish-example"  style="position:fixed;bottom:0px;left:0px;right:0px;">
            <div data-role="navbar" class="nav-glyphish-example" >
            <ul>
                <li><a href="<?php echo $url=$this->createUrl("/site/index"); ?>" rel="external" id="profil" data-icon="grid">Profil</a></li>
                <li><a href="<?php echo $url=$this->createUrl("/site/events"); ?>" rel="external" id="events" data-icon="grid">Events</a></li>
                <li><a href="#" id="einfo" data-icon="grid">E-Info</a></li>
            </ul>
            </div>
        </div>

    </body>
</html>
