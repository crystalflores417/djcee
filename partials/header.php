<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="dist/css/bootstrap.css">
	<link href="https://fonts.googleapis.com/css?family=Oswald:600,700|Roboto:100,300,400" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400" rel="stylesheet">
  <link rel="stylesheet" href="fontawesome/web-fonts-with-css/css/fontawesome.min.css">

</head>
<body >
<!-- <nav class="navbar justify-content-center fixed-top navbar-light nav_bg_color ">
  
<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" href="#">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#services">Services</a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" href="#about">About</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#contact">Contact</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#vendors">Vendors</a>
  </li>
</ul>



</nav>
 -->


<div id="myNav" class="overlay ">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="#home">Home</a>
    <a href="#services">Services</a>
    <a href="#about">About</a>
    
    <a href="#contact">Contacts</a>
    <a href="#vendors">Vendors</a>
  </div>
</div>
<span class="fixed-top ml-4 " style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>



<script>
function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}
</script>