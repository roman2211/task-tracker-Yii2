<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 26.05.2018
 * Time: 11:29
 */

namespace frontend\controllers;
use yii\web\Controller;


class TelegramController extends Controller
{
    public function actionIndex()
    {
        $bot = \Yii::$app->bot;
        $data = "";
        try {
            $updates = Yii::$app->bot->getUpdates();
            foreach ($updates as $update) {
                $user_id = $update->getMessage()->getFrom()->getID();
                Yii::$app->bot->sendMessage($user_id, 'Index action was
requested!');
            }
        } catch (Exception $e) {
            $data = $e->getMessage();
        }
        return $this->render('index', ['data' => $data]);
    }
}

