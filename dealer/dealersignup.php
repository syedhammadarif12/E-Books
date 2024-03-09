<?php
include 'conn.php';
if (isset($_POST['submit'])) {

    $name = $_POST['uname'];
    $email = $_POST['uemail'];
    $pass = $_POST['upass'];
    $contact = $_POST['ucontact'];
    $address = $_POST['uaddress'];
    $imgname = $_FILES['uimage']['name'];
    $imgtmp = $_FILES['uimage']['tmp_name'];
    move_uploaded_file($imgtmp, "img/" . $imgname);

    $query = "INSERT INTO dealer (u_name , u_email , u_password , u_contact , u_address ,  u_img) VALUES('$name' , '$email' , '$pass' ,'$contact', ' $address','$imgname')";

    $runn = mysqli_query($conn, $query);

    if ($runn) {
        echo "
        <script>
            alert('Account created successfully!');
            window.location.href='dealerlogin.php'
        </script>
        
        ";
    } else {
        echo "<script>
        alert('not working!');
        </script>";
    }

}

?>







<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dealer Sign-Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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

        /* .login-form .image {
            display: block;
            width: 130px;
            height: 35px;
            padding: 0;
            padding-left: 17px;
            margin-left: 30px;
            margin-right: 300px;
            padding-right: -300px;
            outline: none;
            font-size: 19px;
            border: none;
            border-color: none;
        }

        @media screen and (max-width: 575px) {
            .login-form .image {
                width: 100%;
                padding-left: 0px;
                margin-left: 0px;
            }
        }

        @media screen and (max-width: 332px) {
            .login-form .image {
                width: 130px;
                padding-left: 10px;
                margin-left: 60px;
            }
        } */
        label.filebutton {
    width:100%;
    height:40px;
    overflow:hidden;
    position:relative;
    /* left: 10px; */

}

label span input {
    z-index: 999;
    line-height: 0;
    font-size: 40px;
    position: absolute;
    top: -2px;
    /* left: 100px; */
    opacity: 0;
    filter: alpha(opacity = 0);
    -ms-filter: "alpha(opacity=0)";
    cursor: pointer;
    _cursor: hand;
    margin: 0;
    padding:0;
}

        .login-form input:focus {
            border-color: transparent transparent #ff574e transparent;
        }

        .btn {
            position: relative;
            display: inline-block;
            width: 100%;
            margin-bottom: 15px;
            padding: 10px 0;
            text-align: center;
            color: #ffffff;
            font-size: 16px;
            font-weight: 600;
            letter-spacing: 1px;
            text-decoration: none;
            background: #178301;
            border: none;
            border-radius: 0;      
        }

        .btn:hover {
            box-shadow: 0 0 10px rgba(0, 0, 0, .5);
            background-color: #178301;
            color: white;
        }

        .btns {
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
            cursor: pointer;
            ;
            transition: .3s;
            -webkit-transition: .3s;
        }

        .btns:hover {
            box-shadow: 0 0 10px rgba(0, 0, 0, .5);
        }

        .btns.btns-go {
            background: #CF2C1F;
        }

        .btns.btns-fb {
            background: #4064AC;
        }

        .btns.btns-tw {
            background: #1C9CEB;
        }
    </style>

</head>

<body>
    <div class="wrapper">
        <div class="container">
            <div class="col-left">
                <div class="login-form">
                    <h2>Dealer Sign Up</h2>
                    <form method="POST" enctype='multipart/form-data'>
                        <p>
                            <input type="text" name="uname" placeholder="Name" required>
                        </p>
                        <p>
                            <input type="email" name="uemail" placeholder="Email" required>
                        </p>
                        <p>
                            <input type="password" name="upass" placeholder="Password" required>
                        </p>
                        <p>
                            <input type="text" name="ucontact" placeholder="Contact" required>
                        </p>
                        <p>
                            <input type="text" name="uaddress" placeholder="Address" required>
                        </p>
                        <label class="filebutton" style="text-align:center;">
                            <span class="btn">Select Image
                                <input class="form-control image" type="file" name="uimage" required>
                            </span>
                        </label>
                        <p>
                            <input class="btns mt-2" type="submit" name='submit' value="Sign Up" />
                        </p>
                        <p>have Account
                            <a href="dealerlogin.php">Log in</a>
                        </p>
                    </form>
                </div>
            </div>
            <div class="col-right">
                <div class="login-social">
                    <h2>Sign Up with</h2>
                    <a class="btns btns-go" href="https://accounts.google.com/v3/signin/identifier?continue=https%3A%2F%2Fwww.google.com%3Fhl%3Den-US&ec=GAlA8wE&hl=en&flowName=GlifWebSignIn&flowEntry=AddSession&dsh=S-1089684980%3A1702108974720579&theme=glif" target="_blank">Google</a>
                    <a class="btns btns-fb" href="https://www.facebook.com/" target="_blank">Facebook</a>
                    <a class="btns btns-tw" href="https://twitter.com/i/flow/login" target="_blank">Twitter</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>