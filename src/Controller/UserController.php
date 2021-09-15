<?php


class UserController extends Core\Controller
{

    public function addAction()
    {
        $this->render("register");
    }

    public function registerAction()
    {
        $params = $this->request->getQueryParams();
        $user = new UserModel($params);
        if ($user->id) {
            self::$_render = "Votre compte a été crée. " . PHP_EOL;
        }
    }
}
