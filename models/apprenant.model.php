
<?php


    include "../data/file.csv.php";
    function getApprenant(){
        $apprenants = [];
        $data =  readCSVFile("apprenant.csv");
       
        $activePromo = $_SESSION["activeSession"];

        
        foreach($data as $entry){

            $apprenant = [
                "nom" => $entry[0],
                "prenom" => $entry[1],
                "email" => $entry[2],
                "password" => $entry[3],
                "genre" => $entry[4],
                "telephone" => $entry[5],
                "promotion" => $entry[6],
                "role" => $entry[7]

            ];
            if($apprenant['promotion'] == $activePromo){
                $apprenants[] = $apprenant;
            }
        }
        return $apprenants;
    }

    function getAllApprenants(){
        $data = readCSVFile("apprenant.csv");
        $apps = [];
        $entry = [];

        foreach($data as $entry){
            
            $app = [
                "nom" => $entry[0],
                "prenom" => $entry[1],
                "email" => $entry[2],
                "password" => $entry[3],
                "genre" => $entry[4],
                "telephone" => $entry[5],
                "promotion" => $entry[6],
                "role" => $entry[7],
            ];
            $apps [] = $app;
        }
        return $apps;
    }

    function checkCredentials($email, $password){
        $apprenants = getAllApprenants();
        global $userInfo; // Accès à la variable globale (fonctionnement incompris à rechercher)
        foreach($apprenants as $app){
            if($app["email"] === trim($email) && $app["password"] === trim($password)){
                $userInfo["nom"] = $app["nom"];
                $userInfo["prenom"] = $app["prenom"];
                $userInfo["email"] = $app["email"];
                $userInfo["role"] = $app["role"];
                $userInfo["promotion"] = $app["promotion"];
                return true;
            }
        }
        return false;
    }
 ?>
