
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Edit Trainng</title>
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
                            <i>Admin</i>                          
                        </a>
                    </div>
                </div>
                <!-- sideMenu  -->
                <ul class="sidebar-menu">
                    <li>
                        <a href="dashboard.html"><span>Dashboard</span></a>
                    </li>
                    <!-- Traning -->
                    <li class="active">
                        <a href="training.html"><span>Training</span></a>
                    </li>
                     <!-- Trainee -->
                    <li class="">
                        <a href="trainee.html"><span>Trainee</span></a>
                    </li>
                    
                    <li class="">
                        <a href="class.html"><span>Class</span></a>
                    </li>
                    
                    <li class="">
                        <a href="#subjectPage"><span>Subject</span></a>
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
        <h3 class="box-title">Training</h3>

       
        <ol class="breadcrumb">
            <li><a href="dashboard.html">Dashboard</a></li>
            <li class="active">Teacher</li>
        </ol>
    </div><!-- /.box-header -->
    <!-- form start -->
    <div class="box-body">
        <div class="row">
            <div class="col-sm-12">
                <h5 class="page-header">
                    <a href="#addTraining"></i> 
                    + Add a training</a>
                </h5>  
                <div id="hide-table">
                <label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1"></label>
            </div>
            <table id="example1" class="table table-striped table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="example1_info">
                        <thead>
                            <tr role="row">
                                <th class="col-sm-2 sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending" style="width: 160px;">#</th>

                                <th class="col-sm-2 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Photo: activate to sort column ascending" style="width: 160px;">Photo</th>

                                <th class="col-sm-2 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 160px;">Name</th>

                                <th class="col-sm-2 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 160px;">Email</th>

                                <th class="col-sm-2 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 160px;">Status</th>

                                <th class="col-sm-2 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 160px;">Action</th>
                            </tr>
                        </thead>
                        <!-- body -->
                        <tbody>
                                <tr role="row" class="odd">
                                    <td data-title="#" class="sorting_1">
                                        1 
                                    </td>

                                    <td data-title="Photo">
                                        <img src="../images/default.png" width="35px" height="35px" class="img-rounded" alt="">
                                    </td>
                                    <td data-title="Name">
                                         <!-- name -->
                                         Phạm Văn Hòa
                                    </td>

                                    <td data-title="Email">
                                        <!-- Email -->
                                        pvh@gmail.com
                                    </td>

                                    <td data-title="Status">
                                      <div class="onoffswitch-small" id="1">
                                        <input type="checkbox" id="myonoffswitch1" class="onoffswitch-small-checkbox" name="paypal_demo" checked="checked">
                                        <label for="myonoffswitch1" class="onoffswitch-small-label">
                                        <span class="onoffswitch-small-inner"></span>
                                        <span class="onoffswitch-small-switch"></span>
                                          </label>
                                      </div>           
                                    </td>
                                        <!-- action -->
                                    <td>
                                        <a href="#view1" class="btn btn-success btn-xs mrg" data-placement="top" data-toggle="tooltip" data-original-title="View">View</a>

                                        <a href="#edit1" class="btn btn-warning btn-xs mrg" data-placement="top" data-toggle="tooltip" data-original-title="Edit">Edit</a>

                                        <a href="#delete1" onclick="return confirm('you are about to delete a record. This cannot be undone. are you sure?')" class="btn btn-danger btn-xs mrg" data-placement="top" data-toggle="tooltip" data-original-title="Delete">Deleted</a>
                                    </td>
                                </tr>

                                <!-- -------------------------------------- -->
                                <tr role="row" class="even">
                                    <td data-title="#" class="sorting_1">
                                        2
                                    </td>

                                    <td data-title="Photo">
                                        <img src="../images/default.png" width="35px" height="35px" class="img-rounded" alt="">
                                    </td>

                                    <td data-title="Name">
                                        Trần Đắc Đông
                                    </td>
                                    <td data-title="Email">
                                        demo@gmail.com
                                    </td>

                                    <td data-title="Status">
                                      <div class="onoffswitch-small" id="2">
                                        <input type="checkbox" id="myonoffswitch2" class="onoffswitch-small-checkbox" name="paypal_demo" checked="checked">
                                        <label for="myonoffswitch2" class="onoffswitch-small-label">
                                            <span class="onoffswitch-small-inner"></span>
                                            <span class="onoffswitch-small-switch"></span>
                                        </label>
                                      </div>           
                                    </td>
                                    <td>
                                    <a href="#view2" class="btn btn-success btn-xs mrg" data-placement="top" data-toggle="tooltip" data-original-title="View">View</a>

                                    <a href="#edit2" class="btn btn-warning btn-xs mrg" data-placement="top" data-toggle="tooltip" data-original-title="Edit">Edit</a>

                                    <a href="deleted2#" onclick="return confirm('you are about to delete a record. This cannot be undone. are you sure?')" class="btn btn-danger btn-xs mrg" data-placement="top" data-toggle="tooltip" data-original-title="Delete">Deleted</a>
                                    </td>
                                </tr>
                    <!-- ---------------------------3--------------------------- -->
                                 <tr role="row" class="odd">
                                    <td data-title="#" class="sorting_1">
                                        1 
                                    </td>

                                    <td data-title="Photo">
                                        <img src="../images/default.png" width="35px" height="35px" class="img-rounded" alt="">
                                    </td>
                                    <td data-title="Name">
                                         <!-- name -->
                                         Nguyễn Văn An
                                    </td>

                                    <td data-title="Email">
                                        <!-- Email -->
                                        nva@gmail.com
                                    </td>

                                    <td data-title="Status">
                                      <div class="onoffswitch-small" id="1">
                                        <input type="checkbox" id="myonoffswitch3" class="onoffswitch-small-checkbox" name="paypal_demo" checked="checked">
                                        <label for="myonoffswitch3" class="onoffswitch-small-label">
                                        <span class="onoffswitch-small-inner"></span>
                                        <span class="onoffswitch-small-switch"></span>
                                          </label>
                                      </div>           
                                    </td>
                                        <!-- action -->
                                    <td>
                                        <a href="#view1" class="btn btn-success btn-xs mrg" data-placement="top" data-toggle="tooltip" data-original-title="View">View</a>

                                        <a href="#edit1" class="btn btn-warning btn-xs mrg" data-placement="top" data-toggle="tooltip" data-original-title="Edit">Edit</a>

                                        <a href="#delete1" onclick="return confirm('you are about to delete a record. This cannot be undone. are you sure?')" class="btn btn-danger btn-xs mrg" data-placement="top" data-toggle="tooltip" data-original-title="Delete">Deleted</a>
                                    </td>
                                </tr>
                                <!-- -------------------------------------- -->
                            </tbody>
                    </table>

                        <!-- end table -->
                    <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">
                        Showing 1 to 3 of 3 entries
                    </div>

                    <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                        <ul class="pagination">
                            <li class="paginate_button previous disabled" aria-controls="example1" tabindex="0" id="example1_previous">
                                <a href="#">Previous</a>
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
            </div> <!-- col-sm-12 -->
        </div><!-- row -->
    </div><!-- Body -->
</div><!-- /.box -->
<!-- <script>
  var status = '';
  var id = 0;
  $('.onoffswitch-small-checkbox').click(function() {
      if($(this).prop('checked')) {
          status = 'chacked';
          id = $(this).parent().attr("id");
      } else {
          status = 'unchacked';
          id = $(this).parent().attr("id");
      }

      if((status != '' || status != null) && (id !='')) {
          $.ajax({
              type: 'POST',
              url: "https://demo.inilabs.net/school/v4.2/teacher/active",
              data: "id=" + id + "&status=" + status,
              dataType: "html",
              success: function(data) {
                  if(data == 'Success') {
                      toastr["success"]("Success")
                      toastr.options = {
                        "closeButton": true,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": false,
                        "positionClass": "toast-top-right",
                        "preventDuplicates": false,
                        "onclick": null,
                        "showDuration": "500",
                        "hideDuration": "500",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                      }
                  } else {
                      toastr["error"]("Error")
                      toastr.options = {
                        "closeButton": true,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": false,
                        "positionClass": "toast-top-right",
                        "preventDuplicates": false,
                        "onclick": null,
                        "showDuration": "500",
                        "hideDuration": "500",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                      }
                  }
              }
          });
      }
  }); 
</script>     -->  </div>
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


