<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <h1 class="mb-4">Manage Product Categories</h1>
                
                <?php if (session()->getFlashdata('message')): ?>
                    <div class="alert alert-success">
                        <?= session()->getFlashdata('message') ?>
                    </div>
                <?php endif; ?>

                <div class="row">
                    <?php foreach ($categories as $category): ?>
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">
                                        <i class="fas fa-tag me-2"></i>
                                        <?= htmlspecialchars($category['type']) ?>
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <?php 
                                    $products = $products_by_category[$category['type']] ?? [];
                                    $productCount = count($products);
                                    ?>
                                    <p class="text-muted">
                                        <i class="fas fa-box me-1"></i>
                                        <?= $productCount ?> product<?= $productCount !== 1 ? 's' : '' ?>
                                    </p>
                                    
                                    <?php if (!empty($products)): ?>
                                        <div class="list-group list-group-flush">
                                            <?php foreach (array_slice($products, 0, 5) as $product): ?>
                                                <div class="list-group-item d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <strong><?= htmlspecialchars($product['name']) ?></strong>
                                                        <br>
                                                        <small class="text-muted"><?= htmlspecialchars($product['price']) ?></small>
                                                    </div>
                                                    <div>
                                                        <?php if ($product['new']): ?>
                                                            <span class="badge bg-success">New</span>
                                                        <?php endif; ?>
                                                        <?php if ($product['popular']): ?>
                                                            <span class="badge bg-warning">Popular</span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                            
                                            <?php if (count($products) > 5): ?>
                                                <div class="list-group-item text-center">
                                                    <small class="text-muted">
                                                        +<?= count($products) - 5 ?> more products
                                                    </small>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    <?php else: ?>
                                        <p class="text-muted">No products in this category</p>
                                    <?php endif; ?>
                                </div>
                                <div class="card-footer">
                                    <div class="btn-group w-100" role="group">
                                        <a href="<?= base_url('admin/products?category=' . urlencode($category['type'])) ?>" 
                                           class="btn btn-primary btn-sm">
                                            <i class="fas fa-eye me-1"></i> View Products
                                        </a>
                                        <a href="<?= base_url('admin/add-product?category=' . urlencode($category['type'])) ?>" 
                                           class="btn btn-success btn-sm">
                                            <i class="fas fa-plus me-1"></i> Add Product
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="mt-4">
                    <a href="<?= base_url('admin/add-product') ?>" class="btn btn-success">
                        <i class="fas fa-plus me-2"></i>Add New Product
                    </a>
                    <a href="<?= base_url() ?>" class="btn btn-secondary">
                        <i class="fas fa-home me-2"></i>Back to Website
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 