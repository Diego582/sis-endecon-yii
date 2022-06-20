<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "expedientes".
 *
 * @property int $id
 * @property string|null $numero
 * @property string|null $letra
 * @property string|null $anio
 * @property string|null $objeto
 * @property string|null $extracto
 * @property bool|null $status
 * @property int $usuario_id
 * @property string|null $updated_at
 *
 * @property Creditos[] $creditos
 * @property Usuarios $usuario
 */
class Expedientes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'expedientes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['extracto'], 'string'],
            [['status'], 'boolean'],
            [['usuario_id'], 'required'],
            [['usuario_id'], 'default', 'value' => null],
            [['usuario_id'], 'integer'],
            [['updated_at'], 'safe'],
            [['numero', 'letra', 'anio', 'objeto'], 'string', 'max' => 255],
            [['usuario_id'], 'exist', 'skipOnError' => true, 'targetClass' => Usuarios::className(), 'targetAttribute' => ['usuario_id' => 'id']],
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
            'letra' => 'Letra',
            'anio' => 'Anio',
            'objeto' => 'Objeto',
            'extracto' => 'Extracto',
            'status' => 'Status',
            'usuario_id' => 'Usuario ID',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[Creditos]].
     *
     * @return \yii\db\ActiveQuery|CreditosQuery
     */
    public function getCreditos()
    {
        return $this->hasMany(Creditos::className(), ['expediente_id' => 'id']);
    }

    /**
     * Gets query for [[Usuario]].
     *
     * @return \yii\db\ActiveQuery|UsuariosQuery
     */
    public function getUsuario()
    {
        return $this->hasOne(Usuarios::className(), ['id' => 'usuario_id']);
    }

    /**
     * {@inheritdoc}
     * @return ExpedientesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ExpedientesQuery(get_called_class());
    }
}
