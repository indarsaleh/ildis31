<?php

use yii\helpers\Html;
use backend\models\FrontendConfig;

$logo = FrontendConfig::findOne(3);
$fb = FrontendConfig::findOne(13);
$yt = FrontendConfig::findOne(14);
$ig = FrontendConfig::findOne(15);
$instansi = FrontendConfig::findOne(2);
$deskripsi = FrontendConfig::findOne(4);
$alamat = FrontendConfig::findOne(5);
$nomor = FrontendConfig::findOne(6);
$email = FrontendConfig::findOne(7);

?>
<!-- start footer section -->
<footer>
    <div class="footer-area padding-90px-tb md-padding-70px-tb sm-padding-50px-tb">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6 sm-margin-40px-bottom">

                    <!-- start logo -->
                    <?= Html::img('@web/common/dokumen/' . $logo->isi_konfig, ['class' => 'width-50 margin-10px-bottom xs-margin-5px-bottom']); ?>

                    <!-- end logo -->
                    <p><?= $deskripsi->isi_konfig ?></p>


                </div>

                <div class="col-lg-4 col-sm-6 sm-margin-40px-bottom">
                    <h3 class="footer-title-style1">Kontak Kami</h3>
                    <ul class="list-style-1 no-margin">
                        <li>
                            <span class="d-inline-block vertical-align-top font-size18"><i class="ti-location-pin text-theme-color"></i></span>
                            <span class="d-inline-block width-65 sm-width-85 vertical-align-top padding-10px-left">
                                <?= $instansi->isi_konfig ?>
                            </span>
                            <span class="d-inline-block width-65 sm-width-85 vertical-align-top padding-35px-left">
                                <?= $alamat->isi_konfig ?>
                            </span>
                        </li>
                        <li>
                            <span class="d-inline-block vertical-align-top font-size18"><i class="ti-mobile text-theme-color"></i></span>
                            <span class="d-inline-block width-65 sm-width-85 vertical-align-top padding-10px-left">
                                <?= $nomor->isi_konfig ?>
                            </span>
                        </li>
                        <li>
                            <span class="d-inline-block vertical-align-top font-size18"><i class="ti-email text-theme-color"></i></span>
                            <span class="d-inline-block width-65 sm-width-85 vertical-align-top padding-10px-left">
                                <?= $email->isi_konfig ?>

                            </span>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-sm-6 mobile-margin-40px-bottom">
                    <h3 class="footer-title-style1">Tautan</h3>
                    <ul class="list-style-1 no-margin-bottom">
                        <li><a href="https://www.kemenkumham.go.id/">Portal Kemenkumham R.I.</a></li>
                        <li><a href="https://www.bphn.go.id/">Portal BPHN</a></li>
                        <li><a href="https://jdihn.go.id/">Portal JDIHN</a></li>
                    </ul>
                </div>

            </div>

        </div>
    </div>

    <div class="footer-bar xs-padding-15px-tb" style="background: linear-gradient(to bottom, #ff9900 0%, #ff6600 44%)">
        <div class="container">
            <div class="float-right xs-width-100 text-center xs-margin-5px-bottom">
                <ul class="social-icon-style no-margin">
                    <li>

                        <a class="text-white" href="<?= $fb->isi_konfig ?>"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a class="text-white" href="<?= $yt->isi_konfig ?>"><i class="fab fa-youtube"></i></a>
                    </li>
                    <li>
                        <a class="text-white" href="<?= $ig->isi_konfig ?>"><i class="fab fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
            <div class="float-left xs-width-100 text-center">
                <p class="text-medium-black font-weight-600 margin-5px-top xs-no-margin-top">&copy; 2020 All Rights Reserved by <a class="text-black" href="https://bphn.go.id">BPHN</a></p>
            </div>
        </div>
    </div>
</footer>
<!-- end footer section -->