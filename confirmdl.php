<?php
session_start();
error_reporting(0);
include('includes/config.php');


    if (isset($_POST['submit']))
    {
        

$ddlno=mt_rand(100000000000,999999999999);
$dllno=$_POST['dllno'];
$dname=$_POST['dname'];
$dfatherName=$_POST['dfatherName'];
$ddob=$_POST['ddob'];
$dbloodGroup=$_POST['dbloodGroup'];
$daddress=$_POST['daddress'];
$daadhar=$_POST['daadhar'];
$dgender=$_POST['dgender'];
$dmobileNumber=$_POST['dmobileNumber'];
$demail=$_POST['demail'];
$drto=$_POST['drto'];
$dstatus=0;    


$sql= " INSERT INTO dl( dlno, llno, name, fatherName, dob, bloodGroup, address, aadhar, gender, mobileNumber, email, rto, status) VALUES (:ddlno, :dllno, :dname, :dfatherName, :ddob, :dbloodGroup, :daddress, :daadhar, :dgender, :dmobileNumber, :demail, :drto, :dstatus)";


$query=$dbh->prepare($sql);
$query->bindParam(':dllno',$dllno,PDO::PARAM_STR);
$query->bindParam(':ddlno',$ddlno,PDO::PARAM_STR);
$query->bindParam(':dname',$dname,PDO::PARAM_STR);
$query->bindParam(':dfatherName',$dfatherName,PDO::PARAM_STR);
$query->bindParam(':ddob',$ddob,PDO::PARAM_STR);
$query->bindParam(':dbloodGroup',$dbloodGroup,PDO::PARAM_STR);
$query->bindParam(':daddress',$daddress,PDO::PARAM_STR);
$query->bindParam(':daadhar',$daadhar,PDO::PARAM_STR);
$query->bindParam(':dgender',$dgender,PDO::PARAM_STR);
$query->bindParam(':dmobileNumber',$dmobileNumber,PDO::PARAM_STR);
$query->bindParam(':demail',$demail,PDO::PARAM_STR);
$query->bindParam(':drto',$drto,PDO::PARAM_STR);
$query->bindParam(':dstatus',$dstatus,PDO::PARAM_STR);


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
                                    <h4>New DL Registration</h4>
                                </div>
                            </div>
                            <div class="panel-body p-20">

<?php
// code Student Data
$aadhar=$_POST['aadhar'];
$llno=$_POST['llno'];
$_SESSION['aadhar']=$aadhar;
$_SESSION['llno']=$llno;


$qery ="SELECT newll.aadhar, newll.gender, newll.fatherName, newll.address, newll.llno, newll.rto, newll.name, newll.bloodGroup, newll.email, newll.fatherName, newll.mobileNumber, newll.status, newll.dob from newll where newll.aadhar=:aadhar && newll.llno=:llno" ;



$stmt = $dbh->prepare($qery);
$stmt->bindParam(':aadhar',$aadhar,PDO::PARAM_STR);
$stmt->bindParam(':llno',$llno,PDO::PARAM_STR);
$stmt->execute();
$resultss=$stmt->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($stmt->rowCount() > 0)
{
foreach($resultss as $result)
{   ?>
 




<form method="post"> 

  <div class="form-group">
  <label for="exampleInputEmail1">llno:</label>

<input type="disable" name="dllno" value="<?php echo htmlentities($result->llno)?>" class="form-control" required='true' readonly> </div>
                
<div class="form-group">
  <label for="exampleInputEmail1">Name:</label>

<input type="disable" name="dname" value="<?php echo htmlentities($result->name)?>" class="form-control" required='true' readonly> </div>

<div class="form-group">
  <label for="exampleInputEmail1">Father Name:</label>

<input type="disable" name="dfatherName" value="<?php echo htmlentities($result->fatherName)?>" class="form-control" required='true' readonly> </div>


<div class="form-group">
  <label for="exampleInputEmail1">DOB:</label>

<input type="disable" name="ddob" value="<?php echo htmlentities($result->dob)?>" class="form-control" required='true' readonly> </div>

<div class="form-group">
  <label for="exampleInputEmail1">Blood Group:</label>
<input type="disable" name="dbloodGroup" value="<?php echo htmlentities($result->bloodGroup)?>" class="form-control" required='true' readonly> 

</div>


<div class="form-group">
  <label for="exampleInputEmail1">Address:</label>

<input type="disable" name="daddress" value="<?php echo htmlentities($result->address)?>" class="form-control" required='true' readonly> </div>

<div class="form-group">
  <label for="exampleInputEmail1">Aadhar No :</label>

<input type="disable" name="daadhar" value="<?php echo htmlentities($result->aadhar)?>" class="form-control" required='true' readonly> </div>

<div class="form-group">
  <label for="exampleInputEmail1">Gender:</label>

<input type="disable" name="dgender" value="<?php echo htmlentities($result->gender)?>" class="form-control" required='true' readonly> </div>


<div class="form-group">
  <label for="exampleInputEmail1">Mobile Number :</label>

<input type="disable" name="dmobileNumber" value="<?php echo htmlentities($result->mobileNumber)?>" class="form-control" required='true' readonly> </div>

<div class="form-group">
  <label for="exampleInputEmail1">Email:</label>

<input type="disable" name="demail" value="<?php echo htmlentities($result->email)?>" class="form-control" required='true' readonly> </div>



<div class="form-group"> <label for="exampleInputEmail1">RTO:</label>
 
<input type="disable" name="drto" value="<?php echo htmlentities($result->rto)?>" class="form-control" required='true' readonly> </div>



    <center><input type="submit" name="submit" value="CONFIRM" class="btn btn-success"><center>
            </form>

     <?php
}
}else
{

?>
<hr>
<h2 align="center"> No LL Details Found!! </h2>
<center>
<a href="u_newll.php"><b><u> Apply for New LL </u></b></a>
<center>
  <br>
<?php
}
?>

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




