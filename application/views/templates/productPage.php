
<!-- 
     $category => prroduct category name
     $prodName  => product name
     
     $prodDisk => product discription  
     
     $prodPrice => product price
     $photos => array of photo links
 -->
    <div class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center bg-primary"><?=$category?><br></h1>
          </div>
        </div>
      </div>
    </div>
    <div class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h3 class=""><?=$prodName?></h3>
          </div>
          <div class="col-md-6">
            <h1 class=""> About </h1>
          </div>
          <div class="col-md-6">
            <div class="carousel slide" data-ride="carousel" id="carousel">
              <div class="carousel-inner">
                <?php 
                  $first = true;
                  foreach($photos as $photoLink){
                    $class = $first ? 'active' : '';
                    $link = $photoLink;
                    include $this->views_file->templates->photoproduct;
                    $first = false;
                  }
                ?>
              </div> <a class="carousel-control-prev bg-dark" href="#carousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next bg-info" href="#carousel" role="button" data-slide="next"> <span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span> </a>
            </div>
          </div>
          <div class="col-md-6">
            <p class="text-monospace lead" style=""><?=$prodDisk?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3 class="display-3"><?=$prodPrice?></h3>
          </div>
          <div class="col-md-4"><a class="btn btn-light btn-lg" href="#"><i class="fa fa-star fa-fw fa-1x py-1"></i></a><a class="btn btn-light btn-lg" href="#"><i class="fa fa-star fa-fw fa-1x py-1"></i></a><a class="btn btn-light btn-lg" href="#"><i class="fa fa-star fa-fw fa-1x py-1"></i></a><a class="btn btn-light btn-lg" href="#"><i class="fa fa-star fa-fw fa-1x py-1"></i></a><a class="btn btn-light btn-lg" href="#"><i class="fa fa-star fa-fw fa-1x py-1"></i></a></div>
          <div class="col-md-12"><a class="btn btn-primary btn-block btn-lg w-25" href="#">Add to cart!</a></div>
        </div>
      </div>
    </div>
