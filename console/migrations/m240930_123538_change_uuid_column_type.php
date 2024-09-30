<?php

use yii\db\Migration;

/**
 * Class m240930_123538_change_uuid_column_type
 */
class m240930_123538_change_uuid_column_type extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

      $this->dropColumn('tasks', 'uuid',);
      $this->addColumn('tasks', 'uuid', 'uuid DEFAULT gen_random_uuid()');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240930_123538_change_uuid_column_type cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240930_123538_change_uuid_column_type cannot be reverted.\n";

        return false;
    }
    */
}
