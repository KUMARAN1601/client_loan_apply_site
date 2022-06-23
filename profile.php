<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my profile</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
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
  if(isset($_POST['submit'])){
      $name = $_POST['name'];
      $gender = $_POST['gender'];
      $occupation = $_POST['occupation'];
      $country = $_POST['country'];
      $cn = $_POST['number'];
      $dob = $_POST['birth'];
      $acc = $_POST['acnumber'];
      $pin = $_POST['pincode'];
      $aad = $_FILES['aadhar']['name'];
      $pan = $_FILES['pan']['name'];
      $sal = $_FILES['salary']['name'];
      $fn = $_FILES['img']['name'];
      $tm = $_FILES['img']['tmp_name'];
      $target = basename($fn);
      $sql = "INSERT INTO profiles (name, gend, occ, country, number, dob, photo, accnum, pincode, aadhar, pan, salary) VALUES ('$name', '$gender', '$occupation', '$country', '$cn', '$dob', '$fn', '$acc', '$pin', '$aad', '$pan', '$sal')";
      if(mysqli_query($conn, $sql)){
          $msg = "Thank you for creating your account! Now you are ready to use our services.";
      }
      else{
          $err = "There is a problem submitting this form!";
      }
      move_uploaded_file($tm, $target);
  }
?>
<h3 style="color: darkgreen; background-color: lightgreen;" align="center"><?php echo $msg; ?></h3>
<h3 style="color: red; background-color: lightred;" align="center"><?php echo $err; ?></h3>
<h3 align="center" style="color: purple;">CREATE A PROFILE TO PROVIDE OR REQUEST FOR ANY LOAN:</h3><br>
<form class="container" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
    NAME: <br>
    <input class="form-control" type="text" name="name" placeholder="Enter your name" required><br>
    GENDER: <br>
    <input type="radio" name="gender" id="contact_email" value="male" required/>
    <label for="contact_email">Male</label>
    <input type="radio" name="gender" id="contact_phone" value="female" required/>
    <label for="contact_phone">Female</label>
    <input type="radio" name="gender" id="contact_phone" value="others" required/>
    <label for="contact_phone">Others</label><br><br>
    OCCUPATION: <br>
    <input type="text" class="form-control" name="occupation" placeholder="Your occupation" required><br>
    COUNTRY: <br>
    <input class="form-control" type="text" name="country" placeholder="Enter your country" required><br>
    CONTACT NUMBER: <br>
    <input class="form-control" type="number" name="number" placeholder="Enter your contact number" required><br>
    DATE OF BIRTH: <br>
    <input class="form-control" type="date" name="birth" required><br><br>
    UPLOAD YOUR PHOTO: <br>
    <input class="form-control" type="file" id="img" name="img" accept="image/*" required><br>
    <p><strong>Note:</strong> Upload your clear image with your complete face.</p><br>
    <hr>
    <h5><b>BANK DETAILS:</b></h5><br>
    ACCOUNT NUMBER: <br>
    <input class="form-control" type="number" placeholder="Enter your account number" name="acnumber" required><br>
    BRANCH PIN CODE: <br>
    <input class="form-control" type="number" placeholder="Enter your branch pin code" name="pincode" required><br>
    <hr>
    UPLOAD YOUR AADHAR CARD:
    <input class="form-control" type="file" name="aadhar" required><br>
    UPLOAD YOUR PAN CARD:
    <input class="form-control" type="file" name="pan" required><br>
    UPLOAD YOUR SALARY CERTIFICATE:
    <input class="form-control" type="file" name="salary" required><br>
    <button type="submit" class="btn btn-info" name="submit">Submit</button>
</form><br><br>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
