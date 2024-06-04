<?php /* Template Name: Confirm Age */ ?>
<?php
if (isset($_POST['i_am_21'])) {
    setcookie('confirm-id', $_POST['i_am_21'], time() + (86400 * 30), "/"); // 86400 = 1 day
    update_option('save_confirmation_dfa', $_POST['i_am_21']);
    wp_redirect(home_url(''));
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta content="initial-scale=1.0, user-scalable=no, maximum-scale=1, width=device-width" name="viewport" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Brother Nature Brands</title>
    <!-- Custom fonts for this template-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,200;0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;0,9..40,800;0,9..40,900;0,9..40,1000;1,9..40,200;1,9..40,300;1,9..40,400;1,9..40,500;1,9..40,600;1,9..40,700;1,9..40,800;1,9..40,900;1,9..40,1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
    <!-- Custom styles for this template-->
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/fonts.css" rel="stylesheet" />

    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/fonts/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/style.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div class="initialpage-wrapper">
        <div class="agemodalwrapper">
            <div class="ageconfirmationmodal">
                <h5>Before you enter the website</h5>
                <h1>Are you 21+?</h1>
                <p>
                    This website requires you to be 21 years or older to enter and see
                    the content.
                </p>
                <div class="btns-group">
                    <form method="post" action="<?= get_home_url() ?>/confirm-age">
                        <input type="hidden" name="i_am_21" value="yes" />
                        <button type="submit" name="submit_form" class="btn self-theme-btn">Yes I’m</button>
                        <button class="btn self-theme-btn">No I’m not</button>
                    </form>

                </div>
            </div>
        </div>
    </div>


    <!-- End of Page Wrapper -->

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/jquery-3.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/popper.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/custom.js"></script>
    <!-- Custom scripts for all pages-->
</body>

</html>