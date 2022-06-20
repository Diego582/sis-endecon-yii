<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuarios".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $email
 * @property string|null $email_verified_at
 * @property string|null $password
 * @property string|null $profile_photo_path
 *
 * @property Expedientes[] $expedientes
 */
class Usuarios extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuarios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['email_verified_at'], 'safe'],
            [['name', 'email', 'password'], 'string', 'max' => 255],
            [['profile_photo_path'], 'string', 'max' => 2048],
            [['email'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'email_verified_at' => 'Email Verified At',
            'password' => 'Password',
            'profile_photo_path' => 'Profile Photo Path',
        ];
    }

    /**
     * Gets query for [[Expedientes]].
     *
     * @return \yii\db\ActiveQuery|ExpedientesQuery
     */
    public function getExpedientes()
    {
        return $this->hasMany(Expedientes::className(), ['usuario_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return UsuariosQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UsuariosQuery(get_called_class());
    }
}
