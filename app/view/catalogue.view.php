<div class="page-content">
    <h1>Notre catalogue</h1>
    <p>Sur cette page, retrouvez l'ensemble de nos bières. Il ne vous  reste plus qu'à trouver celle que vous souhaitez découvrir en premier !</p>
    <?php foreach($catalogue as $biere):?>
        <div class="biere-block"><?=var_dump($biere)?></div>
    <?php endforeach?>
</div>