<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px; 
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
body {
  margin: 0;
  font-family: Times New Roman, Helvetica, sans-serif;
}
body
{
text-align:center;

}

.topnav {
  overflow: hidden;
  background-color: white;
  
}
  
.topnav a {
  float: left;
  color: blue;
  text-align: center;
  padding: 8px 6px;
  text-decoration: none;
  font-size: 20px;
	
width:10%;
}

.topnav a:hover {
  background-color: white;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: black;
}
h2 

  {
    color: tomato;
    text-align: center;
    
	margin-top:80px;
	margin-bottom:80px;

   }
h1{
	color:green;
}
.img{
	width:1800px;
	height:500px;
    }
.centered {
    position: absolute;
    top: 40%;
    left: 50%;
    transform: translate(-50%, -50%);
    }
.text{
	width:105%;
	height:50%;
	margin-left:200px;
	margin-top:100px;
	 column-count: 2;
      }
	
				
			
</style>
</head>
<body>
<div class="topnav">
  
<a href="womenhome.php">Back</a>
<a href="index.html">Home</a>
 
</div>

</style>
</head>
<body>
<form action="">



<div class="row">
  <div class="column">
    <img src="img/saree/saree1.jpg" alt="snow" style="width:30%">
<h4>Set Saree<h4>Rs/-560</h4> 
<td>
<a href="details1.php">View details</a> </td>
  </div>
<div class="column">
    <img src="img/saree/saree2.jpg" alt="Snow" style="width:20%">
<h4>Set Saree <br><h4>Rs/-660</h4> <td>
<a href="details2.php">View details</a> </td>
  </div>
<div class="column">
    <img src="img/saree/saree3.jpg" alt="Snow" style="width:40%">
<h4>Set Saree<br><h4>Rs/-740</h4> <td>
<a href="details3.php">View details</a>  </td>
  </div>
<div class="column">
    <img src="img/saree/saree4.jpg" alt="Snow" style="width:35%">
<h4>Color Saree <br><h4>Rs/-890</h4>
<a href="details4.php">View details</a>  </td>
  </div>
<div class="column">
    <img src="img/saree/saree5.jpg" alt="Snow" style="width:30%">
<h4>Set Saree<br><h4>Rs/-940</h4> <td>
<a href="details5.php">View details</a>  </td>
  </div>
  <div class="column">
    <img src="img/saree/saree6.jpg" alt="Snow" style="width:35%">
<h4>Set Saree<br><h4>Rs/-40</h4> <td>
<a href="details6.php">View details</a></td>
  </div>
  
</div>

</body>
</html>
