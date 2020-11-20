<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Mannat Themes">
        <meta name="keyword" content="">

        <title><?=$title;?> | <?=$page_title;?></title>

        <!-- Theme icon -->
        <link rel="shortcut icon" href="<?=base_url();?>assets/images/favicon.ico">

        <!-- Theme Css -->
        <link href="<?=base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?=base_url();?>assets/css/slidebars.min.css" rel="stylesheet">
        <link href="<?=base_url();?>assets/css/icons.css" rel="stylesheet">
        <link href="<?=base_url();?>assets/css/menu.css" rel="stylesheet" type="text/css">
        <link href="<?=base_url();?>assets/css/style.css" rel="stylesheet">
    </head>

    <body class="sticky-header">
        <section>
            <?php require_once(APPPATH.'views\templates\leftnav.php'); ?>

            <!-- body content start-->
            <div class="body-content">
                <!-- header section start-->
                <div class="header-section">
                    <!--logo and logo icon start-->
                    <div class="logo">
                        <a href="<?=base_url();?>">
                            <span class="logo-img">
                                <img src="<?=base_url();?>assets/images/logo_sm.png" alt="" height="26">
                            </span>
                            <span class="brand-name">UA</span>
                        </a>
                    </div>

                    <!--toggle button start-->
                    <a class="toggle-btn"><i class="ti ti-menu"></i></a>
                    <!--toggle button end-->
                </div>
                <!-- header section end-->

                <div class="container-fluid">