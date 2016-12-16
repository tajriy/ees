<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rules".
 *
 * @property string $kd_rules
 * @property string $kd_penyakit
 * @property string $kd_gejala
 *
 * @property Penyakit $kdPenyakit
 * @property Gejala $kdGejala
 */
class Rules extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rules';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kd_rules', 'kd_penyakit', 'kd_gejala'], 'required'],
            [['kd_rules', 'kd_penyakit', 'kd_gejala'], 'string', 'max' => 4],
            [['kd_penyakit'], 'exist', 'skipOnError' => true, 'targetClass' => Penyakit::className(), 'targetAttribute' => ['kd_penyakit' => 'kd_penyakit']],
            [['kd_gejala'], 'exist', 'skipOnError' => true, 'targetClass' => Gejala::className(), 'targetAttribute' => ['kd_gejala' => 'kd_gejala']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kd_rules' => 'Kd Rules',
            'kd_penyakit' => 'Kd Penyakit',
            'kd_gejala' => 'Kd Gejala',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKdPenyakit()
    {
        return $this->hasOne(Penyakit::className(), ['kd_penyakit' => 'kd_penyakit']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKdGejala()
    {
        return $this->hasOne(Gejala::className(), ['kd_gejala' => 'kd_gejala']);
    }
}
