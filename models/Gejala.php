<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gejala".
 *
 * @property string $kd_gejala
 * @property string $nm_gejala
 *
 * @property Rules[] $rules
 */
class Gejala extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gejala';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kd_gejala'], 'required'],
            [['kd_gejala'], 'string', 'max' => 4],
            [['nm_gejala'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kd_gejala' => 'Kd Gejala',
            'nm_gejala' => 'Nm Gejala',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRules()
    {
        return $this->hasMany(Rules::className(), ['kd_gejala' => 'kd_gejala']);
    }
}
