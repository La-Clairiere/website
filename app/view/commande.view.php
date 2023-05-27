<link rel="stylesheet" href="public/css/commande.css">

<div class="page-content">
    <h1>Formulaire de commande</h1>

    <form method="POST" action='commande_passee.php' class="form">
        <fieldset id="commandeForm">
            <legend>Informations personnelles</legend>
            <label>Nom :</label> <input type="text" name="nom" required />
            <label>Prénom :</label> <input type="text" name="prenom" required />
            <label>Adresse mail :</label> <input type="email" name="mail" required />
            <label>Adresse : </label><input type="text" name="adresse" required />
            <label>Télephone :</label> <input type="tel" pattern="[0-9]{10}" name="tel" required></textarea>
        </fieldset>
        <fieldset>
            <legend>Commande de bières</legend>
            <table>
                <thead>
                    <tr>
                        <th>Nom de la bière</th>
                        <th>Prix</th>
                        <th>Quantité</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    //Affichage des champs pour chaque bières
                    foreach ($all_beers as $beer) {
                        echo ("<tr>");
                        echo ('<td>' . $beer["nom"] . '</td>');
                        echo ('<td>' . $beer["prix"] . '€</td>');
                        echo ("<td>");
                        //Empeche la commande en cas de rupture de stock
                        if ($beer["etat_stock"] < 1) {
                            echo ("Rupture de stock");
                        } else {
                            echo ('<input type="number" name="beersQuantity[' . $beer["ref_biere"] . ']" min ="0" max="' . $beer["etat_stock"] . '"/>');
                            //Ajout d'un champ caché avec le prix de la bière associée à la référence
                            echo ('<input hidden name="beersPrice[' . $beer["ref_biere"] . ']" value="' . $beer["prix"] . '"/>');
                        }
                        echo ("</td>");
                        echo ("</tr>");
                    }
                    ?>
                </tbody>
            </table>
        </fieldset>
        <button type="submit" name="envoyer">Envoyer</button>
    </form>
</div> 

