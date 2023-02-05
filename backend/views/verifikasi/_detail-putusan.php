<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
?>

<div class="box-header">
    <?= Html::a('<i class="fa fa-mail-reply"></i> Kembali', ['index'], ['class' => 'btn btn-success btn-flat']) ?>
    <?= Html::a('<i class="fa fa-pencil"></i> Ubah Data Utama', ['update', 'id' => $model->id], ['class' => 'btn btn-primary btn-flat']) ?>

    <?= Html::a('<i class="fa fa-pencil"></i> Ubah Dokumen', ['ubah-lampiran', 'id' => $model->id], ['class' => 'btn btn-danger btn-flat']) ?>
    <p></p>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'attribute' => 'jenis_peraturan',
                'label' => 'Jenis Putusan',
            ],



            [
                'attribute' => 'judul',
                'label' => 'Judul Putusan',
            ],

            [
                'attribute' => 'nomor_peraturan',
                'label' => 'Nomor Putusan',
            ],
            'pemohon',
            'termohon',
            'lembaga_peradilan',
            [
                'attribute' => 'tahun_terbit',
                'label' => 'Tahun',
            ],

            [
                'attribute' => 'tempat_terbit',
                'label' => 'Tempat Penetapan',
            ],
            'tanggal_penetapan',
            'penandatanganan',
           // 'sumber:ntext',
            'klasifikasi',
            'bahasa:ntext',
            [
                'attribute' => 'sub_klasifikasi',
                'label' => 'Tingkat Proses',
            ],
            'bidang_hukum:ntext',

            [
                'label' => 'Dokumen Lampiran',
                'format' => 'html',
                'value' => function ($data) {
                    //return Html::a($data->dokumen->dokumen_lampiran, ['download-peraturan', 'id' => $data->id], ['target' => '_blank']);
                    return Html::a($data->dokumen->dokumen_lampiran, ['../common/dokumen/' . $data->dokumen->dokumen_lampiran], ['target' => '_blank', 'title' => 'lihat file']);
                }
            ],

            [
                'label' => 'Dokumen Abstrak',
                'format' => 'html',
                'value' => function ($data) {
                    return Html::a($data->abstrak, ['download-abstrak', 'id' => $data->abstrak], ['target' => '_blank']);
                }
            ],
            // [
            //     'label' => 'Judul Lampiran',
            //     'value'=>function($data){
            //         return $data->dokumen->judul_lampiran;}
            // ], 

            [
                'label' => 'Amar Putusan',
                'attribute' => 'amar_status',
            ],

            [
                'attribute' => 'created_at',
                'value' => function ($data) {
                    return $data->getTanggal2($data->created_at);
                },
            ],

            [
                'attribute' => 'created_by',
                'value' => function ($data) {
                    return $data->getUserInput($data->_created_by);
                },
            ],
            [
                'attribute' => 'updated_at',
                'value' => function ($data) {
                    return $data->getTanggal2($data->updated_at);
                },
            ],
            [
                'attribute' => 'updated_by',
                'value' => function ($data) {
                    return $data->getUserInput($data->_updated_by);
                },
            ],
        ],
    ]) ?>
</div>