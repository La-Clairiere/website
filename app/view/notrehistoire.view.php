<link rel="stylesheet" href="public/css/nous.css">
<div class="page-content">
    <h1>Qui sommes-nous ?</h1>
    <h2>Notre équipe</h2>
    <div id="trombinoscope" class="trombinoscope">
        <?php foreach ($trombinoscope as $equipe) : ?>
            <div class="equipe-block">

                <img src="public/images/trombinoscope/<?= $equipe['image'] ?>" alt="<?= $equipe['nom'] ?>">
                <div class="equipe-nom"><?= $equipe['nom'] ?></div>
                <div class="equipe-photo"><?= $equipe['photo'] ?></div>
                <div class="equipe-poste"><?= $equipe['poste'] ?></div>
                <div class="equipe-biographie"><?= $equipe['biographie'] ?></div>

            </div>

    </div>
<?php endforeach ?>
</div>