
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>SafeParking</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo base_url() ?>static/bs/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="<?php echo base_url() ?>static/bs/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?php echo base_url() ?>">SafeParking</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="<?php echo base_url() ?>">Beranda</a></li>
              <li><a href="<?php echo base_url() ?>">Tentang</a></li>
              <li><a href="<?php echo base_url() ?>">Kontak</a></li>
            </ul>
            <?php if($loggedin) : ?>
            <ul class="nav pull-right">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-white icon-user"></i> Rizky Noor Ichwan <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><?php echo anchor('dashboard','Dashboard') ?></li>
                  <li><?php echo anchor('dashboard/pengendara','Data Pribadi') ?></li>
                  <li><?php echo anchor('dashboard/kendaraan','Data Kendaraan') ?></li>
                  <li class="divider"></li>
                  <li class="nav-header">Pelanggaran</li>
                  <li><?php echo anchor('dashboard/catatan','Catatan Pelanggaran') ?></li>
                  <li><?php echo anchor('dashboard/lapor','Lapor Pelanggaran') ?></li>
                  <li class="divider"></li>
                  <li><?php echo anchor('','Sign Out') ?></li>
                </ul>
              </li>
            </ul>
          <?php else : ?>
            <form class="navbar-form pull-right" action="<?php echo base_url() ?>dashboard">
              <input class="span2" type="text" placeholder="Email">
              <input class="span2" type="password" placeholder="Password">
              <button type="submit" class="btn">Sign in</button>
            </form>
          <?php endif; ?>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">