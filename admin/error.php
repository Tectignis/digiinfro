
<?php

include("include/config.php");
if(isset($_POST["404submit"])){

  $page_name=$_POST['page_name'];
  $page_number=$_POST['page_number'];
  $second_header=$_POST['secondheader'];
  $buttontext=$_POST['buttontext'];
  $description=$_POST['description'];
  $buttontext=$_POST['buttontext'];
 
  
  
  $sql = "UPDATE error_page SET page_name = '$page_name', page_number = '$page_number', second_header = '$second_header', button_text = '$buttontext' , description = '$description' WHERE pagename = '404'";
  $result=mysqli_query($conn, $sql);
  
  }
?>
<?php
  if(isset($_POST["500submit"])){

    $page_name500=$_POST['500page_name'];
    $page_number500=$_POST['500page_number'];
    $second_header500=$_POST['500secondheader'];
    $buttontext500=$_POST['500buttontext'];
    $description500=$_POST['500description'];
    
   
    
    
    $sql = "UPDATE error_page SET page_name = '$page_name500', page_number = '$page_number500', second_header = '$second_header500',description = '$description500',button_text = '$buttontext500' WHERE pagename = '500'";
    $result=mysqli_query($conn, $sql);
    
    }
    ?>

    <?php
    if(isset($_POST["505submit"])){

      $page_name505=$_POST['504page_name'];
      $page_number505=$_POST['504page_number'];
      $second_header505=$_POST['504secondheader'];
      $buttontext505=$_POST['504buttontext'];
      $description505=$_POST['504description'];
      
      
      
      $sql = "UPDATE error_page SET page_name = '$page_name505', page_number = '$page_number505', second_header = '$second_header505', description = '$description505',button_text = '$buttontext505' WHERE pagename = '505'";
      $result=mysqli_query($conn, $sql);
      
      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <?php include("include/header.php"); ?>
    <!-- Sidebar -->
    <?php include("include/sidebar.php"); ?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          
          </div><!-- /.col -->
          <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="card card-primary">
<div class="m-4">
    <ul class="nav nav-tabs" id="myTab">
        <li class="nav-item">
            <a href="#home" class="nav-link active" data-bs-toggle="tab">404 Error</a>
        </li>
        <li class="nav-item">
            <a href="#profile" class="nav-link" data-bs-toggle="tab">500 Error</a>
        </li>
        <li class="nav-item">
            <a href="#messages" class="nav-link" data-bs-toggle="tab">505 Error</a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane fade show active" id="home">
        <form method="POST">
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-three-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                  <?php
                      $sql=mysqli_query($conn,"select * from error_page where pagename='404'");
                       while($arr=mysqli_fetch_array($sql)){               
                         ?>
                     <div class="form-group">
                    <label for="exampleInputEmail1">Page Name</label>
                    <input type="text" class="form-control" name="page_name" id="example1" value="<?php echo $arr['page_name'];?>"placeholder="Enter Title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">page Number</label>
                    <input type="text" class="form-control" value="<?php echo $arr['page_number'];?>" name="page_number" id="example1" placeholder="Enter Title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Second Header</label>
                    <input type="text" class="form-control" value="<?php echo $arr['second_header'];?>" name="secondheader" id="example1" placeholder="Enter Title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Button Text</label>
                    <input type="text" class="form-control" name="buttontext" value="<?php echo $arr['button_text'];?>" id="example1" placeholder="Enter Title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                         <textarea type="text" class="form-control" value="<?php echo $arr['description'];?>" name="description" id="example2" placeholder="Enter Description"></textarea>
                  </div>
                  <?php } ?>
                  <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="404submit">update</button>
                </div>
                  </div>
                </div>
                </div>
                </form>
        </div>
        <div class="tab-pane fade" id="profile">
            <form method="POST">
                  <?php
              $sql1=mysqli_query($conn,"select * from error_page where pagename='500'");
              $arr1=mysqli_fetch_array($sql1)  
             ?>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Page Name</label>
                    <input type="text" class="form-control" value="<?php echo $arr1['page_name'];?>" name="500page_name" id="example1" placeholder="Enter Title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">page Number</label>
                    <input type="text" class="form-control" value="<?php echo $arr1['page_number'];?>" name="500page_number" id="example1" placeholder="Enter Title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Second Header</label>
                    <input type="text" class="form-control" value="<?php echo $arr1['second_header'];?>" name="500secondheader" id="example1" placeholder="Enter Title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Button Text</label>
                    <input type="text" class="form-control" value="<?php echo $arr1['button_text'];?>" name="500buttontext" id="example1" placeholder="Enter Title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                         <textarea type="text" class="form-control" value="<?php echo $arr1['description'];?>" name="500description" id="example2" placeholder="Enter Description"></textarea>
                  </div>
                  <?php  ?>
                  <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="500submit">update</button>
                </div>
                  </form>
        </div>
        <div class="tab-pane fade" id="messages">
        <form method="POST">
                  <?php
              $sql2=mysqli_query($conn,"select * from error_page where pagename='505'");
              while($arr2=mysqli_fetch_array($sql2)){   
             ?>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Page Name</label>
                    <input type="text" class="form-control" value="<?php echo $arr2['page_name'];?>" name="504page_name" id="example1" placeholder="Enter Title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">page Number</label>
                    <input type="text" class="form-control" value="<?php echo $arr2['page_number'];?>" name="504page_number" id="example1" placeholder="Enter Title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Second Header</label>
                    <input type="text" class="form-control" value="<?php echo $arr2['second_header'];?>" name="504secondheader" id="example1" placeholder="Enter Title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Button Text</label>
                    <input type="text" class="form-control" value="<?php echo $arr2['button_text'];?>" name="504buttontext" id="example1" placeholder="Enter Title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                         <textarea type="text" class="form-control" name="504description" id="example2" value="<?php echo $arr2['description'];?>" placeholder="Enter Description"></textarea>
                  </div>
                  <?php } ?>
                  <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="505submit">update</button>
                </div>
                  </form>
        </div>
    </div>
</div>
            </div>
                  </div>
                  </div>
                  </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include("include/footer.php"); ?>

  <!-- Control Sidebar -->
 
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
