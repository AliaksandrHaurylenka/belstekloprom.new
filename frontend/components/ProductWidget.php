<?php

namespace frontend\components;

use Yii;
use common\models\Bottle;
use common\models\Venchik;
use yii\base\Widget;
use yii\data\Pagination;


class ProductWidget extends Widget
{

	public $venchik_en;//для связи с таблицей изделий
	public $ven_en;//для связи с таблицей венчиков
	public $status;//статус изделий


	public function init()
	{
		parent::init();
		ob_start();

	}


	public function run()
	{
		ob_get_clean();

		//Без архива изделий
		/*$menuBottle = Bottle::getMenuBottle($this->venchik_en);
		$menuVenchik = Venchik::getMenuVenchik($this->ven_en);
		return $this->render('product', compact('menuVenchik', 'menuBottle'));*/

		//С архивом изделий
		$menuBottle = Bottle::getMenuBottle($this->venchik_en, $this->status);
		$menuVenchik = Venchik::getMenuVenchik($this->ven_en);
		return $this->render('product', compact('menuVenchik', 'menuBottle'));



		//PAGINATION Pjax
		//$ven_en = $this->ven_en;//определяет переменную на странице
		//return $this->render('product-pjax', compact('ven_en'));


	}

} 