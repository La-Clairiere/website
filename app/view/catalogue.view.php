<div class="page-content">
    <div id="catalogue_search">
        <?php if(!defined("cata_included")):?>
            <h1>Notre catalogue</h1>
            <p>Sur cette page, retrouvez l'ensemble de nos bières. Il ne vous  reste plus qu'à trouver celle que vous souhaitez découvrir en premier !</p>
            <div id="searchblock">
                <label for="search">Rechercher</label><input type="text" name="search" id="search" class="search">
            </div>
        <?php endif ?>
        <div id="catalogue" class="catalogue">
        <?php foreach($catalogue as $biere):?>
            <div class="biere-block" style="--beer_bgcolor:<?=$biere['couleur_hexa']?>; --beer_color:<?=$biere['couleur_texte']?>" data-beertype="<?=$biere['type']?>">
                <a href="biere.php?id=<?=$biere['ref_biere']?>">
                    <img src="public/images/bieres/bouteille_<?=$biere['ref_biere']?>.png" alt="<?=$biere['nom']?>">
                    <div class="biere-title"><?=$biere['nom']?></div>
                    <div class="biere-flavour"><?=$biere['ingredients_titre']?></div>
                    <div class="biere-buy">
                        <div class="biere-prix"><?=number_format($biere['prix'],2,',',' ')?></div>
                        <div class="biere-order"><a href="commande.php">Commander</a></div>
                    </div>
                </a>
            </div>
        <?php endforeach?>
        </div>
    </div>
</div>
<script src="public/js/list.min.js"></script><script>
var options = {
    valueNames: [ 'biere-title', 'biere-flavour', {data: ['beertype']} ],
    listClass: 'catalogue'
};
var beerList = new List('catalogue_search', options);
</script>