<?php
/**
 * User: TheCodeholic
 * Date: 12/12/2020
 * Time: 7:04 PM
 */

namespace frontend\base;


use common\models\CartItem;


class Controller extends \yii\web\Controller
{
    public function beforeAction($action)
    {

        // $this->view->params['cartItemCount'] = CartItem::getTotalQuantityForUser(currUserId());
        // return parent::beforeAction($action);
    }
}