<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "penyakit".
 *
 * @property string $kd_penyakit
 * @property string $nm_penyakit
 * @property string $penyebab
 * @property string $keterangan
 * @property string $photo
 * @property string $solusi
 *
 * @property Rules[] $rules
 */
class Penyakit extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'penyakit';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kd_penyakit', 'nm_penyakit', 'penyebab', 'keterangan', 'photo', 'solusi'], 'required'],
            [['keterangan', 'photo', 'solusi'], 'string'],
            [['kd_penyakit'], 'string', 'max' => 4],
            [['nm_penyakit'], 'string', 'max' => 60],
            [['penyebab'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kd_penyakit' => 'Kd Penyakit',
            'nm_penyakit' => 'Nm Penyakit',
            'penyebab' => 'Penyebab',
            'keterangan' => 'Keterangan',
            'photo' => 'Photo',
            'solusi' => 'Solusi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRules()
    {
        return $this->hasMany(Rules::className(), ['kd_penyakit' => 'kd_penyakit']);
    }
}
