<!-- 
    $allProducts => proucts templates one by one
 -->
<div class="py-3 text-center">
    <div class="container">
      <div class="row">
          <?php
            foreach($allProducts as $product){
                $productInArchive_ShortDescription = $product->description;
                $productInArchive_MainPrice = $product->price;
                $productInArchive_Name = $product->name;
                $productInArchive_Image = $product->image[0];
                $this->load($this->views_files->templates->productinarchive);
            }
          ?>
      </div>
    </div>
</div>
