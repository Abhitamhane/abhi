<?php
session_start();
error_reporting(0);
include('includes/config.php');?>
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
        

            <div class="login-bg-color bg-black-300">
                <div class="row">
                   <div class="col-md-8 col-md-offset-2">
                        <div class="panel login-box">
                            <div class="panel-heading">
                                <div class="panel-title text-center">
                                    <h4>RTO Management System | RTO List</h4>
                                    
                                </div>
                            </div>
                            <div class="panel-body p-20">


<table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Sr.No</th>
                                                            <th>RTO Code</th>
                                                            <th>Branch Name</th>
                                                            <th>Branch City</th>
                                                            <th>STD Code</th>
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Sr.No</th>
                                                            <th>RTO Code</th>
                                                            <th>Branch Name</th>
                                                            <th>Branch City</th>
                                                            <th>STD Code</th>
                                                        </tr>
                                                    </tfoot>
                                                    <tbody>
                           
<div class="table-responsive">
<?php $sql="SELECT * from rto_branch";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{  ?>
    
<tr>
<td><?php echo htmlentities($cnt);?></td>
<td><?php  echo htmlentities($row->RTO_Code);?></td>
<td><?php  echo htmlentities($row->Branch_Name);?></td>
<td><?php  echo htmlentities($row->Branch_City);?></td>
<td><?php  echo htmlentities($row->STD_Code);?></td>

</tr>        <?php $cnt=$cnt+1;}} ?> 
 </tbody>
                                                </table>
                                       

    
                                    

              <div class="col-sm-9">
                     <a href="index.php"><b><u>Back to Home</u></b></a>
                                                            </div>
                                </form>

                                

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
