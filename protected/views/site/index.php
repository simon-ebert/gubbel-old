<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
?>

<div id="top">Logged in as: Max.Mustermann@gmail.com</div>

<div id="person">
    <div id="person-top">Person</div>
    <div id="person-left">
        <img id="person-pic" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/helmut_krcmar_low.jpg" ></div>
    <div id="person-right">
        <table>
            <tr>
                <td class="bold">Name: </td>
                <td>Helmut Krcmar</td>
            </tr>
            <tr>
                <td class="bold">Current city: </td>
                <td>Munich</td>
            </tr>
            <tr>
                <td class="bold">Birthdate: </td>
                <td>01/01/1960</td>
            </tr>
            <tr>
                <td class="bold">Hobbies: </td>
                <td>Soccer, Guitar</td>
            </tr>
        </table>
    </div>
    <div id="car-top">E-Car</div>
    <div id="car-left">
        <img id="car-pic" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/i3.png" ></div>
    <div id="car-bottom">
        <table>
            <tr>
                <td class="bold">Type: </td>
                <td>BMW i3</td>
            </tr>
            <tr>
                <td class="bold">Mileage: </td>
                <td>1,000 miles</td>
            </tr>
            <tr>
                <td class="bold">Electric Motor: </td>
                <td>130 kW (170 hp)</td>
            </tr>
            <tr>
                <td class="bold">Purchase Date: </td>
                <td>01/01/2014</td>
            </tr>
            <tr>
                <td class="bold">Driveability: </td>
                <td>Dynamic</td>
            </tr>
        </table>
    </div>
</div>