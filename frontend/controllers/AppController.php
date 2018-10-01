<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 14.03.2016
 * Time: 21:15
 */

namespace frontend\controllers;

use yii\web\Controller;

class AppController extends Controller{

    public function debug($arr){
        echo '<pre style="font: 1.05rem Arial, sans-serif;">' . print_r($arr, true) . '</pre>';
    }

}

function debug($arr){
    echo '<pre style="font: 1.05rem Arial, sans-serif;">' . print_r($arr, true) . '</pre>';
}