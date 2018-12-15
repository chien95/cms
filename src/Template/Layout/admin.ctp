<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome To | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <?= $this->Html->css('plugins/bootstrap/css/bootstrap.css') ?>
    <?= $this->Html->css('plugins/node-waves/waves.css') ?>
    <?= $this->Html->css('plugins/animate-css/animate.css') ?>
    <?= $this->Html->css('plugins/morrisjs/morris.css') ?>
    <?= $this->Html->css('plugins/waitme/waitMe.css') ?>
    <?= $this->Html->css('plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') ?>
    <?= $this->Html->css('themes/all-themes.css') ?>
    <?= $this->Html->css('font-awesome.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('admin.css') ?>
    
</head>

<body class="theme-red admin">
    <!-- Page Loader -->
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
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html">ADMINBSB</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Notifications -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">notifications</i>
                            <span class="label-count">7</span>
                        </a>       
                    </li>
                    <!-- #END# Notifications -->
                    <!-- Tasks -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">flag</i>
                            <span class="label-count">9</span>
                        </a>                       
                    </li>
                    
                    <!-- #END# Tasks -->
                    <li class="dropdown avatar" >
                        <a href="javascript:void(0);" id="btnGroupVerticalDrop1" data-toggle="dropdown" aria-haspopup="true">
                            <?=  $this->Html->image('user.png', ['alt' => 'avatar', 'width'=>40]);?> 
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                            <li>
                                <?= $this->Html->link('<i class="fa fa-user-o" aria-hidden="true"></i> '.__('Profile'), ['controller' => 'Users', 'action' => 'profile'],['escape' => false]) ?>
        
                            </li>
                            <li>
                                <?= $this->Html->link('<i class="fa fa-sign-out" aria-hidden="true"></i> '.__('Logout'), ['controller' => 'Users', 'action' => 'logout'],['escape' => false]) ?>   
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                
                    <li class="active">
                        <?= $this->Html->link('<i class="fa fa-home"></i> <span>'.__('Home').'</span>', ['controller' => 'Posts', 'action' => 'home'],['escape' => false]) ?> 
                    </li>
                    <li>
                        <?= $this->Html->link('<i class="fa fa-list"></i> <span>'.__('Categories').'</span>', ['controller' => 'Categories', 'action' => 'index'],['escape' => false]) ?> 
                    </li>
                    <li>
                        <a href="pages/helper-classes.html">
                            <i class="material-icons">layers</i>
                            <span>Helper Classes</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons">widgets</i>
                            <span>Widgets</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons">swap_calls</i>
                            <span>User Interface (UI)</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons">assignment</i>
                            <span>Forms</span>
                        </a>
                    </li>
                    
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB </a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <?= $this->fetch('content') ?> 
        </div>
    </section>
    <!-- ChartJs -->
    <!-- <script src="plugins/chartjs/Chart.bundle.js"></script> -->
    <!-- Flot Charts Plugin Js -->
    <!-- <script src="plugins/flot-charts/jquery.flot.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="plugins/flot-charts/jquery.flot.time.js"></script>
    <script src="js/pages/index.js"></script> -->

    <?= $this->Html->script('plugins/jquery/jquery.min.js') ?>
    <?= $this->Html->script('plugins/bootstrap/js/bootstrap.js') ?>
    <?= $this->Html->script('plugins/bootstrap-select/js/bootstrap-select.js') ?>
    <?= $this->Html->script('plugins/jquery-slimscroll/jquery.slimscroll.js') ?>
    <?= $this->Html->script('plugins/jquery-countto/jquery.countTo.js') ?>
    <?= $this->Html->script('plugins/raphael/raphael.min.js') ?>
    <?= $this->Html->script('plugins/morrisjs/morris.js') ?>
    <?= $this->Html->script('plugins/jquery-sparkline/jquery.sparkline.js') ?>
    <?= $this->Html->script('plugins/node-waves/waves.js') ?>
    <?= $this->Html->script('plugins/waitme/waitMe.js') ?>
    <?= $this->Html->script('plugins/jquery-validation/jquery.validate.js') ?>
    <?= $this->Html->script('plugins/jquery-datatable/jquery.dataTables.js') ?>
    <?= $this->Html->script('plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') ?>
    <?= $this->Html->script('plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') ?>
    <?= $this->Html->script('plugins/jquery-datatable/extensions/export/buttons.flash.min.js') ?>
    <?= $this->Html->script('plugins/jquery-datatable/extensions/export/jszip.min.js') ?>
    <?= $this->Html->script('plugins/jquery-datatable/extensions/export/pdfmake.min.js') ?>
    <?= $this->Html->script('plugins/jquery-datatable/extensions/export/vfs_fonts.js') ?>
    <?= $this->Html->script('plugins/jquery-datatable/extensions/export/buttons.html5.min.js') ?>
    <?= $this->Html->script('plugins/jquery-datatable/extensions/export/buttons.print.min.js') ?>
  
   
    <?= $this->Html->script('admin.js') ?>
    <?= $this->Html->script('demo.js') ?>
     <?= $this->Html->script('pages/tables/jquery-datatable.js') ?>
    <?= $this->Html->script('load-basic.js') ?>
    
</body>

</html>
