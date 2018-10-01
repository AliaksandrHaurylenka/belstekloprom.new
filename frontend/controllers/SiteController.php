<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use common\models\Bottle;
use common\models\Gallery;
use yii\web\UploadedFile;//прикрепление файлов


//use yii\data\Pagination;

/**
 * Site controller
 */
class SiteController extends AppController
{
  /**
   * @inheritdoc
   */
  public function behaviors()
  {
    return [
      'access' => [
        'class' => AccessControl::className(),
        'only' => ['logout', 'signup'],
        'rules' => [
          [
            'actions' => ['signup'],
            'allow' => true,
            'roles' => ['?'],
          ],
          [
            'actions' => ['logout'],
            'allow' => true,
            'roles' => ['@'],
          ],
        ],
      ],
      'verbs' => [
        'class' => VerbFilter::className(),
        'actions' => [
          'logout' => ['post'],
        ],
      ],
    ];
  }

  /**
   * @inheritdoc
   */
  public function actions()
  {
    return [
      'error' => [
        'class' => 'yii\web\ErrorAction',
      ],
      'captcha' => [
        //'class' => 'yii\captcha\CaptchaAction',
        'class' => 'common\captcha\NumericCaptcha',
        'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
      ],
	    //для мультиязычности сайта (где хранятся статические переведенные страницы)
	    'page' => [
		    'class' => \yii\web\ViewAction::className(),
		    'viewPrefix' => 'pages/' . \Yii::$app->language
	    ]
    ];
  }

  /**
   * Displays homepage.
   *
   * @return mixed
   */
  public function actionIndex()
  {
    $this->view->registerMetaTag([//вывод на страницах метатегов
      'name' => 'description', //имя метатега
      'content' => 'БелСтеклоПром - производство стеклянной тары. Используя только качественное сырье и современные технологии мы добиваемся высоких результатов!'//описание метатега
    ]);
    //модели находятся в папке common->models для того, чтобы к моделям был доступ и из backend
    $newBottle = Bottle::getNew();//связь с моделью Bottle и методом getNew для вывода новинок изделий
    $bottle = Bottle::getBottle();//связь с моделью Bottle и методом getBottle для вывода карусели изделий
    //$this->debug($newBottle);//вывод на печать
    return $this->render('index', compact('newBottle', 'bottle'));//возвратить index.php (главную страницу)
    //вывести массивы
  }


  /**
   * Displays bottle-vkp page.
   *
   * @return mixed
   */
  public function actionBottleVkp()
  {
    $this->view->registerMetaTag([
      'name' => 'description',
      'content' => 'Стеклянные бутылки с твистовым венчиком ВКП. ВКП - венчик комбинированный под укупорку винтовым колпачком'
    ]);

    return $this->render('bottle-vkp');
  }


  /**
   * Displays bottle-kpnv page.
   *
   * @return mixed
   */
  public function actionBottleKpnv()
  {
    $this->view->registerMetaTag([
      'name' => 'description',
      'content' => 'Стеклянные бутылки с высоким венчиком КПНв. КПНв (КП) - венчик высокий под кроненпробку'
    ]);

    return $this->render('bottle-kpnv');
  }


  /**
   * Displays bottle-kpnn page.
   *
   * @return mixed
   */
  public function actionBottleKpnn()
  {
    $this->view->registerMetaTag([
      'name' => 'description',
      'content' => 'Стеклянные бутылки с низким венчиком КПНн. КПНн - венчик низкий под кроненпробку'
    ]);

    return $this->render('bottle-kpnn');
  }


  /**
   * Displays bottle-other page.
   *
   * @return mixed
   */
  public function actionBottleOther()
  {
    $this->view->registerMetaTag([
      'name' => 'description',
      'content' => 'Стеклянные бутылки с венчиком К, П-29-А, П-29-Б для вин, Ш для шампанского, В-28-1 - гост твист водочный'
    ]);

    return $this->render('bottle-other');
  }


  /**
   * Displays bottle-other page.
   *
   * @return mixed
   */
  public function actionBottleArchive()
  {
    $this->view->registerMetaTag([
      'name' => 'description',
      'content' => 'Стеклянные бутылки более не востребованные в производстве'
    ]);

    return $this->render('bottle-archive');
  }


  /**
   * Displays gallery page.
   *
   * @return mixed
   */
  public function actionGallery()
  {
    $this->view->registerMetaTag([
      'name' => 'description',
      'content' => 'Производственное унитарное предприятие БелСтеклоПром осуществляет постоянный контроль соответствия сырья всем требованиям и стандартам.'
    ]);

    $gallery = Gallery::getGallery();
    return $this->render('gallery', compact('gallery'));
  }



  /**
   * Displays contact page.
   *
   * @return mixed
   */
  public function actionContact()
  {
    $this->view->registerMetaTag([
      'name' => 'description',
      'content' => 'На БелСтеклоПром работают высококвалифицированные специалисты
        во всех областях производственного цикла изготовления и продажи стеклянной тары.'
    ]);

    /**
     * функция ОБРАТНОЙ СВЯЗИ
     * 1. присваиваем переменной класс модели ContactForm
     * 2. если письмо отправлено методом post
     *      если заполнены все данные (см. метод sendEmail) письмо отправляется, выводится сообщение об успехе
     *          и перезагружается страница (return $this->refresh();)
     *      иначе выводится сообщение об неудаче
     */
    $model = new ContactForm();
    if ($model->load(Yii::$app->request->post())) {
	    $model->file_load = UploadedFile::getInstance($model, 'file_load');//загрузка файла
      if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
        Yii::$app->session->setFlash('success', Yii::t('common', 'Спасибо за Ваше письмо. Мы постараемся как можно быстрее Вам ответить!'));
        return $this->refresh();
      } else {
        Yii::$app->session->setFlash('error', Yii::t('common','Внимание! Ваше письмо по каким-то причинам не отправлено!!!'));
      }
    }
    return $this->render('contact', [
      'model' => $model,
    ]);
  }

  
  /**
   * Requests password reset.
   *
   * @return mixed
   */
  public function actionRequestPasswordReset()
  {
    $model = new PasswordResetRequestForm();
    if ($model->load(Yii::$app->request->post()) && $model->validate()) {
      if ($model->sendEmail()) {
        Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

        return $this->goHome();
      } else {
        Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
      }
    }

    return $this->render('requestPasswordResetToken', [
      'model' => $model,
    ]);
  }

  /**
   * Resets password.
   *
   * @param string $token
   * @return mixed
   * @throws BadRequestHttpException
   */
  public function actionResetPassword($token)
  {
    try {
      $model = new ResetPasswordForm($token);
    } catch (InvalidParamException $e) {
      throw new BadRequestHttpException($e->getMessage());
    }

    if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
      Yii::$app->session->setFlash('success', 'New password saved.');

      return $this->goHome();
    }

    return $this->render('resetPassword', [
      'model' => $model,
    ]);
  }
}
