
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Trainee</title>
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
                        <p>Trainee</p>
                        <a href="#profileAdmin">
                            <i>Trainee</i>                          
                        </a>
                    </div>
                </div>
                <!-- sideMenu  -->
                <ul class="sidebar-menu">
                    <li>
                        <a href="dashboard.html"><span>Dashboard</span></a>
                    </li>
                    <!-- Traning -->
                   
                     <!-- Trainee -->
                    <li class="active">
                        <a href="trainee.html"><span>Trainee</span></a>
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
          <!-- Bảng Phân tích dữ liệu -->
       <div class="col-xs-12">
                        <div class="box">
    <div class="box-header">
        <h3 class="box-title">Trainee</h3>
        <ol class="breadcrumb">
            <li><a href="dashboard.html">Dashboard</a></li>
            <li class="active">Trainee</li>
        </ol>
    </div><!-- /.box-header -->
    <!-- form start -->
    <div class="box-body">
        <div class="row">
            <div class="col-sm-12">       
                <div id="hide-table">
                    <!-- bảng trainee -->
                    <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                            <div class="well">

        <div class="row">
            <div class="col-sm-6">
                <button class="btn-cs btn-sm-cs" onclick="javascript:printDiv('printablediv')">
                    Print 
                </button>
                <a href="#" class="btn-cs btn-sm-cs" style="text-decoration: none;" role="button" target="_blank">
                    PDF Preview
                </a>
                <button class="btn-cs btn-sm-cs" data-toggle="modal" data-target="#mail">
                    Send Pdf to Mail
                </button>
            </div>
            <!-- Bảng thống kê thông tin trainee -->
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li><a href="dashboard.html">Dashboard</a></li>
                    <li><a href="trainee.html">Trainee</a></li>
                    <li class="active">View</li>
                </ol>
            </div>
        </div>
    </div>
            <!-- box-right -->
    <div id="printablediv">
        <div class="row">
            <div class="col-sm-3">
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <img src="../images/default.png" class="profile-user-img img-responsive img-circle" alt="">
                        <h3 class="profile-username text-center">Nguyễn Văn A</h3>
                        <p class="text-muted text-center">Student</p>
                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item" style="background-color: #FFF">
                                <b>ID</b> <a class="pull-right">DVFB0123456</a>
                            </li>
                            <li class="list-group-item" style="background-color: #FFF">
                                <b>Roll</b> <a class="pull-right">3</a>
                            </li>
                            <li class="list-group-item" style="background-color: #FFF">
                                <b>Class</b> <a class="pull-right">CNTT1</a>
                            </li>
                            <li class="list-group-item" style="background-color: #FFF">
                                <b>Section</b> <a class="pull-right">A</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-sm-9">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#profile" data-toggle="tab">Profile </a></li>
                        <li><a href="#attendance" data-toggle="tab">Assignment</a></li>
                        <li><a href="#document" data-toggle="tab">Document</a></li>
                    </ul>

                    <div class="tab-content">
                        <div class="active tab-pane" id="profile">
                            <div class="panel-body profile-view-dis">
                                <div class="row">
                                    <div class="profile-view-tab">
                                        <p><span>Class </span>: CNTT1</p>
                                    </div>
                                    <div class="profile-view-tab">
                                        <p><span>School year</span>: 2019-2020 </p>
                                    </div>
                                    <div class="profile-view-tab">
                                        <p><span>Date of Birth </span>: 
                                        9-10-2019</p>
                                    </div>
                                    <div class="profile-view-tab">
                                        <p><span>Gender </span>: 
                                        Male</p>
                                    </div>
                                    <div class="profile-view-tab">
                                        <p><span>Email </span>: vanaN@gmail.com</p>
                                    </div>
                                    <div class="profile-view-tab">
                                        <p><span>Phone </span>: 0123456789</p>
                                    </div>
                                    <div class="profile-view-tab">
                                        <p><span>Country </span>: 
                                        Việt Nam</p>
                                    </div>
                                    <div class="profile-view-tab">
                                        <p><span>Username </span>: Văn A</p>
                                    </div>
                                    <div class="profile-view-tab">
                                        <p><span>School</span>: BTEC FPT</p>
                                    </div>
                                    <div class="profile-view-tab">
                                        <p><span>Address </span>: 133 Xuân Thủy , HN</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- routine -->

    <!-- <script language="javascript" type="text/javascript">
        function printDiv(divID) {
            var divElements = document.getElementById(divID).innerHTML;
            var oldPage = document.body.innerHTML;
            document.body.innerHTML =
              "<html><head><title></title></head><body>" +
              divElements + "</body>";
            window.print();
            document.body.innerHTML = oldPage;
            window.location.reload();
        }

        function closeWindow() {
            location.reload();
        }

        function check_email(email) {
            var status = false;
            var emailRegEx = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;
            if (email.search(emailRegEx) == -1) {
                $("#to_error").html('');
                $("#to_error").html("The To field must contain a valid email address").css("text-align", "left").css("color", 'red');
            } else {
                status = true;
            }
            return status;
        }

        $('#send_pdf').click(function() {
            var to = $('#to').val();
            var subject = $('#subject').val();
            var message = $('#message').val();
            var id = "1";
            var set = "1";
            var error = 0;

            $("#to_error").html("");
            if(to == "" || to == null) {
                error++;
                $("#to_error").html("");
                $("#to_error").html("The To field is required").css("text-align", "left").css("color", 'red');
            } else {
                if(check_email(to) == false) {
                    error++
                }
            }

            if(subject == "" || subject == null) {
                error++;
                $("#subject_error").html("");
                $("#subject_error").html("The Subject field is required").css("text-align", "left").css("color", 'red');
            } else {
                $("#subject_error").html("");
            }

            if(error == 0) {
                $('#send_pdf').attr('disabled','disabled');
                $.ajax({
                    type: 'POST',
                    url: "https://demo.inilabs.net/school/v4.2/student/send_mail",
                    data: 'to='+ to + '&subject=' + subject + "&studentID=" + id+ "&message=" + message+ "&classesID=" + set,
                    dataType: "html",
                    success: function(data) {
                        var response = JSON.parse(data);
                        if (response.status == false) {
                            $('#send_pdf').removeAttr('disabled');
                            $.each(response, function(index, value) {
                                if(index != 'status') {
                                    toastr["error"](value)
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
                            });
                        } else {
                            location.reload();
                        }
                    }
                });
            }
        });

        $('.mark-bodyID').mCustomScrollbar({
            axis:"x"
        });

        $('.studentDIV').each(function() {
            $(this).mCustomScrollbar({
                axis:"x"
            });
        });
    </script> -->
                    </div>
                </div>
            </section>
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
</script>                    --> 
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
        <!-- <script>
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
        </script> -->
    </body>
</html>


