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
}
