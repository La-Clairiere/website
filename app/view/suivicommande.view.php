<php!

$query = "SELECT etat_commande FROM commande.php WHERE ref_commande = '$refcommande'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $etatcommande = $row['etat_commande'];
        echo "Le statut de la commande $refcommande est : $refcommande";
    } else {
        echo "Aucune commande trouvée avec le numéro $refcommande";
    }  
}

//////
<table>
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