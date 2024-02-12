<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

<link href="style.css" rel="stylesheet" type="text/css" />

<link href="../css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">



<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js--> 
<script src="js/jquery.min.js"></script>

<!--/js-->

<style>

/* additional CSS */
  
  /* style for table rows when selected */
  tr.selected {
    background-color: #f7b22c;
  }
  
  /* style for table shadows */
  .tableshadow {
    box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.2);
  }
  
  /* style for top header */
  .topheader {
    background-color: #333;
    color: #fff;
    padding: 10px;
    text-align: center;
  }
  
  /* style for left menu */
  .leftmenu {
    background-color: #eee;
    padding: 10px;
  }
  
  /* style for form input fields */
  input[type="text"] {
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 3px;
    width: 100%;
  }
  
   /* style for form submit button */
   input[type="submit"] {
    background-color: #333;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
  }
  
  /* style for form submit button on hover */
  input[type="submit"]:hover {
    background-color: #555;
  }

</style>
</head>
<body>

<!--header-->
<!--sticky-->

<?php include('function.php'); ?>
<?php
$_SESSION['loginstatus']="";
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$s="select * from users where Username='" . $_POST["t1"] . "' and Pwd='" . $_POST["t2"] ."'";
	
	$q=mysqli_query($cn,$s);
	$r=mysqli_num_rows($q);
$data=mysqli_fetch_array($q);
	mysqli_close($cn);
	if($r>0)
	{
		$_SESSION["Username"]= $_POST["t1"];
		$_SESSION["usertype"]=$data[2];
		$_SESSION['loginstatus']="yes";
		header("location:index.php");
	}
	else
	{
	echo "<script>alert('Invalid User Name or Password');</script>";
}
}
?>



<?php include('topforlogin.php'); ?>
<!--/sticky-->
<div style="padding-top:150px; min-height:570px" class="container">
<div class="col-sm-3" style=" min-height:450px;">

</div>
<div class="col-sm-9">




<form method="post">
<table border="0" width="500px" height="400px" align="left" class="tableshadow">
<tr><td colspan="2" class="toptd">LOGIN PAGE</td></tr>

<tr><td></td>
<td class="lefttxt"><table border="0" width="100px" height="200px"><td>User Name</td></td><td><input type="text" name="t1" required pattern="[a-zA-z _]{1,50}" title"Please Enter Only Characters between 1 to 50 for User Name" /></td></tr>
<tr><td class="lefttxt">Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input type="password" name="t2" required pattern="[a-zA-z0-9]{1,10}" title"Please Enter Only Characters between 1 to 10 for Password" /></td></tr></table>
<tr><td></td><td align="center" ><input type="submit" value="LOGIN" name="sbmt" /></td></tr>




</table>
</form>



</div>


</div>
<?php include('bottom.php'); ?>
</body>
</html>