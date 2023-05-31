<div class="page-content">
    <h1>Liste des commandes</h1>
    <?php if(isset($_SESSION['logged'])):?>
    <table cellpadding='5' class="border-table">
        <thead>
            <th>Ref. commande</th>
            <th>Nom client</th>
            <th>Prénom client</th>
            <th>Adresse</th>
            <th>Mail</th>
            <th>Téléphone</th>
            <th>Date de comm</th>
            <th>Bière</th>
            <th>Quantité</th>
            <th>Prix total</th>
            <th>État de commande</th>
        </thead>
        <tbody>
            <?php foreach($commandes as $cmd): ?>
            <tr>
                <td><?=$cmd['ref_commande']?></td>
                <td><?=$cmd['nom_client']?></td>
                <td><?=$cmd['prenom_client']?></td>
                <td><?=$cmd['adresse_client']?></td>
                <td><?=$cmd['mail_client']?></td>
                <td><?=$cmd['tel']?></td>
                <td><?=$cmd['date_commande']?></td>
                <td><?=$noms_bieres[$cmd['ref_biere']]?></td>
                <td><?=$cmd['quantite']?></td>
                <td><?=$cmd['prix']?></td>
                <td><?=$cmd['etat_commande']?></td>
            </tr>
            <?php endforeach ?>
            <?php if(empty($commandes)):?>
                <tr><td colspan="100%">Aucune commande trouvée...</td></tr>
            <?php endif?>
        </tbody>
    </table>
    <?php else: ?>
        <form action="" method="POST">
            <?php if(isset($login_error) && ($login_error == true)):?>
                <p>Mot de passe incorrect !</p>
            <?php endif ?>
            <label for="login">Code de connexion :</label>
            <input type="password" name="login" id="login"/>
            <button type="submit">Connexion</button>
        </form>
    <?php endif ?>
</div>