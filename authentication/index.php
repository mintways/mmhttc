<?php
session_start(); 
include("connection.php"); // make sure this file sets $conn properly
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
h1 {
    margin:0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 30px;
    font-family: AR JULIAN;
    color: indianred;
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
</style>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- ===== Iconscout CSS ===== -->
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

<!-- ===== CSS ===== -->
<link rel="stylesheet" href="style.css">
</head>

<body>
   
    <div class="container" style="margin-top: 30px;">
        <div class="forms">
            <!-- Login Form -->
            <div class="form login">
                <h1><span class="title">Login</span></h1>

                <form action="" method="POST">
                    <div class="input-field">
                        <input type="text" placeholder="Roll Number" required name="roll">
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" class="password" placeholder="Date Of Birth" name="dob" required>
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
                        <input type="submit" name="submit_login_button" value="Login">
                    </div>
                </form>
            </div>

            <!-- Registration Form -->
            <div class="form signup">
              <h1><span class="title">Registration</span></h1>

                <form action="index.php" method="POST">
                    <div class="input-field">
                        <input type="text" placeholder="Enter your name" name="name" required>
                        <i class="uil uil-user"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Roll Number" name="rollnumber" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" class="password" placeholder="Date Of Birth" name="dateofbirth" required>
                        <i class="uil uil-lock icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" class="password" placeholder="Confirm Date Of Birth" name="confirmdateofbirth" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
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
// ---------- Registration ----------
if (isset($_POST['submit_button'])) {
    $name = $_POST['name']; 
    $roll = $_POST['rollnumber']; 
    $dob  = $_POST['dateofbirth']; 
    $cdob = $_POST['confirmdateofbirth'];

    // Use parameterized query to prevent SQL injection
    $query = "INSERT INTO student (name, rollno, dateofbirth, confirmdateofbirth) 
              VALUES (?, ?, ?, ?)";
    $params = [$name, $roll, $dob, $cdob];

    $stmt = sqlsrv_query($conn, $query, $params);

    if ($stmt === false) {
        echo "Failed to insert data:<br>";
        die(print_r(sqlsrv_errors(), true));
    } else {
        echo '<script>window.location="index.php"</script>';
    }
}

// ---------- Login ----------
if (isset($_POST['submit_login_button'])) {
    $roll = $_POST['roll']; 
    $dob  = $_POST['dob']; 

    $query = "SELECT * FROM student WHERE rollno = ? AND dateofbirth = ?";
    $params = [$roll, $dob];

    $stmt = sqlsrv_query($conn, $query, $params);

    if ($stmt === false) {
        echo "Login failed:<br>";
        die(print_r(sqlsrv_errors(), true));
    }

    if (sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
        $_SESSION["roll_no"] = $roll;
        echo "<script>location.href='../Elearning.php'</script>";
    } else {
        echo "Invalid user";
    }
}
?>
