<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cuentas".
 *
 * @property int $id
 * @property string|null $banco
 * @property string|null $cbu
 * @property string|null $alias
 * @property string|null $updated_at
 */
class Cuentas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cuentas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['updated_at'], 'safe'],
            [['banco', 'alias'], 'string', 'max' => 50],
            [['cbu'], 'string', 'max' => 22],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'banco' => 'Banco',
            'cbu' => 'Cbu',
            'alias' => 'Alias',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * {@inheritdoc}
     * @return CuentasQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CuentasQuery(get_called_class());
    }
}
