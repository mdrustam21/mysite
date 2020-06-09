<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <title>IDISCUSE</title>
  <style>
    .jumbotron {
      min-height: 300px;
    }
    .fs{
      font-family: cursive;
    }
  </style>
</head>
<body>
  <?php include '_header.php' ?> <!--header-->
  <?php include '_database.php' ?> <!--database connection-->
  
  <!-- crousel Title and description write in php-->
  <?php
  $id = $_GET['catid'];
  $sql = "SELECT * FROM `catries` WHERE id=$id";
  $result = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_assoc($result)) {
    $catname = $row['name'];
    $desc = $row['desc'];
  }
  ?>
  
  <div class="jumbotron">
    <h1 class="display-4 ">Welcome To <?php echo $catname; ?> Forms</h1>
    <p class="lead">
      <?php echo $desc; ?>
    </p>
    <hr class="my-4">
    <p>
      Rules..., No Game Discuse, No Movies Discus, Only Computer Discus Thanks.. 
    </p>
    <a class="btn btn-outline-success btn-lg" href="_login.php" role="button">Learn more</a>
  </div>

  <?php
  $server = $_SERVER['REQUEST_METHOD'];

  if ($server == 'POST') {
    $th_title = $_POST['title'];
    $th_desc = $_POST['desc'];

    while ($row = mysqli_fetch_assoc($result)) {
      $idl = $row['thred_id'];
    }
    
    if ($th_title == "") {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> Please fill the Title filed Try again
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }elseif ($th_desc == "") {
       echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> Please fill the title and  Description filed Try again
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }
    else {

    $sql = "INSERT INTO `thred`(`thred_sub`, `thred_desc`, `thred_cat_id`, `thred_user_id`, `created_at`) VALUES ('$th_title', '$th_desc', '$id', '0', current_timestamp())";
    $result = mysqli_query($conn, $sql);
    
    if ($result) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Sucess!</strong> Your Questuons successfully Posted thanks you very much..
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }


    }
  } else {
  
  }

  ?>
  <div class="container">
    <h5 class="text-success text-center fs" >Post a Question</h5>
    <form action="<?php  $_SERVER['REQUEST_URI']; ?>" method="POST">
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title"class="form-control" id="title" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">This problem title fill only problem Totle</small>
      </div>
      <div class="form-group">
        <label,>Desc</label> <br>
        <textarea name="desc" id=desc rows="5 " cols="35" placeholder="Your problem This write Here"></textarea>

      </div>
      <button type="submit" class="btn btn-outline-success">Submit</button>
    </form>
  </div>
  <div class="container">
    <h1 class="my-5">Browse Questions </h1>
    <?php
    $id = $_GET['catid'];
    $sql = "SELECT * FROM `thred` WHERE thred_cat_id=$id";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
      $title = $row['thred_sub'];
      $desc = $row['thred_desc'];
      $id = $row['thred_id'];
        
      echo '<div class="media text-success bg my-5" background-color="red">
        <img src="img/user.png" width="21px" class="mr-3" alt="...">
        <div class="media-body">
          <h5 class="mt-0"><a href="three.php?qid='.$id.'">'.$title.'</a></h5>
          '.$desc.'
        </div>
      </div>'; 
      }

    ?>
  </div>
  
    <?php include '_footer.php' ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>