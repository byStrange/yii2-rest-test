<?php

use yii\db\Migration;

/**
 * Class m240930_104052_add_new_task_table
 */
class m240930_104052_add_new_task_table extends Migration
{
  /**
   * {@inheritdoc}
   */
  public function safeUp()
  {
    $this->createTable('{{%tasks}}', [
      'id' => $this->primaryKey(),
      'done' => $this->boolean()->defaultValue(false),
      'title' => $this->string(255),
      'description' => $this->text()
    ]);
  }

  /**
   * {@inheritdoc}
   */
  public function safeDown()
  {
    $this->dropTable('{{%tasks}}');

    return true;
  }

  /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240930_104052_add_new_task_table cannot be reverted.\n";

        return false;
    }
    */
}
