<?php
/**
 * Created by PhpStorm.
 * User: cuijian
 * Date: 2016/8/13
 * Time: 23:44
 * 表单验证
 */

namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model {
    public $name;
    public $email;

    //验证规则
    public function rules()
    {
        return [
            [['name', 'email'], 'required'],    //name和email的值必须存在
            ['email', 'email']     //email的值必须符合邮件验证规则
        ];
    }
}