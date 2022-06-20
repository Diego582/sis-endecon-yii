<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%expedientes}}`.
 */
class m220620_194131_create_expedientes_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%expedientes}}', [
            'id' => $this->primaryKey(),
            'numero' => $this->string(),
            'letra' => $this->string(),
            'anio' => $this->string(),
            'objeto' => $this->string(255),
            'extracto' => $this->text(1000),
            'status' => $this->boolean(),
            'usuario_id' => $this->integer()->notNull(),
            'updated_at' => $this->timestamp(),
        ]);

        $this->addForeignKey(
            'fk-expedientes-usuario_id',
            'expedientes',
            'usuario_id',
            'usuarios',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%expedientes}}');
    }
}
