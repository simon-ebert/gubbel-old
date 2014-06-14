<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
?>

<ul id="pages">
    <li class="dragend-page"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/1.jpg"</li>
    <li class="dragend-page"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/2.jpg"</li>
    <li class="dragend-page"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/3.jpg"</li>
    <li class="dragend-page"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/4.jpg"</li>
</ul>

<script>
    $(document).ready(function() {
        $("#pages").dragend();
    });
</script>
