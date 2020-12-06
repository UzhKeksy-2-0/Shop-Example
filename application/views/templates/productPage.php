
<!-- 
     $category => prroduct category name
     $prodName  => product name
     
     $prodDisk => product discription  
     
     $prodPrice => product price
       

      





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
            <h1 class=""> Про товар </h1>
          </div>
          <div class="col-md-6">
            <div class="carousel slide" data-ride="carousel" id="carousel" style="">
              <div class="carousel-inner">
                <div class="carousel-item active"> <img class="d-block img-fluid w-100 mx-auto" src="https://estore.ua/media/post/image/i/p/iphone_12_in_the_box.jpg">
                  <div class="carousel-caption">
                    <h5 class="m-0"></h5>
                    <p></p>
                  </div>
                </div>
                <div class="carousel-item"> <img class="d-block img-fluid w-100" src="https://ilounge.ua/files/articles/review-iphone-12-pro-max--samyj-interesnyj-smartfon-i-vybrat-ego-stoit-tolko-radi-kamery-1.jpg">
                  <div class="carousel-caption">
                    <h5 class="m-0"></h5>
                    <p></p>
                  </div>
                </div>
                <div class="carousel-item"> <img class="d-block img-fluid w-100" src="https://s.4pda.to/OigyUUQvlanxVQ1UXcBz1WPrhCbwE2PljH1Px.jpg">
                  <div class="carousel-caption">
                    <h5 class="m-0"></h5>
                    <p></p>
                  </div>
                </div>
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
