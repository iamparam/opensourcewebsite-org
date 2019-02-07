<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */

/* @var $exception Exception */

use yii\helpers\Html;

$this->title = "Profile Authorization Error";
?>
<div class="site-error">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="alert alert-danger">
         You are not Authorized user.
    </div> 

    <p>
        The above error occurred while the Web server was processing your request.
    </p>
    <p>
        Please follow this link for <?= Html::a('invitation', $inviteLink) ?>. Thank you.
    </p>

</div>
