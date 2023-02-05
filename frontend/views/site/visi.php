<?php

use yii\helpers\Html;
use backend\models\FrontendConfig;
$visi = FrontendConfig::findOne(10); 
?>
<section class="page-title-section bg-img cover-background" data-overlay-dark="7" data-background="/img/banner/header.jpg">
    <div class="container">
        <h1>Visi</h1>
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
       <?= $visi->isi_konfig?>
   </div>
</section>