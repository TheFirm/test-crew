<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'My Yii Application';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="bower_components/bootstrap/dist/css/bootstrap-theme.css" rel="stylesheet">
    <link href="bower_components/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="logo">
        <img src="img/your-logo-here2.png" alt="" class="logo__picture"/>
    </div>

    <div class="redirect-form">
        <?php
        $form = ActiveForm::begin([
            'id' => 'login-form',
            'options' => ['class' => 'form-horizontal'],
        ]) ?>
        ?>
        <div class="form-group">
            <label class="sr-only" for="exampleInputAmount"></label>
            <div class="input-group">
               <!-- <input type="text" class="form-control" id="exampleInputAmount" placeholder="Your link">-->
                <?= $form->field($model, 'original_url'); ?>
            </div>
        </div>


        <?= Html::submitButton('Generate', ['class' => 'btn btn-primary']) ?>

        <?php ActiveForm::end() ?>

    </div>

    <div class="generated-link--wrapper">
        <a href="" class="generated-link">
            http://test-link.test
        </a>
    </div>

     <footer>
            <img class="footer__logo" src="img/your-logo-here2.png" alt=""/>
    </footer>
</div>
</body>
</html>
