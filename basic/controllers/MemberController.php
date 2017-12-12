<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\Member;

/**
* 
*/
class MemberController extends Controller
{
	public function init()
		{
			$this->enableCsrfValidation = false;
		}

	public function actionMain()
	{
		$member = Member::find()
	    ->where(['uid' => 0])
	    ->one();
	    return $this->render('main', ['user_name' => $member->birthday]);
	}
}