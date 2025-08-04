<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .badge-preview {
            max-width: 200px;
            max-height: 100px;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-top: 10px;
        }
        .current-badge {
            max-width: 150px;
            max-height: 75px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title mb-0">
                            <i class="fas fa-tag me-2"></i>Manage New Badge Image
                        </h3>
                    </div>
                    <div class="card-body">
                        <?php if (session()->getFlashdata('message')): ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <?= session()->getFlashdata('message') ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        <?php endif; ?>

                        <?php if (session()->getFlashdata('error')): ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <?= session()->getFlashdata('error') ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        <?php endif; ?>

                        <div class="row">
                            <div class="col-md-6">
                                <h5>Current Badge</h5>
                                <?php if ($current_badge_exists): ?>
                                    <div class="mb-3">
                                        <img src="<?= base_url('assets/images/icons/new.png') ?>" 
                                             alt="Current new badge" class="current-badge">
                                        <p class="text-muted mt-2">Current new badge image</p>
                                    </div>
                                <?php else: ?>
                                    <div class="alert alert-warning">
                                        <i class="fas fa-exclamation-triangle me-2"></i>
                                        No current badge image found. Please upload one.
                                    </div>
                                <?php endif; ?>
                            </div>
                            
                            <div class="col-md-6">
                                <h5>Upload New Badge</h5>
                                <form action="<?= base_url('admin/manage-badge') ?>" method="post" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="badge_image" class="form-label">New Badge Image</label>
                                        <input type="file" class="form-control" id="badge_image" name="badge_image" 
                                               accept="image/*" required>
                                        <small class="text-muted">Upload a PNG, JPG, or JPEG image for the new badge</small>
                                        <div id="badge_preview" class="mt-2"></div>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-upload me-2"></i>Upload New Badge
                                    </button>
                                </form>
                            </div>
                        </div>

                        <hr class="my-4">

                        <div class="row">
                            <div class="col-12">
                                <h5>Badge Information</h5>
                                <div class="alert alert-info">
                                    <h6><i class="fas fa-info-circle me-2"></i>About the New Badge</h6>
                                    <ul class="mb-0">
                                        <li>The new badge appears on products marked as "new" in the database</li>
                                        <li>Recommended size: 60x30 pixels or similar aspect ratio</li>
                                        <li>Supported formats: PNG, JPG, JPEG</li>
                                        <li>The badge will be automatically resized to fit the design</li>
                                        <li>File will be saved as: <code>public/assets/images/icons/new.png</code></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="<?= base_url('admin') ?>" class="btn btn-secondary">
                                <i class="fas fa-arrow-left me-2"></i>Back to Dashboard
                            </a>
                            <a href="<?= base_url('admin/products') ?>" class="btn btn-outline-primary">
                                <i class="fas fa-box me-2"></i>Manage Products
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Badge preview functionality
        document.getElementById('badge_image').addEventListener('change', function(e) {
            const file = e.target.files[0];
            const preview = document.getElementById('badge_preview');
            
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.innerHTML = '<img src="' + e.target.result + '" class="badge-preview">';
                }
                reader.readAsDataURL(file);
            } else {
                preview.innerHTML = '';
            }
        });
    </script>
</body>
</html> 