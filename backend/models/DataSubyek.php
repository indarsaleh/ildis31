<?php

namespace backend\models;


use Yii;
use yii\db\ActiveRecord;
use yii\db\Expression;
use yii\behaviors\SluggableBehavior;
use yii\behaviors\BlameableBehavior;
use yii\helpers\Html;

/**
 * This is the model class for table "data_subyek".
 *
 * @property int $id
 * @property int $id_dokumen
 * @property string $subyek
 * @property string $tipe_subyek
 * @property string $jenis_subyek
 * @property string|null $status
 * @property int|null $integrasi
 * @property string|null $_created_by
 * @property string|null $_updated_by
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class DataSubyek extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data_subyek';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_dokumen', 'subyek', 'tipe_subyek', 'jenis_subyek'], 'required'],
            [['id_dokumen', 'integrasi'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['subyek', 'tipe_subyek', 'jenis_subyek', 'status', '_created_by', '_updated_by'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_dokumen' => 'Id Dokumen',
            'subyek' => 'Subyek',
            'tipe_subyek' => 'Tipe Subyek',
            'jenis_subyek' => 'Jenis Subyek',
            'status' => 'Status',
            'integrasi' => 'Integrasi',
            '_created_by' => 'Created By',
            '_updated_by' => 'Updated By',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => 'yii\behaviors\TimestampBehavior',
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
                'value' => new Expression('NOW()'),
            ],
            'blameable' => [
                'class' => BlameableBehavior::className(),
                'createdByAttribute' => '_created_by',
                'updatedByAttribute' => '_updated_by',
            ],
        ];
    }

    public function getTanggal($tanggal)  // fungsi atau method untuk mengubah hari, tanggal ke format indonesia
    {
        $BulanIndo = array("", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
        $HariIndo = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
        $sepparator = '-';
        $parts = explode($sepparator, $tanggal);

        //$hari = $HariIndo[date("w", mktime(0, 0, 0, $parts[1], $parts[2], $parts[0]))]; //mendapatkan hari indonesia
        $tgl   = substr($tanggal, 8, 2); // memisahkan format tanggal menggunakan substring
        $bulan = substr($tanggal, 5, 2); // memisahkan format bulan menggunakan substring   
        $tahun = substr($tanggal, 0, 4); // memisahkan format tahun menggunakan substring

        //$result = $hari .", " .$tgl . " " . $BulanIndo[(int)$bulan] . " ". $tahun;
        $result = $tgl . " " . $BulanIndo[(int)$bulan] . " " . $tahun;
        return ($result);
    }

    public function getJumlahData($id)
    {
        $monografi = DataSubyek::find()->where(['subyek' => $id])->count();
        if (!empty($monografi)) {
            return $monografi;
        }
    }

    public function getTipe($id)
    {
        $monografi = DokumenJdih::findOne($id);
        if (!empty($monografi)) {

            $data = TipeDokumen::findOne($monografi->tipe_dokumen);
            return $data->name;
        }
    }

    public function getjudul($id)
    {
        $monografi = DokumenJdih::findOne($id);
        if (!empty($monografi)) {

            switch ($monografi->tipe_dokumen) {
                case '1':
                    return Html::a(strtoupper($monografi->judul), ['peraturan/view', 'id' => $monografi->id]);

                    break;

                case '2':
                    return Html::a(strtoupper($monografi->judul), ['monografi/view', 'id' => $monografi->id]);

                    break;

                case '3':
                    return Html::a(strtoupper($monografi->judul), ['artikel/view', 'id' => $monografi->id]);

                    break;
                case '1':
                    return Html::a(strtoupper($monografi->judul), ['putusan/view', 'id' => $monografi->id]);

                    break;
                default:
                    return Html::a(strtoupper($monografi->judul), ['peraturan/view', 'id' => $monografi->id]);

                    break;
            }
            // $data = TipeDokumen::findOne($monografi->tipe_dokumen);
            //return $monografi->judul;
            //  return Html::a(strtoupper($data->judul), ['view', 'id' => $data->id]);
        }
    }

    public function getUserInput($id)
    {
        $user = User::findOne($id);
        return $user->username;
    }
}