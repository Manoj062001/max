<!-- DataTables -->
<style>
    .errormsg {
        display: none;
        text-align: center;
        margin-top: 12px;
        margin-bottom: 12px;
        padding: 2px;
        color: white;
        background: #f92d2d;
        border-radius: 10px;
    }
</style>
<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-sm-12">
                            <h4 class="page-title">Products</h4>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-12 px-2">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <table class="table">
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Slug</th>
                                        <th>Type</th>
                                        <th>Price</th>
                                        <th>Popular</th>
                                        <th>New</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    <?php
                                    $slno = 1;
                                    foreach ($products as $product) { ?>
                                        <tr>
                                            <td><?= $slno ?></td>
                                            <td><?= esc($product['name']) ?></td>
                                            <td><?= esc($product['slug']) ?></td>
                                            <td><?= esc($product['type']) ?></td>
                                            <td><?= esc($product['price']) ?></td>
                                            <td><?= $product['popular'] ? '1' : '0' ?></td>
                                            <td><?= $product['new'] ? '1' : '0' ?></td>
                                            <td>
                                                <a class="btn btn-sm btn-secondary" href="<?= esc(base_url()) ?>admin/editproduct/<?= esc($product['id']) ?>">Edit</a>
                                            </td>
                                            <td class="">
                                                <form method="post" action="<?= esc(base_url()) ?>admin/product">
                                                    <?= csrf_field() ?>
                                                    <input type="hidden" name="itemid" value="<?= esc($product['id']) ?>">
                                                    <input type="submit" value="X" onclick="return confirm('Are you sure you want to delete this product ?')" class="btn btn-sm btn-danger">
                                                </form>
                                            </td>
                                        </tr>
                                    <?php $slno++;
                                    } ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
