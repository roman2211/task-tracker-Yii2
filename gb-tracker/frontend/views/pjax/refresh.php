<?php
/** @var \yii\web\View $this */
use \yii\helpers\Html;
use yii\widgets\Pjax;


$script = <<< JS
    setInterval(function () {
        $('#btn_refresh').click()
    }, 2000)
JS;

$this->registerJs($script);
?>

<div>
    <h1>PJAX</h1>
    <?php Pjax::begin()?>
    <?= Html::a("Обновить время", '/index.php?r=pjax/refresh',[
            'class' => 'btn btn-success',
            'id' => 'btn_refresh'
        ])?>
    <h2>Текущее время: <?= $time?></h2>
    <?php Pjax::end()?>
</div>