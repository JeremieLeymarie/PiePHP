<?php

class AppController extends Core\Controller
{
    public function indexAction()
    {
        $params = $this->request->getQueryParams();
        $orm = new Core\ORM();
        $res = [];
        if (count($params) > 0) {
            $res["films"] = $orm->find("film", ["WHERE titre LIKE" => $params["search"] . "%"]);
            $res["users"] = $orm->find("fiche_personne", ["WHERE prenom LIKE" => $params["search"] . "%", "OR nom LIKE" => $params["search"] . "%"]);
        } else {
            $res = $orm->readAll("film", ["has one" => "genre"]);
        }
        // echo "<pre>";
        // var_dump($res["users"]); 
        // echo "</pre>";
        if ($res) {
            $this->render("index", ["films" => $res]);
        } else {
            self::$_render = "Erreur de chargement des films";
        }
    }
}
