<?php
use \yii\helpers\Html;
use yii\widgets\Pjax;
?>

<div>
    <h1>Работа с формой</h1>
    <?php Pjax::begin()?>
    <?= Html::beginForm("/index.php?r=pjax/form", "post", ['class' => 'form-inline', 'data-pjax' => ''])?>
    <?= Html::input("text", 'string', Yii::$app->request->post('string'), ['class' => 'form-control']);?>
    <?= Html::submitButton("Сделать хэш", ['class' => 'btn btn-success', 'name' => 'hash']);?>
    <?= Html::endForm();?>
    <div>
        <?= $hash?>
    </div>
    <?php Pjax::end()?>
</div>
