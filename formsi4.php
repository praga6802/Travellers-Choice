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
  <title>Packages - Traveller's Choice</title>
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
      /* Style the form container */
      form {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f5f5f5;
        border-radius: 5px;
        box-shadow: 0 0 10px #ccc;
      }
      
      /* Style the form fields */
      label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
      }
      
      input[type="text"],
      input[type="email"],
      input[type="tel"] ,
      input[type="package"],
      input[type="date"],
      input[type="number"],
      input[type="address"],
      input[type="residence"]
      {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-bottom: 20px;
        font-size: 16px;
      }
      
      input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
      }
      
      input[type="submit"]:hover {
        background-color: #45a049;
      }


      table {
        border-collapse: collapse;
        width: 1450px;
        margin:20px;
        /*margin-right:20px;*/
        border-radius: 5px;
        overflow: hidden;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
      }

      th, td {
        padding: 10px;
        text-align: left;
        font-size: 18px;
      }

      th {
        background-color: #0e6911;
        color: white;
        text-transform: uppercase;
        letter-spacing: 1px;
      }

      /* Table row styles */
      tr:nth-child(even) {
        background-color: #f2f2f2;
      }
      tr:nth-child(odd) {
        background-color: #f2f2f2;
      }
      /* Table cell styles */
      td {
        border: 1px solid #ddd;
        transition: all 0.3s ease-in-out;
      }

      /* Table cell hover styles */
      td:hover {
        background-color:   #46cb4a;
        color: white;
        cursor: pointer;
      }

      /* Table cell hover styles for even rows */
      tr:nth-child(even) td:hover {
        background-color: #46cb4a;
      }
      form {
  width: 50%;
  margin: 0 auto;
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
  padding: 20px;
  border-radius: 5px;
}

label {
  display: block;
  font-weight: bold;
  margin-bottom: 5px;
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
			  <li class="nav-item" id="li" >
				<a class="nav-link" id="li-a" href="index.php">HOME</a>
			  </li>
			  <li class="nav-item" id="li-current" >
				<a class="nav-link" id="li-a-current" href="Packages.html">PACKAGES</a>
			  </li>
			  
			  <li class="nav-item" id="li" >
				<a class="nav-link" id="li-a" href="about.html">ABOUT US</a>
			  </li>
			  <li class="nav-item" id="li" >
				<a class="nav-link" id="li-a" href="contact.html">CONTACT</a>
			  </li>
        <li class="nav-item" id="li" >
        <a class="nav-link" id="li-a" href="login.php">LOGOUT</a>
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
<div  style="text-align:center; border: 2px solid #101820ff; margin-left: 10px; margin-right: 10px;border-radius: 10px;background: rgb(16,24,32);
background: linear-gradient(90deg, rgba(16,24,32,1) 0%, rgba(139,140,140,1) 50%, rgba(16,24,32,1) 100%)";>

<h1>ITINERARY</h1>

<table>
      <tr>
        <th>Day</th>
        <th>Destination</th>
        <th>Activities</th>
      </tr>
      <tr>
        <td>Day 1</td>
        <td>Arrival Port Blair + Half Day Sight seeing</td>
        <td>After your arrival at Port Blair Airport, our tour representatives will welcome and transfer you to the hotel. 
          Begin your visit to Corbyn's Cove Beach - 7 kilometers from Port Blair - a coconut palm bounded shoreline, perfect for swimming, sun-lounging & showering. 
          Later, visit Cellular Jail emulated by the captivating Sound and Light Show at Cellular Jail - where the brave adventure of the Indian opportunity battle is brought alive. 
          Spend your overnight stay at hotel/ resort at Port Blair.</td>
      </tr>
      <tr>
        <td>Day 2</td>
        <td>Port Blair to Havelock (54 kms by sea from Port Blair)</td>
        <td>Early morning, depart by ship to Havelock Island. 
          Enjoy your evening at Beach number 7 on the western coast, otherwise called "The Radha Nagar Beach". 
          It is a standout amongst the most famous shorelines on Havelock and was named "Best Beach in Asia" by time in 2004. 
          Move back to the hotel at Havelock for overnight stay.</td>
      </tr>
      <tr>
        <td>Day 3</td>
        <td>Havelock to Port Blair(54 kms by sea from Havelock)</td>
        <td>On this day, you can enjoy the day at your leisure by trying out some adventurous activities such as Scuba plunging, Snorkling, Game fishing and more on the immediate payment base. 
          Proceed to Port Blair. 
          Return back to your lodging by 06:00 PM at the end of the excursion. 
          Get into the hotel at Port Blair for overnight stay.</td> 
      </tr>
      <tr>
        <td>Day 4</td>
        <td>Departure from Portblair</td>
        <td>On the last day morning, spend the entire day for packing and personal activities. 
          Later, check out from the inn and transfer to the Airport. 
          - Trip ends with sweet memories.</td>
      </tr>
    </table> 
    <br>
    <br>
    <br>
    <br>
    <br>
      
      
    <h1>Tour Booking Form</h1>
    <form method="POST" action="Payment.php">
      <label for="name">Name:</label>
      <input type="text" id="name" placeholder="Name" name="name" required><br><br>
      
      <label for="email">Email:</label>
      <input type="email" id="email" placeholder="E-Mail" name="email" required><br><br>
      
      <label for="phone">Phone:</label>
      <input type="tel" id="phone" placeholder="Phone Number" name="phone" required><br><br>

      <label for="name">Package Name:</label>
      <input type="package" id="name" name="package" value="MYSTIC MARINE TRAILS" required><br><br>
      
      <label for="date">Date:</label>
      <input type="date" id="date" name="date" min="2023-12-15" max="2024-01-20" required><br><br>

      <label for="num-seats">Number of Seats:</label>
      <input type="number" id="num-seats" placeholder="Total Seats" name="num_seats" min="1" max="30" required>

      <label for="num-adults">Number of Adults:</label>
      <input type="number" id="num-adults" name="num_adults" min="1" max="30" required>

      <label for="num-seats">Number of Children:</label>
      <input type="number" id="num-children" name="num_children" min="1" max="30" required>

      <label for="address">Address:</label>
      <input type="address" id="address" placeholder="Your Current Address" name="address" required><br><br>
      
      <label for="city">Residence:</label>
      <input type="residence" id="city" placeholder="City Of Residence" name="residence" required><br><br>
      
      <label for="state">State:</label>
      <input type="text" id="state" placeholder="State" name="state" required><br><br>
      
      <label for="zip">Zip Code:</label>
      <input type="text" id="zip" placeholder="Zip Code" name="zip" required><br><br>
      
      <label for="country">Country:</label>
      <input type="text" id="country" placeholder="Country" name="country" required><br><br>
      
      <input type="submit" value="Submit">
    </form>
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
            <a href="./index.php">Home</a>
          </p>
          <p>
            <a href="./Packages.html">Packages</a>
          </p>
          <p>
            <a href="./about.html">About Us</a>
          </p>
          <p>
            <a href="./contact.html">Contact</a>
          </p>
          <p>
            <a href="./login.php">Logout</a>
          </p>
         </div>
         <div class="col" id="f2">
             <h3>Contact</h3>
          <p><i class="fa fa-home"></i> <a href="https://www.google.com/maps/place/Sastra+College+Rd,+Anna+Nagar,+Kumbakonam,+Tamil+Nadu+612001/@10.9631309,79.3836662,17z/data=!4m15!1m8!3m7!1s0x3a5532b3deaf51bb:0x6fd3a5932bb429a7!2sSastra+College+Rd,+Anna+Nagar,+Kumbakonam,+Tamil+Nadu+612001!3b1!8m2!3d10.9631309!4d79.3862411!16s%2Fg%2F11gy73zp_8!3m5!1s0x3a5532b3deaf51bb:0x6fd3a5932bb429a7!8m2!3d10.9631309!4d79.3862411!16s%2Fg%2F11gy73zp_8?authuser=0">Kumbakonam</a></p>
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
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Handle form submission
  $name = trim($_POST['name']);
  $email = trim($_POST['email']);
  $phone = trim($_POST['phone']);
  $package=trim($_POST['package']);
  $seats=trim($_POST['num_seats']);
  $adult=trim($_POST['num_adults']);
  $children=trim($_POST['num_children']);
  $joudate = trim($_POST['date']);
  $address = trim($_POST['address']);
  $residence = trim($_POST['residence']);
  $state = trim($_POST['state']);
  $zip = trim($_POST['zip']);
  $country = trim($_POST['country']);

  if (strlen($phone) == 10) {
  {
      // Check if email already exists
      $sql = "SELECT * FROM customer WHERE email=? ";
      $stmt = mysqli_prepare($conn, $sql); 
      mysqli_stmt_bind_param($stmt, "s", $email);
      mysqli_stmt_execute($stmt); 
      mysqli_stmt_store_result($stmt);
      if (mysqli_stmt_num_rows($stmt)>0)
      {
      echo " <script>alert('Email already exists.')</script>";
     } else {
       // Insert data into the database
       $sql = "INSERT INTO customer (name, email, phone,package,seats,adult,children,joudate, address, residence, state, zip, country) VALUES (?,?, ?, ?, ?, ?, ?, ?, ?,?, ?, ?, ?)";
       $stmt = mysqli_prepare($conn, $sql);
       mysqli_stmt_bind_param($stmt, "sssssssssssss", $name, $email, $phone,$package,$seats,$adult,$children,$joudate, $address, $residence, $state, $zip, $country);
      if (mysqli_stmt_execute($stmt)) {
       echo " <script>alert(' Registered Successfully')</script>";
        
        } 
      else 
           {
            echo "Error:".$sql."<br>".$conn->error;
           }
          }
   } 
   }
   }
    $conn->close();
   ?>