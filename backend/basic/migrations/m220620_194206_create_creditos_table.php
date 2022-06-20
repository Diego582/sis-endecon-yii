<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%creditos}}`.
 */
class m220620_194206_create_creditos_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%creditos}}', [
            'id' => $this->primaryKey(),
            'linea' => $this->string(),
            'monto' => $this->decimal(),
            'detalle' => $this->text(),
            'fecha_entrega' => $this->date(),
            'expediente_id' => $this->integer()->notNull(),
            'updated_at' => $this->timestamp(),
        ]);

        $this->addForeignKey(
            'fk-creditos-expediente_id',
            'creditos',
            'expediente_id',
            'expedientes',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%creditos}}');
    }
}
