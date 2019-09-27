
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Dashboard Admin</title>
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
             FPT TC
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

               <!--  <div class="navbar-right">
                    <ul class="nav navbar-nav">                                                  
                        
                    </ul>
                </div> -->
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
                            <i>Admin</i>                          
                        </a>
                    </div>
                </div>
                <!-- sideMenu  -->
                <ul class="sidebar-menu">
                    <li class="active">
                        <a href="dashboard.php"><span>Dashboard</span></a>
                    </li>
                    <!-- Traning -->
                    <li class="">
                        <a href="training.php"><span>Trainer</span></a>
                    </li>
                     <!-- Trainee -->
                    <li class="">
                        <a href="trainee.php"><span>Trainee</span></a>
                    </li>

                    <li class="">
                        <a href="class.php"><span>Class</span></a>
                    </li>

                    <li class="">
                        <a href="course.php"><span>Course</span></a>
                    </li>
                    <li>
                        <a href="http://localhost:8012/btec_manageDemo-master/DemoBTEC/login.php"><button type="button" class="btn btn-secondary">Logout</button></a>
                    </li>
            </section>
            <!-- /.sidebar -->
        </aside>


        <aside class="right-side">
            <section class="content">
                <div class="row">
          <!-- Bảng Phân tích dữ liệu -->
        <script type="text/javascript"> 
            $(document).ready(function() {
                var count = 7;
                var countdown = setInterval(function(){
                    $("p.countdown").html(count + " seconds remaining!");
                    if (count == 0) {
                        clearInterval(countdown);
                        $('#resetDummyData').hide();
                    }
                    count--;
                }, 1000);
            });
        </script>
    
    <!--/.end Bảng Phân tích dữ liệu -->

            <!-- Bảng Thống Kê -->
                <div class="col-lg-3 col-xs-6">
                <div class="small-box ">
                    <a class="small-box-footer bg-orange-dark" href="#trainingPage">
                        <div class="icon bg-orange-dark" style="padding: 9.5px 18px 8px 18px;">
                        </div>
                        <div class="inner ">
                            <h3 class="text-white">
                                1
                            </h3 class="text-white">
                            <p class="text-white">
                                Trainer 
                            </p>
                        </div>
                    </a>
                </div>
            </div>
                <!-- end training -->

                <div class="col-lg-3 col-xs-6">
                <div class="small-box ">
                    <a class="small-box-footer bg-teal-light" href="#traineePage">
                        <div class="icon bg-teal-light" style="padding: 9.5px 18px 8px 18px;">
                        </div>
                        <div class="inner ">
                            <h3 class="text-white">
                                2
                            </h3 class="text-white">
                            <p class="text-white">
                                Trainee
                            </p>
                        </div>
                    </a>
                </div>
            </div>
            <!-- end trainee -->

                <div class="col-lg-3 col-xs-6">
                <div class="small-box ">
                    <a class="small-box-footer bg-pink-light" target="blank" href="addnewcourse.php">
                        <div class="icon bg-pink-light" style="padding: 9.5px 18px 8px 18px;">
                        </div>
                        <div class="inner ">
                            <h3 class="text-white">
                                3
                            </h3 class="text-white">
                            <p class="text-white">
                                Management Course
                            </p>
                        </div>
                    </a>
                </div>
            </div>
            <!-- end subject -->

                <div class="col-lg-3 col-xs-6">
                <div class="small-box ">
                    <a class="small-box-footer bg-purple-light" href="">
                        <div class="icon bg-purple-light" style="padding: 9.5px 18px 8px 18px;">
                        </div>
                        <div class="inner ">
                            <h3 class="text-white">
                                4
                            </h3 class="text-white">
                            <p class="text-white">
                               Management Account
                            </p>
                        </div>
                    </a>
                </div>
            </div>
    </div>
            <!-- /.end Bảng Thống Kê -->

    <div class="row">
        <div class="col-sm-12">
            <div class="box">
                <div class="box-body" style="padding: 0px;">
                    <div id="earningGraph"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
                          <section class="panel">
          <div class="profile-db-head bg-maroon-light">
            <a href="#ProfileAdminpage">
              <img src="../images/default.png" alt="" />
             </a>

            <h1>Admin</h1>
            <p>Admin</p>

          </div>
          <table class="table table-hover">
              <tbody>
                  <tr>
                    <td>Username</td>
                    <td>admin</td>
                  </tr>
                  <tr>
                      <td>Email</td>
                    <td>vanhoa123@gmail.com</td>
                  </tr>
                  <tr>
                    <td>Phone</td>
                    <td>0123456789</td>
                  </tr>
                  <tr>
                    <td>Address</td>
                    <td>133 Xuân Thủy HN</td>
                  </tr>
              </tbody>
          </table>
        </section>
              </div>
        <div class="col-sm-8">
            <div class="box">
                <div class="box-body" style="padding: 0px;">

                 <h2 style="text-align: center;">Welcome to <span style="color: #ff6900;">FPT</span> Training Company </h2>
                <img style="   margin-left: 250px;
                            padding: 56px 20px 112px 8px;
                }" 
src="../images/student-icon.png" alt="logobtec">
              <!--   <img style="   margin-left: 250px;
                width: 400px;
                height: 270px;
                                            padding: 56px 20px 112px 8px;
                                }" 
                src="../images/logo2.png" alt="logobtec"> -->
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


