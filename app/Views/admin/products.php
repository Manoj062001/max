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
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1>Manage Products</h1>
                    <a href="<?= base_url('admin/add-product') ?>" class="btn btn-success">
                        <i class="fas fa-plus me-2"></i>Add New Product
                    </a>
                </div>
                
                <?php if (session()->getFlashdata('message')): ?>
                    <div class="alert alert-success">
                        <?= session()->getFlashdata('message') ?>
                    </div>
                <?php endif; ?>

                <!-- Filter by Category -->
                <div class="mb-3">
                    <label for="categoryFilter" class="form-label">Filter by Category:</label>
                    <select class="form-select" id="categoryFilter" style="max-width: 300px;">
                        <option value="">All Categories</option>
                        <?php foreach ($categories as $category): ?>
                            <option value="<?= htmlspecialchars($category['type']) ?>">
                                <?= htmlspecialchars($category['type']) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($products as $product): ?>
                                <tr data-category="<?= htmlspecialchars($product['type']) ?>">
                                    <td><?= $product['id'] ?></td>
                                    <td>
                                        <?php if ($product['image']): ?>
                                            <img src="<?= base_url('assets/images/product/' . $product['image']) ?>" 
                                                 alt="<?= htmlspecialchars($product['name']) ?>" 
                                                 style="width: 50px; height: 50px; object-fit: cover;" 
                                                 class="rounded">
                                        <?php else: ?>
                                            <div class="bg-light rounded d-flex align-items-center justify-content-center" 
                                                 style="width: 50px; height: 50px;">
                                                <i class="fas fa-image text-muted"></i>
                                            </div>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <strong><?= htmlspecialchars($product['name']) ?></strong>
                                        <br>
                                        <small class="text-muted"><?= htmlspecialchars(substr($product['description'], 0, 100)) ?>...</small>
                                    </td>
                                    <td>
                                        <span class="badge bg-primary"><?= htmlspecialchars($product['type']) ?></span>
                                    </td>
                                    <td><?= htmlspecialchars($product['price']) ?></td>
                                    <td>
                                        <?php if ($product['new']): ?>
                                            <span class="badge bg-success">New</span>
                                        <?php endif; ?>
                                        <?php if ($product['popular']): ?>
                                            <span class="badge bg-warning">Popular</span>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="<?= base_url('admin/edit-product/' . $product['id']) ?>" 
                                               class="btn btn-sm btn-primary">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="<?= base_url('admin/delete-product/' . $product['id']) ?>" 
                                               class="btn btn-sm btn-danger"
                                               onclick="return confirm('Are you sure you want to delete this product?')">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <div class="mt-4">
                    <a href="<?= base_url('admin/categories') ?>" class="btn btn-info">
                        <i class="fas fa-tags me-2"></i>Manage Categories
                    </a>
                    <a href="<?= base_url() ?>" class="btn btn-secondary">
                        <i class="fas fa-home me-2"></i>Back to Website
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Category filter functionality
        document.getElementById('categoryFilter').addEventListener('change', function() {
            const selectedCategory = this.value;
            const rows = document.querySelectorAll('tbody tr');
            
            rows.forEach(row => {
                const category = row.getAttribute('data-category');
                if (selectedCategory === '' || category === selectedCategory) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html> 