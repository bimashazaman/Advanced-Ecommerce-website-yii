<?php

namespace common\models;

use yii\base\InvalidArgumentException;
use yii\base\Model;
use Yii;
use common\models\User;


class ResetPasswordForm extends Model
{
    public $password;

  
    protected $_user;

   
    public function __construct($token, $config = [])
    {
        if (empty($token) || !is_string($token)) {
            throw new InvalidArgumentException('Password reset token cannot be blank.');
        }

        $this->_user = $this->findUser($token);

        if (!$this->_user) {
            throw new InvalidArgumentException('Wrong password reset token.');
        }
        parent::__construct($config);
    }

   
    public function rules()
    {
        return [
            ['password', 'required'],
            ['password', 'string', 'min' => Yii::$app->params['user.passwordMinLength']],
        ];
    }

   
    public function resetPassword()
    {
        $user = $this->_user;
        $user->setPassword($this->password);
        $user->removePasswordResetToken();

        return $user->save(false);
    }

    protected function findUser($token)
    {
        return User::findByPasswordResetToken($token);
    }
}
