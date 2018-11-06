<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 02.11.2018
 * Time: 8:20
 */
namespace backend\components;

class Helpers
{
  function debug($arr)
  {//вывод на печать при отладке
    echo '<pre>' . print_r($arr, true) . '</pre>';
  }
}