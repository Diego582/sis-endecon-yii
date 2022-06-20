<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%beneficiarios}}`.
 */
class m220620_191219_create_beneficiarios_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%beneficiarios}}', [
            'id' => $this->primaryKey(),
            'dni' => $this->string(8)->unique(),
            'name' => $this->string(50),
            'apellido' => $this->string(50),
            'cuil' => $this->string(11),
            'updated_at'=>$this->timestamp(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%beneficiarios}}');
    }
}
