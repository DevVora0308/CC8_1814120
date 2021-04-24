<?php
session_start();
if ($_SESSION['loggedin']!=true)
{
  $_SESSION['loggedin']=false;
}
?>
<html>
	<head>
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="0_1_CompanyLogo.png" type="image/x-icon">
		<style type="text/css">
			body
			{
			background-image:url('bg.jpg');
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: cover;
			background-position: 50% 50%;
			margin:0;
			padding: 0;
			}

			input::-webkit-outer-spin-button,
			input::-webkit-inner-spin-button {
		    -webkit-appearance: none;
		    margin: 0;
		}
		html {
  font-size: 1rem;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

nav li {
  float: left;
}

nav li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

nav li a:hover {
  background-color: #111;
}

@include media-breakpoint-up(sm) {
  html {
    font-size: 1.6rem;
  }
}

@include media-breakpoint-up(md) {
  html {
    font-size: 1.6rem;
  }
}

@include media-breakpoint-up(lg) {
  html {
    font-size: 1.8rem;
  }
}

	</style>
	</head>
	<body style="color:white">
	<nav>
	<ul>
  <li><a href="https://www.uefa.com/uefachampionsleague/">UCL</a></li>
  <li><a href="football.php" >Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="contactus.php">Contact Us</a></li>
  <li><a href="#aboutus">About</a></li>
  <li style="float: right"><a href="#Login">Login</a></li>
  <li style="float: right" ><a href="sigup.html">Sign in</a></li>
  <li><a href="store.html">Store</a></li>
  
</ul>
</nav>

	<center>
	<h1>UCL LIVE</h1><br>
    <h2>We are always there for you</h2>
	</center>
	<div style="padding-top: 2%;color: #ff9900">
		<div>
			<center>
				<img src="football.jpg" width="25%" alt="football">
			</center>
		</div>
	</div>
	<center>
		<div class="container">
			<h2>Contact Us</h2>
		  <div class="row">
		    <div class="col-sm">
		      <strong>Name</strong><br>
				Pth Floor, XYZ Centre,<br>
				ABC Road,<br>
				Churchgate<br>
				Mumbai - 400020<br>
				India
		    </div>
		    <div class="col-sm">
		    T +91 abcdefghij<br>
			T +91 abcdefghij<br>
			F +91 abcdefghij<br>
			<br>
			</div>
		  </div>
		</div>
	<center>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</center>