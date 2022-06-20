<?php

use Faker\Guesser\Name;
use yii\db\Migration;

/**
 * Handles the creation of table `{{%users}}`.
 */
class m220620_030807_create_usuarios_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%usuarios}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'email' => $this->string()->unique(),
            'email_verified_at' => $this->timestamp(),
            'password' => $this->string(),
            'profile_photo_path' => $this->string(2048),
        
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%usuarios}}');
    }
}
