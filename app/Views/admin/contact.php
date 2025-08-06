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
                            <h4 class="page-title">Contact Leads</h4>
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
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Message</th>
                                        <th>Delete</th>
                                    </tr>
                                    <?php
                                    $slno = 1;
                                    foreach ($contacts as $contact) { ?>
                                        <tr>
                                            <td><?= $slno ?></td>
                                            <td><?= esc($contact['name']) ?></td>
                                            <td><?= esc($contact['email']) ?></td>
                                            <td><?= esc($contact['address']) ?></td>
                                            <td><?= esc($contact['message']) ?></td>
                                            <td class="">
                                                <form method="post" action="<?= esc(base_url()) ?>admin/contact">
                                                    <?= csrf_field() ?>
                                                    <input type="hidden" name="itemid" value="<?= esc($contact['id']) ?>">
                                                    <input type="submit" value="X" onclick="return confirm('Are you sure you want to delete this item ?')" class="btn btn-sm btn-danger">
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