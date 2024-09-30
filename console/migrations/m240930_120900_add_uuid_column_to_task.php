<?php

use yii\db\Migration;

/**
 * Class m240930_120900_add_uuid_column_to_task
 */
class m240930_120900_add_uuid_column_to_task extends Migration
{
  /**
   * {@inheritdoc}
   */
  public function safeUp()
  {

    $this->execute('DELETE from tasks;');
    $this->addColumn('{{%tasks}}', 'uuid', $this->string('36')->notNull()->unique());
    $this->createIndex('idx-uuid', '{{%tasks}}', 'uuid');
  }

  /**
   * {@inheritdoc}
   */
  public function safeDown()
  {
    echo "m240930_120900_add_uuid_column_to_task cannot be reverted.\n";
    $this->dropColumn("{{%tasks}}", 'uuid');

    return true;
  }

  /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240930_120900_add_uuid_column_to_task cannot be reverted.\n";

        return false;
    }
    */
}
