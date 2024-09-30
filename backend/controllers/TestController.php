<?php

namespace backend\controllers;

use yii\rest\Controller;

class TestController extends Controller
{
  public function actionIndex()
  {

    \Yii::info('what the hell is going on');
    return [
      'status' => 'ok',
      'somethingElse' => [
        'what' => 'is',
        'this' => 'thing?'
      ]
    ];
  }
  protected function afterIndex()
  {
    \Yii::info('after index');
  }
}
