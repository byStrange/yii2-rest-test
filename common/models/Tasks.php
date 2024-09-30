<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tasks".
 *
 * @property int $id
 * @property bool|null $done
 * @property string|null $title
 * @property string|null $description
 * @property string $uuid
 */
class Tasks extends \yii\db\ActiveRecord
{
  /**
   * {@inheritdoc}
   */
  public static function tableName()
  {
    return 'tasks';
  }

  /**
   * {@inheritdoc}
   */
  public function rules()
  {
    return [
      [['done'], 'boolean'],
      [['description'], 'string'],
      [['title'], 'string', 'max' => 255],
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function attributeLabels()
  {
    return [
      'id' => 'ID',
      'done' => 'Done',
      'title' => 'Title',
      'description' => 'Description',
    ];
  }
  public function fields()
  {
    return [
      'id' => 'uuid',
      'done',
      'description',
      'title'
    ];
  }
}
