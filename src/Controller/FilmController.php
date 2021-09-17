<?php

class FilmController extends Core\Controller
{

    public function indexAction()
    {
        $i = 0;
        $films = [];
        while (true) {
            $film = new FilmModel(["id" => $i]);
            $res = $film->read($film->tableName, $i, $film->getRelations());
            if ($res) {
                array_push($films, $res);
            } else {
                break;
            }
            $i++;
        }

        $this->render("index", ["films" => $films]);
    }

    public function filmAction($id)
    {
        $film = new FilmModel(["id" => $id]);
        $res = $film->read($film->tableName, $id, $film->getRelations());
        $this->render("film", ["film" => $res]);
    }

    public function addFilmAction()
    {
        $params = $this->request->getQueryParams();
        $film = new FilmModel($params);
        if ($film->id) {
            self::$_render = "Film ajouté à la base de données";
        }
    }

    public function searchFilmAction()
    {
        $params = $this->request->getQueryParams();
        $orm = new Core\ORM();
        $res = $orm->find("film", ["WHERE titre = " => $params["titre"]]);
        if ($res) {
            $this->render("admin", ["film" => $res]);
        } else {
            self::$_render = "Aucun film de ce nom trouvé";
        }
    }

    public function modifyFilmAction($id)
    {
        $params = $this->request->getQueryParams();
        $film = new FilmModel(["id" =>$id]);
        $res = $film->update($film->tableName, $id, $params);
        if($res){
            self::$_render = "Film modifié";
        }
    }
    public function deleteFilmAction($id)
    {
        $film = new FilmModel(["id" =>$id]);
        $res = $film->delete($film->tableName, $id);
        if($res){
            self::$_render = "Film supprimé"; 
        }
    }
    public function adminAction()
    {
        $this->render("admin");
    }
}
