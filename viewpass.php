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
  <h2 class="title" align="center" bgcolor="black">E-Pass Registration Details</h2>
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
$ContactNumber=$_POST['ContactNumber'];

$_SESSION['ContactNumber']=$ContactNumber;

$qery = "SELECT  tblpass.ContactNumber, tblpass.PassNumber, tblpass.IdentityType, tblpass.IdentityCardno, tblpass.FullName, tblpass.FromDate, tblpass.ToDate, tblpass.status from tblpass where tblpass.ContactNumber=:ContactNumber";


$stmt = $dbh->prepare($qery);
$stmt->bindParam(':ContactNumber',$ContactNumber,PDO::PARAM_STR);

$stmt->execute();
$resultss=$stmt->fetchAll(PDO::FETCH_OBJ);
$cnt=1;

if($row->status==1)
{
    $sta=Active;
}
else
{
    $sta=Expired;
}


if($stmt->rowCount() > 0)
{
foreach($resultss as $row)
{   ?>
  

<center><p><b>Search Result : <?php echo htmlentities($cnt);?></b></p></center>

<table class="table table-hover table-bordered" align="center">

<tr>
         <th colspan="2">
             <center><p><b>Pass No : <?php echo htmlentities($row->PassNumber);?>(<?php echo htmlentities($sta);?>)</b></p></center>
         </th>
    </tr>

<tr>
         <th colspan="2">
             <center><p><b>Pass Holder Name :</b> <?php echo htmlentities($row->FullName);?></p></center>
         </th>
    </tr>

<tr>
            <th>
<p><b>Identity Type :</b><?php echo htmlentities($row->IdentityType);?></p>
            </th>
            <th>
<p><b>Identity Card No :</b><?php echo htmlentities($row->IdentityCardno);?></p>
            </th>
        </tr>
        <tr>
            <th>
<p><b>Date Of Issue :</b> <?php echo htmlentities($row->FromDate);?></p>
            </th>
            <th>
<p><b>Valid Till :</b> <?php echo htmlentities($row->ToDate);?></p>
            </th>
        </tr>
        <tr>
         <th colspan="2">
                <center><p><b>Contact Number :</b> <?php echo htmlentities($row->ContactNumber);?></p></center>
          
        </th>
    </tr>
</table>


</center>








<?php 
$cnt=$cnt+1;
}

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
