<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DokumenJdih */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dokumen-jdih-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tipe_dokumen')->textInput() ?>

    <?= $form->field($model, 'judul')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'teu')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'nomor_peraturan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nomor_panggil')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bentuk_peraturan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'jenis_peraturan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'singkatan_jenis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cetakan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tempat_terbit')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'penerbit')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tanggal_penetapan')->textInput() ?>

    <?= $form->field($model, 'deskripsi_fisik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sumber')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'isbn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bahasa')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'bidang_hukum')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'nomor_induk_buku')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'singkatan_bentuk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipe_koleksi_nomor_eksemplar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pola_nomor_eksemplar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah_eksemplar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kala_terbit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tahun_terbit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_dibacakan')->textInput() ?>

    <?= $form->field($model, 'pernyataan_tanggung_jawab')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'edisi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gmd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'judul_seri')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'klasifikasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'info_detil_spesifik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'abstrak')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'gambar_sampul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'label')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sembunyikan_di_opac')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'promosikan_ke_beranda')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_terakhir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'integrasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, '_created_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, '_updated_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'inisiatif')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pemrakarsa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_pengundangan')->textInput() ?>

    <?= $form->field($model, 'daerah')->textInput() ?>

    <?= $form->field($model, 'penandatanganan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lembaga_peradilan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pemohon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'termohon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis_perkara')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sub_klasifikasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'amar_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'berkekuatan_hukum_tetap')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'urusan_pemerintahan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'catatan_status_peraturan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hit_see')->textInput() ?>

    <?= $form->field($model, 'hit_download')->textInput() ?>

    <?= $form->field($model, 'sumber_perolehan')->dropDownList([ 'Beli' => 'Beli', 'Hibah' => 'Hibah', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'is_publish')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
