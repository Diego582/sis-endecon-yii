<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "beneficiarios".
 *
 * @property int $id
 * @property string|null $dni
 * @property string|null $name
 * @property string|null $apellido
 * @property string|null $cuil
 * @property string|null $updated_at
 */
class Beneficiarios extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'beneficiarios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['updated_at'], 'safe'],
            [['dni'], 'string', 'max' => 8],
            [['name', 'apellido'], 'string', 'max' => 50],
            [['cuil'], 'string', 'max' => 11],
            [['dni'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'dni' => 'Dni',
            'name' => 'Name',
            'apellido' => 'Apellido',
            'cuil' => 'Cuil',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * {@inheritdoc}
     * @return BeneficiariosQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new BeneficiariosQuery(get_called_class());
    }
}
