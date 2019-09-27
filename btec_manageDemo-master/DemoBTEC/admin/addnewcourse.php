<?php 
    include("require.php");
 ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Course</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link rel="SHORTCUT ICON" href="images/site.png" />
        <link rel="stylesheet" href="pace.css">
        <script type="text/javascript" src="../js/jquery.min.js"></script>
        <!-- <script type="text/javascript" src="https://demo.inilabs.net/school/v4.2/assets/slimScroll/jquery.slimscroll.min.js"></script> -->
        <script type="text/javascript" src="js/toastr.min.js"></script>
        <link href="../bootstrap/bootstrap.min.css" rel="stylesheet">
        <link href="../fonts/font-awesome.css" rel="stylesheet">
        <link href="../fonts/ini-icon.css" rel="stylesheet">
        <link href="../bootstrap/dataTables.bootstrap.css" rel="stylesheet">
        <link id="headStyleCSSLink" href="../default/style.css" rel="stylesheet">
        <link href="../css/hidetable.css" rel="stylesheet">
        <link id="headInilabsCSSLink" href="../default/inilabs.css" rel="stylesheet">
        <link href="../css/responsive.css" rel="stylesheet">
        <link href="../css/toastr.min.css" rel="stylesheet">
        <link href="../css/mailandmedia.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/buttons.dataTables.min.css" >
        <link rel="stylesheet" href="../css/combined.css" >
        <link rel="stylesheet" href="../css/ajaxloder.css" >
        <link rel="stylesheet" href="../css/jquery-ui.min.css">
        <link rel="stylesheet" href="../css/fullcalendar.css">
        <!-- script -->
        <script type="text/javascript" src="../js/highcharts.js"></script>
        <script type="text/javascript" src="../js/highcharts-more.js"></script>
        <script type="text/javascript" src="../js/data.js"></script>
        <script type="text/javascript" src="../js/drilldown.js"></script>
        <script type="text/javascript" src="../js/exporting.js"></script>
        <script type="text/javascript" src="../js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="../js/moment.min.js"></script>
        <script type="text/javascript" src="../js/fullcalendar.min.js"></script>
        <!-- tốc độ load -->
        <script type="text/javascript">
          $(window).load(function() {
            $(".se-pre-con").fadeOut("slow");;
          });
        </script>
    </head>
    <body class="skin-black fuelux">
        <div class="se-pre-con"></div>
        <div id="loading">
            <img src="../images/loader.gif" width="150" height="150"/>
        </div>
        <!-- header logo: style can be found here -->
        <header class="header">
            <a href="https://btec.fpt.edu.vn/" class="logo" style="color: #ff6f00;">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
             BTEC FPT
            </a>
            <!-- Header Navbar: style can be found here -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class=""></span>
                    <span class=""></span>
                    <span class=""></span>
                </a>

                <div class="navbar-right">
                    <!-- <ul class="nav navbar-nav">                                                  
                 
                       
                    </ul> -->
                </div>
            </nav>
        </header>

        <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="left-side sidebar-offcanvas">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">

                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img style="display:block" src="../images/default.png" class="img-circle" alt="" />
                    </div>

                    <div class="pull-left info">
                        <p>Admin</p>
                        <a href="#profileAdmin">
                            <i>Addmin</i>                          
                        </a>
                    </div>
                </div>
                <!-- sideMenu  -->
                <ul class="sidebar-menu">
                    <li>
                        <a href="dashboard.html"><span>Dashboard</span></a>
                    </li>
                    <!-- Traning -->
                    <li>
                        <a href="training.html"><span>Training</span></a>
                    </li>
                     <!-- Trainee -->
                    <li>
                        <a href="trainee.html"><span>Trainee</span></a>
                    </li>
                    
                    <li>
                        <a href="class.html"><span>Class</span></a>
                    </li>
                    
                    <li class="active">
                        <a href="#subjectPage"><span>Course</span></a>
                    </li>
                     <li>
                        <a href="#"><button type="button" class="btn btn-danger">Logout</button></a>
                    </li>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Bảng Training -->
        <aside class="right-side">
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        
<div class="box">
    <div class="box-header">
        <h3 class="box-title"> + Add a course</h3>
        <ol class="breadcrumb">
            <li><a href="dashboard.html">Dashboard</a></li>
             <li class="active">Add a course</li>
        </ol>
    </div><!-- /.box-header -->
    <!-- form start -->
    <div class="box-body">
        <div class="row">
            <div class="col-sm-12">
                <h5 class="page-header">
                    <a href="viewcourse.php">Views Course</a>
                </h5>

                <div id="hide-table">
                    <div id="example1_wrapper" class="dataTables_wrapper form-inline no-footer">
                    <label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1"></label>

                    <table id="example1" class="table table-striped table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="example1_info">
                        <thead>
                            <tr role="row">
                                <th class="col-lg-1 sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending" style="width: 71px;">ID</th>

                                <th class="col-lg-1 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Class: activate to sort column ascending" style="width: 160px;">Topic</th>

                                <th class="col-lg-2 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Class Numeric: activate to sort column ascending" style="width: 160px;">Category</th>

                                <th class="col-lg-2 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Note: activate to sort column ascending" style="width: 160px;">End Date</th>

                                <th class="col-lg-2 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Note: activate to sort column ascending" style="width: 160px;">End Date</th>

                                <th class="col-lg-1 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 160px;">Trainer</th>
                                <th class="col-lg-1 sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending" style="width: 71px;">Content</th>
                                <th class="col-lg-1 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 100px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <form action="" method="POST" accept-charset="utf-8">
                                    <tr role="row" class="odd">
                                    <td data-title="#" class="sorting_1">
                                         <input style="width:50px;" type="text" name="txtId">
                                    </td>
                                    <!-- topic -->
                                    <td data-title="topic">
                                         <select class="browser-default custom-select mb-4" name="selectTopic">
                                            <option value="" disabled>Choose option</option>
                                            <option value="1" selected>#</option>
                                            <?php 
                                                $topicQuery = "SELECT _idTopic, _name FROM tbltopic";
                                                $topicResult = mysqli_query($conn,$topicQuery) or die(mysqli_error());
                                                while ($topicRow = mysqli_fetch_assoc($topicResult)) {
                                                  ?>
                                                  <option value="<?=$topicRow['_idTopic'];?>"><?=$topicRow["_name"];?></option>
                                                  <?php
                                                }
                                             ?>
                                        </select>
                                    </td>
                                    <!-- category -->
                                    <td data-title="category">
                                        <select name="selectCategory" class="browser-default custom-select mb-4">
                                            <option value="" disabled>Choose option</option>
                                            <option value="1" selected>#</option>
                                            <?php 
                                                $categoryQuery = "SELECT _idCategory, _type FROM tblcategory";
                                                $categoryResult = mysqli_query($conn,$categoryQuery) or die(mysqli_error());
                                                while ($categoryRow = mysqli_fetch_assoc($categoryResult)) {
                                                  ?>
                                                  <option value="<?=$categoryRow['_idCategory'];?>"><?=$categoryRow["_type"];?></option>
                                                  <?php
                                                }
                                             ?>
                                        </select>
                                    </td>
                                        <!-- str date -->
                                    <td data-title="StartDate">
                                      
                                            <input type="date" name="txtStartDate">
                                                           
                                    </td>
                                     <!-- end date -->  
                                    <td data-title="EndDate">                                 
                                    
                                            <input type="date" name="txtEndDate">
                                 
                                    </td>
                                    <!-- traner -->
                                    <td data-title="Trainer">
                                         <select name="selectTrainer" class="browser-default custom-select mb-4">
                                            <option value="" disabled>Choose option</option>
                                            <option value="1" selected>#</option>
                                            <?php 
                                                $trainerQuery = "SELECT _idTrainer, _name FROM tbltrainerr";
                                                $trainerResult = mysqli_query($conn,$trainerQuery) or die(mysqli_error());
                                                while ($trainerRow = mysqli_fetch_assoc($trainerResult)) {
                                                  ?>
                                                  <option value="<?=$trainerRow['_idTrainer'];?>"><?=$trainerRow["_name"];?></option>
                                                  <?php
                                                }
                                             ?>
                                        </select>
                                    </td>
                                     <td data-title="#" class="sorting_1">
                                         <input style="width:50px;" type="text" name="txtContent">
                                    </td>
                                    <td data-title="Action">
                                    <input type="submit" name="btnadd" value="+Add" >

                                    </td>
                            </form>
                             
<?php 
    if (isset($_REQUEST['btnadd'])) {
        $newID = stripslashes($_POST["txtId"]);
        $newID = mysqli_real_escape_string($conn,$newID);
        $newContent = stripslashes($_POST["txtContent"]);
        $newContent= mysqli_real_escape_string($conn,$newContent);
        $StartDate = $_POST["txtStartDate"];
        $EndDate = $_POST["txtEndDate"];
        $selectCategory=$_POST["selectCategory"];
        $selectTopic=$_POST["selectTopic"];
        $selectTrainer = $_POST["selectTrainer"];
        $query = "INSERT INTO tblcourse VALUES ('".$newID."','".$newContent."',
        '".$StartDate."','".$EndDate."','".$selectCategory."','". $selectTopic."','".$selectTrainer."') ";
        //echo($query);
        $result = mysqli_query($conn,$query) or die(mysqli_error($conn));
        if ($result) {
             ?>
             <script>

                alert("succesfully course");
                location.assign("http://localhost:8012/btec_manageDemo-master/DemoBTEC/admin/addnewcourse.php");
           </script>
           <?php

        }
        else
        {
         ?>
             <script>
                alert("failed");
                location.assign("http://localhost:8012/btec_manageDemo-master/DemoBTEC/admin/addnewcourse.php");
           </script>
            
           <?php
        }
    }
?>
                                </tr>
                        <!-- --------------------------------------------------------- -->
                            </tbody>
                    </table>
                    <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 2 of 2 entries</div>

                    <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                        <ul class="pagination">
                            <li class="paginate_button previous disabled" aria-controls="example1" tabindex="0" id="example1_previous"><a href="#">Previous</a>
                            </li>
                            <li class="paginate_button active" aria-controls="example1" tabindex="0">
                                <a href="#">1</a>
                            </li>
                            <li class="paginate_button next disabled" aria-controls="example1" tabindex="0" id="example1_next">
                                <a href="#">Next</a>
                            </li>
                        </ul>
                    </div>
                </div>
                </div>

            </div>
        </div>
    </div>
</div>
                    </div>
                </div>
            </section>         
        </aside>
 
        <!-- Footer -->
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>by Hòa Đoàn</b>CNTT1</div>
            <strong>Copyright &copy; BTEC FPT School Management System</strong>
        </footer>
        </div>
        <!-- ./wrapper -->
        <!-- Bootstrap js -->
        <script type="text/javascript" src="../bootstrap/bootstrap.min.js"></script>
        <!-- Style js -->
        <script type="text/javascript" src="../default/style.js"></script>
        <!-- Jquery datatable tools js -->
        <script type="text/javascript" src="../js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="../js/dataTables.buttons.min.js"></script>
        <script type="text/javascript" src="../js/jszip.min.js"></script>
        <script type="text/javascript" src="../js/pdfmake.min.js"></script>
        <script type="text/javascript" src="../js/vfs_fonts.js"></script>
        <script type="text/javascript" src="../js/buttons.html5.min.js"></script>
        <!-- dataTables Tools / -->
        <script type="text/javascript" src="../js/dataTables.bootstrap.js"></script>
        <script type="text/javascript" src="../js/inilabs.js"></script>

        <!-- Jquery gritter -->
        <!-- datatable with buttons -->
        <script>
            $(document).ready(function () {
                $(document).ajaxStart(function () {
                    $("#loading").show();
                }).ajaxStop(function () {
                    $("#loading").hide();
                });
            });
        </script>

        <script>
        $(document).ready(function() {
          $('#example3, #example1, #example2').DataTable( {
              dom: 'Bfrtip',
              buttons: [
                  'copyHtml5',
                  'excelHtml5',
                  'csvHtml5',
                  'pdfHtml5'
              ],
              search: false
          } );
        } );

        // $('#example1').on( 'page.dt', function () { 
        // });
        </script>
        <!-- dataTable with buttons end -->
        <script type="text/javascript">
            $(function() {
                $("#withoutBtn").dataTable();
            });
        </script>

                            
        <script type="text/javascript">
            $("ul.sidebar-menu li").each(function(index, value) {

                if($(this).attr('class') == 'active') {
                    $(this).parents('li').addClass('active');
                }
            });
        </script>
    </body>
</html>