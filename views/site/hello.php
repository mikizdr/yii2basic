<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Hello';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-hello">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is my first page in Yii 2 PHP framework:
    </p>

    <code><?= __FILE__ ?></code>

    <h1 class="jumbotron">
        Hi <?= Html::encode($name) ?>
    </h1>
</div>