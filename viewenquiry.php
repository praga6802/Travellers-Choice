<?php if(!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

<link href="style.css" rel="stylesheet" type="text/css" />

<link href="../css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body{
	max-width:100%;
}
table{
	font-size:15px;
	width:50%;
}
</style>


<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js--> 
<script src="js/jquery.min.js"></script>

<!--/js-->

<!-- styling table -->
<style>

</style>
</head>
<body>
<!--header-->
<!--sticky-->
<?php
if($_SESSION['loginstatus']=="")
{
	header("location:loginform.php");
}
?>


<?php include('function.php'); ?>



<?php include('top.php'); ?>
<!--/sticky-->
<div style="padding-top:100px; min-height:570px; max-width:100%;" class="container">
<div class="col-sm-3" style="border-right:1px solid #999; min-height:450px;">
<?php include('left.php'); ?>
</div>
<div class="col-sm-9">




<form method="post">
<table border="0" width="90%" height="300px" align="center" class="tableshadow" class="tabledesign">
<tr><td class="toptd">VIEW ENQUIRY</td></tr>
<tr><td align="center" valign="top" style="padding-top:10px;">
<table border="0" align="center" width="95%">
<tr>
<td style="font-size:15px; padding:20px; font-weight:bold; ">Package Id</td>
<td style="font-size:15px; padding:20px; font-weight:bold;" >Package Name</td>
<td style="font-size:15px; padding:20px; font-weight:bold;">Name</td>
<td style="font-size:15px; padding:20px; font-weight:bold;">Mobile No.</td>
<td style="font-size:15px; padding:20px; font-weight:bold;">Email</td>
<td style="font-size:15px; padding:20px; font-weight:bold;">No. of Seats</td>
<td style="font-size:15px; padding:20px; font-weight:bold;">No. of Children</td>
<td style="font-size:15px; padding:20px; font-weight:bold;">no. of Adults</td>
<td style="font-size:15px; padding:20px; font-weight:bold;">Pack Price</td>
</tr>


<?php

$query = mysqli_query($cn,"SELECT * FROM customer c,package p WHERE c.package=p.Packname");
// $s="select * from enquiry,package where enquiry.Packageid=package.Packid";
// $r=mysqli_num_rows($query);
//echo $r;
if (mysqli_num_rows($query) > 0) {
	$i=0;
while($row=mysqli_fetch_array($query))
{

		 echo '<tr>';
		 echo '<td style="padding:20px;">' . $row['Packid'] . '</td>'; 
		 echo '<td style="padding:20px;">' . $row['package'] . '</td>';
		 echo '<td style="padding:20px;">' . $row['name'] . '</td>'; 
		 echo '<td style="padding:20px;">' . $row['phone'] . '</td>'; 
		 echo '<td style="padding:20px;">' . $row['email'] . '</td>'; 
		 echo '<td style="padding:20px;">' . $row['seats'] . '</td>'; 
		 echo '<td style="padding:20px;">' . $row['children'] . '</td>'; 
		 echo '<td style="padding:20px;">' . $row['adult'] . '</td>'; 
		 echo '<td style="padding:20px;">' . $row['Packprice'] . '</td>';
		 echo '</tr>'; 
		$i++;

}

}

?>

</table>
</td></tr></table>

</form>



</div>


</div>
<?php include('bottom.php'); ?>
</body>
</html>