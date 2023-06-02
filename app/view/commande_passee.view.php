
<?php
//Page affichée lors de la validation du formulaire de commande
if ($res) {
    echo ("<h1> Félicitations votre commande est envoyée!</h1>");
      foreach ($_POST["beersQuantity"] as $key => $value) {
        $stockUpdate = changeBeerStock($key, $value);
    } 
?>

    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Adresse</th>
                <th>Mail</th>
                <th>Téléphone</th>
                <th>Date de commande</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo ($_POST["nom"]) ?></td>
                <td><?php echo ($_POST["prenom"]) ?></td>
                <td><?php echo ($_POST["adresse"]) ?></td>
                <td><?php echo ($_POST["mail"]) ?></td>
                <td><?php echo ($_POST["tel"]) ?></td>
                <td><?php echo ($date) ?></td>
                <td><?php echo ($total) ?>€</td>
            </tr>
        </tbody>
    </table>
<?php
} else {
    echo ("Il semble y avoir eu une erreur, merci de contacter <a href='contact.php'>notre support client</a>");
}
