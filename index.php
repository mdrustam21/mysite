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
      html{
        scroll-behavior: smooth;
      }
    </style>
  </head>
  <body>
    <?php include '_header.php' ?>
    <?php include '_database.php' ?>
    
    
    <!--view crousel/images slider show-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://source.unsplash.com/1600x700/?programming,python" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://source.unsplash.com/1600x700/?programming,html" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://source.unsplash.com/1600x700/?programming,AI" class="d-block w-100" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!-- idiscuse from in the boxes-->
    <div class="container-fluid">
      <div class="container">
        <div class="section_header text-center my-5">
          <h3>I'm DISCUSE</h3>
        </div>
      </div>
      <div class="row my-5">
    <?php
      $sql = "SELECT * FROM `catries`";
      $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $name = $row['name'];
        $desc = $row['desc'];
        echo'<div class="col-lg-4 col-md-4 col-12 my-3">
          
          <div class="card" style="width: 18rem;">
            <img src="https://source.unsplash.com/160x80/?'.$name.',programming" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><a href="thredlist.php?catid='.$id.'">'.$name.'</a></h5>
              <p class="card-text">'.substr($desc, 0, 50).'....</p>
              <a href="thredlist.php?catid='.$id.'" class="btn btn-outline-primary">View Therts</a>
            </div>
          </div>
        </div>';
      }
    ?>
    </div>
    </div>
    <!-- idiscuse from in the boxes coment sections any warchal work-->
   
     <!--   <div class="col-lg-4 col-md-4 col-12 my-5">
          <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    
    
    <?php include '_about.php' ?>
    <?php include '_servise.php' ?>
    <?php include '_contact.php' ?>
    <?php include '_footer.php' ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>