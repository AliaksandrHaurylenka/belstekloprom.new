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

function getContentNews($string){
  $string = substr($string, 0, 100);
  $string = rtrim($string, "!,.-");
  $string = substr($string, 0, strrpos($string, ' '));
  return $string.'...';
}

function getImgGallery($dir){
  $img = array_slice(scandir($dir), 2);
  return $img;
}

