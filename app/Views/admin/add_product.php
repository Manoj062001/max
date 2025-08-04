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
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title mb-0">
                            <i class="fas fa-plus me-2"></i>Add New Product
                        </h3>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('admin/add-product') ?>" method="post">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="name" class="form-label">Product Name *</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                
                                <div class="col-md-6 mb-3">
                                    <label for="type" class="form-label">Category *</label>
                                    <select class="form-select" id="type" name="type" required>
                                        <option value="">Select Category</option>
                                        <?php foreach ($categories as $category): ?>
                                            <option value="<?= htmlspecialchars($category['type']) ?>">
                                                <?= htmlspecialchars($category['type']) ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="image" class="form-label">Image Filename</label>
                                    <input type="text" class="form-control" id="image" name="image" 
                                           placeholder="e.g., product-name.png">
                                    <small class="text-muted">Enter the image filename (e.g., choco-cookies.png)</small>
                                </div>
                                
                                <div class="col-md-6 mb-3">
                                    <label for="price" class="form-label">Price Information *</label>
                                    <input type="text" class="form-control" id="price" name="price" 
                                           placeholder="e.g., Available in ₹10 pack size" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Description *</label>
                                <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="ingredient" class="form-label">Ingredients *</label>
                                <textarea class="form-control" id="ingredient" name="ingredient" rows="3" required></textarea>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="new" name="new" value="1">
                                        <label class="form-check-label" for="new">
                                            Mark as New Product
                                        </label>
                                    </div>
                                </div>
                                
                                <div class="col-md-6 mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="popular" name="popular" value="1">
                                        <label class="form-check-label" for="popular">
                                            Mark as Popular Product
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="<?= base_url('admin/products') ?>" class="btn btn-secondary">
                                    <i class="fas fa-arrow-left me-2"></i>Back to Products
                                </a>
                                <button type="submit" class="btn btn-success">
                                    <i class="fas fa-save me-2"></i>Add Product
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 