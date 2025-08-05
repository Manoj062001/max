<div class="productscontainer mt-4 new_single_prod">
    <div class="row rowheading wow bounceInUp">
        <div class="col-sm-12">
            <h2><?= esc($category) ?></h2>
        </div>
    </div>

    <?php
    $row = 1;
    foreach ($products as $product) :
        if ($row == 1 || ($row - 1) % 3 == 0) : ?>
            <div class="row productrow text-right mx-0 justify-content-center">
            <?php endif ?>
            <div class="singleproduct col-md-3 wow bounceInUp" data-wow-delay=".2s">
                <div class="singleproductinner">
                    <?php if ($product['new']) : ?>
                        <img class="newbadge" src="img/icons/new.png">
                    <?php endif ?>
                    <img class="" src="img/product/<?= $product['image'] ?>" width="100%" alt="">
                    <p class="price"><?= $product['price'] ?></p>
                    <h5 class="text-truncate"><?= $product['name'] ?></h5>
                    <a href="<?= base_url('product/' . esc($product['slug'])) ?>" class="btn btn-primary btn-view">View Product</a>
                </div>
            </div>
            <?php
            if ($row % 3 == 0 || $row == count($products)) : ?>
            </div>
        <?php endif ?>
    <?php $row++;
    endforeach ?>

</div>