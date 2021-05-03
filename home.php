<?php
session_start();
error_reporting(0);
include('includes/config.php');
if($_SESSION['alogin']!=''){
$_SESSION['alogin']='';
}
if(isset($_POST['login']))
{
$uname=$_POST['username'];
$password=($_POST['password']);
$sql ="SELECT UserName,Password FROM admin WHERE UserName=:uname and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':uname', $uname, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['username'];
echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
} else{

    echo "<script>alert('Invalid Details');</script>";

}

}







if(isset($_POST['login1']))
{
$email=$_POST['email'];
$password=($_POST['password']);
$sql ="SELECT Email,Password FROM user WHERE Email=:email and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['email'];
echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
} else{

    echo "<script>alert('Invalid Details');</script>";

}

}
























?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Login</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" > 
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" ><!--  USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
    </head>
    <body bgcolor="bg-black-300">
        
        <div class="">


                <div class="row">
<h1 align="center">RTO Management System | Maharasthra</h1>
<marquee bgcolor="black">
             <font color="white">Copyright © AT | Brought To You By Abhishek Tamhane               </font>  




 </marquee>

            <div class="col-lg-6 visible-lg-block">

<section class="section">
                            <div class="row mt-20 ">
                                <div class="col-md-10 col-md-offset-1 pt-0">

                                    <div class="row mt-30 ">
                                        <div class="col-md-11">
                                            <div class="panel bg-black-300">
                                                <div class="panel-heading">
                                                    <div class="panel-title text-center">
                                                        <h1>User Login</h1>
                                                    </div>
                                                </div>
                                                <div class="panel-body p-20">
<p class="sub-title" align="center"><b>RTO Management System</b></p>
                                               

                    <form class="form-horizontal" method="post">
           <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                     <div class="col-sm-10">
    <input type="text" name="email" class="form-control" id="inputEmail3" placeholder="email">
              </div>
                                                        </div>
                                                        <div class="form-group">
     <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
        <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                                                            </div>
                                                        </div>

                                                        <div class="form-group mt-20">

                                                            <div class="col-sm-offset-2 col-sm-10">

    <button type="submit" name="login1" class="btn btn-success btn-labeled pull-center">Sign up<span class="btn-label btn-label-right">></i></span></button>


    
                                                            </div>
                                                        </div>
                                                    </form>




                                                </div>
                                            </div>
                                            <!-- /.panel -->
                                           
                                        </div>
                                        <!-- /.col-md-11 -->

                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.col-md-12 -->
                            </div>
                            <!-- /.row -->
                        </section>
                    </div>
                    <div class="col-lg-6 ">
                        <section class="section">
                            <div class="row mt-20 ">
                                <div class="col-md-10 col-md-offset-1 pt-0">

                                    <div class="row mt-30 ">
                                        <div class="col-md-11">
                                            <div class="panel bg-black-300">
                                                <div class="panel-heading">
                                                    <div class="panel-title text-center">
                                                        <h1>Admin Login</h1>
                                                    </div>
                                                </div>
                                                <div class="panel-body p-20">
<p class="sub-title" align="center"><b>RTO Management System</b></p>
                                               

                                                    <form class="form-horizontal" method="post">
                                                    	<div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                     <div class="col-sm-10">
    <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="UserName">
              </div>
                                                    	</div>
                                                    	<div class="form-group">
     <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
        <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                                                    		</div>
                                                    	</div>

                                                        <div class="form-group mt-20">
                                                    		<div class="col-sm-offset-2 col-sm-10">

    <button type="submit" name="login" class="btn btn-success btn-labeled pull-center">Sign in<span class="btn-label btn-label-right">></i></span></button>


    
                                                    		</div>
                                                    	</div>
                                                    </form>




                                                </div>
                                            </div>
                                            <!-- /.panel -->
                                           
                                        </div>
                                        <!-- /.col-md-11 -->

                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.col-md-12 -->
                            </div>
                            <!-- /.row -->
                        </section>
                          
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /. -->
              <p class="text-muted text-center"><b><small>Copyright © AT | Brought To You By <a href="">Abhishek Tamhane </a></small></b> </p>

        </div>
        <!-- /.main-wrapper -->

        <!-- ========== COMMON JS FILES ========== -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/jquery-ui/jquery-ui.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script>
            $(function(){

            });
        </script>

        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
    </body>
</html>
