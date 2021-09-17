<?php

class AppController extends Core\Controller
{
    public function indexAction()
    {
        $films = [];
        $i = 1;
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
