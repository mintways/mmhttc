<?php
session_start(); 
include("connection.php");
?>
<!DOCTYPE html>
<!-- === Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>

<style>
h1{    margin:0;
          padding: 0 0 20px;
          text-align: center;
          font-size: 30px;
          font-family:AR JULIAN;
          color:indianred;
        }
body {
  background-image: url('img_girl.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
p {
  background-image: url('OIP.jpg');
}
body {
  background-image: url('img_girl.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
</head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="style.css">
         
    <!--<title>Login & Registration Form</title>-->
</head>

<body>
   
    <div class="container" style="margin-top: 30px;">
        <div class="forms">
            <div class="form login">
                <h1><span class="title">Login For Staff</span></h1>

                <form action="" method="POST">
                    <div class="input-field">
                        <input type="text" placeholder="college id" required name="id">
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" class="password" placeholder="college code" name="ccode" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
						
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Remember me</label>
                        </div>
                        
                        <a href="#" class="text">Forgot password?</a>
                    </div>

                    <div class="input-field button">
                        <input type="submit" name="submit_login_button" value="Signup">
                    </div>
                </form>

               <!-- <div class="login-signup">
                    <span class="text">Not a member?
                        <a href="#" class="text signup-link">Signup Now</a>
                    </span>
                </div> -->
            </div>

            <!-- Registration Form -->
            <div class="form signup">
              <h1>  <span class="title">Registration</span></h1>

                <form action="Signup.php" method="POST">
                    <div class="input-field">
                        <input type="text" placeholder="college id" name="cid" required>
                        <i class="uil uil-user"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="college code" name="clcode" required>
                        <i class="uil uil-envelope icon"></i>
						<i class="fa-solid fa-address-card"></i>
                    </div>                  
                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="termCon">
                            <label for="termCon" class="text">I accepted all terms and conditions</label>
                        </div>
                    </div>

                    <div class="input-field button">
                        <input type="submit" value="Signup" name="submit_button">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Already a member?
                        <a href="#" class="text login-link">Login Now</a>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>

</body>
</html> 
<?php

if(isset($_POST['submit_button'])){
		$name=$_POST['cid']; 
		$roll=$_POST['clcode']; 
		
		//print_r($conn);die;
		$query= "INSERT INTO student(coid, clcode) values($id,'$ccode')";
		//echo $query;die;
		$data=mysqli_query($conn,$query);
		//print_r($data);
		if($data)
		{
			 //echo "Data insert into Database";
			 //unset($_POST);
			//header("Location: " . $_SERVER["HTTP_REFERER"]);
			echo'<script>window.location=signup.php</script>';
		}
		else {
			echo "Failsed to insert Data insert into Database";
		}
		

}
if(isset($_POST['submit_login_button'])){
		
		$id=$_POST['id']; 
		$ccode=$_POST['ccode']; 
		//print_r($conn);die;
		$query= "SELECT * FROM student WHERE coid = $id AND clcode = '$ccode'";
		//echo $query;die;
		$result=mysqli_query($conn,$query);
		//print_r($data);
		if (mysqli_num_rows($result) > 0) {
			
			$_SESSION["co_id"] = $id;
			 //echo "Data insert into Database";
			 //unset($_POST);
			//header("Location: " . $_SERVER["HTTP_REFERER"]);
			echo "<script>location.href='../Book_Details.php'</script>";
			//exit();
			//exit(header("Location: ../Book_Details.html"));
		}else {
			echo "Invalid user";
		}
		

}


?>