<div class="productscontainer mt-4">
    <div class="row pt-3 mx-3 mx-sm-1">
        <div class="col-lg-10 offset-lg-1 productdescription my-5">
            <div class="row align-items-center">
                <div class="col-md-5 text-center py-3 py-md-5 productimage">
                    <?php if ($product['new']): ?>
                        <img class="newbadge" src="<?= base_url('assets/img/icons/new.png') ?>">
                    <?php endif ?>
                    <img src="<?= base_url('assets/img/product/' . esc($product['image'])) ?>" class="wow bounceInUp" data-wow-delay=".1s" width="90%" alt="">
                </div>
                <div class="col-md-7 px-4 px-md-3 wow bounceInUp" data-wow-delay=".2s">
                    <h3 class="mb-2"><i><?= esc($product['type']) ?></i></h3>
                    <h2><?= esc($product['name']) ?></h2>
                    <h4>Description</h4>
                    <hr>
                    <p><?= esc($product['description']) ?></p>
                    <h4>Ingredients</h4>
                    <hr>
                    <p><?= esc($product['ingredient']) ?></p>
                    <p class="price"><?= esc($product['price']) ?></p>
                </div>
            </div>
        </div>
    </div>
</div>