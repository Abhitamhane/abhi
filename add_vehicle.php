<?php
session_start();
error_reporting(0);
include('includes/config.php');
//$n=10;
   //$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
   // $randomString = '';   
    //for ($i = 0; $i < $n; $i++) 
    //{ 
     //   $index = rand(1, strlen($characters) - 1); 
//$randomString = $characters[$index]; 
    //}  

if(strlen($_SESSION['alogin'])=="")
    {   
    header("Location: index.php"); 
    }
    else{


if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $aadhar=$_POST['aadhar'];
    $chassisno=$_POST['chassisno'];
    $engineno=$_POST['engineno'];
    $vechileclass=$_POST['vechileclass'];
    $fueltype=$_POST['fueltype'];
    $color=$_POST['color'];
    $seatingtype=$_POST['seatingtype'];
    $rto=$_POST['rto'];
    $status=0;
    $vehiclenumber=mt_rand(1000,9999);
   




    $sql=" INSERT INTO vehicle( name, aadhar, chassisno, engineno, vechileclass, fueltype, color, seatingtype, rto, status, vehiclenumber) VALUES (:name,:aadhar, :chassisno, :engineno, :vechileclass, :fueltype, :color, :seatingtype, :rto, :status, :vehiclenumber)";

    $query=$dbh->prepare($sql);
    $query->bindParam(':name',$name,PDO::PARAM_STR);
    $query->bindParam(':aadhar',$aadhar,PDO::PARAM_STR);
    $query->bindParam(':chassisno',$chassisno,PDO::PARAM_STR);
    $query->bindParam(':engineno',$engineno,PDO::PARAM_STR);
    $query->bindParam(':vechileclass',$vechileclass,PDO::PARAM_STR);
    $query->bindParam(':fueltype',$fueltype,PDO::PARAM_STR);
    $query->bindParam(':color',$color,PDO::PARAM_STR);
    $query->bindParam(':seatingtype',$seatingtype,PDO::PARAM_STR);
    $query->bindParam(':rto',$rto,PDO::PARAM_STR);
    $query->bindParam(':status',$status,PDO::PARAM_STR);
    $query->bindParam(':vehiclenumber',$vehiclenumber,PDO::PARAM_STR);


     $query->execute();
     $LastInsertId=$dbh->lastInsertId();
       if ($LastInsertId>0)
            {
                $msg=" Vehicle info added successfully";
            }
    else 
{
$error="Something went wrong. Please try again";
}

}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>RTO Admin| Vehicle Registration< </title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" >
        <link rel="stylesheet" href="css/select2/select2.min.css" >
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
    </head>
    <body class="top-navbar-fixed">
        <div class="main-wrapper">

            <!-- ========== TOP NAVBAR ========== -->
  <?php include('includes/topbar.php');?> 
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">

                    <!-- ========== LEFT SIDEBAR ========== -->
                   <?php include('includes/leftbar.php');?>  
                    <!-- /.left-sidebar -->

                    <div class="main-page">

                     <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">Vehicle Registration</h2>
                                
                                </div>
                                
                                <!-- /.col-md-6 text-right -->
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
                                        <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                                
                                        <li class="active">Vehicle Registration</li>
                                    </ul>
                                </div>
                             
                            </div>
                            <!-- /.row -->
                        </div>
                        <div class="container-fluid">
                           
                        <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Fill the Vehicle info</h5>
                                                </div>
                                            </div>
                                            <div class="panel-body">
<?php if($msg){?>
<div class="alert alert-success left-icon-alert" role="alert">
 <strong>Well done!</strong><?php echo htmlentities($msg); ?>
 </div><?php } 
else if($error){?>
    <div class="alert alert-danger left-icon-alert" role="alert">
                                            <strong>Oh snap!</strong> <?php echo htmlentities($error); ?>
                                        </div>
                                        <?php } ?>
<form class="form-horizontal" method="post">




<div class="form-group">
<label for="default" class="col-sm-2 control-label">Name: </label>
<div class="col-sm-10">
<input type="text" name="name" class="form-control" id="name" required="required" autocomplete="off">
</div>
</div>

<div class="form-group">
<label for="default" class="col-sm-2 control-label">Aadhar No: </label>
<div class="col-sm-10">
<input type="number" name="aadhar" class="form-control" id="aadhar" required="required" autocomplete="off">
</div>
</div>


<div class="form-group">
<label for="default" class="col-sm-2 control-label">Chassis No: </label>
<div class="col-sm-10">
<input type="text" name="chassisno" class="form-control" id="chassisno" required="required" autocomplete="off">
</div>
</div>


<div class="form-group">
<label for="default" class="col-sm-2 control-label">Engine No:</label>
<div class="col-sm-10">
<input type="text" name="engineno" class="form-control" id="engineno" required="required" autocomplete="off">
</div>
</div>


 <div class="form-group">
             <label for="default" class="col-sm-2 control-label">Vehicle Class:</label>
<div class="col-sm-10">
<select name="vechileclass" class="form-control" id="default" required="required">
<option value="">Select Vehicle Class</option>
<?php $sql = "SELECT * from vehicle_class";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
{   ?>
<option value="<?php echo htmlentities($result->vehicle_code); ?>"><?php echo htmlentities($result->vehicle_class); ?></option>
<?php }} ?>
 </select>

</div>
</div>



<div class="form-group">
<label for="default" class="col-sm-2 control-label">Fuel Type:</label>
<div class="col-sm-10">
<select name="fueltype" class="form-control" id="default" required="required">
<option value="">Choose Fuel Type</option>
<option value="Petrol">Petrol</option>
<option value="Diesel">Diesel</option>
 </select>

</div>
</div>


<div class="form-group">
<label for="default" class="col-sm-2 control-label">Color:</label>
<div class="col-sm-10">
<input type="text" name="color" class="form-control" id="ecolor" required="required" autocomplete="off">
</div>
</div>



<div class="form-group">
<label for="default" class="col-sm-2 control-label">Seating Capacity:</label>
<div class="col-sm-10">
<input type="number" name="seatingtype" class="form-control" id="seatingtype" required="required" autocomplete="off">
</div>
</div>


<div class="form-group">
             <label for="default" class="col-sm-2 control-label">RTO:</label>
<div class="col-sm-10">
<select name="rto" class="form-control" id="default" required="required">
<option value="">Select RTO</option>
<?php $sql = "SELECT * from rto_branch";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
{   ?>
<option value="<?php echo htmlentities($result->RTO_Code); ?>"><?php echo htmlentities($result->Branch_Name); ?></option>
<?php }} ?>
 </select>

</div>
</div>






            

                                                    
<div class="form-group">
<div class="col-sm-offset-2 col-sm-10">
<button type="submit" name="submit" class="btn btn-primary">ADD</button>
</div>
</div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-md-12 -->
                                </div>
                    </div>
                </div>
                <!-- /.content-container -->
            </div>
            <!-- /.content-wrapper -->
        </div>
        <!-- /.main-wrapper -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>
        <script src="js/prism/prism.js"></script>
        <script src="js/select2/select2.min.js"></script>
        <script src="js/main.js"></script>
        <script>
            $(function($) {
                $(".js-states").select2();
                $(".js-states-limit").select2({
                    maximumSelectionLength: 2
                });
                $(".js-states-hide").select2({
                    minimumResultsForSearch: Infinity
                });
            });
        </script>
    </body>
</html>
<?PHP } ?>
