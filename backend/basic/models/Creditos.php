<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "creditos".
 *
 * @property int $id
 * @property string|null $linea
 * @property float|null $monto
 * @property string|null $detalle
 * @property string|null $fecha_entrega
 * @property int $expediente_id
 * @property string|null $updated_at
 *
 * @property Expedientes $expediente
 */
class Creditos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'creditos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['monto'], 'number'],
            [['detalle'], 'string'],
            [['fecha_entrega', 'updated_at'], 'safe'],
            [['expediente_id'], 'required'],
            [['expediente_id'], 'default', 'value' => null],
            [['expediente_id'], 'integer'],
            [['linea'], 'string', 'max' => 255],
            [['expediente_id'], 'exist', 'skipOnError' => true, 'targetClass' => Expedientes::className(), 'targetAttribute' => ['expediente_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'linea' => 'Linea',
            'monto' => 'Monto',
            'detalle' => 'Detalle',
            'fecha_entrega' => 'Fecha Entrega',
            'expediente_id' => 'Expediente ID',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[Expediente]].
     *
     * @return \yii\db\ActiveQuery|ExpedientesQuery
     */
    public function getExpediente()
    {
        return $this->hasOne(Expedientes::className(), ['id' => 'expediente_id']);
    }

    /**
     * {@inheritdoc}
     * @return CreditosQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CreditosQuery(get_called_class());
    }
}
