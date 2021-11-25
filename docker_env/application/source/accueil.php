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
          <a class="nav-link active" aria-current="page" href="#"><img src="https://img.icons8.com/external-wanicon-flat-wanicon/64/000000/external-exit-hotel-wanicon-flat-wanicon.png" width="35px"/></a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="profil.php"><img src="https://img.icons8.com/external-wanicon-flat-wanicon/64/000000/external-profile-user-interface-wanicon-flat-wanicon.png" width="35px"/></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="inscription.php">SignUp</a>
          
        </li>
        
  </ul>
    </div>
  </div>
</nav>
<main id="main">
  <div class="movie">
    <img src="caroussel/img/6.jpg" alt="image">
    <div class="movie-info">
      <h3>titre du film</h3>
      <span class="green">9.8</span>
    </div>

    <div class="overview">
      <h3>overview</h3>
      Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
      Aut tempora nam, repudiandae in quaerat magni quas placeat enim. 
      Itaque, nobis inventore. Obcaecati qui quasi eos autem debitis asperiores numquam a.
    </div>
  </div> 
  <div class="movie">
    <img src="caroussel/img/1.jpg" alt="image">
    <div class="movie-info">
      <h3>titre du film</h3>
      <span class="green">9.8</span>
    </div>

<div class="overview">
  Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
  Aut tempora nam, repudiandae in quaerat magni quas placeat enim. 
  Itaque, nobis inventore. Obcaecati qui quasi eos autem debitis asperiores numquam a.
</div>
  </div> 
  <div class="movie">
    <img src="caroussel/img/3.jpg" alt="image">
    <div class="movie-info">
      <h3>titre du film</h3>
      <span class="green">9.8</span>
    </div>

<div class="overview">
  Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
  Aut tempora nam, repudiandae in quaerat magni quas placeat enim. 
  Itaque, nobis inventore. Obcaecati qui quasi eos autem debitis asperiores numquam a.
</div>
  </div> 
</main>
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
    
    showMovies(data.results);
    console.log(data.results);
  })
}
//------------------fonction d'affichage des infos de l'API--------------------
function showMovies(data){
  main.innerHTML= ' ';

  data.forEach(movie => {
     

    const {title, poster_path, vote_average, overview} = movie;

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
            <div class="overview  bg-success  rounded text-light">
                <h3 >Résumé</h3>
                ${overview}
                <br/> 
                <button class="know-more btn btn-dark">  Know More</button
            </div>
        
         `;

      main.appendChild(movieEl);
    
  });

}

function getColor (vote){
  if(vote>= 8){
    return ' ';

  }else if(vote>=7){
    return 'warning';
  }else{
    return'danger';
  }
}


</script>
     
</body>
</html>