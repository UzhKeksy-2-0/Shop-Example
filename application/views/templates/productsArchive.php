<!-- 
    $allProducts => proucts templates one by one
 -->
<div class="py-3 text-center">
    <div class="container">
      <div class="row">
          <?php
            foreach($allProducts as $product){
                $this->load($this->views_file->templates->productinarchive,[
                      'productInArchive_Name' => $product['name'],
                      'productInArchive_MainPrice' => $product['price'],
                      'productInArchive_ShortDescription' => $product['discription']
                ]);
            }
          ?>
      </div>
    </div>
</div>
