<!-- 
    $allProducts => proucts templates one by one
 -->
<div class="py-3 text-center">
    <div class="container">
      <div class="row">
          <?php
            foreach($allProducts as $product){
                $this->load($this->views_file->templates->productinarchive,[
                      'productInArchive_Image' => 'https://estore.ua/media/post/image/i/p/iphone_12_in_the_box.jpg',
                      'productInArchive_Name' => $product['name'],
                      'productInArchive_MainPrice' => $product['price'],
                      'productInArchive_ShortDescription' => $product['discription'],
                      'productInArclink' => '/product?prod='.$product['id']
                ]);
            }
          ?>
      </div>
    </div>
</div>
