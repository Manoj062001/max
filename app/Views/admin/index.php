<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-wsidth, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Admin Panel</title>
    <link rel="shortcut icon" href="/admin_assets/images/favicon.ico">

    <link href="<?= esc(base_url()) ?>/admin_assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?= esc(base_url()) ?>/admin_assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="<?= esc(base_url()) ?>/admin_assets/css/style.css" rel="stylesheet" type="text/css">

</head>

<body>

    <!-- Begin page -->
    <!-- <div class="accountbg"></div> -->
    <!-- <div class="home-btn d-none d-sm-block">
        <a href="index.html" class="text-white"><i class="fas fa-home h2"></i></a>
    </div> -->
    <div class="wrapper-page">
        <div class="card card-pages shadow-none">

            <div class="card-body">
                <div class="text-center m-t-0 m-b-15">
                    <h2>Admin Panel</h2>
                </div>
                <h5 class="font-18 text-center">Sign in to continue to Admin Panel</h5>

                <?php $session = session();
                $loginstatus = $session->getFlashdata('loginstatus');
                if ($loginstatus) { ?>
                    <div class="alert <?php echo $loginstatus['type'] == 'success' ? 'alert-success' : 'alert-danger'; ?>" role="alert">
                        <?php echo $loginstatus['message']  ?>
                    </div>
                <?php } ?>
                <form action="/admin" class="form-horizontal m-t-30" method="POST">
                    <?= csrf_field() ?>
                    <?php if (isset($loginvalidation)) { ?>
                        <div class="form-group text-center">
                            <div class="alert alert-danger" role="alert">
                                <?= $loginvalidation; ?>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="form-group">
                        <div class="col-12">
                            <label>Username</label>
                            <input class="form-control" type="text" required="" value="" name="username" placeholder="Username">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-12">
                            <label>Password</label>
                            <input class="form-control" type="password" required="" value="" name="password" placeholder="Password">
                        </div>
                    </div>

                    <div class="form-group text-center m-t-20">
                        <div class="col-12">
                            <button class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="submit">Log In</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <!-- END wrapper -->

    <!-- jQuery  -->
    <script src="<?= esc(base_url()) ?>/admin_assets/js/jquery.min.js"></script>
    <script src="<?= esc(base_url()) ?>/admin_assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?= esc(base_url()) ?>/admin_assets/js/metismenu.min.js"></script>
    <script src="<?= esc(base_url()) ?>/admin_assets/js/jquery.slimscroll.js"></script>
    <script src="<?= esc(base_url()) ?>/admin_assets/js/waves.min.js"></script>

    <!-- App js -->
    <script src="<?= esc(base_url()) ?>/admin_assets/js/app.js"></script>
    <footer class="footer">
        © 2023 <span class=""> - Crafted with <i class="mdi mdi-heart text-danger"></i> by ipopi ads</span>
    </footer>
</body>

</html>