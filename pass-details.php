<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['avmsaid']==0)) {
  header('location:logout.php');
  } else{




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>AVSM Pass Details</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <?php include_once('includes/sidebar.php');?>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <?php include_once('includes/header.php');?>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                          
                            <div class="col-lg-12">
                                <div class="card" id="divToPrint">
                                    <div class="card-header" >
<?php
$pid=$_GET['pid'];
$ret=mysqli_query($con,"select * from  tblvisitorpass where id='$pid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>


                                        <strong>#<?php  echo $row['passnumber'];?> Pass</strong>  Details
                                    </div>
                                    <div class="card-body card-block" >


<table border="1" class="table table-bordered mg-b-0" width="100%" border="1">
<tr>
    <th colspan="4" style="color:blue">Visitor Details</th>
</tr>


                                            <tr>
    <th>Pass Number</th>
    <td colspan="3"><?php  echo $row['passnumber'];?></td>

  </tr>
                                            <tr>
    <th>Visitor Name</th>
    <td><?php  echo $row['VisitorName'];?></td>
    <th>Category</th>
    <td><?php  echo $row['categoryName'];?></td>
  </tr>
  <tr>
     <th>Mobile Number</th>
    <td><?php  echo $row['MobileNumber'];?></td>
    <th>Address</th>
    <td colspan="3"><?php  echo $row['Address'];?></td>
  </tr>
<tr>
    <th colspan="4" style="color:blue">Pass Details</th>
</tr>

  <tr>
    <th>Apartment no</th>
    <td><?php  echo $row['Apartment'];?></td>
    <th>Floor</th>
    <td><?php  echo $row['Floor'];?></td>
  </tr>
  <tr>
    <th>From Date</th>
    <td><?php  echo $row['fromDate'];?></td>
    <th>To Date</th>
    <td><?php  echo $row['toDate'];?></td>
  </tr>
  <tr>
    <th>Pass Description</th>
    <td colspan="3"><?php  echo $row['passDetails'];?></td>
  </tr>
    <tr>
    <th>Pass Creation Date</th>
    <td colspan="3"><?php  echo $row['creationDate'];?></td>
  </tr>


</table>                        


                                    </div>
                                                             <p style="text-align: center;font-size: 20px;color: red">
  <input type="button" class="btn btn-primary" value="Print the Pass" onclick="PrintDiv();" /></p>
                                </div>

                        </div>
                            </div>
    
<?php include_once('includes/footer.php');?>
                </div>
                </div>
            </div>
        </div>

<script type="text/javascript">     
    function PrintDiv() {    
       var divToPrint = document.getElementById('divToPrint');
       var popupWin = window.open('', '_blank', 'width=500,height=500');
       popupWin.document.open();
       popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
            }
 </script>
    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
<?php }  ?>
<?php }  ?>