<?php

use yii\helpers\Html;
use backend\models\FrontendConfig;
$misi = FrontendConfig::findOne(11); 
?>
<section class="page-title-section bg-img cover-background" data-overlay-dark="7" data-background="/img/banner/header.jpg">
  <div class="container">
    <h1>Misi</h1>
    <ul class="text-center">
      <li><?= Html::a('Home', ['/']); ?></li>
      <li>
        <span class="active">Tentang Kami</span>
      </li>
    </ul>
  </div>
</section>

<section>
  <div class="container">

    <?= $misi->isi_konfig?>
  </div>
</section>