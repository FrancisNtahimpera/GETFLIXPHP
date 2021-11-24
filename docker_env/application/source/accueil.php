<!DOCTYPE html>
<html lang="en">
<?php require "head.php" ?>
<link rel="stylesheet" href="caroussel/css/style.css">
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Getflix</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorie
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Thriller</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Science Fiction</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Horror</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
         
      </ul>
      <form class="d-flex">
        <input class="form-control p-2" type="search" placeholder="film or series" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">FIND</button>
      </form>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"><img src="https://img.icons8.com/external-wanicon-flat-wanicon/64/000000/external-exit-hotel-wanicon-flat-wanicon.png" width="35px"/></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><img src="https://img.icons8.com/external-wanicon-flat-wanicon/64/000000/external-profile-user-interface-wanicon-flat-wanicon.png" width="35px"/></a>
        </li>
    </div>
  </div>
</nav>
<?php require "caroussel/index.php"; ?>
    
</body>
</html>