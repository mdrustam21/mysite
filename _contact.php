<?php

$server = $_SERVER['REQUEST_METHOD'];
if($server == 'POST'){
  
  $username = $_POST['username'];
  $email = $_POST['email'];
  $message = $_POST['Message'];
  
  
  $sql = "INSERT INTO `userproblem` (`username`, `email`, `message`, `message_time`) VALUES('$username', '$email', '$message', CURRENT_TIMESTAMP)";
  
  $result = mysqli_query($conn, $sql);
  if ($result) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Sucess!</strong> Your Messages successfully Send thanks you very much..
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
  }else {
    echo 'no insert';
  }
}

?>


<div class="container my-5" id="contact">
  <h2 class="text-center text-success"> Contact Me </h2>
  <form action="<?php  $_SERVER['REQUEST_URI']; ?>" method="POST" accept-charset="utf-8">
    <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" name="username"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">Please enter your username</small>
    </div>
    <div class="form-group">
      <label for="exampleInputemail1">Email</label>
      <input type="email" name="email" class="form-control" id="exampleInputemail1">
    </div>
    <div class="form-group">
      <label for="exampleInputcoment1">Message</label> <br />
      <textarea class=" bg-secondary text-light" name="Message" id=coment rows="6" cols="35"></textarea>
    </div>
    <button class="btn btn-outline-secondary mb-5" type="submit">Send Now</button>
  </form>
</div>