
<link rel="stylesheet" href="public/css/nous.css">
<div class="page-content">
    <h1>Qui sommes-nous ?</h1>
    <p style="text-align:center;">La Clairière est une brasserie artisanale qui crée des bières naturelles et de qualité brassées en France à Moissy-Cramayel.</h2>
    <p style="text-align: center;">L'équipe se compose de 5 brasseurs et de 7 communicants. </h3>
    <h2>Nos initiatives écologiques :</h2>
    <p style="text-align:center">Nos bouteilles de bière seront consignées en combinaison avec un programme de fidélité : les clients rapportant leurs bouteilles pourraient avoir une réduction pour leurs prochaines bières. Ce système encourage la réutilisation des bouteilles de bière, réduit les déchets et récompense les clients pour leur engagement en faveur du recyclage.</p>
    <p style="text-align:center">Nous privilégions les agriculteurs français et locaux pour l'achat de nos fruits, de fleurs et de plantes. Cela contribue à soutenir l'économie locale, à réduire les émissions de gaz à effet de serre liées au transport et à favoriser une agriculture plus durable.</p>
   <br>
    <h3>Notre équipe : </h3>
    <div id="trombinoscope_mmi" class="trombinoscope">
        <?php foreach ($trombi['mmi'] as $equipe) : ?>
            <div class="equipe-block">
                <div class="equipe-photo"><img src="public/images/trombinoscope/<?= $equipe['photo'] ?>" alt="<?= $equipe['nom'] ?>"></div>
                <div class="equipe-nom"><?= $equipe['nom'] ?></div>
                <div class="equipe-poste"><?= $equipe['poste'] ?></div>
                <div class="equipe-biographie"><?= $equipe['biographie'] ?></div>
            </div>
        <?php endforeach ?>
    </div>
    <div id="trombinoscope_gb" class="trombinoscope">
        <?php foreach ($trombi['gb'] as $equipe) : ?>
            <div class="equipe-block">
                <div class="equipe-photo"><img src="public/images/trombinoscope/<?= $equipe['photo'] ?>" alt="<?= $equipe['nom'] ?>"></div>
                <div class="equipe-nom"><?= $equipe['nom'] ?></div>
                <div class="equipe-poste"><?= $equipe['poste'] ?></div>
                <div class="equipe-biographie"><?= $equipe['biographie'] ?></div>
            </div>
        <?php endforeach ?>
    </div>
</div>