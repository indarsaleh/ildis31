<?php

use yii\helpers\Html;
?>
<!-- start footer section -->
<footer>
    <div class="footer-area padding-90px-tb md-padding-70px-tb sm-padding-50px-tb">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6 sm-margin-40px-bottom">

                    <!-- start logo -->
                    <?= Html::img('@web/frontend/assets/img/logos/jdih.png', ['class' => 'width-20% margin-30px-bottom xs-margin-20px-bottom']); ?>

                    <!-- end logo -->
                    <p>Jaringan Dokumentasi dan Informasi Hukum Nasional</p>
                </div>

                <div class="col-lg-4 col-sm-6 sm-margin-40px-bottom">
                    <h3 class="footer-title-style1">Kontak Kami</h3>
                    <ul class="list-style-1 no-margin">
                        <li>
                            <span class="d-inline-block vertical-align-top font-size18"><i class="ti-location-pin text-theme-color"></i></span>
                            <span class="d-inline-block width-65 sm-width-85 vertical-align-top padding-10px-left">Lokasi instansi</span>
			    <span class="d-inline-block width-65 sm-width-85 vertical-align-top padding-35px-left">alamat instansi</span>
                        </li>
                        <li>
                            <span class="d-inline-block vertical-align-top font-size18"><i class="ti-mobile text-theme-color"></i></span>
                            <span class="d-inline-block width-65 sm-width-85 vertical-align-top padding-10px-left">-</span>
                        </li>
                        <li>
                            <span class="d-inline-block vertical-align-top font-size18"><i class="ti-email text-theme-color"></i></span>
                            <span class="d-inline-block width-65 sm-width-85 vertical-align-top padding-10px-left">-</span>
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

    <div class="footer-bar xs-padding-15px-tb" style="background-color:#eab241">
        <div class="container">
            <div class="float-right xs-width-100 text-center xs-margin-5px-bottom">
                <ul class="social-icon-style no-margin">
                    <li>
                        <a href="https://www.facebook.com/jdihnindonesia/"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/channel/UCCtMZUpkE_1HyJrYwchuprg"><i class="fab fa-youtube"></i></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/jdihnindonesia/?hl=id"><i class="fab fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
            <div class="float-left xs-width-100 text-center">
                <p class="text-medium-gray font-weight-600 margin-5px-top xs-no-margin-top">&copy; 2020 All Rights Reserved by <a href="https://bphn.go.id">BPHN</a></p>
            </div>
        </div>
    </div>
</footer>
<!-- end footer section -->
