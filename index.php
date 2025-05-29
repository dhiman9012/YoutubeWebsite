<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="css/style.css">
     <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">DevMark Studio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Services</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
  

  <!-- carousel -->
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/web.png" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="img/4.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="img/2.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<!-- About us -->
 <section class="my-5">
    <div class="py-5">
        <h2 class="text-center">About Us</h2>
    </div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
            <img src="img/2.jpg" class="img-fluid aboutimg">
        </div>

        <div class="col-lg-6 col-md-6 col-12">
            <h2>I'm DevMark </h2>
            <p class="py-3">Welcome to DevMark Studio — where creativity meets technology. We specialize in crafting tailored digital solutions to help individuals and businesses grow in the digital space. Whether you're looking for a stunning website, a powerful Android application, or strategic digital marketing services, we've got you covered.
            At DevMark Studio, we combine technical expertise with creative thinking to deliver impactful, user-focused solutions. With a passion for innovation and a commitment to quality, we aim to bring your ideas to life and help your brand stand out online.</p>
            <a href="about.php" class="btn btn-success">check More</a>
        </div>
    </div>
</div>

 </section>

<!-- services -->

 <section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Our Services</h2>
    </div>

    <div class= "container-fluid">
       <div class= "row">
         <div class="col-lg-4 col-md-4 col-12">

            <div class="card">
             <img class="card-img-top" src="img/4.jpg" alt="Card image">
           <div class="card-body">
            <h4 class="card-title">Application Development</h4>
            <p class="card-text">At DevMark Studio, we create custom Android applications that are fast, scalable, and user-friendly.
             We turn your ideas into powerful mobile apps with clean UI, strong performance, and smart features.
             Whether for business or personal use, we deliver apps that drive real results.</p>
             <a href="#" class="btn btn-primary">See Profile</a>
        </div>
    </div>    
  </div>

   <div class="col-lg-4 col-md-4 col-12">

            <div class="card">
             <img class="card-img-top" src="img/web.png" alt="Card image">
           <div class="card-body">
            <h4 class="card-title">Website Development</h4>
            <p class="card-text">At DevMark Studio, we design and develop responsive, modern websites that reflect your brand and engage your audience.
           From personal portfolios to business websites, we build with performance, SEO, and user experience in mind.
           Let us help you establish a strong online presence that stands out.</p>
             <a href="#" class="btn btn-primary">See Profile</a>
        </div>
    </div>    
  </div>

   <div class="col-lg-4 col-md-4 col-12">

            <div class="card">
             <img class="card-img-top" src="img/2.jpg" alt="Card image">
           <div class="card-body">
            <h4 class="card-title">Digital Marketing</h4>
            <p class="card-text">At DevMark Studio, we help your brand grow online through smart digital marketing strategies.
            From SEO and social media to content marketing and ads, we drive traffic and boost engagement.
            Let us turn your online presence into a powerful marketing tool..</p>
             <a href="#" class="btn btn-primary">See Profile</a>
        </div>
    </div>    
  </div>

       </div>
    </div>
</section>

<!-- Contact Us -->
  <section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Contact Us</h2>
    </div>

    <div class="w-50 m-auto">
      <form action="userinfo.php" method="post">
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="user" autocomplete="off" class="form-control">
        </div>

        <div class="form-group">
          <label>Eamil Id</label>
          <input type="text" name="email" autocomplete="off" class="form-control">
        </div>

        <div class="form-group">
          <label>Mobile</label>
          <input type="text" name="mobile" autocomplete="off" class="form-control">
        </div>


        <div class="form-group">
          <label>Comments</label>
          <textarea class="form-control" name="comment"></textarea>
        </div>
        <button type="sumit" class="btn btn-success">Sumit</button>
      </form>
    </div>
</section>

<footer>
  <p class="p-3 bg-dark text-white text-center">simrandhiman7555@gmail.com</p>
</footer>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>