<?php
/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include '_database.php';

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $username = $_POST['username'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];

  $qu = " SELECT * FROM `userreg` WHERE user_username = '$username' AND user_email = '$email' ";
  $result = mysqli_query($conn, $ue);
  $number = mysqli_num_rows($result);
  if ($number == 1) {
    echo "your username is all ready exit";
  } else {
    if ($password != $cpassword) {
      echo "your password is not match please cheak hera to sinup cheak";
    } else {
      $hash = password_hash($password, PASSWORD_DEFAULT);
      $sql = "INSERT INTO `userreg` ( `user_fname`, `user_lname`, `user_username`, `user_phone`, `user_email`, `user_password`) VALUES ('$fame', '$lname', '$username', '$phone', '$email', '$hash') ";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        echo "Your Registration successfull ";

      }

    }
  }
}
*/
?>
<!-- Modal -->
<div class="modal fade" id="sinupModal" tabindex="-1" role="dialog" aria-labelledby="sinupModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="sinupModalLabel">Sinup for a Arya world</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Sucess!</strong> You should check in on some of those fields below.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="rls/sinupsystem.php" method="POST">
          <div class="form-group">
            <label for="validationCustom03">First Name</label>
            <input type="text" name="fname" class="form-control" id="validationCustom03" required>
            <div class="invalid-feedback">
              Please fill The First Name.
            </div>
          </div>
          <div class="form-group">
            <label for="validationCustom03">Last Name</label>
            <input type="text" name="lname" class="form-control" id="validationCustom03" required>
            <div class="invalid-feedback">
              Please fill The Last Name.
            </div>
          </div>
          <div class="form-group">
            <label for="validationCustom03">Username</label>
            <input type="text" name="username" class="form-control" id="validationCustom03" required>
            <div class="invalid-feedback">
              Please fill The Username.
            </div>
          </div>
          <div class="form-group">
            <label for="validationCustom03">Phone No</label>
            <input type="number" name="phone" class="form-control" id="validationCustom03" required>
            <div class="invalid-feedback">
              Please fill The First Name.
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Conform Password</label>
            <input type="password" name="cpassword" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
          <button type="submit" class="btn btn-outline-primary">Submit</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!--  <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>