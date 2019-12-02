<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Chattemplate */

$this->title = 'Create Chattemplate';
$this->params['breadcrumbs'][] = ['label' => 'Chattemplates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chattemplate-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
