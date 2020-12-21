<!-- 
    $allProducts => proucts templates one by one
 -->
<div class="py-3 text-center">
    <div class="container">
      <div class="row">
          <?php
            foreach($allProducts as $product){
                $this->load($this->views_file->templates->productinarchive,[
                      'productInArchive_Image' => $product->image[0]->image,
                      'productInArchive_Name' => $product->name,
                      'productInArchive_MainPrice' => $product->price,
                      'productInArchive_ShortDescription' => $product->discription,
                      'productInArclink' => '/product?prod='.$product->id
                ]);
            }
          ?>
      </div>
    </div>
</div>
