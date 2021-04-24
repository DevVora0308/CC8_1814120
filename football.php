<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>UCL INDIA</title>
<style>
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
th,td {
  border :2px solid mistyrose;
}
.tab img {
  opacity: 0.5;
  filter: alpha(opacity=50);
}
.tab img:hover {
  opacity: 1.0;
  filter: alpha(opacity=100); 
}
.onvideo{
  position: relative;
  
  text-align: center;
  color: white;
}
.centered{
  position: absolute;
  /*border: 1px white;*/
  font-size: 50px;
  top: 5.5%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-shadow: 3px 1px grey;
}
p {
  display: none;
  background-color: slategrey;
  padding: 20px;
  color:solid mistyrose;
}
div:hover p {
  display: block;
}
</style>
</head>
<body bgcolor="maroon">
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
<!-- <h1><b><i>UCL LIVE</h1> -->
<!-- <a href="https://www.facebook.com/ChampionsLeague/">Click Here </a> -->

<div class='onvideo'>
<video class='onvideo' width="100%" height="90%" autoplay muted >
	<source src="videoplayback1.mp4" type="video/mp4">
</video>
<div class="centered"><b><i><u>UEFA CHAMPIONS LEAGUE </div>
</div>
<audio>
  
</audio>
		<form action="form.html" name="Login" >
	<!-- <tag attribute="value">Hello Guys...!!!!</tag> -->
	<br>
	<br>
	<center>
		<h1>UPCOMING FIXTURES</h1>
		<br>
	<table  class='tab' width='100%' height='100%'>
		<!-- <tr>
			<th>TEAM A</th>
			<th>AGAINST</th>
			<th>TEAM B</th>
		</tr> -->
<tr>
    <td><div><img src="game2.jpg" width="100%" height="100%">
    <p>MATCH DETAILS<br>UCL Round of 16<br><br>26 Feb 2020</p></div></td>
   <td><div><img src="game2.jpg" width="100%" height="100%">
    <p>MATCH DETAILS<br>UCL Round of 16<br><br>26 Feb 2020</p></div></td>
    <td><div><img src="game2.jpg" width="100%" height="100%">
    <p>MATCH DETAILS<br>UCL Round of 16<br><br>26 Feb 2020</p></div></td>
    <td><div><img src="game2.jpg" width="100%" height="100%">
    <p>MATCH DETAILS<br>UCL Round of 16<br><br>26 Feb 2020</p></div></td>
<tr>
    <td><div><img src="game1.png" width="100%" height="100%">
    <p>MATCH DETAILS<br>UCL Round of 16<br><br>26 Feb 2020</p></div></td>
    <td><div><img src="game1.png" width="100%" height="100%">
    <p>MATCH DETAILS<br>UCL Round of 16<br><br>26 Feb 2020</p></div></td>
    <td><div><img src="game1.png" width="100%" height="100%">
    <p>MATCH DETAILS<br>UCL Round of 16<br><br>26 Feb 2020</p></div></td>
    <td><div><img src="game1.png" width="100%" height="100%">
    <p>MATCH DETAILS<br>UCL Round of 16<br><br>26 Feb 2020</p></div></td>
</tr>
	</table>
	</center>
	<br><br><br>
	<!-- <marquee loop>
    <img src="liv.png" height="250px" width="200px">

    <img src="tot.jpg" height="250px" width="200px">
    <img src="rm.jpg" height="250px" width="200px">
    <img src="psg.png" height="250px" width="200px">
    <img src="dortmund.jpg" height="250px" width="300px">
    <img src="chelsea.png" height="250px" width="200px">
    <img src="bay.jpg" height="250px" width="300px">
    <img src="barca.png" height="250px" width="200px">
  </marquee> -->
<footer align="center" >Copyrights Reserved &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact Us : ucllive@gmail.com </footer>
	</body>
</html>
