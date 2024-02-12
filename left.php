<?php if(!isset($_SESSION)) { session_start(); } ?>

<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<style>
a{
    text-decoration: none;
    padding: 10px;
    padding-bottom: 20px;
}
</style>
</head>

<body>
<table style="width:100%;font-size:20px;padding:15px;">
<tr><td style="font-size:28px">ADMIN LINKS</td></tr>

<?php if($_SESSION["usertype"]=="Admin")
{?>

<tr><td><a href="adduser.php">ADD USER</a></td></tr>
<tr><td><a href="updateuser.php">UPDATE USER</a></td></tr>
<tr><td><a href="deleteuser.php">DELETE USER</a></td></tr>

<?php }?>

<tr><td><a href="addcategory.php">ADD TOURS</a></td></tr>


<?php if($_SESSION["usertype"]=="Admin")
{?>
<tr><td><a href="updatecategory.php">UPDATE TOURS</a></td></tr>
<tr><td><a href="deletecategory.php">DELETE TOURS</a></td></tr>
<?php }?>


<tr><td><a href="viewcategory.php">VIEW  TOURS</a></td></tr>
<tr><td><a href="addsubcategory.php">ADD SUBCATEGORY</a></td></tr>
<?php if($_SESSION["usertype"]=="Admin")
{?>
<tr><td><a href="updatesubcategory.php">UPDATE SUBCATEGORY</a></td></tr>
<tr><td><a href="deletesubcategory.php">DELETE SUBCATEGORY</a></td></tr>
<?php }?>

<tr><td><a href="viewsubcategory.php">VIEW SUBCATEGORY</a></td></tr>
<tr><td><a href="addpackage.php">ADD PACKAGE</a></td></tr>

<?php if($_SESSION["usertype"]=="Admin")
{?>
<tr><td><a href="updatepackage.php">UPDATE PACKAGE</a></td></tr>
<tr><td><a href="deletepackage.php">DELETE PACKAGE</a></td></tr>

<?php }?>

<tr><td><a href="viewpackage.php">VIEW PACKAGE</a></td></tr>

<tr><td><a href="viewenquiry.php">VIEW ENQUIRY</a></td></tr>
</table>


</body>
</html>