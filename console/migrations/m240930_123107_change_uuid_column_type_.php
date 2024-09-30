<?php

use yii\db\Migration;

/**
 * Class m240930_123107_change_uuid_column_type_
 */
class m240930_123107_change_uuid_column_type_ extends Migration
{
  /**
   * {@inheritdoc}
   */
  public function safeUp()
  {

    $this->dropColumn('tasks', 'uuid');
    $this->addColumn('tasks', 'uuid', 'uuid');
    $this->createIndex('idx-uuid', 'tasks', 'uuid', true);
  }

  /**
   * {@inheritdoc}
   */
  public function safeDown()
  {
    echo "m240930_123107_change_uuid_column_type_ cannot be reverted.\n";

    return false;
  }

  /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240930_123107_change_uuid_column_type_ cannot be reverted.\n";

        return false;
    }
    */
}
