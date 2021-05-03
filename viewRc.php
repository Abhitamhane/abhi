<?php
session_start();
error_reporting(0);
include('includes/config.php');
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
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" >
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
    </head>
    <body>
        <div class="main-wrapper">
            <div class="content-wrapper">
                <div class="content-container">

         
                    <!-- /.left-sidebar -->

    <div class="main-page">
       <div class="container-fluid">
             <div class="row page-title-div">
               <div class="col-md-12">   
  <h2 class="title" align="center">LL Registration Details</h2>
                                </div>
                            </div>
                            <!-- /.row -->
                          
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->

                        <section class="section">
                            <div class="container-fluid">

                                <div class="row">
                              
                             

                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
<?php
// code Student Data
$chassisno=$_POST['chassisno'];

$_SESSION['chassisno']=$chassisno;

$qery = "SELECT vehicle.chassisno, vehicle.vehiclenumber, vehicle.aadhar, vehicle.rto, vehicle.status, vehicle.color, vehicle.seatingtype, vehicle.fueltype, vehicle.engineno, vehicle.vechileclass, vehicle.regdate, vehicle.name from vehicle where vehicle.chassisno=:chassisno";


$stmt = $dbh->prepare($qery);
$stmt->bindParam(':chassisno',$chassisno,PDO::PARAM_STR);

$stmt->execute();
$resultss=$stmt->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($stmt->rowCount() > 0)
{
foreach($resultss as $row)
{   ?>
  
<?php

if($row->status==1)
{
?>
        <table class="table table-hover table-bordered" align="center">

        <tr>
                 <th colspan="2">
                        <center><p><b>Vehicle No : <?php echo htmlentities($row->rto);?> <?php echo htmlentities($row->vehiclenumber);?></b></p></center>
                 </th>
            </tr>

                <tr>
                    <th>
        <p><b>Name :</b> <?php echo htmlentities($row->name);?></p>
                    </th>
                    <th>
        <p><b>Aadhar No :</b> <?php echo htmlentities($row->aadhar);?></p>
                    </th>
                </tr>
                <tr>
                    <th>
        <p><b>Chassis No :</b> <?php echo htmlentities($row->chassisno);?></p>
                    </th>
                    <th>
        <p><b>Engine No :</b> <?php echo htmlentities($row->engineno);?></p>
                    </th>
                </tr>
                <tr>
                 <th>
        <p><b>Vehicle Type :</b> <?php echo htmlentities($row->vechileclass);?></p>
                    </th>
                    <th>
        <p><b>Fuel Type :</b> <?php echo htmlentities($row->fueltype);?></p>
                    </th>
            </tr>


            <tr>
                 <th>
        <p><b>Color :</b> <?php echo htmlentities($row->color);?></p>
                    </th>
                    <th>
        <p><b>Seating capacity :</b> <?php echo htmlentities($row->seatingtype);?></p>
                    </th>
            </tr>



<tr>
                 <th colspan="2">
                        <center><p><b>Registration Date  : <?php echo htmlentities($row->regdate);?></b></p></center>
                 </th>
            </tr>


        </table>

<?php
}
else if($row->status==0)
{
?>
        <center><p><b>Hello.....<br> <?php echo htmlentities($row->name);?></b></p>
        <b>Your RC Application Is Still Pending</b>
        </center>

<?php
}
else
{
?>
    <br>


    <center><p><b>Hello.....<br> <?php echo htmlentities($row->name);?></b></p>
    <b>Your LL Application Is Rejected</b>


    <br>
    <br>
    <br>
    <div class="">
        <b><u><a href="index.php">
            REAPPLY FOR LL
        </a></u></b>
      </div>

    </center>
<?php
}
?>





<?php 
}
?>

<?php 
}
else{
    ?>
<div class="alert alert-warning left-icon-alert" role="alert">
                                            <strong>Notice!</strong> Your Aadhar Number is not registered in our system
                                        </div>
<?php    
}
?>
                                            </div>
                                          </div>
                                        <!-- /.panel -->
                                    </div>
                                    <!-- /.col-md-6 -->

                                    <div class="form-group">
                                                           
                                                            <div class="col-sm-6">
                                                               <a href="index.php">Back to Home</a>
                                                            </div>
                                                        </div>

                                </div>
                                <!-- /.row -->
  
                            </div>
                              <p class="text-muted text-center"><small>Copyright © <a href="">Abhishek Tamhane</a> 2020</small></p>
                            <!-- /.container-fluid -->
                        </section>
                        <!-- /.section -->

                    </div>
                    <!-- /.main-page -->

                  
                </div>
                <!-- /.content-container -->
            </div>
            <!-- /.content-wrapper -->

        </div>
        <!-- /.main-wrapper -->

        <!-- ========== COMMON JS FILES ========== -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->
        <script src="js/prism/prism.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script>
            $(function($) {

            });
        </script>

        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->

    </body>
</html>
