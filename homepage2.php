<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" />-->
  <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">-->
  <title>c2c</title>
  <style>
  .topnav a{
     text-decoration: none;
     color: purple;
     margin-right: 50px;
  }
  .topnav{
      background-color: lightblue;
      padding: 20px;
  }
  .topnav a:hover{
      color: white;
      transition: 0.3s;
  }
  footer{
      background-color: lightblue;
  }
  footer a{
      text-decoration: none;
      color: white;
  }
  footer a:hover{
      color: purple;
      transition: 0.3s;
  }
 </style>
</head>
<?php
  $hostname = "sql110.epizy.com";
  $user = "epiz_31673252";
  $pass = "4smbzrvf";
  $dbname = "epiz_31673252_c2cdb";

  $conn = mysqli_connect($hostname, $user, $pass, $dbname);
  if(!$conn){
      die("your database is not connected!");
  }
?>
<?php
    session_start();
    if(!isset($_SESSION['done'])){
        header("Location: homepage.php");
    }
    if(isset($_POST['logout'])){
        session_destroy();
        header("Location: homepage.php");
    }
?>
<body>
<h4 align="center" style="color: red; background-color: lightred;"><b><?php echo $err; ?></b><h4>
    <nav class="topnav">
      <a href="#">Home</a> 
      <a href="#about">About us</a> 
      <a href="#contact">Contact us</a> 
      <a href="#faq">FAQ's</a> 
    </nav>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><h1>c<b style="color: orange;">2</b>c</h1></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Personal Loans
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" href="personalloans.php">Wedding loan</a></li>
                      <li><a class="dropdown-item" href="personalloans.php">Home rennovation loan</a></li>
                      <li><a class="dropdown-item" href="personalloans.php">Travel loan</a></li>
                      <li><a class="dropdown-item" href="personalloans.php">Medical Loan</a></li>
                      <li><a class="dropdown-item" href="personalloans.php">Debt consolidation loan</a></li>
                      <li><a class="dropdown-item" href="personalloans.php">Higher education loan</a></li>
                      <li><a class="dropdown-item" href="personalloans.php">Pension loan</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Corporate/Project loans
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" href="corporateloan.php">Corporate</a></li>
                      <li><a class="dropdown-item" href="corporateloan.php">Builder/ Developers</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Other loans
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" href="otherloans.php">Loans against property</a></li>
                      <li><a class="dropdown-item" href="otherloans.php">Loan against securities</a></li>
                      <li><a class="dropdown-item" href="otherloans.php">Loan to professionals</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Deposits
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" href="deposits.php">Public deposit</a></li>
                      <li><a class="dropdown-item" href="deposits.php">Corporate deposit</a></li>
                    </ul>
                </li>
            </ul>
            <div class="d-flex">
                  <a href="profiledisplay.php" class="btn btn-outline-success" style="margin-right: 10px;">Apply for a loan</a>
                  <a href="profile.php" class="btn btn-success" style="margin-right: 10px;">Create a profile</a>
                <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                  <button type="submit" name="logout" class="btn btn-danger">Logout</button>
                </form>
            </div>
          </div>
        </div>
      </nav>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="slide1.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>A Loan for all your needs</h>
        <h2>Loan can be availed for personal needs such as childrens education/marriage, foreign travel, purchase of another property, business expansion, purchase of consumer durables/vehicles etc</h2>
      </div>
    </div>
    <div class="carousel-item">
      <img src="slide2.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Happy Home Loan Offer</h1>
        <h3>Rate of Interest 6.70 %</h3>
        <h3>* Terms & Conditions Apply</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="slide3.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Make your Life Grander post retirement</h1>
        <h2>Maximum tenure upto 80 years of age or 30 years whichever is earlier. Join application with children also permissible to avail higher loan</h2>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div id="about"><h1 class="text-center" style="font-weight: 500; color: black;">About Us</h1></div>
<br>
<section class="container">
<div class="how-section1">
  <div class="row">
    <div class="col-md-6 how-img">
      <img class="showcase-img img-fluid"src="aboutusimg.jpeg" type="image">
    </div>
    <div class="col-md-6">
      <h2 class="subheading" style="font-weight:100; color:black">The common purposes for a personal loan include financing a large purchase, a personal loan include covering an emergency expense.</h2>
        <h3 style="color: rgb(0, 38, 91); font-weight: 200;">Home loans that fulfil your needs</h3>
      <h4 class="text-muted ">We understand the value of home ownership. Which is why, our business looks beyond extending home loans to guiding you throughout the journey step by step. Avail home loans comfortably by applying online.</h4>
      <h3>Click here:  <a href="#"  style="color: #052f89; font-size: 20px; font-weight: 300px;">Apply now</a>
    </div>
  </div>
</div><br>
<hr style="height: 5px;">

<div id="contact"><h1 class="text-center" style="font-weight: 500; color: black;">Loan Enquiry</h1></div>
<br>
<section>
 <div class="container">
  <div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h3 class="card-title">c2c Office</h3>
          <p class="card-text">No 1, Saibaba Nagar,</p>
          <p class="card-text">Thandalam, Chennai-602 105</p>
          <p class="card-text">TamilNadu</p>
          <p class="text mb-3" style="color: purple;">Email 1: 200801119@rajalakshmi.edu.in</p>
          <p class="text mb-3" style="color: purple;">Email 2: 200801118@rajalakshmi.edu.in</p>
          <p class="text mb-3" style="color: purple;">Phone No 1: +91 96554 13375</p>
          <p class="text mb-3" style="color: purple;">Phone No 2: +91 89035 07021</p>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h3 class="card-title" style="font-weight: 300; color: black;">Contact us</h3>
          <h3 class="card-title" style="font-weight: 300; color: black;">Help us reach you</h3>
          <p class="card-text">We help you in taking that one step closer towards your dream with our customer friendly loan products. Help us reach you by just filling in your details and get your loans sanctioned with c2c's doorstep service.</p>
          <a class="btn btn-primary" href="#scrollspyHeading1" aria-current="page">Contact</a>
        </div>
      </div>
    </div>
</div>
<br>
<hr style="color:black;">
<br>
 <div class="container" id="scrollspyHeading1">
  <form target="_blank" action="https://formsubmit.co/819ae0ec20372026bcfb30ead157ece0" method="POST">
    <div class="form-group">
      <div class="form-row">
        <div class="col">
          <input type="text" name="name" class="form-control" placeholder="Full Name" required>
        </div><br>
        <div class="col">
          <input type="email" name="email" class="form-control" placeholder="Email Address" required>
        </div><br>
      </div>
    </div>
    <div class="form-group">
      <textarea placeholder="Your Message" class="form-control" name="message" rows="10" required></textarea>
    </div><br>
    <button type="submit" class="btn btn-dark"> Submit </button>
  </form><br><br>
</div>
<div id="faq">
<h3 align="center">FAQ's:</h3><br>
<div class="accordion" id="accordionPanelsStayOpenExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
        What do I Need the Loan for?
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
      <div class="accordion-body">
        <p>This is the first question to ask yourself. You need to ask yourself if your personal loan is meant for an emergency need, or something which is optional and/or can pose a risk. It is good to have this self-awareness so that you do not regret it in the future. For instance, taking a personal loan to invest in the stock market may not be a good idea at the moment if your income is not stable. On the other hand, it could be a good solution in case of a medical emergency, or to bridge a small gap and realize a long-awaited dream, such as the downpayment on your home loan, or children’s education.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
        What is my Personal Loan Eligibility?
      </button>
    </h2>
    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
      <div class="accordion-body">
        <p>c2c offers a personal loan eligibility calculator. Personal loan eligibility is different from person to person. Few of the main criteria are the stability of your income source, and the amount of disposable income. Your credit score is also expected to be good. A Few other factors like your age, credit history, work experience, etc are also taken into consideration.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
        EMI Affordability ?
      </button>
    </h2>
    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
      <div class="accordion-body">
        <p>Interest rate is certainly a luring factor when it comes to personal loans. However, the flat rate that is mentioned could be misleading at times. Sometimes there are hidden charges in the loan, which may increase your rate<p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
        What is the interest rate on the loan?
      </button>
    </h2>
    <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
      <div class="accordion-body">
        <p>Depending on your credit score and other factors, the interest rate may impact your decision to borrow. Think of an interest rate as an expense for borrowing money from a lender. The amount of interest is bundled with your payments. Be sure to ask about how the interest rate affects the cost of borrowing the loan before signing the paperwork.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingFive">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
        What is the term of the loan?
      </button>
    </h2>
    <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFive">
      <div class="accordion-body">
        <p>It’s important to consider the term of the loan and whether it works for you in the long run. If you don’t mind paying a larger monthly payment, you may want to choose a shorter timeline. On the flip side, taking out a loan with a longer repayment timeline usually grants a smaller, more affordable monthly payment.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingSix">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false" aria-controls="panelsStayOpen-collapseSix">
        How much should I borrow?
      </button>
    </h2>
    <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSix">
      <div class="accordion-body">
        <p>The minimum and maximum borrowing limits are set by each lender and the amount of your personal loan limit depends on your creditworthiness. Ask yourself about your needs. If you’re taking out a loan for something just nice to have, like a vacation, you might want to consider building towards that goal by opening a high-interest savings account. However, if you’re consolidating debt or covering unexpected expenses, a personal loan may be in your best interest. The amount you request when taking out a personal loan should be limited to your actual need. Borrowing more money than you need ends up making the loan more costly over time. To calculate how much money you should borrow, add up all your debts or anticipated expenses to come up with an ideal loan amount.</p>
      </div>
    </div>
  </div>
</div>
</div><br><br><br>

<footer class="w-100 py-4 flex-shrink-0">
  <div class="container py-4">
      <div class="row gy-4 gx-5">
          <div class="col-lg-4 col-md-6">
            <h4 class="text mb-3">Contact Us on:</h4>
            <h5 class="text mb-3">Email 1: <a href="#">200801119@rajalakshmi.edu.in</a>
            <h5 class="text mb-3">Email 2: <a href="#">200801118@rajalakshmi.edu.in</a>
          </div>
          <div class="col-lg-4 col-md-6">
            <h4 class="text mb-3">Our Products:</h4>
            <ul class="list-unstyled text-muted">
                <li><a href="personalloans.php">Wedding Loan</a></li>
                <li><a href="personalloans.php">Home renovation Loan</a></li>
                <li><a href="personalloans.php">Traval Loan</a></li>
                <li><a href="personalloans.php">Medical Loan</a></li>
                <li><a href="personalloans.php">Debt consolidation Loan</a></li>
                <li><a href="personalloans.php">Higher Education Loan</a></li>
                <li><a href="personalloans.php">Pension Loan</a></li>
            </ul>  
          </div>
          <div class="col-lg-4 col-md-6">
              <h4 class="text mb-3">Our Products:</h4>
              <ul class="list-unstyled text-muted">
                  <li><a href="otherloans.php">Loan against property</a></li>
                  <li><a href="otherloans.php">Loan against securities</a></li>
                  <li><a href="otherloans.php">Loan to professional</a></li>
                  <li><a href="corporateloan.php">Corporate</a></li>
                  <li><a href="corporateloan.php">Builders/Devolopers</a></li>
                  <li><a href="deposits.php">Public Deposits</a></li>
                  <li><a href="deposits.php">Corporate Deposits</a></li>
                  
              </ul>
          </div>
      </div>
  </div>
</footer>

<!--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
  </html>
