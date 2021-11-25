<!DOCTYPE html>
<html lang="en">
<?php require "head.php" ?>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="./accueil.php">Getflix</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
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
      <ul  l class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"><img src="https://img.icons8.com/external-wanicon-flat-wanicon/64/000000/external-exit-hotel-wanicon-flat-wanicon.png" width="35px"/></a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="profil.php"><img src="https://img.icons8.com/external-wanicon-flat-wanicon/64/000000/external-profile-user-interface-wanicon-flat-wanicon.png" width="35px"/></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="./inscription.php">SignUp</a>
          
        </li>
        
  </ul>
    </div>
  </div>
</nav>
<form class="container" id="containerProfil"  method="post" action="">
    <h1>PROFIL</h1>
    
        <div class="row ">
            
           
            
            
                <div class="col-lg-6 col-md-6 col-sm-12 ">
              
                    <label for="first-name"><b>First Name</b></label>
                    <input class="border rounded" type="text" placeholder="Enter your first name" name="userfname" id="firsname" required>

                    <label for="last-name"><b>Last Name</b></label>
                    <input class="border rounded"  type="text" placeholder="Enter your last name" name="userlname" id="lastname" required>

                    <label for="psw"><b>Password</b></label>
                    <input class="border rounded"  type="password" placeholder="Enter Password" name="userpsw" id="psw" required>
                
                    <label for="psw-repeat"><b>Repeat Password</b></label>
                    <input class="border rounded"  type="password" placeholder="Repeat Password" name="userpswcheck" id="psw-repeat" required>
                </div>
                
                <div class="col-lg-6 col-md-6 col-sm-12">
                    
                    <label for="email"><b>Email</b></label>
                    <input class="border rounded"  type="text" placeholder="Enter Email" name="useremail" id="email" required>
                    
                    <label for="adress"><b>Adress</b></label>
                    <input class="border rounded"  type="text" placeholder="Enter adress" name="useradress" id="adress" required>

                    <label for="birthday"><b>Birthday</b></label>
                    <input class="border rounded"  type="text" placeholder="Enter birthday" name="userbday" id="birthday" required>
                </div>
                
                
                    <div class="  container-fluid  col-lg-12 justify-content-center"></br>
                        
                            <button type="submit" class="border rounded registerbtn d-grid gap-2 col-12 mx-auto d-flex justify-content-center align-items-center" id="register">MODIFIER</button>
                </div>
    
             
        </div>
        </div>

    </div>
    </form>
</body>
</html>