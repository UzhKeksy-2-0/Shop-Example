<!-- 
    $categories => categotys template
    $allProducts => products achive template
-->
<div class="w-100">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
            <?php

            ?>
        </div>
        <div class="col-md-9">
            <?php
                $this->load($this->views_file->templates->productsarchive,['allProducts' => $allProducts]);
            ?>
        </div>
      </div>
    </div>
</div>