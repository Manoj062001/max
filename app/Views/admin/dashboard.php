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
                <h1 class="mb-4">Admin Dashboard</h1>
                
                <!-- Statistics Cards -->
                <div class="row mb-4">
                    <div class="col-md-3 mb-3">
                        <div class="card bg-primary text-white">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h4 class="card-title"><?= count($products) ?></h4>
                                        <p class="card-text">Total Products</p>
                                    </div>
                                    <div class="align-self-center">
                                        <i class="fas fa-box fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-3 mb-3">
                        <div class="card bg-success text-white">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h4 class="card-title"><?= count($categories) ?></h4>
                                        <p class="card-text">Categories</p>
                                    </div>
                                    <div class="align-self-center">
                                        <i class="fas fa-tags fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-3 mb-3">
                        <div class="card bg-warning text-white">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h4 class="card-title">
                                            <?= count(array_filter($products, function($p) { return $p['new']; })) ?>
                                        </h4>
                                        <p class="card-text">New Products</p>
                                    </div>
                                    <div class="align-self-center">
                                        <i class="fas fa-star fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-3 mb-3">
                        <div class="card bg-info text-white">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h4 class="card-title">
                                            <?= count(array_filter($products, function($p) { return $p['popular']; })) ?>
                                        </h4>
                                        <p class="card-text">Popular Products</p>
                                    </div>
                                    <div class="align-self-center">
                                        <i class="fas fa-fire fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Quick Actions</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 mb-3">
                                        <a href="<?= base_url('admin/products') ?>" class="btn btn-primary w-100">
                                            <i class="fas fa-box me-2"></i>Manage Products
                                        </a>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <a href="<?= base_url('admin/categories') ?>" class="btn btn-success w-100">
                                            <i class="fas fa-tags me-2"></i>Manage Categories
                                        </a>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <a href="<?= base_url('admin/add-product') ?>" class="btn btn-warning w-100">
                                            <i class="fas fa-plus me-2"></i>Add New Product
                                        </a>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <a href="<?= base_url('admin/manage-badge') ?>" class="btn btn-info w-100">
                                            <i class="fas fa-tag me-2"></i>Manage Badge
                                        </a>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <a href="<?= base_url() ?>" class="btn btn-secondary w-100">
                                            <i class="fas fa-home me-2"></i>View Website
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Products -->
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Recent Products</h5>
                            </div>
                            <div class="card-body">
                                <div class="list-group list-group-flush">
                                    <?php 
                                    $recentProducts = array_slice($products, 0, 5);
                                    foreach ($recentProducts as $product): 
                                    ?>
                                        <div class="list-group-item d-flex justify-content-between align-items-center">
                                            <div>
                                                <strong><?= htmlspecialchars($product['name']) ?></strong>
                                                <br>
                                                <small class="text-muted"><?= htmlspecialchars($product['type']) ?></small>
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
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Categories Overview</h5>
                            </div>
                            <div class="card-body">
                                <div class="list-group list-group-flush">
                                    <?php foreach ($categories as $category): ?>
                                        <?php 
                                        $categoryProducts = array_filter($products, function($p) use ($category) {
                                            return $p['type'] === $category['type'];
                                        });
                                        $productCount = count($categoryProducts);
                                        ?>
                                        <div class="list-group-item d-flex justify-content-between align-items-center">
                                            <div>
                                                <strong><?= htmlspecialchars($category['type']) ?></strong>
                                            </div>
                                            <span class="badge bg-primary rounded-pill"><?= $productCount ?> products</span>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 