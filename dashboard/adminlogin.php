<?php
include 'conn.php';

session_start();

if(isset($_POST['submit'])){

    $email = $_POST['aemail'];
    $password = $_POST['apassword'];
    
    $query = "SELECT * FROM admins WHERE  a_email = '$email' AND a_password = '$password'";
    $runn =  mysqli_query($conn , $query);
    $row = mysqli_fetch_array($runn);

    if(mysqli_num_rows($runn) == 1){

        $_SESSION['adminid'] = $row['a_id'];

        header('location:book.php');

      
   
    }
    else{

        echo "<script>
        alert('wrong username or password');
        </script>";
    }
   }



?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
 <style>
*,
*::before,
*::after {
    box-sizing: border-box;
}

body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 16px;
    font-weight: 400;
    color: #666666;
    background: #eaeff4;
}

.wrapper {
    margin: 0 auto;
    width: 100%;
    max-width: 1140px;
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}

.container {
    position: relative;
    width: 100%;
    max-width: 600px;
    height: auto;
    display: flex;
}

.credit {
    position: relative;
    margin: 25px auto 0 auto;
    width: 100%;
    text-align: center;
    color: #666666;
    font-size: 16px;
    font-weight: 400;
}

.credit a {
    color: #222222;
    font-size: 16px;
    font-weight: 600;
}

/* * * * * Login CSS * * * * */
h2 {
    position: relative;
    margin: 0 0 15px 0;
    padding-bottom: 10px;
    font-size: 22px;
    font-weight: 700;
}

h2::after {
    position: absolute;
    content: "";
    left: 0;
    bottom: 0;
    width: 30px;
    height: 2px;
    background: #666666;
}

p {
    margin: 0 0 20px 0;
    text-align: left;
    color: #666666;
    font-size: 15px;
}

p:last-child {
    margin: 0;
}

p a {
    color: #44c7f5;
    font-size: 14px;
    text-decoration: none;
}

.col-left,
.col-right {
    position: relative;
    width: calc(50% - 1px);
    padding: 45px;
    display: flex;
}

.col-left {
    margin-right: 2px;
    background: #ffffff;
    -webkit-clip-path: polygon(0 0, 100% 5%, 100% 100%, 5% 95%);
    clip-path: polygon(0 0, 100% 5%, 100% 100%, 5% 95%);
}

.col-right {
    background: #ffffff;
    -webkit-clip-path: polygon(0 5%, 100% 0, 95% 95%, 0 100%);
    clip-path: polygon(0 5%, 100% 0, 95% 95%, 0 100%);
}

@media(max-width: 575.98px) {
    .container {
        flex-direction: column;
    }
    
    .col-left,
    .col-right {
        width: 100%;
        margin: 0;
        padding: 30px;
        -webkit-clip-path: none;
        clip-path: none;
    }
    
    .col-right {
        padding-top: 0;
    }
}

.login-form,
.login-social {
    position: relative;
    width: 100%;
}

.login-form input {
    display: block;
    width: 100%;
    height: 35px;
    padding: 0;
    outline: none;
    border-bottom: 1px solid;
    border-color: transparent transparent #44c7f5 transparent;
    font-size: 16px;
}

.login-form input:focus {
    border-color: transparent transparent #ff574e transparent;
}

.btn {
    position: relative;
    display: inline-block;
    width: 100%;
    margin-bottom: 15px;
    padding: 15px 0;
    text-align: center;
    color: #ffffff;
    font-size: 16px;
    font-weight: 600;
    letter-spacing: 1px;
    text-decoration: none;
    background: #44c7f5;
    border: none;
    border-radius: 0;
    cursor: pointer;;
    transition: .3s;
    -webkit-transition: .3s;
}

.btn:hover {
    box-shadow: 0 0 10px rgba(0, 0, 0, .5);
}

.btn.btn-go {
    background: #CF2C1F;
}

.btn.btn-fb {
    background: #4064AC;
}

.btn.btn-tw {
    background: #1C9CEB;
}    
 </style>

</head>
  <body>
  <div class="wrapper">
  <div class="container">
    <div class="col-left">
      <div class="login-form">
        <h2>Admin Login</h2>
        <form method="POST">
          <p>
            <input type="email" name="aemail"  placeholder="Email" required>
          </p>
          <p>
            <input type="password" name="apassword" placeholder="Password" required>
          </p>
          <p>
            <input class="btn" type="submit" name='submit' value="LogIn" />
          </p>
          <p>don't have Account
            <a href="adminsignup.php ">Sign Up</a>
          </p>
        </form>
      </div>
    </div>
    <div class="col-right">
      <div class="login-social">
        <h2>Login with</h2>
        <a class="btn btn-go" href="https://accounts.google.com/v3/signin/identifier?continue=https%3A%2F%2Fwww.google.com%3Fhl%3Den-US&ec=GAlA8wE&hl=en&flowName=GlifWebSignIn&flowEntry=AddSession&dsh=S-1089684980%3A1702108974720579&theme=glif" target="_blank">Google</a>
        <a class="btn btn-fb" href="https://www.facebook.com/" target="_blank">Facebook</a>
        <a class="btn btn-tw" href="https://twitter.com/i/flow/login" target="_blank">Twitter</a>
      </div>
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>