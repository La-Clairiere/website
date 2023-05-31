<link rel="stylesheet" href="public/css/nous.css">
<div class="page-content">
    <h1>Qui sommes-nous ?</h1>
    <h2>Notre équipe</h2>
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