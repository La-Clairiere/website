<?php function getBiere($id) {
    $req = getDB()->prepare("SELECT * FROM biere WHERE ref_biere = :ref");
    $req->bindValue(":ref", $id, PDO::PARAM_INT);
    $res = $req->fetch();
    return $res;
}

function getCatalogue(array $filters = [], $detail = true) {
    $req_filters = '1';
    $binds = [];
    foreach($filters as $nom=> $valeur) {
        if(is_array($valeur)) {
            $req_filters .= ' AND '.$nom.' IN(';
            for($i = 0; $i < (count($valeur)-1); $i++) {
                $req_filters .= $valeur[$i].', ';
            }
            $last_key = count($valeur) - 1;
            $req_filters .= $valeur[$last_key];
            $req_filters .= ')';
        }
        else {
            $req_filters .= ' AND '.$nom.' = :'.$nom;
            $binds[$nom] = $valeur;
        }
    }
    if($detail) {
        $cols = '*';
    }
    else {
        $cols = 'ref_biere, nom, prix, couleur_hexa, couleur_texte, ingredients_titre';
    }
    $sql = 'SELECT '.$cols.' FROM biere WHERE '.$req_filters;
    $req_cata = getDB()->prepare($sql);
    foreach($binds as $nom=>$val) {
        $req_cata->bindValue(':'.$nom, $val);
    }
    $req_cata->execute();
    $cata_data = $req_cata->fetchAll();
    return $cata_data;
}