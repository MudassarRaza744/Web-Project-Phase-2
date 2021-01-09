<?php
include ('connection.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="my_scripts/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="my_scripts/bootstrap.min.css">
 	<link rel="stylesheet" type="text/css" href="my_scripts/style.css">
  <script type="text/javascript" src="my_scripts/jquery.min.js"></script>
  <script type="text/javascript" src="my_scripts/bootstrap.min.js"></script>
 	<style type="text/css">
    a{
      text-decoration:none;
    }
    p{
      text-align: center;
    }
    li a{
      font-size: 17px;
    }
    b{
      font-size: 20px;
    }
    h5{
      color: white;
    }
    .footer_icon a img:hover{
      border-radius: 50%;
     background-color: red; 



    }
   
  </style>
</head>
<body>
<!--Hearder-->
  <header>
  <!-- NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark add">
      <a class="navbar-brand" href="#"><img src="img/logo1.png" width="150" height="80" style="margin-top: -25px;"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse " id="navbarTogglerDemo02" style="margin-top: 20px;">
        <ul class="navbar-nav mr-auto navbar-right">
          <li class="nav-item ">
            <a class="nav-link" href="Home.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="About_us.html">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="product.php">Product</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="Contact_Us.php">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
           <li class="nav-item">
              <form class="form-inline my-2 my-lg-0 ">
                <input class="form-control mr-sm-2" type="search"  placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm-0"  type="submit" style="font-size: 15px;">Search</button>

              </form>
                <ul class="navbar-nav mr-auto  navbar-right  icons"  >
                  <li class="nav-item active icons">
                    <a class="nav-link" href="#"><img  src="img/insta.png" width="30px" height="30px" style="margin-left: 15px; margin-bottom:0px;"></a>
                  </li>
                   <li class="nav-item">
                    <a class="nav-link" href="#"><img  src="img/fb.png" width="30px" height="30px" style="margin-left: 15px;"></a>
                  </li>
                   <li class="nav-item">
                    <a class="nav-link" href="#"><img  src="img/whatsapp.png" width="30px" height="30px" style="margin-left: 15px;"></a>
                  </li>
                   <li class="nav-item" >
                    <a class="nav-link" href="#"><img src="img/twitter.png" width="30px" height="30px" style="margin-left: 15px;"></a>
                  </li>
                </ul>
        

            
          </li>
        </ul>
      </div>
    </nav>
  </header>
<!--Contect Us -->
	<h1 style="margin-left: 2%">Contact Us</h1>
	<div class="row">
		<div class="col-md-7" style="margin-left: 2%">
			<form method="post">
				<div class="form-group">
			    <label for="InputName">Name</label>
			    <input type="name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width: 80%">
			  </div>
			  <div class="form-group">
			    <label for="InputEmail1">Email address</label>
			    <input type="email" name="email"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width: 80%">
			  </div>
			  <div class="form-group">
			    <label for="InputPassword1">Address</label>
			    <input type="text" name="address" class="form-control" id="exampleInputPassword1" style="width: 80%">
			  </div>
			   <div class="form-group">
			    <label for="InputCity">City</label>
			    <select name="cities">
            <option value="1">Lahore</option>
            <option value="2">Karachi</option>
            <option value="3">Multan</option>
          </select>
			    
			  </div>
			   <div class="form-group">
			    <label for="Inputmsg">Message</label><br>
			    <textarea name="complain_detail" rows="6" cols="50"></textarea>
			    
			    
			  </div>

			  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
			</form>

      <?php
      if(isset($_POST['submit']))
      {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $complain=$_POST['address'];
        $Cities = $_POST['cities'];
        if($Cities == "1")
        {
           $city="Lahore";
        }
        else if($Cities == "2")
        {
          $city="Karachi";
        }
        else
        {
          $city="Multan";
        }
        $message=$_POST['complain_detail'];
        $Query="INSERT INTO complains (Name,Email,Address,City,Message) VALUES ('$name','$email','$complain','$city','$message')";
        $connection->query($Query);
      }


      ?>
			 
		</div>
		<div class="col-md-4" style="background-color: none; margin-right:1%;">
			<center><p style="color: black;font-size: 20px;"><b>Address</b><br>Need help? Or Any Query Feel Free To Contact us or write to our Email <strong>COLOEX@Query@gmail.com</strong><br>
        	Call/Sms For Stock Confirmation/Queries.<br>
      		Online prices and selection generally match our retail store, but may vary. Prices and offers are subject to change.<br>
      		No Guarantee For Stock.<br>
          </p></center>
          <div style=";width: 100%;">
          	<center><iframe style="width: 300px;height: 300px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54427.146262270304!2d74.30823847059585!3d31.505021212075984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3919045a28ff1d39%3A0xf71e739b84b3c3c!2sGulberg%20III%2C%20Lahore%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1603979538113!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></center>
          </div>
      
		</div>
		
	</div>
	

  <!--FOOTER-->
    <footer class="pt-4 my-md-5 pt-md-5 border-top " style="background-color: #212529;">
    <div class="row">
      <div class="col-12 col-md">
        <img class="mb-2" src="img/logo1.png" alt="" width="100" height="60">
        <small class="d-block mb-3 text-muted" style="margin-left: 10px;">&copy; 2020-2020</small>
      </div>
      <div class="col-4 col-md" style="margin-left: 10px;">
        <h5 >Features</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Cool stuff</a></li>
          <li><a class="text-muted" href="#">New Arival</a></li>
          <li><a class="text-muted" href="#">Offers</a></li>
          
        </ul>
      </div>
    
      <div class="col-4 col-md" style="">
        <h5>Brands</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">HP</a></li>
          <li><a class="text-muted" href="#">Intel</a></li>
          <li><a class="text-muted" href="#">Dell</a></li>
          <li><a class="text-muted" href="#">AMD</a></li>
        </ul>
      </div>
      <div class="col-3 col-md" style="">
        <h5>About</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Team</a></li>
          <li><a class="text-muted" href="#">Locations</a></li>
          <li><a class="text-muted" href="#">Privacy</a></li>
          <li><a class="text-muted" href="#">Terms</a></li>
        </ul>
      </div>

    </div>
    <center><p style="color: white;font-size: 10px;">Need help? Or Any Query Feel Free To Contact us at 03XX-XXXXXXX or write to us   Info@somthing.pk<br>
        Call/Sms For Stock Confirmation/Queries.<br>
      Online prices and selection generally match our retail store, but may vary. Prices and offers are subject to change.<br>
      No Guarantee For Stock.<br><br><br>
 
            Copyright © 2020 www.somthing.pk. All rights reserved.<br>
            Follow us on [FaceBook] to stay updated.<br><br>
          </p></center>
    
     <div class="footer_icon"><center><a  href="#"><img  src="img/instab2.png" width="25px" height="25px" style="margin-left: 40px;"></a>
      <a  href="#"><img  src="img/fbb.png" width="25px" height="25px" style="margin-left: 40px;"></a>
      <a  href="#"><img  src="img/whatsappb.png" width="25px" height="25px" style="margin-left: 40px;;"></a>
      <a  href="#"><img  src="img/twitterb.png" width="25px" height="25px" style="margin-left: 40px;"></a>
      </center>
      </div>
      <div style="height: 10px;"></div>
    </footer>
  <script type="text/javascript" src="my_scripts/bootstrap.min.js"></script>

</body>
</html>