<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <title>Hello, world!</title>
  <style>

  </style>
</head>
<body>
  <?php include '_header.php' ?>
  <?php include '_database.php' ?>
  <!--view crisole/images slider show-->
  
  <?php
  
  $id = $_GET['qid'];
    $sql = "SELECT * FROM `thred` WHERE thred_id=$id";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
      
      $title = $row['thred_sub'];
      $desc = $row['thred_desc'];
    }
  ?>

  <div class="jumbotron">
    <h1 class="display-5"> <?php echo $title; ?> </h1>
    <p class="lead">
      <?php echo $desc; ?>
    </p>
    <p>
      rules...., 
      No Game discuse; 
      No Movies discuse;
      only programming discursimg
    </p>
    <!--<a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>-->
  </div>
  <?php
  
  $server = $_SERVER['REQUEST_METHOD'];

  if ($server == 'POST') {
    $coment = $_POST['coment'];
    if ($coment == "") {
      echo  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error !</strong> Please fill the Coment filed 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }else{

    $sql = "INSERT INTO `coment`(`coment`, `coment_user_id`, `coment_creat`, `coment_time`) VALUES ('$coment', '0', '$id', CURRENT_TIMESTAMP())";
    $result = mysqli_query($conn, $sql);
    if($result){
      echo  '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Sucess!</strong> Your Answer successfully Posted thanks you very much..
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }
  }



  } 
  
  ?>
    <?php
      $id = $_GET['qid'];
      $sql = "SELECT * FROM `coment` WHERE coment_creat=$id";
      $result = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_assoc($result)) {
        $coment = $row['coment'];
        $message_time =$row['coment_time'];
        
        echo '<div class="media text-success bg my-5" background-color="red">
        <img src="img/user.png" width="21px" class="mr-3" alt="...">
        <div class="media-body">
          <p class="font-weigth-bold my-0">Another </p>
          '.$coment.' <br/> '.$message_time.'
        </div>
      </div>'; 
      }
  
  ?>
  
  
  <div class="container">
    <form class="my-5" onsubmit="return validation()"  action="" method="POST" accept-charset="utf-8">
      <label>Coment's</label><br>
      <textarea class="bg-secondary text-light" name="coment" id="coment" rows="8" cols="35"></textarea> <br>
      <p id="ip" class="text-danger"></p>
     <!-- <input type="file" name="file" id="file" value="" /> -->
      <button class="btn btn-outline-success" type="submit">Coment Now</button>
    </form>
  </div>


  <?php include '_footer.php' ?>


<script type="text/javascript" charset="utf-8">

 /* function validation(){
    var coment = document.getElementById('coment').valuse;
    
    
    if(coment == ""){
      document.getElementById('ip').innerHTML= "** please fill the coment area";
      return false;
    }else{
    }
  }*/
</script>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>