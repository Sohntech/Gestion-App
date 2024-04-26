<?php
    include '../data/file.csv.php';
    function getPromotion(){
        $promotions = [];
        $data = readCSVFile("promotion.csv");
        foreach($data as $entry){
           
            $promotion=[
                "id" => $entry[0],
                "libelle" => $entry[1],
                "date_debut" => $entry[2],
                "date_fin" => $entry[3],
                "state" => $entry[4]
            ];
            $promotions[] = $promotion;
        }

        return $promotions;
    }
   

    function enablePromotion($id){
        // Récupérer la liste des promotions
        $promotions = getPromotion();
        $updatedPromotion = [];

        // Parcourir chaque promotion pour mettre à jour l'état
        foreach ($promotions as $promotion) {
            // Si l'ID de la promotion correspond à celui passé en paramètre
            if ($promotion['id'] == $id) {
                // Mettre à jour l'état de la promotion à true
                $promotion['state'] = 1;
            } else {
                // Mettre à jour l'état de toutes les autres promotions à false
                $promotion['state'] = 0;
            }
            $updatedPromotion[] = $promotion;
        }

        
        updatePromotionFile($updatedPromotion);
       
        return $updatedPromotion;
    }

    function updatePromotionFile($promotions){
        writeCSVFile("promotion.csv", $promotions);
    }
?>