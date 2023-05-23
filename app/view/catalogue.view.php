<div class="page-content">
    <?php if(!defined("cata_included")):?>
        <h1>Notre catalogue</h1>
        <p>Sur cette page, retrouvez l'ensemble de nos bières. Il ne vous  reste plus qu'à trouver celle que vous souhaitez découvrir en premier !</p>
    <?php endif ?>
    <?php foreach($catalogue as $biere):?>
        <div class="biere-block">
            <a href="biere.php?id=<?=$biere['ref_biere']?>">
                <img src="public/images/bieres/bouteille_<?=$biere['ref_biere']?>.png" alt="<?=$biere['nom']?>">
                <div class="biere-title"><?=$biere['nom']?></div>
                <div class="biere-flavour"><?=$biere['ingredients_titre']?></div>
            </a>
        </div>
    <?php endforeach?>
</div>