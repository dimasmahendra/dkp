<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Admin DKP Kota Semarang</title>
    <link rel="icon" href="<?php echo base_url(); ?>assets/images/favicon.png" type="image/gif" sizes="16x16">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link href="<?= base_url('asset_admin/plugins/bootstrap/css/bootstrap.css') ?>" rel="stylesheet">
    <link href="<?= base_url('asset_admin/plugins/node-waves/waves.css') ?>" rel="stylesheet">
    <link href="<?= base_url('asset_admin/plugins/animate-css/animate.css') ?>" rel="stylesheet">
    <link href="<?= base_url('asset_admin/css/style.css') ?>" rel="stylesheet">
    <link href="<?= base_url('asset_admin/css/themes/all-themes.css') ?>" rel="stylesheet">
    <link href="<?= base_url('asset_admin/css/jquery.dataTables.min.css') ?>" rel="stylesheet">
</head>

<body class="theme-white">
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <div class="overlay"></div>
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">                
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="<?php echo base_url(); ?>Admin">
                    <img class="img-responsive" src="<?php echo base_url() ?>assets/images/main-logo.png" alt="logotop" width="275">
                </a>
            </div>
        </div>
    </nav>
    <section>
        <aside id="leftsidebar" class="sidebar">
            <div class="user-info">
                <div class="image">                    
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $level; ?></div>
                    <div class="email"><?php echo $email; ?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">                            
                            <li><a href="<?php echo base_url(); ?>Register/logout"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN MENU</li>
                     <li class="<?php if ($this->uri->segment(1) == 'Admin'){echo "active";}?>">
                        <a href="<?= base_url('Admin/index') ?>">
                            <i class="material-icons">people</i>
                            <span>Admin</span>
                        </a>
                    </li>
                    <?php
                    foreach ($menu as $key => $value) { 
                        $parent = ($value['parentmenu'] == 0) ? "javascript:void(0);" : base_url() . $urlci ;
                    ?>
                    <li class="<?php if ($this->uri->segment(1) == $value['urlci']){echo "active";}?>">
                        <a href="<?php echo $parent; ?>" class="menu-toggle">
                            <i class="material-icons">description</i>
                            <span><?php echo $value['nmmenu']; ?></span>
                        </a>
                    <?php if (empty($value['menuchild'])) { ?>
                        </li>
                    <?php } else { ?> 
                        <ul class="ml-menu">
                            <?php foreach ($value['menuchild'] as $index => $val) { ?>
                                <li class="<?php if ($this->uri->segment(1) == $val['urlci']){echo "active";}?>">
                                    <a href="<?php echo base_url().$value['urlci'].'/'.$val['urlci']; ?>"><?php echo $val['nmmenu']; ?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </li>
                    <?php } ?>
                    <?php } ?>
                </ul>
            </div>
            <div class="legal">
                <div class="copyright">
                    &copy; 2018 <a href="javascript:void(0);">Java Media</a>.
                </div>
            </div>
        </aside>
    </section>