<?php

include 'conn.php';

include 'navbar.php';

$id = $_GET['id'];

$query = "SELECT * FROM customer WHERE c_id = $id";
$runn = mysqli_query($conn, $query);
$rows = mysqli_fetch_array($runn);


if (isset($_POST['submit'])) {
    $name = $_POST['cusname'];
    $email = $_POST['cusemail'];
    $password = $_POST['cuspassword'];
    $imagename = $_FILES['cusimage']['name'];
    $imgpath = $_FILES['cusimage']['tmp_name'];
    move_uploaded_file($imgpath, "images/" . $imagename);

    $query2 = "UPDATE customer SET c_name = '$name' , c_email = '$email' , c_password = '$password' , c_img = '$imagename' WHERE c_id = $id ";

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

<title>Customer Profile Edit</title>



<div class="container text-center mt-5 text-dark">
    <h1 class="fw-bolder text-dark">CUSTOMER PROFILE EDIT</h1>
<br>
    <center>
    <form class="profileform col-xl-8 col-lg-9 col-md-11 col-sm-11 col-12 text-center" method="POST" enctype="multipart/form-data">
        <br>
        <img class="rounded-circle mt-1" src="<?php echo "images/" . $rows['c_img'] ?>" width="100">
        <br><br>
        <div class="row">
        <div class="col-6">
        <input class="form-control profileedit" type="text" name="cusname"
            value="<?php echo $rows['c_name'] ?>" required>
        <br>
        </div>
        <div class="col-6">
        <input class="form-control profileedit" type="email"
            name="cusemail" value="<?php echo $rows['c_email'] ?>" required>
        <br>
        </div>
        <div class="col-6">
        <input class="form-control profileedit" type="password"
            name="cuspassword" value="<?php echo $rows['c_password'] ?>" required>
        <br>
        </div>
        <div class="col-6">
        <input class="form-control profileedit"  type="number"
            name="cuscontact" value="<?php echo $rows['c_contact']?>" required>
            </div>
            <div class="col-6">
        <input class="form-control profileedit"  type="text"
            name="cusaddress" value="<?php echo $rows['c_address']?>" required>
</div>
            <div class="col-6">
        <input class="form-control profileedit"  type="file"
            name="cusimage" value="<?php echo $rows['c_img']?>" required>
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