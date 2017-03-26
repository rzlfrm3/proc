<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url()."assets/"; ?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url()."assets/"; ?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url()."assets/"; ?>vendors/nprogress/nprogress.css" rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url()."assets/"; ?>build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo base_url()."assets/"; ?>production/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

          <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
					  <li><a href="<?php echo base_url()."index.php/admin/home/index"; ?>">Home</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
					  <li><a href="<?php echo base_url()."index.php/admin/bidang/add_data/"; ?>">Form Bidang</a></li>
					  <li><a href="<?php echo base_url()."index.php/admin/golongan/add_data/"; ?>">Form Golongan</a></li>
					  <li><a href="<?php echo base_url()."index.php/admin/jabatan/add_data/"; ?>">Form Jabatan</a></li>
					  <li><a href="<?php echo base_url()."index.php/admin/jenisusulan/add_data/"; ?>">Form Jenis Usulan</a></li>
					  <li><a href="<?php echo base_url()."index.php/admin/kategori/add_data/"; ?>">Form Kategori</a></li>
					  <li><a href="<?php echo base_url()."index.php/admin/kepalabidang/add_data/"; ?>">Form Kepala Bidang</a></li>
					  <li><a href="<?php echo base_url()."index.php/admin/level/add_data/"; ?>">Form Level</a></li>
					  <li><a href="<?php echo base_url()."index.php/admin/subbidang/add_data/"; ?>">Form Sub Bidang</a></li>
					  <li><a href="<?php echo base_url()."index.php/admin/pegawai/add_data/"; ?>">Form Pegawai</a></li>
					  <li><a href="<?php echo base_url()."index.php/admin/pejabatpengadaan/add_data/"; ?>">Form Pejabat Pengadaan</a></li>
					  <li><a href="<?php echo base_url()."index.php/admin/usulan/add_data/"; ?>">Form Usulan</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
					  <li><a href="<?php echo base_url()."index.php/admin/bidang/index/"; ?>">Table Bidang</a></li>
					  <li><a href="<?php echo base_url()."index.php/admin/golongan/index/"; ?>">Table Golongan</a></li>
					  <li><a href="<?php echo base_url()."index.php/admin/jabatan/index/"; ?>">Table Jabatan</a></li>
                      <li><a href="<?php echo base_url()."index.php/admin/jenisusulan/index/"; ?>">Table Jenis Usulan</a></li>
					  <li><a href="<?php echo base_url()."index.php/admin/kategori/index/"; ?>">Table Kategori</a></li>
					  <li><a href="<?php echo base_url()."index.php/admin/kepalabidang/index/"; ?>">Table Kepala Bidang</a></li>
					  <li><a href="<?php echo base_url()."index.php/admin/level/index/"; ?>">Table Level</a></li>
					  <li><a href="<?php echo base_url()."index.php/admin/subbidang/index/"; ?>">Table Sub Bidang</a></li>
					  <li><a href="<?php echo base_url()."index.php/admin/pegawai/index/"; ?>">Table Pegawai</a></li>
					  <li><a href="<?php echo base_url()."index.php/admin/pejabatpengadaan/index/"; ?>">Table Pejabat Pengadaan</a></li>
					  <li><a href="<?php echo base_url()."index.php/admin/usulan/index/"; ?>">Table Usulan</a></li>
                    </ul>
                  </li>   
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo base_url()."assets/"; ?>production/images/img.jpg" alt="">John Doe
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green"><?=$jlhnotif?></span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
				   <?php $no=0; foreach($notifikasi as $rnotif){ $no++;
								if($no % 2==0){$strip='strip1';} 
								else{$strip='strip2';}
							 ?>
                    <li>
                      <a>
                          <span><a href="#" class="<?=$strip?>"> USLN - <?=$rnotif->id_usulan?>  </span>
                          <span class="time"><?=timeAgo($rnotif->tgl)?></span>
                        </span>
						<span class="message">ID PPK - 
						<?=$rnotif->id_pejabatpengadaan?>
                        </span> 
                        <span class="message">
						<?=$rnotif->hal?>
                        </span> 
					
                      </a>
                    </li>
					<?php }?>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Validation</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                          </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form validation <small>sub title</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <form class="form-horizontal form-label-left" method="POST" action="<?php echo base_url()."index.php/admin/subbidang/do_insert"; ?>">

                      <p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>
                      </p>
                      <span class="section">Personal Info</span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">ID SUBBIDANG<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="number" id="number" name="id_subbidang" required="required"  class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">NAMA SUBBIDANG<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" name="nama_subbidang" required="required" type="text">
                        </div>
                      </div>
					   <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">NAMA BIDANG</label>
								<div class="col-md-7 col-xs-12" >
								<?php 
								$dd_bidang = 'class="form-control" ';
								echo form_dropdown('id_bidang', $bidang, $bidang_selected, $dd_bidang);
								?>	
								</div>
						 </div>
			       <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Cancel</button> 
                          <button id="send" type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url()."assets/"; ?>vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url()."assets/"; ?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url()."assets/"; ?>vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url()."assets/"; ?>vendors/nprogress/nprogress.js"></script>
    <!-- validator -->
    <script src="<?php echo base_url()."assets/"; ?>vendors/validator/validator.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url()."assets/"; ?>build/js/custom.min.js"></script>
	
  </body>
</html>