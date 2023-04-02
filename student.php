
<?php
require('dbconn.php');
?>


<!DOCTYPE html>    
<html>    
<head>     
    <title>Login Form</title>    
    <link rel="stylesheet" type="text/css" href="style1.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Library Member Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/e1106955f3.js" crossorigin="anonymous"></script>
<link href="//fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
<style>
  body{
    font-family: Arial, Helvetica, sans-serif;
  }
  .top{
    border-radius: 10px;
  background-color: #ffffff;
  padding: 10px;
  }
.responsive{
  width: 100%;
  height: auto;
}


h4{
  background-color: black;
  color: white;
}
a:link, a:visited {
  background-color: #f44336;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: red;
}
   
  </style>
</head>    
<body>    
 <div class="top">
<div style="text-align:center;" >
<img src="66.PNG"  class="responsive">
  

</div>
</div>
<a href="index.html">Home Page</a>
<br><br>

    <h2 align="center">Admin/Student Login</h2><br>    
    <div class="login">    
    <form id="login" method="post" action="student.php">    
        <label><b>User Name</b></label>    
        <input type="text" name="RollNo" id="Uname" placeholder="Username" required=="" >    
        <br><br>    
        <label><b>Password</b></label>    
        <input type="Password" name="Password" id="Pass" placeholder="Password" required=="" >    
        <br><br>    
		<div class="send-button">
				
					<input type="submit" name="signin"; value="Sign In">
				</form>
			</div>

			<div class="clear"></div>
		</div>

             
</div>  
&nbsp&nbsp
<div class="footer">
  
  <div style="text-align:center;" >
  
<h4> PSCMR College of Engineering & Tech.</br>
7-3-6/1, Raghavareddy Street,</br>
Kothapeta, Vijayawada-520001</br>
Andhra Pradesh, India</h4>



<?php
if(isset($_POST['signin']))
{$u=$_POST['RollNo'];
 $p=$_POST['Password'];
 $c=$_POST['Category'];

 $sql="select * from LMS.user where RollNo='$u'";

 $result = $conn->query($sql);
$row = $result->fetch_assoc();
$x=$row['Password'];
$y=$row['Type'];
if(strcasecmp($x,$p)==0 && !empty($u) && !empty($p))
  {//echo "Login Successful";
   $_SESSION['RollNo']=$u;
   

  if($y=='Admin')
   header('location:admin/index.php');
  else
  	header('location:student/index.php');
        
  }
else 
 { echo "<script type='text/javascript'>alert('Failed to Login! Incorrect RollNo or Password')</script>";
}
   

}

?>

</body>
</html>