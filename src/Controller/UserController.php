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
            header('Location: http://localhost/pie/login');
        }
    }

    public function loginPageAction()
    {
        $this->render("login");
    }

    public function loginAction()
    {
        $params = $this->request->getQueryParams();
        $orm = new Core\ORM();
        $res = $orm->find("fiche_personne", [
            "WHERE password = " => $params['password'],
            "AND email = " => $params["email"]
        ]);

        if ($res) {
            header('Location: http://localhost/pie/profile/' . $res["id_fiche_personne"]);
        } else {
            $this->render("login", ["success" => false]);
        }
    }

    public function profileAction($id)
    {
        $user = new UserModel(["id" => $id]); 
        $this->render("profile", ["data" => $user]); 
    }
}
