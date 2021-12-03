<!DOCTYPE html>
<html lang="en">
<?php require "head.php" ?>
<link rel="stylesheet" href=" css/style.css">
<link rel="stylesheet" href="style.css">
<body>
  <style>
    #main{
  display:flex;
  flex-wrap:wrap;
  justify-content:center;
}
.movie {
  width:300px;
  margin:1rem;
  border-radius: 3px;
  box-shadow: 0.2px 4px 5px rgba(0,0,0.1);
  background-color: rgba(92, 202, 202, 0.307);
  position:relative;
  overflow:hidden;

}
.movie img{
  width: 100%;

}
.movie-info{
  color : white;
  display:flex;
  align-items: center;
  justify-content: space-between;
  padding:0.5rem 1rem 1rem;
  letter-spacing: 0.5px;
}

.movie-info h3{
  margin-top:0;
}
.movie-info span{
  background-color: darkgreen;
  padding: 0.25rem 0.5rem;
  border-radius:10px;
  box-shadow: 0.2px 4px 5px rgba(0,0,0.1);
  font-weight: bold;
}
.movie-info span.green{
  background-color: darkgreen;
  padding: 0.25rem 0.5rem;
  border-radius:10px;
  box-shadow: 0.2px 4px 5px rgba(0,0,0.1);
  font-weight: bold;
}
.overview{
  position:absolute;
  left:0;
  right:0;
  bottom:0;
  background-color: #fff;
  padding: 1rem;
  max-height: 100%;
  transform:translateY(+200%);
  transition:transform 0.4s ease-in;

}
.movie:hover .overview{

transform:translateY(0);
}
.carousel-item{
  width: 100%;
}
ul {
  list-style-type: none;
  
}
/* #kappa{
  margin-top: 200px;
  width: 100%;
  
}
.carousel-active{
  width: 100px;
  display:inline;
} */
/* .section{
  padding:4.5rem 0 1.5rem;
}
.conatiner{
  width:100%;
  min-height:640px;
  position:relative;
  display: flex;
  align-items:center;
  background:rgb(23,7,0..4,);


}
.conatiner img{
  width:100%;
  height:100%;
  object-fit:cover;
  object-position:center;
  

}
.swiper-pagination-bullet{
  width: 6px !important;
  heigth:6px !important;
  border-radius: 0.2rem !important;
  background : black;
  opacity:1;


} */
  </style>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Getflix</a>
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
        <li class="nav-item" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
<<<<<<< HEAD:docker_env/application/source/testagain.php
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Deconnexion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        hey nom de l'utilisateur Voulez-vous vraiment nous quitter ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">annuler</button>
        <button type="button" class="btn btn-primary">Se deconnecter</button>
      </div>
    </div>
  </div>
</div>
         <!-- SIGN IN SIGN OUT -->
        </li>
        <li>
        <a class="nav-link active" aria-current="page" href="#"><img src="https://img.icons8.com/external-wanicon-flat-wanicon/64/000000/external-exit-hotel-wanicon-flat-wanicon.png" width="35px"/></a>
=======
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Deconnexion</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                        <div class="modal-body">
                          hey nom de l'utilisateur Voulez-vous vraiment nous quitter ?
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">annuler</button>
                          <button type="button" class="btn btn-primary">Se deconnecter</button>
                  </div>
                </div>
              </div>
            </div>
          <a class="nav-link active" aria-current="page" href=""><img src="https://img.icons8.com/external-wanicon-flat-wanicon/64/000000/external-exit-hotel-wanicon-flat-wanicon.png" width="35px"/></a>
>>>>>>> refs/remotes/origin/master:docker_env/application/source/accueil.php
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="profil.php"><img src="https://img.icons8.com/external-wanicon-flat-wanicon/64/000000/external-profile-user-interface-wanicon-flat-wanicon.png" width="35px"/></a>
        </li>
<<<<<<< HEAD:docker_env/application/source/testagain.php
        
        
=======
       
>>>>>>> refs/remotes/origin/master:docker_env/application/source/accueil.php
  </ul>
    </div>
    <ul>
      <li>
      <?php require "index1.php";?>
    </li>
  </ul>
  </div>
</nav>
<section>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" id="">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://fr.web.img6.acsta.net/newsv7/20/06/25/16/09/5678008.jpg" alt="First slide">
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
</section>
 
    
   
  
     
   
<div id="main">
  //affichage des fiches de films   
</div>
<script>
//API
//------------------------ creation des const de l'url-------------------------------
const API_KEY = 'api_key=92a6e3e8847a6472bbf29ab8fa36f02c';
const BASE_URL = 'https://api.themoviedb.org/3/';
const API_URL= BASE_URL + 'discover/movie?sort_by=popularity.desc&'+ API_KEY;
const IMG_URL = 'https://image.tmdb.org/t/p/w500/';

const main = document.getElementById('main');
//------------------fonction de recuperation des infos de l'API--------------------
getMovies(API_URL);

function getMovies(url){
  fetch(url).then(res => res.json()).then(data => {
   // showImgMovies(data.results);
    showMovies(data.results);
    console.log(data.results);
  })
}
//------------------fonction d'affichage des infos de l'API--------------------
function showMovies(data){
  main.innerHTML= ' ';
  //caroussel.innerHtml= ' ';

  data.forEach(movie => {
     

    const {title, poster_path, vote_average, overview, release_date , original_language } = movie;
      
      // //creation de la div
      // const imgMovie = document.createElement('div');
      // //creation de la classe
      // imgMovie.classList.add('carousel-item');
      // imgMovie.innerHTML = `<img class="d-block w-100" src="${poster_path? IMG_URL+poster_path: "http://via.placeholder.com/1080x1580" }" alt="${title}" alt="First slide">`
      // main.appendChild(imgMovie);



    //creation de la div
    const movieEl = document.createElement('div');
    //creation de la classe
    movieEl.classList.add('movie');
    movieEl.innerHTML = `
             <img src="${poster_path? IMG_URL+poster_path: "http://via.placeholder.com/1080x1580" }" alt="${title}">
            <div class="movie-info">
            
                <h3>${title}</h3>
                <span class="bg-${getColor(vote_average)}">${vote_average}</span>
            </div>
            ${original_language}
            <div class="overview  bg-success  rounded text-light">
            
                <h3 >Résumé</h3>
                ${overview}
                <br/> 
                <div class="dateRelease" >${release_date}</div>
                
            </div>
        
         `;
        

      main.appendChild(movieEl);
   
    
  });

}

function getColor(vote){
  if(vote>= 8){
    return ' ';

  }else if(vote>=7){
    return 'warning';
  }else{
    return'danger';
  }
}
 
 
//------------------fonction de recuperation des infos de l'API--------------------
function getImgMovies(url){
  fetch(url).then(res => res.json()).then(data => {
   // showImgMovies(data.results);
    showImgMovies(data.results);
    console.log(data.results);
  })
}
 
const kappa = document.getElementById('kappa');
//------------------fonction d'affichage des images de l'API--------------------
function showImgMovies(data){
  kappa.innerHTML= ' ';

  data.forEach(img => {
     

    const {title, poster_path } = img;

    //creation de la div
    const imgmovieEl = document.createElement('div');
    //creation de la classe
    imgmovieEl.classList.add('carousel-item');
    console.log("image ===================" + imgmovieEl.classList.add('carousel-item'));
    imgmovieEl.innerHTML = `<img class="d-block w-100" src="${poster_path? IMG_URL+poster_path: "http://via.placeholder.com/1080x1580" }" alt="${title}"> `;

         kappa.appendChild(imgmovieEl);
    
  });

}




</script>
 
<!-- LINK TO SWiper -->
<link
  rel="stylesheet"
  href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
/>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script
     
</body>
</html>