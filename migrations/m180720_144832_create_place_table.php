<?php

use yii\db\Migration;

/**
 * Handles the creation of table `place`.
 */
class m180720_144832_create_place_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('place', [
            'id'           => $this->primaryKey()->unsigned(),
            'place_id'     => $this->string(45)->notNull(),
            'lat'          => $this->string(45)->notNull(),
            'lng'          => $this->string(45)->notNull(),
            'contry_code'  => $this->string(2)->notNull(),
            'is_country'   => $this->boolean()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('place');
    }
}
