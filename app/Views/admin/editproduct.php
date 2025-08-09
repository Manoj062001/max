<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-sm-12">
                            <h4 class="page-title">Edit Product</h4>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-sm-12 px-2">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <?php if (session()->getFlashdata('formmessage')) { ?>
                                    <?php $message = session()->getFlashdata('formmessage'); ?>
                                    <div class="alert alert-<?= $message['colour'] ?>" role="alert">
                                        <?= esc($message['message']) ?>
                                    </div>
                                <?php } ?>

                                <?php if (isset($validation) && ! empty($validation)) { ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?php if (is_array($validation)) { ?>
                                            <ul style="margin:0; padding-left: 18px;">
                                                <?php foreach ($validation as $err) { ?>
                                                    <li><?= esc($err) ?></li>
                                                <?php } ?>
                                            </ul>
                                        <?php } else { ?>
                                            <?= esc($validation) ?>
                                        <?php } ?>
                                    </div>
                                <?php } ?>

                                <form action="<?= esc(base_url()) ?>admin/editproduct/<?= esc($product['id']) ?>" method="post" enctype="multipart/form-data">
                                    <?= csrf_field() ?>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" id="name" name="name" value="<?= set_value('name', $product['name']) ?>" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="slug">Slug</label>
                                            <input type="text" class="form-control" id="slug" name="slug" value="<?= set_value('slug', $product['slug']) ?>" required>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="type">Product Type</label>
                                            <?php if (!empty($types)) { ?>
                                                <select class="form-control" id="type" name="type" required>
                                                    <option value="">Select Type</option>
                                                    <?php foreach ($types as $t) { ?>
                                                        <option value="<?= esc($t) ?>" <?= set_select('type', $t, (set_value('type', $product['type']) === $t)) ?>><?= esc($t) ?></option>
                                                    <?php } ?>
                                                </select>
                                            <?php } else { ?>
                                                <input type="text" class="form-control" id="type" name="type" value="<?= set_value('type', $product['type']) ?>" required>
                                            <?php } ?>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="price">Price</label>
                                            <input type="text" class="form-control" id="price" name="price" value="<?= set_value('price', $product['price']) ?>" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="image">Image</label>
                                            <input type="file" class="form-control" id="image" name="image" accept="image/*">
                                            <?php if (!empty($product['image'])) { ?>
                                                <div style="margin-top:8px;">
                                                    <img src="<?= esc(base_url('assets/img/product/' . $product['image'])) ?>" alt="Current Image" style="max-height:120px;">
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea class="form-control" id="description" name="description" rows="3"><?= set_value('description', $product['description']) ?></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="ingredient">Ingredients</label>
                                        <textarea class="form-control" id="ingredient" name="ingredient" rows="3"><?= set_value('ingredient', $product['ingredient']) ?></textarea>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <div class="form-check" style="padding-top: 32px;">
                                                <input class="form-check-input" type="checkbox" id="popular" name="popular" <?= set_checkbox('popular', '1', (bool) $product['popular']) ?>>
                                                <label class="form-check-label" for="popular">Popular</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <div class="form-check" style="padding-top: 32px;">
                                                <input class="form-check-input" type="checkbox" id="new" name="new" <?= set_checkbox('new', '1', (bool) $product['new']) ?>>
                                                <label class="form-check-label" for="new">New</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group text-right">
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>