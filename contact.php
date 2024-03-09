<?php
include 'conn.php';
include 'navbar.php';
// session_destroy();

if (isset($_POST['submit'])) {

  $name = $_POST['uname'];
  $email = $_POST['uemail'];

  $subject = $_POST['usubject'];
  $message = $_POST['umaeeage'];


  $query = "INSERT INTO contact  (u_name , u_email  , u_subject ,u_message) VALUES('$name' , '$email'  ,'$subject',' $message')";

  $runn = mysqli_query($conn, $query);

  if ($runn) {
    echo "
      <script>
          alert('Message Sent Successfully!');
        
      </script>
      
      ";
  }

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <title>Contact</title>
</head>
<style>
  .contact-parent {
    background: #fff;
    display: flex;
    margin: 80px 0;
  }

  .contact-child {
    display: flex;
    flex: 1;
    box-shadow: 0px 0px 10px -2px rgba(0, 0, 0, 0.75);
  }

  .child1 {
    background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url("images/pic.jpeg");
    background-size: cover;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    color: #fff;
    padding: 100px 0;
  }

  .child1 p {
    padding-left: 20%;
    font-size: 20px;
    text-shadow: 0px 0px 2px #000;
  }

  .child1 p span {
    font-size: 16px;
    color: #9df2fd;
  }

  .child2 {
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
  }

  .inside-contact {
    width: 90%;
    margin: 0 auto;
  }

  .inside-contact h2 {
    text-transform: uppercase;
    text-align: center;
    margin-top: 50px;
  }

  .inside-contact h3 {
    text-align: center;
    font-size: 16px;
    color: #0085e2;
  }

  .inside-contact input,
  .inside-contact textarea {
    width: 100%;
    background-color: #eee;
    border: 1px solid rgba(0, 0, 0, 0.48);
    padding: 5px 10px;
    margin-bottom: 20px;
  }

  .inside-contact input[type=submit] {
    background-color: rgb(73, 57, 113);
    color: white;
    transition: 0.2s;
    border: 2px solid rgb(73, 57, 113);
    margin: 30px 0;
  }

  .inside-contact input[type=submit]:hover {
    background-color: #fff;
    color: #000;
    transition: 0.2s;
  }

  @media screen and (max-width:991px) {
    .contact-parent {
      display: block;
      width: 100%;
    }

    .child1 {
      display: none;
    }

    .child2 {
      background-image: linear-gradient(rgba(255, 255, 255, 0.7), rgba(255, 255, 255, 0.7)), url("https://cdn.pixabay.com/photo/2019/06/28/00/17/architecture-4303279_1280.jpg");
      background-size: cover;
    }

    .inside-contact input,
    .inside-contact textarea {
      background-color: #fff;
    }
  }
</style>

<body>

  <div class="container-fluid">
    <div class="contact-parent">
      <div class="contact-child child1">
        <p>
          <i class="fas fa-map-marker-alt"></i> Address <br />
          <span> 11-A
            <br />
            Aptech NK,
          </span>
        </p>
        <p>
          <i class="fas fa-phone-alt"></i> Let's Talk <br />
          <span> 0309-0078601</span>
        </p>
        <p>
          <i class=" far fa-envelope"></i> General Support <br />
          <span>ebook@gmail.com</span>
        </p>
      </div>
      <div class="contact-child child2">
        <div class="inside-contact">
          <h2 class="p fw-bolder ">Contact Us</h2>
          <h3>
            <span id="confirm">
          </h3>
          <form method='POST'>
            <p class="p fw-bolder ">Name </p>
            <input id="txt_name" name="uname" type="text" Required="required">
            <p class="p fw-bolder ">Email </p>
            <input id="txt_email" name="uemail" type="text" Required="required">
            <p class="p fw-bolder ">Subject </p>
            <input id="txt_subject" name="usubject" type="text" Required="required">
            <p class="p fw-bolder ">Message </p>
            <textarea id="txt_message" rows="4" name="umaeeage" cols="20" Required="required"></textarea>
            <input type="submit" class="p fw-bolder " id="btn_send" value="SEND" name="submit">
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php

  include 'footer.php';

  ?>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>

</html>