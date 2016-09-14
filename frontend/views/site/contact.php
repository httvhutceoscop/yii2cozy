<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact Us';
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- BEGIN PAGE TITLE/BREADCRUMB -->
<div class="parallax colored-bg pattern-bg" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-title"><?= Html::encode($this->title) ?></h1>

                <ul class="breadcrumb">
                    <li><a href="index.html">Home </a></li>
                    <li><a href="contacts.html">Contacts</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END PAGE TITLE/BREADCRUMB -->


<!-- BEGIN CONTENT WRAPPER -->
<div class="content contacts">
    <div id="contacts_map"></div>



    <div class="container">
        <div class="row">

            <div id="contacts-overlay" class="col-sm-7">
                <i id="contacts-overlay-close" class="fa fa-minus"></i>

                <ul class="col-sm-6">
                    <li><i class="fa fa-map-marker"></i> 24th Street, New York, USA</li>
                    <li><i class="fa fa-envelope"></i> <a href="mailto:youremail@domain.com">youremail@domain.com</a></li>
                </ul>

                <ul class="col-sm-6">
                    <li><i class="fa fa-phone"></i> Tel.: 00351 123 456 789</li>
                    <li><i class="fa fa-print"></i> Fax: 00351 456 789 101</li>
                </ul>
            </div>

            <!-- BEGIN MAIN CONTENT -->
            <div class="main col-sm-4 col-sm-offset-8">
                <h2 class="section-title">Contact Form</h2>
                <p class="col-sm-12 center">If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.</p>

                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                    <div class="col-sm-12">
                        <?= $form->field($model, 'name')->textInput([
                            //'autofocus' => true,
                            'placeholder' => 'Name',
                            'class' => 'form-control required fromName'])->label(false)
                        ?>

                        <?= $form->field($model, 'email')->textInput([
                            'placeholder' => 'Email',
                            'class' => 'form-control required fromName'])->label(false)
                        ?>

                        <?= $form->field($model, 'subject')->textInput([
                            'placeholder' => 'Subject',
                            'class' => 'form-control required fromName'])->label(false)
                        ?>

                        <?= $form->field($model, 'body')->textarea([
                            //'rows' => 6,
                            'placeholder' => 'Message',
                            'class' => 'form-control required'])->label(false)
                        ?>

                        <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                            'template' => '<div class="row"><div class="col-sm-4">{image}</div><div class="col-sm-8">{input}</div></div>',
                        ])->label('Verification Code <small>(click to change code)</small>') ?>
                    </div>

                    <div class="center">
                        <?= Html::submitButton('<i class="fa fa-envelope"></i> Send Message', [
                            'class' => 'btn btn-default-color btn-lg submit_form',
                            'name' => 'contact-button'])
                        ?>
                    </div>
                <?php ActiveForm::end(); ?>
            </div>
            <!-- END MAIN CONTENT -->

        </div>
    </div>
</div>
<!-- END CONTENT WRAPPER -->

<script type="text/javascript">
//    var singleMarker = [
//        {
//            "id": 0,
//            "title": "Cozy Real State",
//            "latitude": 40.727815,
//            "longitude": -73.993544,
//            "image": "http://placehold.it/700x603",
//            "description": "Lafayette St New York, NY <br> Phone: 00351 123 456 789",
//            "map_marker_icon": "images/markers/coral-marker-cozy.png"
//        }
//    ];
//
//    (function ($) {
//        "use strict";
//
//        $(document).ready(function () {
//            //Create contacts map. Usage: Cozy.contactsMap(marker_JSON_Object, map canvas, map zoom);
//            Cozy.contactsMap(singleMarker, 'contacts_map', 14);
//        });
//    })(jQuery);
</script>
