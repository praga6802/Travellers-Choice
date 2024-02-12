<?php 
error_reporting(0);
// Connect to database
$conn=mysqli_connect("localhost", "root", "", "travel");
if (!$conn) {
die("Connection failed:".mysqli_connect_error());
}?>

<!DOCTYPE html>
<html>
<head>
<title>LOGIN PAGE</title>
<meta charset="UTF-8">
		<meta name="viewport" content="width=device,initial-scale=1.0">
		<meta name="description" content="tourism details">
		<meta name="keywords" content="tour,tourism,travel and tourism">
		<meta name="robots" content="INDEX,FOLLOW">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
		<link href="style.css" type="text/css" rel="stylesheet">
<style>
  body
{
background-color:rgb(203, 203, 246);
margin:0;
padding:0;
background-image:url(images/bg1.jpg);
background-size:cover;
background-position:center;
justify-content: center;
align-items: center;
font-family: sans-serif;
}

#container
{
width:95%;
margin:0px auto;
}


#banner img
{
width:100%;
margin-top:10px;
padding-bottom:15px;
}

#content1
{
width:32%;
height:350px;
background-color:powderblue;
float:left;
margin-right:2%;
}

form
{
margin-top:5%;
width:28rem;
height:36rem;
display:flex;
flex-direction: column;
background-color:rgba(225,225,225,0.06);
box-shadow: 0 8px 32px 0 rgba(31,38,135,.37);
border-radius: 25px;
border-left: 1px solid rgba(225,225,225,.3);
border-top: 1px solid rgba(225,225,225,.3);
float:center;
}
form:hover{
background-color:black;
opacity: .7;
box-shadow: 0 8px 40px  4px gold;
}
h1
{
font-size: 45px;
text-align: center;
text-shadow:2px 2px 4px rgba(0,0,0,.2);
letter-spacing:3px;
margin-bottom: 5%;
}
label
{
font-size:20px;
color:purple;
margin-left: 10%;
opacity:.8;
text-shadow: 2px 2px 4px rbga(0,0,0,.2);
}
#container
{
width:30%;
margin:0px auto;
}
input
{
width:80%;
color: white;
margin:5% auto;
margin-bottom: 8%;
border:none;
outline:none;
background: transparent;
border-bottom: 2px solid purple;
opacity: .8;
}
#container form
{
padding:0 40px;
box-sizing: border-box;
}
form .txt{
  position:relative;
  border-bottom: 3px solid #adadad;
  margin:30px 0;
}
.txt input{
  width:100%;
  padding:0 5px;
  height:40px;
  font-size: 16px;
  border:none;
  background:none;
  outline:none;
} 
.txt label{
  position:absolute;
  top:70%;
  left:1px;
  color: gray;
  transform: translateY(-75%);
  font-size:20px;
  pointer-events:none;
  transition: .5s;
} 
.txt span::before{
content:'';
position:absolute;
top:87px;
left:0;
width:0%;
height:3px;
background:purple;
transition: .5s;
}
.txt input:focus~label,
.txt input:valid~label{
  top:-5px;
  color:purple;
}
.txt input:focus~span::before,
.txt input:valid~span::before{
  width:100%

}
button{
  width:50%;
  margin:3% auto;
  color:violet;
  font-size: 15px;
  opacity:.7;
  background: rgba(225,225,225,0.06);
  padding:10px 30px;
  border:none;
  outline:none;
  border-radius: 12px;
  font-weight: bold;
  text-shadow: 2px 2px 4px rgba(255,255,255,.2);  
  box-shadow: 3px 3px 5px rgba(31,38,135,.37);
  border-left:1px solid rgba(255,255,255,.3);
  border-top:1px solid rgba(255,255,255,.3);
}
button:hover{
  color: white;
  border-color: whitesmoke;
  box-shadow: 0 8px 40px  4px purple;
  opacity: .7;
}
.heading
{
color:white;
margin-top:30px;
}

.para1
{
color:black;
margin-left:20px;
margin-right:10px;
}

.more
{
text-decoration:none;
color:black;
background-color:white;
padding:10px;
margin-left:25px;
}
#bottom1
{
margin-top:15px;
width:50%;
float:left;
}

#bottom2
{
margin-top:15px;
width:45%;
float:right;
}
#bottom1 h2
{
color:black;
}
#bottom1 p
{
color:black;
}
#bottom1 a
{
margin-left:20px;
color:black;
}
#bottom2 p
{
color:black;
}
#bottom2 a
{
margin-left:20px;
color:black;
}
#footer
{
position: sticky;
top:100%;
width:100%;
height:70px;
background-color:purple;
margin-top:50px;
clear:both;
}
#footer ul
{
float:left;
margin-top:25px;
}
#footer ul li
{
display:inline;
margin-right:15px;
}
#footer ul li a
{
color:grey;
text-decoration:none;
font-size:14px;
}
#footer ul li a:hover
{
color:violet;
}
#footer ul li p
{
color:white;
float:right;
margin-left:280px;
}

</style>
</head>
<body>


    <nav class="navbar fixed-top navbar-expand-lg navbar-dark py-4" id>
        <div class="container-fluid">
          <div class="navbar-brand">
          <img src=".\images\destination.png" alt="logo" width="70px" height="40px">
          </div>
          <a class="navbar-brand" id="logo" href="#">Traveller's Choice</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="nav navbar-nav ms-auto" >

            <li class="nav-item" id="li-current" >
            <a class="nav-link" id="li-a-current" href="login.php">LOGIN</a>
            </li>
          </ul>
          
          </div>
        </div>
        </nav>
        <br>
          <br>
          <br>
          <br>
          <br>
          <br>
    
    
    
    <div id="container">
    
        <b style="color:white"><form method="post">
        <h1 class="heading" style="color:beige">LOGIN</h1>
        <div class="txt">
        <input type="text" id="username" name="username" required>
          <span></span>
          <label for="username">Username:</label>
        </div> 
       
          <div class="txt">
          <input type="password" id="password" name="password" required>
          <span></span>
          <label for="password">Password:</label>
          </div>
    
          <button type="submit">Login</button><br>
    
          <div>
               <center><span>Doesn't have an Account</span><br>
            <a href="signup.php">SIGN UP</a></center>
            </div>
        </form>
      </b>
    </div>
    <footer >
      <div class="container py-4">
      <div class="row">
    
      
       <div class="col" id="f1">
        <h3>Traveller's choice</h3>
        <p id="footerpara">Book your holiday tour with us to make the tour economical and the happiest.</p>
       </div>
       <div class="col links">
        <h3>Quick links</h3>
        <p>
        <a href="./login.php">Login</a>
        </p>
       </div>
       <div class="col" id="f2">
         <h3>Contact</h3>
        <p><i class="fa fa-home"></i> <a href="https://www.google.com/maps?q=kumbakonam+map&rlz=1C1CHBD_enIN1018IN1019&um=1&ie=UTF-8&sa=X&ved=2ahUKEwiWvPeFxfT8AhV-SGwGHf94CiYQ_AUoAXoECAMQAw">Kumbakonam</a></p>
        <p>Mail <i class="fa fa-envelope"></i> <a href="https://mail.google.com/mail/u/0/#sent?compose=jrjtXSpwlgspvZQVKWjwQZQdSqXMNmdtJHTDCWVXHQjWwdHQMbPfHJHGmnSFGwfjBKtffqbW">travellerschoice.ac.in@gmail.com</a></p>
        <p>Call <i class="fa fa-phone"></i> +91 8555238593</p>
        <p>Follow Us <i class="fa fa-instagram" aria-hidden="true"></i> <i class="fa fa-twitter" aria-hidden="true"></i>
    <i class="fa fa-whatsapp" aria-hidden="true"></i>
    <i class="fa fa-facebook" aria-hidden="true"></i> </p>
       </div>
       
      </div>
      
      </div>
      <div class="container-fluid"id="f3">
        <p id="footerend">copyright &copy;2023 Traveller's Choice by SASTRA</p>
      </div>
      
    </footer>
    </body>
    </html>

<?php
if (!isset($_POST['submit'])) 
 {
   $username=$_POST['username'];
   $password=$_POST['password'];
   $sql = "SELECT * FROM user WHERE password=? AND username=?";
   $stmt = mysqli_prepare($conn, $sql); 
   mysqli_stmt_bind_param($stmt, "ss", $password,$username);
   mysqli_stmt_execute($stmt); 
   mysqli_stmt_store_result($stmt);
   if (mysqli_stmt_num_rows($stmt)>0)
   {    
     echo "<script>window.location.href='index.php'</script>"; 
   } 
   else {
    echo "<script>alert('Invalid username or password')</script>";
   }
  }
  else{
   echo "Error:".$sql."<br>".$conn->error;
   }
 $conn->close();
?>