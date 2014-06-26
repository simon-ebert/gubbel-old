<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$this->pageTitle = Yii::app()->name;
?>
</div>
<div data-role="header" style="position:fixed;top:0px;left:0px;right:0px;;">
    <a href="#" data-icon="plus" class="ui-btn-right">Add</a>
    <h1><b>Events</b></h1>
    <div data-role="navbar">

    </div><!-- /navbar -->
</div><!-- /header -->
<div id="car-left">
    <img id="car-pic" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/i3.png" ></div>
<div id="car-bottom">
</div>
<ul data-role="listview" data-inset="true">
    <li><a href="<?php echo $url = $this->createUrl("/site/tegernsee"); ?>" rel="external" id="tegernsee" data-icon="grid">
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/ferienregion_tegernsee.jpg" class="event_thumb">
        <h2>Tegernsee</h2>
        <p>i3 Fahrt zum schönen Tegernsee mit anschließendem Bier im Bräustüberl...</p></a>
    </li>
    <li><a href="<?php echo $url = $this->createUrl("/site/chiemsee"); ?>" rel="external" id="tegernsee" data-icon="grid">
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/488px-Chiemsee021.jpg" class="event_thumb">
        <h2>Chiemsee</h2>
        <p>Ausflug zum bayrischen Meer im Tesla Model S...</p></a>
    </li>
</ul>
</div>