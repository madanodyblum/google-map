<?php	
error_reporting(0);	
session_start();
echo "<h6 style='color:#fff'>$_SESSION[MM_Username]</h6>";
//echo $_SESSION['lat'];
require_once('Connections/connx.php');

setcookie("USERNAME", "$_SESSION[MM_Username]", time()+10 * 365 * 24 * 60 * 60);

$query_Recordset2a = "select * from users where email='$_SESSION[MM_Username]'";
$Recordset2a = mysqli_query($con, $query_Recordset2a) or die(mysqli_error());
$row_Recordset2a = mysqli_fetch_assoc($Recordset2a);
$totalRows_Recordset2a = mysqli_num_rows($Recordset2a);

$lat = $row_Recordset2a['lati'];
$long = $row_Recordset2a['longi'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iofrm</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme16.css">
</head>
<body>
    <div class="without-side">
                            <div class="form-button">
                                <button id="submit" type="button" class="ibtn" style="width:100%; background-color:#29A4FF; color:#FFF" onClick="window.location='emergency1.php'">Emergencies</button>
                            </div>

<br>
                            <div class="form-button">
                                <button id="submit" type="button" class="ibtn" style="width:100%; background-color:#29A4FF; color:#FFF" onClick="window.location='vdvreq.php'">Voluteer Requests</button>
                            </div>
<br>
                            <div class="form-button">
        <button id="submit" type="submit" class="ibtn" style="width:100%; background-color:#29A4FF; color:#FFF" onClick="window.location='hcc2.php'">Blood Donations</button>
                            </div>
<br>
                            <div class="form-button">
        <button id="submit" type="button" class="ibtn" style="width:100%; background-color:#29A4FF; color:#FFF" onClick="window.location='logout.php'">Log Out</button>
                            </div>


                                <?php include 'map3.php';?>
    </div>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>