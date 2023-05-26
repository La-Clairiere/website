<?php
//Retourne toutes les bières du site ainsi que leur prix, leur nom, le nombre de bières en stock et la référence
function getAllBeers()
{
    $req = getDB()->query("SELECT nom, prix, etat_stock, ref_biere FROM biere");
    $res = $req->fetchAll(PDO::FETCH_ASSOC);
    return $res;
}

//Fait l'insertion de la commande de la BDD
function addOrder($qty, $name, $first_name, $address, $mail, $tel, $date, $status, $references, $price)
{
    $sql = "INSERT INTO `commande` ( `quantite`, `nom_client`, `prenom_client`, `adresse_client`, `mail_client`, `tel`, `date_commande`, `etat_commande`, `ref_biere`, `prix`) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $req = getDB()->prepare($sql);
    $res = $req->execute([$qty, $name, $first_name, $address, $mail, $tel, $date, $status, $references, $price]);
    return $res;
}