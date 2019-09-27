<?php 
    include('admin/require.php');
 ?>
<!DOCTYPE html><html class="white-bg-login" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <title>Sign in</title>
    <link rel="SHORTCUT ICON" href="images/site.png" />
    <!-- bootstrap 3.0.2 -->
    <link href="bootstrap/bootstrap.min.css" rel="stylesheet"  type="text/css">
    <!-- font Awesome -->
    <link href="fonts/font-awesome.css" rel="stylesheet"  type="text/css">
    <!-- Style -->
    <link href="default/style.css" rel="stylesheet"  type="text/css">
    <!-- iNilabs css -->
    <link href="default/inilabs.css" rel="stylesheet"  type="text/css">
    <link href="default/responsive.css" rel="stylesheet"  type="text/css">
</head>

<body class="white-bg-login">
    
    <div class="col-md-4 col-md-offset-4 marg" style="margin-top:30px;">
        <center><img width='60' height='60' src=images/site.png /></center>        
        <center><h4><span style="color: #ff7500;font-weight: bold;">BTEC</span> School Management</h4></center>
    </div>    
<div class="form-box" id="login-box">
    <div class="header">Sign IN</div>
    <form method="post">

        <!-- style="margin-top:40px;" -->

        <div class="body white-bg">
                    <div class="form-group">
                <input class="form-control" placeholder="Username" name="txtUser" type="text" autofocus value="">
            </div>
            <div class="form-group">
                <input class="form-control" placeholder="Password" name="txtPassword" type="password">
            </div>
            <div>
                <select name="role">
                    <option value="admin">admin</option>
                    <option value="trainer">trainer</option>
                    <option value="trainee">trainee</option>
                </select>
            </div>
            <!-- Check box -->
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="Remember Me" name="remember">
                    <span> &nbsp; Remember Me</span>
                </label>
                <span class="pull-right">
                    <label>
                        <a href="#"> Forgot Password?</a>
                    </label>
                </span>
            </div>
                 <!-- submit   -->
             
            <input type="submit" class="btn btn-lg btn-success btn-block" name="btnLogin" value="SIGN IN" />
        </div>
    </form>
            <?php 
                if (isset($_POST["btnLogin"])) {
                    $userId = stripcslashes($_REQUEST['txtUser']);
                    $userId = mysqli_real_escape_string($conn,$userId);
                    $userPass = stripcslashes($_REQUEST['txtPassword']);
                    $userPass = mysqli_real_escape_string($conn,$userPass);
                    $role = $_REQUEST["role"];
                    if ($role=="admin")
                    {
                         $query = " SELECT * FROM tbladmin WHERE _user ='".$userId."' AND _pass ='".$userPass."' ";
                         $result = mysqli_query($conn,$query) or die(mysql_error($conn));
                         $account = mysqli_fetch_assoc($result);
                         $rows = mysqli_num_rows($result);
                    }
                    if ($role =="trainer") {
                        $query = " SELECT * FROM tbltrainerr WHERE _idTrainer ='".$userId."' AND _pass = '".$userPass."' ";
                        $result = mysqli_query($conn,$query) or die(mysqli_error($conn));
                        $account = mysqli_fetch_assoc($result);
                        $rows = mysqli_num_rows($result);
                     }
                    if ($role == "trainee") {
                        $query = "SELECT * FROM tbltrainee WHERE  _idTrainee = '".$userId."' AND _pass = '".$userPass."' ";
                        $result = mysqli_query($conn,$query) or die(mysqli_error($conn));
                        $account = mysqli_fetch_assoc($result);
                        $rows = mysqli_num_rows($result);
                    }
                    if ($rows == 0) 
                    {
                        ?>
                        <script>alert("Login Failed");
                        location.assign("http://localhost:8012/btec_manageDemo-master/DemoBTEC/login.php");
                        </script>
                        <?php
                    }
                    else 
                    {
                        if ($role == "admin") {
                             ?>
                        <script>
                            location.assign("http://localhost:8012/btec_manageDemo-master/DemoBTEC/admin/dashboard.php");
                        </script>
                        <?php 
                        }
                        else{
                            if ($role == "trainer") {
                                ?>
                                <script>
                                    location.assign("http://localhost:8012/btec_manageDemo-master/DemoBTEC/trainer/viewcourse.php");
                                </script>
                                <?php
                            }
                            else {
                                if ($role == "trainee")
                                {
                                   ?>
                                <script>
                                location.assign("http://localhost:8012/btec_manageDemo-master/DemoBTEC/trainee/dashboard.php");
                                </script>
                                <?php 
                                }
                                
                            }      
                        }
                    }
                }
              ?>    
</div>

        <div class="col-md-4 col-md-offset-4 marg" style="margin-top:30px;">
    	<nav class="navbar navbar-default">
    	  <div class="container-fluid">
    	    <div class="navbar-header">
    	      <a class="navbar-brand" href="#">
    	       &nbsp; &nbsp; &nbsp; For Quick Demo Login Click Below...
    	      </a>
    	    </div>
    	  </div>
    	</nav>
    	</div>
            
    	<div class="col-md-6 col-md-offset-3    marg" >
            
    	    <!-- <center>
    	        <div class="btn-group" role="group" aria-label="...">
    	            <button class="btn btn-sm btn-primary" value="admin" id="admin">Admin</button>
    	            <button class="btn btn-sm btn-info" value="trainer" id="teacher">Trainer</button>
    	            <button class="btn btn-sm btn-warning" value="trainee" id="student">Trainee</button>
    	    </center> -->
    	</div>

    
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>


            <!-- Demo tài khoản nhanh -->
            <script type="text/javascript">
            $('#admin').click(function () {
                $("input[name=username]").val('admin');
                $("input[name=password]").val('123456');
            });
            $('#teacher').click(function () {
                $("input[name=username]").val('training');
                $("input[name=password]").val('123456');
            });
            $('#student').click(function () {
                $("input[name=username]").val('trainee');
                $("input[name=password]").val('123456');
            });
        </script>
    </body>
</html>
