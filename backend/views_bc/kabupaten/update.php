<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Kabupaten */

$this->title = 'Ubah Data Kabupaten: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Kabupaten', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="box-body no-padding">

    <?= $this->render('_form-update', [
        'model' => $model,
    ]) ?>

</div>
