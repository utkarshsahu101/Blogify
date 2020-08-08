<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="UTF-8" />
<title>Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />

<!-- BEGIN CORE CSS FRAMEWORK -->
<link href="<?php echo base_url(); ?>assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<!-- END CORE CSS FRAMEWORK -->

<link href="<?php echo base_url(); ?>assets/plugins/bootstrap-switch/bootstrap-switch.min.css" rel="stylesheet">

<link href="<?php echo base_url(); ?>assets/css/libs/bootstrap-wysihtml5.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/libs/wysiwyg-color.css" rel="stylesheet">

<!-- BEGIN CSS TEMPLATE -->
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<!-- END CSS TEMPLATE -->

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">

</head>
<!-- BEGIN BODY -->
<body class="">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-inverse ">
  <!-- BEGIN TOP NAVIGATION BAR -->
  <div class="navbar-inner">
    <div class="header-seperation">
      <ul class="nav pull-left notifcation-center" id="main-menu-toggle-wrapper" style="display:none">
        <li class="dropdown"> <a id="main-menu-toggle" href="#main-menu"  class="" >
          <div class="iconset top-menu-toggle-white"></div>
          </a> </li>
      </ul>
      <!-- BEGIN LOGO -->
      <a href="<?php echo base_url(); ?>" id="logo">ADMIN</a>
      <!-- END LOGO -->
      <ul class="nav pull-right notifcation-center">
        <li class="dropdown" id="header_task_bar"> <a href="<?php echo base_url(); ?>" class="dropdown-toggle active" data-toggle="">
          <div class="iconset top-home"></div>
          </a> </li>
        <li class="dropdown" id="header_inbox_bar" > <a href="email.html" class="dropdown-toggle" >
          <div class="iconset top-messages"></div>
          <span class="badge" id="msgs-badge">2</span> </a></li>
        <li class="dropdown" id="portrait-chat-toggler" style="display:none"> <a href="#sidr" class="chat-menu-toggle">
          <div class="iconset top-chat-white "></div>
          </a> </li>
      </ul>
    </div>
    <!-- END RESPONSIVE MENU TOGGLER -->
    <div class="header-quick-nav" >
      <!-- BEGIN TOP NAVIGATION MENU -->
      <div class="pull-left">
        <ul class="nav quick-section">
          <li class="quicklinks"> <a href="#" class="" id="layout-condensed-toggle" >
            <div class="iconset top-menu-toggle-dark"></div>
            </a> </li>
        </ul>
        <ul class="nav quick-section">
          <li class="quicklinks"> <a href="#" class="" >
            <div class="iconset top-reload"></div>
            </a> </li>
          <li class="quicklinks"> <span class="h-seperate"></span></li>
          <li class="quicklinks"> <a href="#" class="" >
            <div class="iconset top-tiles"></div>
            </a> </li>
          <li class="m-r-10 input-prepend inside search-form no-boarder"> <span class="add-on"> <span class="iconset top-search"></span></span>
            <input name="" type="text"  class="no-boarder " placeholder="Search" style="width:250px;">
          </li>
        </ul>
      </div>
      <!-- END TOP NAVIGATION MENU -->
      <!-- BEGIN CHAT TOGGLER -->
      <div class="pull-right">
        <div class="chat-toggler">
          <div class="user-details">

            <?php if (isset($personell)) : ?>
              <div class="username"> <?php echo $personell["name"];?> <span class="bold"><?php echo $personell["surname"];?></span> </div>
            <?php endif ?>

          </div>
          <!-- <div class="iconset top-down-arrow"></div> -->

          <div class="profile-pic"> <img src="assets/img/profiles/avatar_small.jpg"  alt="" data-src="assets/img/profiles/avatar_small.jpg" data-src-retina="assets/img/profiles/avatar_small2x.jpg" width="35" height="35" /> </div>

          <a href="<?php echo base_url();?>admin/logout">Logout</a>
        </div>

      </div>
      <!-- END CHAT TOGGLER -->
    </div>
    <!-- END TOP NAVIGATION MENU -->
  </div>
  <!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->
<!-- BEGIN CONTAINER -->
<div class="page-container row">
  <!-- BEGIN SIDEBAR -->
  <div class="page-sidebar" id="main-menu">
  <!-- BEGIN MINI-PROFILE -->
   <div class="user-info-wrapper">

    <div class="user-info">
      <div class="greeting">Welcome</div>
      <div class="status">Permission<a href="#"><div class="status-icon green"></div>
        <?php
          if(isset($personell)){
            if ($personell["auth_id"] == 1) {
              echo "Admin";
            } else {
              echo "User";
            }
          }
        ?>
      </a></div>

      <div class="personell-auth hidden"><?php echo $personell["auth_id"]; ?></div>
      <div class="panel-user-id hidden"><?php echo $personell["person_id"]; ?></div>
    </div>
   </div>
  <!-- END MINI-PROFILE -->

   <!-- BEGIN SIDEBAR MENU -->
    <ul>
      <li class="start active "> <a href="<?php echo base_url(); ?>"> <i class="icon-custom-home"></i> <span class="title">Dashboard</span> <span class="selected"></span> <span class="badge badge-important pull-right">5</span></a> </li>

      <li class=""> <a href="<?php echo base_url();?>admin/listPosts"> <i class="fa fa-handshake-o" aria-hidden="true"></i> <span class="title">List Posts</span></a></li>

  	  <li class=""> <a href="<?php echo base_url();?>/admin/addNewPost"> <i class="fa fa-handshake-o" aria-hidden="true"></i> <span class="title">Add New Post</span></a></li>

    </ul>
	<div class="clearfix"></div>
    <!-- END SIDEBAR MENU -->
  </div>
  <div class="footer-widget">
    <div class="pull-right">
      <a href="lockscreen.html"><i class="fa fa-power-off"></i></a></div>
  </div>
  <!-- END SIDEBAR -->
