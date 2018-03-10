<?php 
      // // header("Refresh:2");
      

      $command = escapeshellcmd('Python.py');
      $output = shell_exec($command);
      global $obj;
      $obj = json_decode($output);

      
      
  ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Predictive maintenance | Realtime-moniter</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue">
    <div class="wrapper">
      
      <header class="main-header">
        <a href="index2.html" class="logo"><b>Admin</b>LTE</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
           </a> 
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>Alexander Pierce</p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>         
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="realtime-moniter.php"><i class="fa fa-circle-o"></i>Realtime Moniter</a></li>
                <li><a href="Historical-data.php"><i class="fa fa-circle-o"></i>Historical Data</a></li>
              </ul>
            </li>            
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Predictive maintenance Moniter
            <small>Version 1.0</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Simple</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-4">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Machine A1</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Parameter</th>
                      <th style="width: 30%">Data</th>
                    </tr>
                    <tr>
                      <td>1.</td>
                      <td>RPM</td>                      
                      <td><span class="badge bg-green"><?php global $obj; print ($obj[0]->{'RPM'});?></span></td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Temperature</td>                      
                      <td><span class="badge bg-green"><?php global $obj; print ($obj[0]->{'Temperature'});?> &deg;C</span></td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Xaxis</td>                      
                      <td><span class="badge bg-green"><?php global $obj; print ($obj[0]->{'Xaxis'});?></span></td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>Yaxis</td>                      
                      <td><span class="badge bg-green"><?php global $obj; print ($obj[0]->{'Yaxis'});?></span></td>
                    </tr>
                    <tr>
                      <td>5.</td>
                      <td>Zaxis</td>
                      <td><span class="badge bg-green"><?php global $obj; print ($obj[0]->{'Zaxis'});?></span></td>
                    </tr>
                    <tr>
                      <td>6.</td>
                      <td>Volt</td>
                      <td><span class="badge bg-green"><?php global $obj; print ($obj[0]->{'Volt'});?> V</span></td>
                    </tr>
                    <tr>
                      <td>7.</td>
                      <td>Amp</td>
                      <td><span class="badge bg-green"><?php global $obj; print ($obj[0]->{'Amp'});?> A</span></td>
                    </tr>
                  </table>
                </div><!-- /.box-body -->
                
              </div><!-- /.box -->
            </div><!-- /.col -->
            <div class="col-md-4">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Machine A2</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Parameter</th>
                      <th style="width: 30%">Data</th>
                    </tr>
                    <tr>
                      <td>1.</td>
                      <td>RPM</td>                      
                      <td><span class="badge bg-green"><?php global $obj; print ($obj[1]->{'RPM'});?></span></td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Temperature</td>                      
                      <td><span class="badge bg-green"><?php global $obj; print ($obj[1]->{'Temperature'});?> &deg;C</span></td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Xaxis</td>                      
                      <td><span class="badge bg-green"><?php global $obj; print ($obj[1]->{'Xaxis'});?></span></td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>Yaxis</td>                      
                      <td><span class="badge bg-green"><?php global $obj; print ($obj[1]->{'Yaxis'});?></span></td>
                    </tr>
                    <tr>
                      <td>5.</td>
                      <td>Zaxis</td>
                      <td><span class="badge bg-green"><?php global $obj; print ($obj[1]->{'Zaxis'});?></span></td>
                    </tr>
                    <tr>
                      <td>6.</td>
                      <td>Volt</td>
                      <td><span class="badge bg-green"><?php global $obj; print ($obj[1]->{'Volt'});?> V</span></td>
                    </tr>
                    <tr>
                      <td>7.</td>
                      <td>Amp</td>
                      <td><span class="badge bg-green"><?php global $obj; print ($obj[1]->{'Amp'});?> A</span></td>
                    </tr>
                  </table>
                </div><!-- /.box-body -->
                
              </div><!-- /.box -->
            </div><!-- /.col -->
            <div class="col-md-4">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Machine A3</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Parameter</th>
                      <th style="width: 30%">Data</th>
                    </tr>
                    <tr>
                      <td>1.</td>
                      <td>RPM</td>                      
                      <td><span class="badge bg-green"><?php global $obj; print ($obj[2]->{'RPM'});?></span></td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Temperature</td>                      
                      <td><span class="badge bg-green"><?php global $obj; print ($obj[2]->{'Temperature'});?> &deg;C</span></td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Xaxis</td>                      
                      <td><span class="badge bg-green"><?php global $obj; print ($obj[2]->{'Xaxis'});?></span></td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>Yaxis</td>                      
                      <td><span class="badge bg-green"><?php global $obj; print ($obj[2]->{'Yaxis'});?></span></td>
                    </tr>
                    <tr>
                      <td>5.</td>
                      <td>Zaxis</td>
                      <td><span class="badge bg-green"><?php global $obj; print ($obj[2]->{'Zaxis'});?></span></td>
                    </tr>
                    <tr>
                      <td>6.</td>
                      <td>Volt</td>
                      <td><span class="badge bg-green"><?php global $obj; print ($obj[2]->{'Volt'});?> V</span></td>
                    </tr>
                    <tr>
                      <td>7.</td>
                      <td>Amp</td>
                      <td><span class="badge bg-green"><?php global $obj; print ($obj[2]->{'Amp'});?> A</span></td>
                    </tr>
                  </table>
                </div><!-- /.box-body -->
                
              </div><!-- /.box -->
            </div><!-- /.col -->
           
          </div><!-- /.row -->
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Machine Status</h3>                  
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>ID</th>
                      <th>User</th>
                      <th>Date</th>
                      <th>Status</th>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Machine A1</td>
                      <td><?php  print ($obj[0]->{'Time'});?></td>
                      <td><span class="label label-success">Good</span></td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Machine A2</td>
                      <td><?php  print ($obj[1]->{'Time'});?></td>
                      <td><span class="label label-success">Good</span></td>                      
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Machine A3</td>
                      <td><?php  print ($obj[2]->{'Time'});?></td>
                      <td><span class="label label-success">Good</span></td>                      
                    </tr>                   
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js" type="text/javascript"></script>
  </body>
</html>
