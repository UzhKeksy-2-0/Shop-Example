<!-- 
   $respText => responce text ;
   $userName => user name ;
   $stars => star quantity (rating)
 -->
<div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class=""><?=$userName?></h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
        <?php
                    for($i = $stars; $i > 0;--$i){
                      echo '<i class="fa fa-star fa-fw fa-1x py-1"></i>';                      
                    }
                  ?>
      </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <p class="mt-3 mb-3">  <?=$respText?>   </p> 
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
        </div>
      </div>
    </div>
  </div>
 