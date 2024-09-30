<?php

namespace backend\controllers;

use yii\rest\ActiveController;


class TaskRestController extends ActiveController
{
  public $modelClass = 'common\models\Tasks';
}
