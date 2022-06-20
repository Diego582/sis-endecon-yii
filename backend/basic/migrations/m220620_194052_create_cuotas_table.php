<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%cuotas}}`.
 */
class m220620_194052_create_cuotas_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%cuotas}}', [
            'id' => $this->primaryKey(),
            'numero' => $this->integer(),
            'monto_capital' => $this->decimal(),
            'monto_interes' => $this->decimal(),
            'vencimiento' => $this->date(),
            'pagado' => $this->boolean(),
            'updated_at' => $this->timestamp(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%cuotas}}');
    }
}
