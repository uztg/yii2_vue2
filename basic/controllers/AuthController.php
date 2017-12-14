<?php
/**
 * Created by PhpStorm.
 * User: LinWu
 * Date: 2017/4/8
 * Time: 9:46
 */
namespace app\controllers;

class AuthController extends BaseAPIController
{
    public function actionIndex()
    {
        $username = \Yii::$app->request->post('name');
        $password = \Yii::$app->request->post('password');
        if($username == "admin" && $password == "admin")
        {
            return ['success'=>1,'msg'=>'100-token'];
        }
        return ['success'=>0,'msg'=>\Yii::t('erp','Username or password error')];
    }
}

