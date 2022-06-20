<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%cuentas}}`.
 */
class m220620_194113_create_cuentas_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%cuentas}}', [
            'id' => $this->primaryKey(),
            'banco' => $this->string(50),
            'cbu' => $this->string(22),
            'alias' => $this->string(50),
            'updated_at' => $this->timestamp(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%cuentas}}');
    }
}
