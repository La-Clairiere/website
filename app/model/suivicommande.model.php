<?php //Suivi commande
function getCommandes() {
    $sql = 'SELECT * FROM commande';
    $req = getDB()->prepare($sql);
    $req->execute();
    $res = $req->fetchAll();
    return $res;
}

function getNomsBieres() {
    $sql = 'SELECT ref_biere, nom FROM biere';
    $req = getDB()->prepare($sql);
    $req->execute();
    $res = $req->fetchAll();
    $noms_bieres = [];
    for($i = 0; $i < count($res); $i++) {
        $id = $res[$i]['ref_biere'];
        $nom = $res[$i]['nom'];
        $noms_bieres[$id] = $nom; 
    }
    return $noms_bieres;
}