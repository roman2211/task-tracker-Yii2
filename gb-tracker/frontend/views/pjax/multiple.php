<?php
use \yii\helpers\Html;
use yii\widgets\Pjax;
?>

<div>
    <h1>Блок времени </h1>
    <?php Pjax::begin()?>
    <?= Html::a("Обновить время", '/index.php?r=pjax/multiple',['class' => 'btn btn-success'])?>
    <h2>Текущее время: <?= $time?></h2>
    <?php Pjax::end()?>

    <h1>Блок хэш </h1>
    <?php Pjax::begin()?>
    <?= Html::a("Обновить время", '/index.php?r=pjax/multiple',['class' => 'btn btn-success'])?>
    <h2>Текущее время: <?= $hash?></h2>
    <?php Pjax::end()?>
</div>
