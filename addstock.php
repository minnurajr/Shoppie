<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>The Shoppie</title>
	<meta charset="UTF-8">
	<meta name="description" content="The Plaza eCommerce Template">
	<meta name="keywords" content="plaza, eCommerce, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/animate.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<!-- Header section -->
	<header class="header-section header-normal">
		<div class="container-fluid">
			<!-- logo -->
			<div class="site-logo">
				<img src="img/logon.png" alt="logo">
			</div>
			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<div class="header-right">
				<a href="cart.html" class="card-bag"><img src="img/icons/bag.png" alt=""><span>2</span></a>
				<a href="#" class="search"><img src="img/icons/search.png" alt=""></a>
			</div>
			<!-- site menu -->
			<ul class="main-menu">
				<li><a href="index.html">Home</a></li>
				<li><a href="#">Woman</a></li>
				<li><a href="#">Man</a></li>
				<li><a href="minnu.php">Login</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Page Info -->
	<div class="page-info-section page-info">
		<div class="container">
			<div class="site-breadcrumb">
				<a href="">Home</a> /
				<span>Add Stock</span>
			</div>
			<img src="img/page-info-art.png" alt="" class="page-info-art">
		</div>
	</div>
	<!-- Page Info end -->


	<!-- Page -->
	
	</div>
<script language="javascript">
function abc()
{
if(document.form1.name.value==""||document.form1.no.value==""||document.form1.price.value==""||document.form1.tprice.value==""||document.form1.size.value==""||document.form1.material.value==""||document.form1.image.value==""||document.form1.status.value=="")
{
alert("enter the details");
return(false);
}
if((document.form1.name.value)==true)
{
alert("Enter name");
return(false);
}
if((document.form1.no.value)==true)
{
alert("Enter no of item");
return(false);
}
if((document.form1.price.value)==true)
{
alert("Enter price");
return(false);
}
if((document.form1.tprice.value)==true)
{
	alert("Enter total price");
	return(false);
}

if((document.form1.size.value)==true)
{
alert("Select size");
return(false);
}
if((document.form1.material.value)==true)
{
alert ("enter type of material");
return (false);
}
if((document.form1.image.value)==true)
{
alert("Upload image");
return(false);
} 
if((document.form1.status.value)==true)
{
alert("Enter status");
return(false);
} 
}
 </script>
</head>
	<body>
		   <div class="align-left">

		<h1 style="text-align:center; color:white;">Add Stock Here</h1>
        
		<form action="addstock.php" name="form1" onSubmit="return abc()" method="POST">      
      
<table border="1" width="30%" align="center" cellspacing="10">
<tr><td>Name Of Item</td><td><input type="text" name="name" id="name"></td></tr>
<tr><td>No Of Item</td><td><input type="text" name="no" id="no"></td></tr>
<tr><td>Price of One Item</td><td><input type="text" name="price" id="price"></td></tr>
<tr><td>Total Price</td><td><input type-"text" name="tprice" id="tprice"></td></tr>
<tr><td>Size of Item</td><td><select name="size">
<option>S</option>
<option>L</option>
<option>M</option>
</select></td></tr>
<tr><td>Material</td><td><select name="material">
<option>Shifon</option>
<option>Cotton</option>
<option>polyster</option>
<option>nylon</option>
<option>silk</option>
<option>Chunkidi</option>
<option>Jeans</option>
</select></td></tr>
</select></td></tr>
<tr><td>Image</td><td><input type="file" name="image" id="image"></td></tr>

<tr><td>Status</td><td><input type="text" name="status" id="status"></td></tr>
<tr><td></td><td><input type="submit" name="submit" value="submit"></td></tr>
</center></table>

            
</form>
</div>

<?php


include "connection.php"; 

if(isset($_POST['submit']))
{
  $na=$_POST["name"];
$do=$_POST["no"];
$gen=$_POST["price"];
$no=$_POST["size"];
$tp=$_POST["tprice"];
$em=$_POST["material"];
$pi=$_POST["image"];
$pa=$_POST["status"];
$ndate=date("Y")."-".date("m")."-".date("d");
$sql="insert into image(image) values('$pi')";
$obj=new db();
$obj->execute($sql);
$sqll="insert into item_details(`item_name`,`no_item`,`price`,`total_price`,`date`,`size`,`material`,`image`,`status`) values('$na','$do','$gen','$tp','$ndate','$no','$em','$pi','$pa')";
$obj=new db();
$obj->execute($sqll);

 
}
?>



            
<section class="footer-top-section home-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-8 col-sm-12">
					<div class="footer-widget about-widget">
						<img src="img/logon.png" class="footer-logo" alt="">
						<p>The Shoppie...Gives You Trendy And Good Quality Clothes For You.Come And Shop..Let's 
Make The World Looks Beautiful.</p>
						<div class="cards">
							<img src="img/cards/5.png" alt="">
							<img src="img/cards/4.png" alt="">
							<img src="img/cards/3.png" alt="">
							<img src="img/cards/2.png" alt="">
							<img src="img/cards/1.png" alt="">
						</div>
					
	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/sly.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<script src="js/main.js"></script>
    </body>
</html>