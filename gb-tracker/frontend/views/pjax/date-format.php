<?php
use \yii\helpers\Html;
use yii\widgets\Pjax;
?>

<div>
    <h1>PJAX</h1>
    <?php Pjax::begin()?>
    <?= Html::a("Показать часы, минуты и секунды", '/index.php?r=pjax/hours',['class' => 'btn btn-success'])?>
    <?= Html::a("Показать минуты и секунды", '/index.php?r=pjax/minutes',['class' => 'btn btn-warning'])?>
    <h2>Текущее время: <?= $time?></h2>
    <?php Pjax::end()?>
</div>
