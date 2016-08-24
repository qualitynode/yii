<?php
namespace app\controllers;  //创建控制器必须使用的这个命名空间

use Yii;        //引用全局的Yii
use yii\web\Controller;     //控制器父类
use yii\web\Cookie;     //cookie类

class HelloController extends Controller {

    public function actionIndex() {

//        echo 'hello world';
//        $request = Yii::$app->request;     //请求组件
//        echo $request->get('id', 'second_value');   //get方法获取id，假如id不存在，就返回'second_value'
//        echo $request->userIp;  //获取用户ip

//        $res = Yii::$app->response;      //响应组件
//        $res->statusCode = 200;     //设置响应的状态码
//        $res->headers->add('pragma', 'no-cache');   //增加一个pragma头部，已经存在的不会被覆盖
//        $res->headers->set('pragma', 'no-cache');   //增加一个pragma头部，任何已存在的pragma头部都会被抛弃
//        print_r($res->headers->remove('pragma'));   //删除pragma头部，并以数组的方式返回删除的头部值

//        $res->redirect('http://www.baidu.com');     //跳转
//        $this->redirect('http://www.baidu.com');  //跳转

//        $res->headers->add('content-disposition', 'attachment; filename="hello.p"');    //文件下载
//        $res->sendFile('./favicon.ico');    //文件下载

//        $session = Yii::$app->session;     //session组件
//        if (!$session->isActive) {
//            $session->open();           //如果session没有开启，则开启session
//        }
//        $session->set('user', 'cuijian');       //添加一个session，$session['user]='cuijian'也可以设置
//        echo $session->get('user');     //获取session的值，$session['user']也可以获取
//        $session->remove('user');   //删除session数据值，可以使用unset($session['user'])来删除session数据


//        $cookies = Yii::$app->response->cookies;       //响应组件中的cookie组件
//        $cookie_data = array('name' => 'user', 'value' => 'cuijian');   //cookie数据数组
//        $cookies->add(new Cookie($cookie_data));        //添加cookie到浏览器，修改也可以用这个方法
//        $cookies->remove('user');         //删除cookie

//        $cookies = Yii::$app->request->cookies;     //请求组件中的cookie组件
//        echo $cookies->getValue('user', 'cuiyi');   //获取ID为’user‘的cookie值，如果不存在，则默认使用'cuiyi'

//        return $this->render('index');      //渲染视图

        $data = array();
        $data['name'] = 'cuijian<script>alert(3);</script>';
        return $this->render('index', $data);       //通过数组的方式传值到视图





    }
}