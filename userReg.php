<?php
session_start();
error_reporting(0);
include('includes/config.php');

    if(isset($_POST['submit']))
  {


$fname=$_POST['fullname'];
$cnum=$_POST['cnumber'];
$email=$_POST['email'];
$password=$_POST['password'];
$userid=mt_rand(1000, 9999);
$sql="insert into user(UserId,FullName,ContactNumber,Email, Password)values(:userid,:fname,:cnum,:email,:password)";
$query=$dbh->prepare($sql);
$query->bindParam(':userid',$userid,PDO::PARAM_STR);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':cnum',$cnum,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':password',$password,PDO::PARAM_STR);
 $query->execute();

   $LastInsertId=$dbh->lastInsertId();
   if ($LastInsertId>0) {
    
echo "<script>window.location.href ='index.php'</script>";
  }
  else
    {
         echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }

  

}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>RTO Management System</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/icheck/skins/flat/blue.css" >
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
    </head>
    <body class="">
        
        

        <div class="main-wrapper">


            <div class="login-bg-color bg-black-300">
              
                <div class="row">

                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel login-box">

                            <div class="panel-heading">
                                <div class="panel-title text-center">
                                    <h4>User Registration</h4>
                                </div>
                            </div>
                            <div class="panel-body p-20">

                           
  <form method="post" enctype="multipart/form-data"> 
                             
<div class="form-group"> <label for="exampleInputEmail1">Full Name</label> <input type="text" name="fullname" value="" class="form-control" required='true'> </div>

<div class="form-group"> <label for="exampleInputEmail1">Contact Number</label> <input type="text" name="cnumber" value="" class="form-control" required='true' maxlength="10" pattern="[0-9]+"> </div>

<div class="form-group"> <label for="exampleInputEmail1">Email Address</label> <input type="email" name="email" value="" class="form-control" required='true'> </div>


<div class="form-group"> <label for="exampleInputEmail1">Password</label> <input type="password" name="password" value="" class="form-control" required='true'> </div>


<button type="submit" class="btn btn-success btn-labeled pull-left" name="submit" id="submit">Add<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>

 </form>

                           
                            <div class="table-responsive">
                                   
              <div align="right">
                     <a href="index.php"><b><u>Back to Home</u></b></a>
              </div>
                                </form>

                             <hr>

                            </div>
                        </div>
                        <!-- /.panel -->
                        <p class="text-muted text-center"><small>Copyright © <a href="">Abhishek Tamhane</a> 2020</small></p>
                    </div>
                    <!-- /.col-md-6 col-md-offset-3 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /. -->

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
        <script src="js/icheck/icheck.min.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script>
            $(function(){
                $('input.flat-blue-style').iCheck({
                    checkboxClass: 'icheckbox_flat-blue'
                });
            });
        </script>

        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
    </body>
</html>
