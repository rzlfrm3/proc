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
    
    <!-- Custom styling plus plugins -->
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
                    <li><a href="<?php echo base_url()."assets/"; ?>production/login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
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
                <h3></h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
				   
                    <h2><img src="<?php echo base_url()."assets/"; ?>production/images/pppgl.png" alt="Pppgl">  PUSLITBANG GEOLOGI KELAUTAN</h2>
                    <small class="pull-right">ID USULAN #<?php echo $id_usulan; ?></small> <br>
					<small class="pull-right">TANGGAL USULAN #<?php echo $tanggal; ?></small>
					<div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <section class="content invoice">
                      <!-- title row -->
                      <div class="row">
                        <div class="col-xs-12 invoice-header">
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- info row -->
                      <div class="row invoice-info">
                        <div class="col-sm-4 invoice-col">
                          From
                          <address>
                                          <strong>Iron Admin, Inc.</strong>
                                          <br>795 Freedom Ave, Suite 600
                                          <br>New York, CA 94107
                                          <br>Phone: 1 (804) 123-9876
                                          <br>Email: ironadmin.com
                                      </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                          To
                          <address>
                                          <strong>John Doe</strong>
                                          <br>795 Freedom Ave, Suite 600
                                          <br>New York, CA 94107
                                          <br>Phone: 1 (804) 123-9876
                                          <br>Email: jon@ironadmin.com
                                      </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                          <b></b>
                          <br>
                          <br>
                          <b></b> 
                          <br>
                          <b></b> 
                          <br>
                          <b>Account:</b> 968-34567
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
					  
					  <div class="row">
                        <div class="col-xs-12 ">
						<b>Sehubungan dengan kebutuhan perolehan informasi untuk mendukung kegiatan litbang maupun non-litbang di PPPGL, Kami mengajukan <?php echo $hal; ?> pada PPPGL. Adapun keperluan yang dibutuhkan sebagai Berikut :
						</div>
					  </div>
						<br>
                        <!-- Table row -->
                      <div class="row">
                        <div class="col-xs-12 table">
                          <table class="table table-striped">
                            <thead>
                              <tr>
								<th>NAMA</th>
								<th>JASALAYANAN</th>
								<th>JUMLAH</th>
							  </tr>
                            </thead>
							<tr>
							<td><?php echo $nama; ?> <br><br> <?php echo $nama; ?> </td>
							<td><?php echo $jasalayanan; ?> <br><br> <?php echo $jasalayanan; ?></td>
							<td><?php echo $jumlah; ?> <br><br> <?php echo $jumlah; ?></td></td>
							</tr>
							
                          </table>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <div class="row">
                        <!-- accepted payments column -->
                        <div class="col-xs-6">
                          <p class="lead">Payment Methods:</p>
						 
                          <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                            
                          </p>
                        </div>
                        <!-- /.col -->
                        <div class="col-xs-6">
                          <p class="lead"></p>
                          <div class="table-responsive">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <th style="width:50%">Subtotal:</th>
                                  <td>$250.30</td>
                                </tr>
                                <tr>
                                  <th>Tax (9.3%)</th>
                                  <td>$10.34</td>
                                </tr>
                                <tr>
                                  <th>Shipping:</th>
                                  <td>$5.80</td>
                                </tr>
                                <tr>
                                  <th>Total:</th>
                                  <td>$265.24</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <!-- this row will not appear when printing -->
                      <div class="row no-print">
                        <div class="col-xs-12">
                          <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
                          <button class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment</button>
                          <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button>
                        </div>
                      </div>
                    </section>
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

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url()."assets/"; ?>build/js/custom.min.js"></script>
  </body>
</html>