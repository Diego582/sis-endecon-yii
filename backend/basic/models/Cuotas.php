<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cuotas".
 *
 * @property int $id
 * @property int|null $numero
 * @property float|null $monto_capital
 * @property float|null $monto_interes
 * @property string|null $vencimiento
 * @property bool|null $pagado
 * @property string|null $updated_at
 */
class Cuotas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cuotas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['numero'], 'default', 'value' => null],
            [['numero'], 'integer'],
            [['monto_capital', 'monto_interes'], 'number'],
            [['vencimiento', 'updated_at'], 'safe'],
            [['pagado'], 'boolean'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'numero' => 'Numero',
            'monto_capital' => 'Monto Capital',
            'monto_interes' => 'Monto Interes',
            'vencimiento' => 'Vencimiento',
            'pagado' => 'Pagado',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * {@inheritdoc}
     * @return CuotasQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CuotasQuery(get_called_class());
    }
}
