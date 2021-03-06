<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>A+ - Public School Grading System</title>
  <!-- Bootstrap Core CSS -->
  <link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="<?php echo base_url()?>css/sb-admin.css" rel="stylesheet">
  <!-- Morris Charts CSS -->
  <link href="<?php echo base_url()?>css/plugins/morris.css" rel="stylesheet">
  <!-- Custom Fonts -->
  <link href="<?php echo base_url()?>css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- <link href="<?php echo base_url()?>css/registration.css" rel="stylesheet"> -->
 
</head>

<body>
  <div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="index.html">A+</a>
      </div>
      <!-- Top Menu Items -->
      <ul class="nav navbar-right top-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> 

          <?php echo $this->session->userdata('username');?> 

          <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li>
              <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
            </li>
            <li>
              <a href="<?php echo base_url();?>selectlocation/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
            </li>
          </ul>
        </li>
      </ul>
      <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
          <li class="">
            <a href="<?php echo base_url();?>admin/index"><i class="fa fa-fw fa-home"></i> Home</a>
          </li>
          <li>
            <a href="<?php echo base_url();?>admin/cia"><i class="fa fa-fw fa-plus"></i> Create Instructor Account</a>
          </li>
          <li>
            <a href="<?php echo base_url();?>admin/cpa"><i class="fa fa-fw fa-plus"></i> Create Principal Account</a>
          </li>
          <li>
            <a href="<?php echo base_url();?>admin/cra"><i class="fa fa-fw fa-plus"></i> Create Registrar Account</a>
          </li>
          <li>
            <!--<a href="<?php echo base_url();?>admin/cs"><i class="fa fa-fw fa-plus"></i> Create Section</a>
          </li>
          <li>
            <a href="<?php echo base_url();?>admin/grk"><i class="fa fa-fw fa-key"></i> Generate Registration Key</a>
          </li> -->


          <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#users"><i class="fa fa-fw fa-check-square-o">  </i> View Users <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="users" class="collapse">
            <!--Section 1 -->
              <li>
                <a href="<?php echo base_url();?>admin/view_instructor"><i class="fa fa-fw fa-check-square-o"> </i>Instructor</a>
              </li>
              <!--Section 2 -->
             <li>
                <a href="<?php echo base_url();?>admin/view_student"><i class="fa fa-fw fa-check-square-o"> </i>Students</a>
              </li>
             <li>
                <a href="<?php echo base_url();?>admin/view_head"><i class="fa fa-fw fa-check-square-o"> </i>Department Head</a>
              </li>
              <li>
                <a href="<?php echo base_url();?>admin/view_reg"><i class="fa fa-fw fa-check-square-o"> </i>Registrar</a>
              </li>
            </ul>
            </li>
            <!--About-->
          <li>
            <a href="<?php echo base_url();?>admin/about"><i class="fa fa-fw fa-question-circle"></i> About</a>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </nav>