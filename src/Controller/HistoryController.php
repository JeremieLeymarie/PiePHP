<?php

class HistoryController extends Core\Controller
{
    public function addHistoryAction($id)
    {
        $params = $this->request->getQueryParams();
        $orm = new Core\ORM();
        $temp = $orm->find("film", ["WHERE titre = " => $params["titre"]]);
        if ($temp) {
            $history = new HistoryModel([
                "id_film" => $temp["id_film"],
                 "id_membre" => $params["id_membre"], 
                 "date" => date("Y-m-d h:i:s")
                ]);
            if($history->id){
                header("Location: http://localhost/pie/profile/" . $id);
            }
        } else {
            self::$_render = "Film non trouvé";
        }
    }

    public function deleteHistoryAction($id){
        $params = explode(".", $id); 
        $orm = new Core\ORM(); 
        $idHistory = $orm->find("historique_membre", ["WHERE id_membre =" => $params[1], "AND id_film =" => $params[0]])["id_historique_membre"]; 
        $orm->delete("historique_membre", $idHistory); 
        header("Location: http://localhost/pie/profile/" . $params[2]);
    }
}
