<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Barcode System">
  <meta name="author" content="">

  <title>Barcode System</title>

  <link rel="apple-touch-icon" href="<?= base_url(); ?>assets/images/apple-touch-icon.png">
  <link rel="shortcut icon" href="<?= base_url(); ?>assets/images/favicon.ico">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/global/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/global/css/bootstrap-extend.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/site.min.css">

  <!-- Plugins -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/animsition/animsition.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/asscrollable/asScrollable.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/switchery/switchery.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/intro-js/introjs.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/slidepanel/slidePanel.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/flag-icon-css/flag-icon.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/waves/waves.css">

  <!-- Toaster -->

  <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/toastr/toastr.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/examples/css/advanced/toastr.css">


  <!-- Fonts -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/global/fonts/material-design/material-design.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/global/fonts/brand-icons/brand-icons.min.css">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

  <?php $this->renderSection("content_css"); ?>
  <!-- Scripts -->
  <script src="<?= base_url(); ?>assets/global/vendor/breakpoints/breakpoints.js"></script>
  <script>
    Breakpoints();
  </script>
</head>

<body class="animsition site-navbar-small dashboard">

  <?php echo $this->include('layout/partial/header') ?>
  <?php echo $this->include('layout/partial/navbar') ?>


  <!-- Page -->
  <div class="page">
    <div class="page-header">
      <h1 class="page-title">
        <?php $this->renderSection('content_title'); ?>
      </h1>
      <div class="page-header-actions">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
          <?php $this->renderSection('content_breadcrumb'); ?>
        </ol>
      </div>
    </div>
    <div class="page-content">
      <?php if (isset(session()->flashMsgStatus)) : ?>
        <?php if (session()->flashMsgStatus) : ?>
          <div class="toast-example">
            <div class="toast toast-just-text toast-success">
              <div class="toast-message">
                <?= session()->flashMsgContent ?>
              </div>
            </div>
          </div>
        <?php else: ?>
          <div class="toast-example">
            <div class="toast toast-just-text toast-danger">
              <div class="toast-message">
                <?= session()->flashMsgContent ?>
              </div>
            </div>
          </div>
        <?php endif; ?>
      <?php endif; ?>
      <?php $this->renderSection('content') ?>
    </div>
  </div>
  <!-- End Page -->
  <?php echo $this->include('layout/partial/footer') ?>
</body>
<!-- Footer -->

<!-- Core  -->
<script src="<?= base_url(); ?>assets/global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
<script src="<?= base_url(); ?>assets/global/vendor/jquery/jquery.js"></script>
<script src="<?= base_url(); ?>assets/global/vendor/popper-js/umd/popper.min.js"></script>
<script src="<?= base_url(); ?>assets/global/vendor/bootstrap/bootstrap.js"></script>
<script src="<?= base_url(); ?>assets/global/vendor/animsition/animsition.js"></script>
<script src="<?= base_url(); ?>assets/global/vendor/mousewheel/jquery.mousewheel.js"></script>
<script src="<?= base_url(); ?>assets/global/vendor/asscrollbar/jquery-asScrollbar.js"></script>
<script src="<?= base_url(); ?>assets/global/vendor/asscrollable/jquery-asScrollable.js"></script>
<script src="<?= base_url(); ?>assets/global/vendor/waves/waves.js"></script>

<!-- Plugins -->
<script src="<?= base_url(); ?>assets/global/vendor/switchery/switchery.js"></script>
<script src="<?= base_url(); ?>assets/global/vendor/intro-js/intro.js"></script>
<script src="<?= base_url(); ?>assets/global/vendor/screenfull/screenfull.js"></script>
<script src="<?= base_url(); ?>assets/global/vendor/slidepanel/jquery-slidePanel.js"></script>

<!-- Scripts -->
<script src="<?= base_url(); ?>assets/global/js/Component.js"></script>
<script src="<?= base_url(); ?>assets/global/js/Plugin.js"></script>
<script src="<?= base_url(); ?>assets/global/js/Base.js"></script>
<script src="<?= base_url(); ?>assets/global/js/Config.js"></script>

<script src="<?= base_url(); ?>assets/js/Section/Menubar.js"></script>
<script src="<?= base_url(); ?>assets/js/Section/Sidebar.js"></script>
<script src="<?= base_url(); ?>assets/js/Section/PageAside.js"></script>
<script src="<?= base_url(); ?>assets/js/Plugin/menu.js"></script>

<!-- Config -->
<script src="<?= base_url(); ?>assets/global/js/config/colors.js"></script>
<script src="<?= base_url(); ?>assets/js/config/tour.js"></script>
<script>
  Config.set('assets', '../assets');
</script>

<!-- Page -->
<script src="<?= base_url(); ?>assets/js/Site.js"></script>
<script src="<?= base_url(); ?>assets/global/js/Plugin/asscrollable.js"></script>
<script src="<?= base_url(); ?>assets/global/js/Plugin/slidepanel.js"></script>
<script src="<?= base_url(); ?>assets/global/js/Plugin/switchery.js"></script>
<script>
  (function(document, window, $) {
    'use strict';

    var Site = window.Site;
    $(document).ready(function() {
      Site.run();
    });
  })(document, window, jQuery);
</script>
<script src="<?= base_url(); ?>assets/global/vendor/toastr/toastr.js"></script>
<script src="<?= base_url(); ?>assets/global/js/Plugin/toastr.js"></script>

<?php $this->renderSection("content_js"); ?>
<?php $this->renderSection("misc"); ?>


</html>