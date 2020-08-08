<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />

<!-- BEGIN CORE CSS FRAMEWORK -->
<link href="<?php echo base_url(); ?>assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<!-- END CORE CSS FRAMEWORK -->

<!-- BEGIN CSS TEMPLATE -->
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<!-- END CSS TEMPLATE -->

</head>
<!-- BEGIN BODY -->
<body class="">

<!-- BEGIN CONTAINER -->
<div class="page-container row">

  <div class="col-lg-12">

    <div class="content">
      <div class="page-title">
        <h1></h1>
      </div>

        <div class="col-md-5 col-md-offset-4">
          <div class="grid simple marginTopPercent-15">
            <div class="grid-title no-border">
              <h4>Login</h4>
            </div>

            <div class="grid-body no-border">
               <form id="login-form" class="login-form" action="<?php echo site_url('admin/login');?>" method="post">
               <div class="row">
               <div class="form-group col-md-10">
                      <label class="form-label">Email</label>
                      <div class="controls">
                  <div class="input-with-icon  right">
                    <i class=""></i>
                    <input type="email" name="email" id="email" class="form-control">
                  </div>
                      </div>
                    </div>
                    </div>
                <div class="row">
                    <div class="form-group col-md-10">
                      <label class="form-label">Password</label>
                      <span class="help"></span>
                      <div class="controls">
                  <div class="input-with-icon  right">
                    <i class=""></i>
                    <input type="password" name="password" id="password" class="form-control">
                  </div>
                      </div>
                    </div>
                    </div>
                <div class="row">
                    <div class="control-group  col-md-10">
                      <div class="checkbox checkbox check-success"> <a href="#">Forgot password?</a>&nbsp;&nbsp;
                        <input type="checkbox" id="checkbox1" value="0" checked="checked">
                        <label for="checkbox1">Remember me</label>
                      </div>
                    </div>
                    </div>
                    <div class="row">
                      <div class="col-md-10">
                        <button class="btn btn-primary btn-cons pull-right" type="submit">Login</button>
                      </div>
                    </div>
                </form>
              </div>
          </div>
      </div>
    </div>

</div>
