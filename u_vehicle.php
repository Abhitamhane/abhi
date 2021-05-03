<?php
session_start();
error_reporting(0);
include('includes/config.php');

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
   if ($LastInsertId>0) {
    
echo '<script>alert("YOUR APPLICATION IS SUCCESSFULLY SUBMITED")</script>';
echo "<script>window.location.href ='index.php'</script>";

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
                                    <h4>Vehicle Registration</h4>
                                </div>
                            </div>
                            <div class="panel-body p-20">



    	 <form method="post"> 



    	 	
<div class="form-group">
  <label for="exampleInputEmail1">Name:</label>

<input type="text" name="name" value="" class="form-control" required='true'> </div>

<div class="form-group">
  <label for="exampleInputEmail1">Aadhar No:</label>

<input type="number" name="aadhar" value="" class="form-control" required='true' maxlength="12" > </div>
<div class="form-group">
  <label for="exampleInputEmail1">Chassis No:</label>

<input type="text" name="chassisno" value="" class="form-control" required='true'> </div>

<div class="form-group">
  <label for="exampleInputEmail1">Engine No:</label>

<input type="text" name="engineno" value="" class="form-control" required='true'> </div>

<div class="form-group">
  <label for="exampleInputEmail1">Vehicle Class:</label>


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
 


<div class="form-group">
  <label for="exampleInputEmail1">Fuel Type:</label>

<select type="text" name="fueltype" value="" class="form-control" required='true'>
<option value="">Choose Fuel Type</option>
<option value="Petrol">Petrol</option>
<option value="Diesel">Diesel</option>
     </select>


      </div>



<div class="form-group">
  <label for="exampleInputEmail1">Color:</label>

<input type="text" name="color" value="" class="form-control" required='true'> </div>

<div class="form-group">
  <label for="exampleInputEmail1">Seating Capacity:</label>

<input type="number" name="seatingtype" value="" class="form-control" required='true'> </div>












<div class="form-group"> <label for="exampleInputEmail1">RTO:</label>
 

 

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




<center><input type="submit" name="submit" value="SUBMIT" class="btn btn-success"><center>

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




