<?php
use \yii\helpers\Html;
use yii\widgets\Pjax;
?>

<div>
    <h1>PJAX</h1>
    <?php Pjax::begin()?>
    <?= Html::a("Обновить время", '/index.php?r=pjax/time',['class' => 'btn btn-success'])?>
    <h2>Текущее время: <?= $time?></h2>
    <?php Pjax::end()?>
</div>
