<?php

class AppController extends Core\Controller
{
    public function indexAction()
    {
        $orm = new Core\ORM();
        $films = $orm->readAll("film", ["has one" => "genre"]);
        if($films){
            $this->render("index", ["films" => $films]);
        }
        else{
            self::$_render = "Erreur de chargement des films"; 
        }
    }
}
