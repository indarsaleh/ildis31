<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\DokumenJdih */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Dokumen Jdihs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="dokumen-jdih-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'tipe_dokumen',
            'judul:ntext',
            'teu:ntext',
            'nomor_peraturan',
            'nomor_panggil',
            'bentuk_peraturan:ntext',
            'jenis_peraturan',
            'singkatan_jenis',
            'cetakan',
            'tempat_terbit:ntext',
            'penerbit:ntext',
            'tanggal_penetapan',
            'deskripsi_fisik',
            'sumber:ntext',
            'isbn',
            'bahasa:ntext',
            'bidang_hukum:ntext',
            'nomor_induk_buku',
            'singkatan_bentuk',
            'tipe_koleksi_nomor_eksemplar',
            'pola_nomor_eksemplar',
            'jumlah_eksemplar',
            'kala_terbit',
            'tahun_terbit',
            'tanggal_dibacakan',
            'pernyataan_tanggung_jawab:ntext',
            'edisi',
            'gmd',
            'judul_seri',
            'klasifikasi',
            'info_detil_spesifik',
            'abstrak:ntext',
            'gambar_sampul',
            'label',
            'sembunyikan_di_opac',
            'promosikan_ke_beranda',
            'status_terakhir',
            'status',
            'integrasi',
            '_created_by',
            '_updated_by',
            'created_at',
            'updated_at',
            'inisiatif',
            'pemrakarsa',
            'tanggal_pengundangan',
            'daerah',
            'penandatanganan',
            'lembaga_peradilan',
            'pemohon',
            'termohon',
            'jenis_perkara',
            'sub_klasifikasi',
            'amar_status',
            'berkekuatan_hukum_tetap',
            'urusan_pemerintahan',
            'catatan_status_peraturan',
            'hit_see',
            'hit_download',
            'sumber_perolehan',
            'is_publish',
        ],
    ]) ?>

</div>
