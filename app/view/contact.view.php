<div class="page-content">
    <h1>Nous contacter</h1>
    <p>Une question ? Une demande ? Contactez-nous via ce formulaire et nous vous répondrons au plus vite par e-mail !</p>
    <p>Vous souhaitez passer commande ? Rendez-vous plutôt sur notre <a href="commande.php">page de commande</a> dédiée.</p>
    <form method="POST">
        <fieldset>
            <legend>Formulaire de contact</legend>
            <label for="i_nom">Nom :</label> <input type="text" name="nom" id="i_nom" required/>
            <label for="i_prenom">Prénom :</label> <input type="text" name="prenom" id="i_prenom" required/>
            <label for="i_mail">Adresse mail :</label> <input type="email" name="mail" id="i_mail"/>
            <label for="i_objet">Objet du mail :</label> <input type="text" name="objet" id="i_objet"/>
            <label for="i_message"> Message :</label>
            <textarea name="message" id="i_message" style="max-width: 100%;" rows="15"></textarea>
            <button type="submit" name="envoyer">Envoyer</button>
        </fieldset>
    </form>
</div>
