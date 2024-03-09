<?php
// include "customersession.php";
include 'conn.php';
include 'navbar.php';
// $conn = mysqli_connect("localhost" , "root" , "" , "e_book");




if (isset($_POST['submit'])) {


  $name = $_POST['custname'];
  $date = $_POST['date'];
  $subject = $_POST['subject'];
  $msg = $_POST['message'];

  $query = "INSERT INTO `competition_submissions`(`sub_date`, `sub_file`, `customer_id`, `competition_id`) VALUES ('$date' , '$msg' , '$name' , '$subject');";

  $result = mysqli_query($conn, $query);

  if ($result) {
    echo "
        <script>    
        alert('Competition has been submit');
        window.location.href='index.php';
        </script>
        
        ";
  }

}
?>

<title>Competition</title>

<?php

if (isset($_SESSION['customerid'])) {
  ?>

  <div>
    <span id="countdown" style="font-weight: bold;"></span>

  </div>
  <div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-lg-9">
        <h1 class="mb-3">Write Eassy </h1>
        <form method="POST">
          <div class="row g-3">
            <div class="col-md-12">
              <label for="your-subject" class="form-label">Your Name</label>
              <select name="custname" class="form-select">
                <option hidden>Select Name</option>
                <?php
                $sqlquery = "SELECT * FROM customer WHERE c_id = $_SESSION[customerid]";
                $run = mysqli_query($conn, $sqlquery);

                if (mysqli_num_rows($run)) {
                  while ($rowss = mysqli_fetch_array($run)) {
                    ?>
                    <option value="<?php echo $rowss['c_id'] ?>">
                      <?php echo $rowss['c_name'] ?>
                    </option>
                  <?php
                  }
                }
                ?>
              </select>
            </div>

            <div class="col-md-12">
              <label for="your-email" class="form-label">Date</label>
              <input type="date" class="form-control" id="your-email" name="date" required>
            </div>

            <label for="your-subject" class="form-label">Your Subject</label>
            <select name="subject" class="form-select">
              <?php
              $sqlquery = "SELECT * FROM competition_list";
              $run = mysqli_query($conn, $sqlquery);

              if (mysqli_num_rows($run)) {
                while ($row = mysqli_fetch_array($run)) {
                  ?>
                  <option value="<?php echo $row['comp_id'] ?>">
                    <?php echo $row['comp_name'] ?>
                  </option>
                <?php
                }
              }
              ?>
            </select>
            <div class="col-12">
              <label for="your-message" class="form-label">Your Eassy</label>
              <textarea class="form-control" id="your-message" name="message" rows="5" required></textarea>
            </div>
            <div class="col-12">
              <div class="row">
                <div class="col-md-6">
                  <?php
                  if (isset($_SESSION['customerid'])) {
                    ?>
                    <button type="submit" name="submit" class="btn btn-dark w-50 fw-bold">Send</button>
                    <?php
                  } else {
                    echo "<button type='submit' name='submit' class='btn btn-dark w-50 fw-bold' >Send</button>";
                  }
                  ?>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <br><br><br>
  <div class="container col-xxl-8 px-4">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="images\24307396_6920933-removebg-preview.png" class="d-block mx-lg-auto img-fluid"
          alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3"> Enter the realm of literature, and let the competition begin</h1>
        <br>
        <p class="lead">"In the thrilling arena of essay and story competitions, words become warriors, competing to forge
          narratives that captivate hearts and minds, ultimately crowning the victor of literary prowess."</p>
        <br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <a href="competition.php">
            <button style="background: rgb(73,57,113);" type="button"
              class="btn btn-primary border-0 rounded-2 btn-lg px-4 fw-bold me-md-2">Regitration</button>
          </a>
        </div>


      </div>
    </div>
  </div>

  <?php
} else {
  // echo "<center class='mt-5 pt-5'><a class='mt-5' href='login.php'>Login First</a></center>";
  echo "<script>    
        alert('Login First then you can Participate');
        window.location.href='customerlogin.php';
        </script>";
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<?php

include 'footer.php';

?>

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
<script>
  var timeInSecs;
  var ticker;

  function startTimer(secs) {
    timeInSecs = parseInt(secs);
    ticker = setInterval("tick()", 1000);
  }

  function tick() {
    var secs = timeInSecs;
    if (secs > 0) {
      timeInSecs--;
    }
    else {
      clearInterval(ticker);
      startTimer(180 * 60);
    }

    var days = Math.floor(secs / 86400);
    secs %= 86400;
    var hours = Math.floor(secs / 3600);
    secs %= 3600;
    var mins = Math.floor(secs / 60);
    secs %= 60;
    var pretty = ((days < 10) ? "0" : "") + days + ":" + ((hours < 10) ? "0" : "") + hours + ":" + ((mins < 10) ? "0" : "") + mins + ":" + ((secs < 10) ? "0" : "") + secs;

    document.getElementById("countdown").innerHTML = pretty;
  }

  startTimer(180 * 60); // 4 minutes in seconds

  //Credits to Philip M from codingforum
</script>
</body>

</html>