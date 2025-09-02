<?php
  

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Custom Captcha in JavaScript | CodingNepal</title>
  <link rel="stylesheet" href="style.css">
  <!-- Font Awesome CDN Link for Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

    <title> LOGIN Form</title>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/bootstrap.css">
       <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
       <style>
       body{
          margin:0;
          padding:0;
          background:url("log.jpg");
          background-size: cover;
          font-family: sans-serif;
           }
      .log{  width:1366px;
          height:696px;
          
          }
      .loginbox{  
          background: #000;
          color: #fff;
          top:20%;
          left:36%;
          position:absolute;
          transform: translate{-50%,-50%}
          box-sizing: border-box;
          padding: 70px 30px;
          opacity:.7;
               }
      .avatar{  width: 100px;
          height: 100px;
          border-radius:50%;
          position:absolute;
          top:-14%;
          left:calc(50% - 50px);
             }
			 /* Import Google font - Poppins & Noto */
@import url('https://fonts.googleapis.com/css2?family=Noto+Serif:ital@1&family=Poppins:wght@400;500;600&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

}
body{
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  background: #4db2ec;
}
.wrapper{
  max-width: 485px;
  width: 100%;
  background: #fff;
  padding: 22px 30px 40px;
  border-radius: 10px;
  box-shadow: 8px 8px 8px rgba(0, 0, 0, 0.05);
}
.wrapper header{
  color: #4db2ec;
  font-size: 33px;
  font-weight: 500;
  text-align: center;
}
.wrapper .captcha-area{
  display: flex;
  height: 65px;
  margin: 30px 0 20px;
  align-items: center;
  justify-content: space-between;
}
.captcha-area .captcha-img{
  height: 100%;
  width: 345px;
  user-select: none;
  background: #000;
  border-radius: 5px;
  position: relative;
}
.captcha-img img{
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 5px;
  opacity: 0.95;
}
.captcha-img .captcha{
  position: absolute;
  left: 50%;
  top: 50%;
  width: 100%;
  color: #fff;
  font-size: 35px;
  text-align: center;
  letter-spacing: 10px;
  transform: translate(-50%, -50%);
  text-shadow: 0px 0px 2px #b1b1b1;
  font-family: 'Noto Serif', serif;
}
.wrapper button{
  outline: none;
  border: none;
  color: #fff;
  cursor: pointer;
  background: #4db2ec;
  border-radius: 5px;
  transition: all 0.3s ease;
}
.wrapper button:hover{
  background: #2fa5e9;
}
.captcha-area .reload-btn{
  width: 75px;
  height: 100%;
  font-size: 25px;
}
.captcha-area .reload-btn i{
  transition: transform 0.3s ease;
}
.captcha-area .reload-btn:hover i{
  transform: rotate(15deg);
}
.wrapper .input-area{
  height: 60px;
  width: 100%;
  position: relative;
}
.input-area input{
  width: 100%;
  height: 100%;
  outline: none;
  padding-left: 20px;
  font-size: 20px;
  border-radius: 5px;
  border: 1px solid #bfbfbf;
}
.input-area input:is(:focus, :valid){
  padding-left: 19px;
  border: 2px solid #4db2ec;
}
.input-area input::placeholder{
  color: #bfbfbf;
}
.input-area .check-btn{
  position: absolute;
  right: 7px;
  top: 50%;
  font-size: 17px;
  height: 45px;
  padding: 0 20px;
  opacity: 0;
  pointer-events: none;
  transform: translateY(-50%);
}
.input-area input:valid + .check-btn{
  opacity: 1;
  pointer-events: auto;
}
.wrapper .status-text{
  display: none;
  font-size: 18px;
  text-align: center;
  margin: 20px 0 -5px;
}
@media (max-width: 506px){
  body{
    padding: 0 10px;
  }
  .wrapper{
    padding: 22px 25px 35px;
  }
  .wrapper header{
    font-size: 25px;
  }
  .wrapper .captcha-area{
    height: 60px;
  }
  .captcha-area .captcha{
    font-size: 28px;
    letter-spacing: 5px;
  }
  .captcha-area .reload-btn{
    width: 60px;
    margin-left: 5px;
    font-size: 20px;
  }
  .wrapper .input-area{
    height: 55px;
  }
  .input-area .check-btn{
    height: 40px;
  }
  .wrapper .status-text{
    font-size: 15px;
  }
  .captcha-area .captcha-img{
    width: 250px;
  }
}
      h1{    margin:0;
          padding: 0 0 20px;
          text-align: center;
          font-size: 30px;
          font-family:AR JULIAN;
          color:red;
        }    
      .loginbox p{  margin:0;
          padding: 0;
          font-weight:bold;
                 }
      .loginbox input{width: 100%;
          margin-bottom:20px;
                     }
      .loginbox input[type="text"], input[type="password"]{
          border: none;
          border-bottom: 1px solid #fff;
          background: transparent;
          outline:none;
          height:40px;
          color:;
          font-size:16px;
              }
      .loginbox input[type="submit"]{
          border: none;
          outline:none;
          height:40px;
          background:#fb2525;
          color: #fff;
          font-size:18px;
          border-radius:20px;
              }
      .loginbox input[type="submit"]:hover
      {    cursor:pointer;
          background:#ffc107;
          color:#000;
      }
      .loginbox a{   
          text-decoration:none;
          font-size:12px;
          line-height:20px;
          color: darkgrey;
      }
      .loginbox a:hover
      {  
        color:#ffc107;
      }
      .active{
        color:#fff;
        background:#e02626;
        border-radius:4px;
      }
       </style>
  </head>
  <body>
   
    <div class="loginbox">
    <img src="images/login2.jpg" class="avatar">
    <h1>Login Here</h1>
    
    <form>
    <p> Username</p>
    <input type="text" name="" placeholder="Enter Username">
    <p> Password</p>
    <input type="password" name="" placeholder="Enter Password"><br>
    <input type="submit" name="" value="Login">
    <a href="#">Lost your password?</a><br>
    <a href="#">Don't have an acoount?</a>
	<div class="wrapper">
    <header>Captcha</header>
    <div class="captcha-area">
      <div class="captcha-img">
        <img src="captcha-bg.jpg" alt="Captch Background" width="180" height="30" />
        <span class="captcha"></span>
      </div>
      <button class="reload-btn"><i class="fas fa-redo-alt"></i></button>
    </div>
	 <div class="row md-12">
    <form action="#" class="input-area">
      <input type="text" placeholder="Enter captcha" maxlength="6" spellcheck="false" required>
      <button class="check-btn">Check</button>
    </form>
    <div class="status-text"></div>
  </div>
  <script src="script.js"></script>
    </form>
    </div>
    <script src="js/jquery-2.1.4.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/ajax-utils.js"></script>
      <script src="js/script.js"></script>
</body>
  
?>
