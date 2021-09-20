<?php

class GenreController extends Core\Controller
{


    public function genreAction($id = NULL)
    {
        $orm = new Core\ORM();
        $genres = $orm->readAll("genre");
        if ($id === NULL) {
            if ($genres) {
                $this->render("genre", ["genres" => $genres, "id" => $id]);
            } else {
                self::$_render = "Erreur de chargement des genres";
            }
        } else {
            $genre = new GenreModel(["id" => $id]);
            $res = $genre->read($genre->tableName, $id);
            $this->render("genre", ["genres" => $genres, "genre" => $res, "id" => $id]);
        }
    }
    public function addGenreAction()
    {
        $params = $this->request->getQueryParams();
        $genre = new GenreModel($params);
        if ($genre->id) {
            header('Location: http://localhost/pie/showGenre/' . $genre->id);
            // self::$_render = "Nouveau genre ajouté";
        }
    }

    public function modifyGenreAction($id)
    {
        $params = $this->request->getQueryParams();
        $genre = new GenreModel(["id" => $id]);
        $res = $genre->update($genre->tableName, $id, $params);
        if ($res) {
            header('Location: http://localhost/pie/showGenre/' . $genre->id);

        }
    }

    public function deleteGenreAction($id)
    {
        $genre = new GenreModel(["id" => $id]);
        $res = $genre->delete($genre->tableName, $id);
        if ($res) {
            header('Location: http://localhost/pie/showGenre/' . $genre->id);
        }
    }
}
