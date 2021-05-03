<?php
session_start();
error_reporting(0);
include('includes/config.php');
    if (isset($_POST['submit']))
    {
        

$llno=mt_rand(100000000000,999999999999);

$name=$_POST['name'];
$fatherName=$_POST['fatherName'];
$dob=$_POST['dob'];
$bloodGroup=$_POST['bloodGroup'];
$address=$_POST['address'];
$aadhar=$_POST['aadhar'];
$gender=$_POST['gender'];
$mobileNumber=$_POST['mobileNumber'];
$email=$_POST['email'];
$rto=$_POST['rto'];
$status=0;    


$sql= " INSERT INTO newll(llno, name, fatherName, dob, bloodGroup, address, aadhar, gender, mobileNumber, email, rto, status) VALUES (:llno, :name, :fatherName, :dob, :bloodGroup, :address, :aadhar, :gender, :mobileNumber, :email, :rto, :status)";


$query=$dbh->prepare($sql);
$query->bindParam(':llno',$llno,PDO::PARAM_STR);

$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':fatherName',$fatherName,PDO::PARAM_STR);
$query->bindParam(':dob',$dob,PDO::PARAM_STR);
$query->bindParam(':bloodGroup',$bloodGroup,PDO::PARAM_STR);
$query->bindParam(':address',$address,PDO::PARAM_STR);
$query->bindParam(':aadhar',$aadhar,PDO::PARAM_STR);
$query->bindParam(':gender',$gender,PDO::PARAM_STR);
$query->bindParam(':mobileNumber',$mobileNumber,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':rto',$rto,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);


$query->execute();
 $LastInsertId=$dbh->lastInsertId();
   if ($LastInsertId>0) {
    
echo '<script>alert("YOUR APPLICATION IS SUCCESSFULLY SUBMITED")</script>';
echo "<script>window.location.href ='index.php'</script>";

  }
 
}

?>

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
                                    <h4>New LL Registration</h4>
                                </div>
                            </div>
                            <div class="panel-body p-20">



<form method="post"> 

  
                
<div class="form-group">
  <label for="exampleInputEmail1">Name:</label>

<input type="text" name="name" value="" class="form-control" required='true'> </div>

<div class="form-group">
  <label for="exampleInputEmail1">Father Name:</label>

<input type="text" name="fatherName" value="" class="form-control" required='true'> </div>




<div class="form-group">
  <label for="exampleInputEmail1">DOB:</label>

<input type="date" name="dob" value="" class="form-control" required='true'> </div>

<div class="form-group">
  <label for="exampleInputEmail1">Blood Group:</label>

<select type="text" name="bloodGroup" value="" class="form-control" required='true'>
<option value="">Choose Blood Group</option>
<option value="A+ve">A+ve</option>
<option value="A-ve">A-ve</option>
<option value="B+ve">B+ve</option>
<option value="B-ve">B-ve</option>
<option value="O+ve">O+ve</option>
<option value="O-ve">O-ve</option>
<option value="AB+ve">AB+ve</option>
<option value="AB-ve">AB-ve</option>
     </select>




</div>












<div class="form-group">
  <label for="exampleInputEmail1">Address:</label>

<input type="text" name="address" value="" class="form-control" required='true'> </div>

<div class="form-group">
  <label for="exampleInputEmail1">Aadhar No :</label>

<input type="Number" name="aadhar" value="" class="form-control" required='true'> </div>

<div class="form-group">
  <label for="exampleInputEmail1">Gender:</label>

<input type="radio" name="gender" value="Male" required="required" checked="">Male <input type="radio" name="gender" value="Female" required="required">Female <input type="radio" name="gender" value="Other" required="required">Other

</div>


<div class="form-group">
  <label for="exampleInputEmail1">Mobile Number :</label>

<input type="Number" name="mobileNumber" value="" class="form-control" required='true'> </div>

<div class="form-group">
  <label for="exampleInputEmail1">Email:</label>

<input type="email" name="email" value="" class="form-control" required='true'> </div>




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




