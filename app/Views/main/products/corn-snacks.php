<div class="productscontainer mt-4 new_single_prod">
    <div class="row rowheading wow bounceInUp" style="visibility: visible; animation-name: bounceInUp;">
        <div class="col-sm-12">
            <h2>Baked Corn Snacks</h2>
        </div>
    </div>
    
    <div class="row productrow text-right mx-0 justify-content-center">
        <?php 
        $count = 0;
        foreach ($products as $product): 
            // Start a new row after every 3 products
            if ($count > 0 && $count % 3 == 0) {
                echo '</div><div class="row productrow text-right mx-0 justify-content-center">';
            }
        ?>
            <div class="singleproduct col-md-3 wow bounceInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: bounceInUp;">
                <div class="singleproductinner">
                    <?php if ($product['new'] == 1): ?>
                        <img class="newbadge" src="<?= base_url('assets/images/icons/new.png') ?>">
                    <?php endif; ?>
                    
                    <img class="" src="<?= base_url('assets/images/products/' . $product['image']) ?>" width="100%" alt="<?= htmlspecialchars($product['name']) ?>">
                    <p class="price"><?= htmlspecialchars($product['price']) ?></p>
                    <h5 class="text-truncate"><?= htmlspecialchars($product['name']) ?></h5>
                    <a href="item?id=<?= $product['id'] ?>" class="btn btn-primary btn-view">View Product</a>
                </div>
            </div>
        <?php 
            $count++;
        endforeach; 
        ?>
    </div>
</div>
