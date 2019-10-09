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
				<li><a href="womenhome.php">Woman</a></li>
				
				<li><a href="reg1.php">Registration</a></li>
				<li><a href="minnu.php">Login</a></li>
				
			</ul>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Page Info -->
	<div class="page-info-section page-info">
		<div class="container">
			<div class="site-breadcrumb">
				<a href="">Home</a> /
				<span>Payment</span>
			</div>
			<img src="img/page-info-art.png" alt="" class="page-info-art">
		</div>
	</div>
	<!-- Page Info end -->


	<!-- Page -->
	<script language="javascript">
function abc()
{
if(document.form1.userid.value==""||document.form1.itemid.value==""||document.form1.amt.value==""||document.form1.cardno.value==""||document.form1.expdate.value==""||document.form1.cvv.value=="")
{
alert("Fill All");
return(false);
}
if(isNaN(document.form1.userid.value)==true)
{
alert("Enter userid");
return(false);
}

if((document.form1.itemid.value)==true)
{
alert("Enter Item Id");
return(false);
}
 
if(isNaN(document.form1.amt.value)==true)
{
alert("Enter Amount");
return(false);
}
if(isNaN(document.form1.cardno.value)==true)
{
alert("enter card number");
return(false);
}
if((document.form1.expdate.value)==true)
{
alert("enter expiry date");
return(false);
}

if(isNaN(document.form1.cvv.value)==true)
{
alert("Enter your cvv");
return(false);
} 
}
</script>
</head>
<body>
	<div class="page-area contact-page">
		<div class="container spad">
			<div class="text-center">
				<h4 class="contact-title">Pay Here..</h4>
			</div>
			<form class="contact-form" name="form1" onSubmit="return abc()" method="POST">
				<div class="row">
					<div class="col-md-6">
						<input type="text" placeholder="User ID *" name="userid"> 
					</div>
				
					<div class="col-md-6">
						<input type="text" placeholder="Itemid *" name="itemid">
						</div>
						<div class="col-md-6">
						<input type="text" placeholder="Amount *" name="amt"> 
					</div>
					<div class="col-md-6">
						<input type="text" placeholder="Card No *" name="cardno"> 
						
					</div>
					<div class="col-md-6">
						<input type="text" placeholder="Expiry Date *" name="expdate"> 
					</div>
					<div class="col-md-6">
						<input type="text" placeholder="CVV *" name="cvv"> 
					</div>
					
					<div>
						<div class="text-center">
							<button class="site-btn" value="submit" name="submit">Pay Now</button>
						</div>
					</div>
				</div>
			</form>
			
		</div>
		<?php
include "connection.php";

if(isset($_POST['submit']))
{
$na=$_POST["userid"];
$do=$_POST["itemid"];
$gen=$_POST["amt"];
$em=$_POST["cardno"];
$pi=$_POST["expdate"];
$pa=$_POST["cvv"];
$ndate=date("Y")."-".date("m")."-".date("d");

$sqlll="insert into payment(`userid`,`itemid`,`amt`,`paydate`,`card_no`,`exp_date`,`cvv`) values ('$na','$do','$gen','$ndate','$em','$pi','$pa')";
 $objj=new db();
 $objj->execute($sqlll);
 echo "<script> alert('success');
 window.location='womn1.php'</script>";
 
}
?>
	
	
					
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


