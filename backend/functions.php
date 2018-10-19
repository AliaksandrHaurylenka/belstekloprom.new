<?php
/**
 * файл function.php используется для подключения пользовательских функций
 * доступ к файлу в проекте подключается:
 * frontend->web->index.php и перед последней строкой вставить require(__DIR__ . '/../functions.php');
 */

function debug($arr)
{//вывод на печать при отладке
  echo '<pre>' . print_r($arr, true) . '</pre>';
}


