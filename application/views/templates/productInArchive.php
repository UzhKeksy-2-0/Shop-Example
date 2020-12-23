<!-- 
    $productInArchive_ShortDescription => short description of product in archive 
    $productInArchive_MainPrice => main price of product in archive
    $productInArchive_Name => name of product in archive
    $productInArchive_Image => image of main product
    $productInArclink => link to product page
 -->
<div class="col-md-6 p-4 shadow-lg col-lg-3 m-1 mx-4">
    <img class="img-fluid d-block mx-auto mb-3" src="<?=$productInArchive_Image?>" width="150">
    <h4> <b><?= $productInArchive_Name?></b></h4>
    <h4> <b><?= $productInArchive_MainPrice?>$</b></h4>
    <p><?= $productInArchive_ShortDiscription?></p><a class="btn btn-primary btn-block" href="<?= $productInArclink?>">More</a>
</div>