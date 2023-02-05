<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DokumenJdih */

$this->title = 'Create Dokumen Jdih';
$this->params['breadcrumbs'][] = ['label' => 'Dokumen Jdihs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dokumen-jdih-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
