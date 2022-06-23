<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profiles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<?php
  session_start();
  $hostname = "sql110.epizy.com";
  $user = "epiz_31673252";
  $pass = "4smbzrvf";
  $dbname = "epiz_31673252_c2cdb";

  $conn = mysqli_connect($hostname, $user, $pass, $dbname);
  if(!$conn){
      die("your database is not connected!");
  }
  if(!isset($_SESSION['done'])){
      die("<h1>You must login first to access this page!</h2>");
  }
?>
<h2 align="center" style="color: purple;">PROFILES ON THE BASIS OF CIBIL SCORE:</h2>
<?php
  $query = "SELECT * FROM profiles";
  $query_run = mysqli_query($conn, $query);
  $check_name = mysqli_num_rows($query_run) > 0;
  if($check_name){?>
      <div class="container">
        <div class="row">
        <?php 
      while($row = mysqli_fetch_assoc($query_run)){
          ?>
          <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title"><?php echo $row['name']; ?></h2>
                    <p class="card-text">
                        GENDER: <?php echo $row['gend']; ?><br>
                        DATE OF BIRTH: <?php echo $row['dob']; ?><br>
                        OCCUPATION: <?php echo $row['occ']; ?><br>
                        COUNRTY: <?php echo $row['country']; ?><br>
                        CIBIL SCORE: <?php echo("<b>".rand(300,700)."</b>"); ?><br><br>
                        <a href="application.php" class="btn btn-warning">Request for a loan</a>
                    </p>
                </div>
            </div>
           </div>
           <?php
      }
  }
  else{
      echo "<h3>No users found!</h3><br>";
      echo "<h5>Users who created a profile will be displayed here! Go back and create your profile now!</h5>";
  }
?>
<body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
