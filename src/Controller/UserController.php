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

    public function deleteAction($id)
    {
        $user = new UserModel(["id" => $id]);
        $res = $user->delete($user->tableName, $id);
        if ($res) {
            self::$_render = "Votre compte a bien été supprimé";
        } else {
            self::$_render = "Erreur lors de la suppression du compte";
        }
    }

    public function modifyAction($id)
    {
        $params = $this->request->getQueryParams();
        $user = new UserModel(["id" => $id]);
        $res = $user->update($user->tableName, $id, $params);
        if ($res) {
            self::$_render = "Informations mises à jour";
            header("Location: http://localhost/pie/profile/" . $user->id); 
        } else {
            self::$_render = "Echec de la modification";
        }
    }

    public function modifyPageAction($id)
    {
        $user = new UserModel(["id" => $id]);
        $this->render("modify", ["data" => $user]);
    }

   
}
