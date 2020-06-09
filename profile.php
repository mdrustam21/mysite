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
    .container h2{
      font-family: cursive;
      animation: cd 2s linear infinite;
    }
    @keyframes cd{
      0%{
        color: red;
      }
      10%{
        color: blue;
      }
     20%{
        color: green;
      }
     230%{
        color: yellow;
      }
      40%{
        color: black;
      }
      50%{
        color: orange;
      }
      60%{
        color: #c5e5c9b8;
      }
      70%{
        color: #c0abcc;
      }
      80%{
        color: #7f5d79;
      }
      90%{
        color: #1f1f4f;
      }
      110%{
        color: green;
      }
    }
    </style>
  </head>
  <body>
    <?php include 'rls/_header.php' ?>
    <?php include 'rls/_database.php' ?>
    <?php include 'session.php' ?>
    
  
          <?php
$sql="SELECT * FROM userreg where username=$loggedin_id";
$result=mysqli_query($con,$sql);
?>
<?php
while($rows=mysqli_fetch_array($result)){
?>
          
          
          
      
    <div class="container">
      <div class="card text-center">
        <div class="card-header">
          <h2 class="text-center"> Your Profile is Active</h2>
        </div>
        <div class="card-body">
          <h5 class="card-title">User I'd No:  &nbsp; &nbsp; <?php echo $user_id; ?></h5>
          <h5 class="card-title">Name &nbsp; &nbsp; <?php echo $user_fname;?> &nbsp; <?php echo $user_lname;?></h5>
          <h5 class="card-title">Email &nbsp; &nbsp; <?php echo $user_email;?></h5>
          <h5 class="card-title">Mob No  &nbsp; &nbsp; <?php echo $user_phone;?></h5>
         <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>-->
          <a href="#" class="btn btn-outline-success">Updata Profile</a>
        </div>
        <div class="card-footer text-muted">
          2 days ago
        </div>
      </div>
      
    </div>
          <input type="image" name="" id="" value="images" />
    
    
    <?php include 'rls/_footer.php' ?>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>