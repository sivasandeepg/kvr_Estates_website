<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title><?= SITE_TITLE ?> | Login</title>

        <link href="<?= base_url() ?>admin_assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?= base_url() ?>admin_assets/font-awesome/css/font-awesome.css" rel="stylesheet">

        <link href="<?= base_url() ?>admin_assets/css/animate.css" rel="stylesheet">
        <link href="<?= base_url() ?>admin_assets/css/style.css" rel="stylesheet">

    </head>
    <body class="gray-bg">

        <div class="middle-box text-center loginscreen animated fadeInDown">
            <div>
                <div>

                    <h1 class="logo-name"><img style="width: 100px;height: 100px;"src="<?= base_url() ?>uploads/<?= $site_settings->favicon ?>"></h1>
                </div>
                <h3>Welcome to <?= SITE_TITLE ?></h3>
                <p>Login in. To control in action.</p>
                <div class="text-danger">
                    <?php echo validation_errors(); ?>
                    <?php
                    if ($this->session->flashdata('type') == 'log') {
                        echo "<br /><br /><h4 align='center' style='color:#FF0000;'>Invalid Login Details</h4>";
                    }
                    if ($this->session->flashdata('type') == 'inactive') {
                        echo "<br /><br /><h4 align='center' style='color:#FF0000;'>Your Account is inactive.</h4>";
                    }
                    if ($this->session->flashdata('type') == 'timeout') {
                        echo "<br /><br /><h4 align='center' style='color:#FF0000;'>Session Time Out.To Login Again Type your user name and password to Login</h4>";
                    }
                    if ($this->session->flashdata('type') == 'lout') {
                        echo "<br /><br /><h4 align='center' style='color:#FF0000;'>You Have Successfully Logged Out.</h4>";
                    }
                    if ($this->session->flashdata('type') == 'location') {
                        echo "<br /><br /><h4 align='center' style='color:#FF0000;'>You Are Not authorized To Login From This Computer.</h4>";
                    }
                    ?>
                </div>
                <form class="m-t" role="form" id="loginForm" method="POST">
                    <div class="form-group">
                        <input type="email" class="form-control" name="username" placeholder="Username" required="">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password" required="">
                    </div>
                    <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
                </form>
                <p class="m-t"> <small><?= SITE_TITLE ?> Version 1.0 &copy; <?= date("Y") ?></small> </p>
                <p class="m-t"> <small>Powered By</small> <a href="http://thecolourmoon.com">Colourmoon Technologies</a> </p>
            </div>
        </div>

        <!-- Mainly scripts -->
        <script src="<?= base_url() ?>admin_assets/js/jquery-2.1.1.js"></script>
        <script src="<?= base_url() ?>admin_assets/js/bootstrap.min.js"></script>
        <script src="<?= base_url() ?>admin_assets/js/loadingoverlay_progress.min.js"></script>
        <script>
            $(document).on("submit", "#loginForm", function () {
                $.LoadingOverlay("show");
            });
        </script>
    </body>

</html>

