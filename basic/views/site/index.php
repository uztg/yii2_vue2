<?php

/* @var $this yii\web\View */

$this->title = 'My blog';
?>

<div class="htmleaf-container">
        <div class="signin">
            <div class="signin-head"><img src="http://basic.backend.local/images/test/head_120.png" alt="" class="img-circle"></div>
            <form class="form-signin" action="index.php/user/main" role="form" method="get">
                <input type="text" class="form-control"  name="user_name" placeholder="用户名" required autofocus />
                <input type="password" class="form-control" name="password" placeholder="密码" required />
                <button class="btn btn-lg btn-warning btn-block" type="submit">登录</button>
                <label class="checkbox">
                    <input type="checkbox" value="remember-me"> 记住我
                </label>
            </form>
        </div>
</div>


    

