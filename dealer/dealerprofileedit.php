<?php

include 'conn.php';

include 'navbar.php';

$id = $_GET['id'];

$query = "SELECT * FROM dealer WHERE u_id = $id";
$runn = mysqli_query($conn, $query);
$rows = mysqli_fetch_array($runn);


if (isset($_POST['submit'])) {
    $name = $_POST['uname'];
    $email = $_POST['uemail'];
    $password = $_POST['upassword'];
    $imagename = $_FILES['uimage']['name'];
    $imgpath = $_FILES['uimage']['tmp_name'];
    move_uploaded_file($imgpath, "images/" . $imagename);

    $query2 = "UPDATE dealer SET u_name = '$name' , u_email = '$email' , u_password = '$password' , u_img = '$imagename' WHERE u_id = $id ";

    $run = mysqli_query($conn, $query2);

    if ($run) {

        echo "
            
        <script>
        alert('Your Profile has been Updated!');
        window.location.href='index.php';
        </script>
        ";
    }
}




?>

<title>Dealer Profile Edit</title>



<div class="container text-center mt-5 text-dark">
    <h1 class="fw-bolder text-dark">DEALER PROFILE EDIT</h1>
<br>
    <center>
    <form class="profileform col-xl-8 col-lg-9 col-md-11 col-sm-11 col-12 text-center" method="POST" enctype="multipart/form-data">
        <br>
        <img class="rounded-circle mt-1" src="<?php echo "images/" . $rows['u_img'] ?>" width="100">
        <br><br>
        <div class="row">
        <div class="col-6">
        <input class="form-control profileedit" type="text" name="uname"
            value="<?php echo $rows['u_name'] ?>" required>
        <br>
        </div>
        <div class="col-6">
        <input class="form-control profileedit" type="email"
            name="uemail" value="<?php echo $rows['u_email'] ?>" required>
        <br>
        </div>
        <div class="col-6">
        <input class="form-control profileedit" type="password"
            name="upassword" value="<?php echo $rows['u_password'] ?>" required>
        <br>
        </div>
        <div class="col-6">
        <input class="form-control profileedit"  type="number"
            name="ucontact" value="<?php echo $rows['u_contact']?>" required>
            </div>
            <div class="col-6">
        <input class="form-control profileedit"  type="text"
            name="uaddress" value="<?php echo $rows['u_address']?>" required>
</div>
            <div class="col-6">
        <input class="form-control profileedit"  type="file"
            name="uimage" value="<?php echo $rows['u_img']?>" required>
</div>

        </div>
        <br>
        <input class="profilesubmit" type="submit" name="submit"
            value="UPDATE">
    </form>
    </center>
</div>

<br><br><br><br>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

<?php

include 'footer.php';

?>