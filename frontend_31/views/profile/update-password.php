<?php
/* @var $this yii\web\View */



use common\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\widgets\FileInput;
use kartik\datecontrol\DateControl;
?>

<section class="page-title-section bg-img cover-background" data-overlay-dark="7" data-background="/jdih/img/banner/header.jpg">
    <div class="container">
        <h1>Profile</h1>
        <ul class="text-center">
            <li><?= Html::a('Home', ['/']); ?></li>
            <li>
                <span class="active">Profile</span>
            </li>
        </ul>
    </div>
</section>

<?= Alert::widget() ?>
<section>
    <div class="container">

        <div class="row pb-5">

            <div class="col-md-5 col-lg-3 xs-margin-30px-bottom">
                <div class="summary padding-40px-all slow-redirect bg-light">
                    <h6>Dashboard</h6>
                    <ul class="list-unstyled no-margin-bottom">
                        <li><?= Html::a('Profile', ['profile/profile']) ?></li>
                        <li><?= Html::a('Peminjaman', ['profile/peminjaman']) ?></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-7 col-lg-9 padding-10px-top">
                <h4 id="alert">Ubah Password</h4>







                <?php $form = ActiveForm::begin([
                    //'layout' => 'vertical',
                    'options' => ['enctype' => 'multipart/form-data'],
                    'fieldConfig' => [
                        'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
                        'horizontalCssClasses' => [
                            'label' => 'col-sm-2',
                            'offset' => 'col-sm-offset-4',
                            'wrapper' => 'col-sm-8',
                            //'error' => '',
                            'hint' => '',
                        ],
                    ],
                ]); ?>
                <?= $form->errorSummary([$model]) ?>



                <?= $form->field($model, 'password_hash')->passwordInput(['maxlength' => true])->label('Password Baru') ?>




    <div class="box-footer">
        <?= Html::submitButton('<i class="fa fa-save"></i> Simpan',['class'=>'butn']) ?>
  
    </div>


    <?php ActiveForm::end(); ?>



    </div>
    </div>
    </div>
</section>