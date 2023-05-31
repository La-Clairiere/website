<?php
function getEquipe() {
    $sql = 'SELECT * FROM equipe WHERE role = "mmi" ';
    $req = getDB()->query($sql);
    $res_mmi = $req->fetchAll();
    $sql = 'SELECT * FROM equipe WHERE role = "gb" ';
    $req = getDB()->query($sql);
    $res_gb = $req->fetchAll();
    $trombi = [
        'mmi'=>$res_mmi,
        'gb'=>$res_gb
    ];
    return $trombi;
}