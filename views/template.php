<?php defined("SYSPATH") OR die("No direct script access."); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
  <head>
    <meta charset="utf-8">
    <?php echo Meta::tags(); ?>
    <?php echo Meta::links(); ?>
    <title><?php echo $head_title ?></title>
    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <?php echo Assets::css(); ?>
    <!--[if lt IE 8]>
      <link type="text/css" href="/media/css/font-awesome-ie7.css" rel="stylesheet" media="all">
    <![endif]-->
    <style> #slides { display:none; } </style>
  </head>
  <body id="<?php echo $page_id; ?>" class="<?php echo $page_class; ?>">
    <!-- Start site navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a href="<?php echo $site_url ?>" title="<?php echo $site_name ?>" class="brand">
            <img class="logo" title="<?php echo $site_name ?>" alt="<?php echo $site_name ?>m" src="<?php echo URL::site($template->site_logo)?>"></a>
          </a>
        </div>
      </div>
    </div>
    <!-- End site navbar -->
    <?php include Kohana::find_file('views', $is_admin ? 'admin.tpl' : 'default.tpl'); ?>

    <?php echo Assets::js(FALSE); ?>
    <?php echo Assets::codes(FALSE); ?>
    <?php echo $profiler; ?>
  </body>
</html>