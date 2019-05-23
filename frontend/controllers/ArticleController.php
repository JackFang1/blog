<?php 

namespace frontend\controllers;

use frontend\controllers\base\BaseController;
use frontend\models\ArticleForm;
/**
 * 文章类
 */
class ArticleController extends BaseController
{
	public function actionIndex(){
		return $this->render('index');
	}
	public function actionCreate(){
		$model = new ArticleForm();
		return $this->render('create',['model'=>$model]);
	}
	
}