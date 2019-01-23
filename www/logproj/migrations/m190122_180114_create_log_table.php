<?php

use yii\db\Migration;

/**
 * Handles the creation of table `log`.
 */
class m190122_180114_create_log_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('log', [
            'id' => $this->primaryKey(),
            'ts' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
            'type' => $this->tinyInteger(2)->notNull(),
            'message' => $this->text(),
        ], 'ENGINE=MyISAM');

        $this->createIndex('idx_type', 'log', 'type');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropIndex('idx_type', 'log');
        $this->dropTable('log');
    }
}
