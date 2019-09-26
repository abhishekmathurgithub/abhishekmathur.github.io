<!DOCTYPE html>
<html>
<head>
<title>Abhishek Mathur</title>
<link href="images/a.jpg" rel="icon" type="image">
<!--meta tag-->
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <!--css-->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">

 </head>
<body>
<!--nav bar-->
<?php include 'menu.php'; ?>
<!--slider start-->
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/a4.jpg" alt="a7 developer" width="1100" height="500">
      <div class="carousel-caption">
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/a2.jpg" alt="music" width="1100" height="500">
      <div class="carousel-caption">
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/a3.jpg" alt="php" width="1100" height="500">
      <div class="carousel-caption">
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<!--About-->
<section class="my-5">
<div class="py-5">
<h3 class="text-center">About</h3>
</div>
<div class="container container-fluid">
<div class="row">
<div class="col-lg-6 col-md-6 col-6">
<img src="images/owner3.jpg" class="img-responsive img-thumbnail img-circle">
</div>
<div class="col-lg-6 col-md-6 col-6">
<h2 class="display-4">Web Developer</h2>
<p class="py-3">Graduate in B.C.A from kanpur university.then strated working in Finfort company.get the knowledge about web development
  like html,css,javascript,bootstrap,php and my sql.A web developer is a programmer who specializes in, or is specifically engaged in, the development of World Wide Web applications using a client–server model. The applications typically use HTML, CSS and JavaScript in the client, PHP, ASP.NET (C#) or Java in the server, and http for communications between client and server. A web content management system is often used to develop and maintain web applications.<br>
 <br><br> <a href="about.php" class="btn btn-success">Check More</a>
</div>
</div>
</section>
<!--our services-->
<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">WORK</h2>
</div>
<div class="container container-fluid">
<div class="row">
<div class="col-lg-4 col-md-4 col-12">
<div class="card">
  <img class="card-img-top" src="images/a5.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Bangalore</h4>
  </div>
</div>
</div>
<div class="col-lg-4 col-md-4 col-12">
<div class="card">
  <img class="card-img-top" src="images/a7.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Kanpur</h4>
  </div>
</div>
</div>
<div class="col-lg-4 col-md-4 col-12">
<div class="card">
  <img class="card-img-top" src="images/a8.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Chandigarh</h4>
  </div>
</div>
</div>

</div>
</div>
</section>
<!--Gallery-->
<section class="my-5">
<div class="py-5">
<h2 class="text-center">Gallery</h2>
</div>
<div class="container container-fluid">
<div class="row">
<div class="col-lg-4 col-md-4 col-12">
<img src="images/a10.jpg" class="img-fluid pb-4">
</div>
<div class="col-lg-4 col-md-4 col-12">
<img src="images/a11.jpg" class="img-fluid pb-4">
</div>

<div class="col-lg-4 col-md-4 col-12">
<img src="images/a12.jpg" class="img-fluid pb-4">
</div>

<div class="col-lg-4 col-md-4 col-12">
<img src="images/a13.jpg" class="img-fluid pb-4">
</div>

<div class="col-lg-4 col-md-4 col-12">
<img src="images/a14.jpg" class="img-fluid pb-4">
</div>

<div class="col-lg-4 col-md-4 col-12">
<img src="images/a15.jpg" class="img-fluid pb-4">
</div>

<div class="col-lg-4 col-md-4 col-12">
<img src="images/a10.jpg" class="img-fluid pb-4">
</div>

<div class="col-lg-4 col-md-4 col-12">
<img src="images/a11.jpg" class="img-fluid pb-4">
</div>

<div class="col-lg-4 col-md-4 col-12">
<img src="images/a12.jpg" class="img-fluid pb-4">
</div>

</div>
</div>
</section>

<!--form-->
<section class="my-5">
<div class="py-5">
<h2 class="text-center">Contact</h2>
<div>
<br><br>
<div class="w-50 m-auto">
<form action="data.php" method="post">
<div class="form-group">
<label>Username</label>
<input type="text" name="user" class="form-control" autocomplete="off">
</div>
<div class="form-group">
<label>Email-id</label>
<input type="text" name="email" class="form-control" autocomplete="off">
</div>
<div class="form-group">
<label>Mobile-no</label>
<input type="text" name="mobile" class="form-control" autocomplete="off">
</div>
<div class="form-group">
<label>Comment</label>
<textarea class="form-control"></textarea>
</div>
<button type="submit" class="btn btn-success">Submit</button>
</form>
</div>
</section>
<!--footer-->
<footer>
<p class="p-3 bg-dark text-white text-center">@Abhishekmathur.com</p>
</footer>




<!--javascript-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>