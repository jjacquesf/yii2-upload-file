<?php

use yii\db\Migration;

/**
 * Class m201012_121824_alter_type_column_on_upload_table
 */
class m201012_121824_alter_type_column_on_upload_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('{{%uploaded_file}}', 'type', $this->string(128));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn('{{%uploaded_file}}', 'type', $this->string(64));
    }
}
