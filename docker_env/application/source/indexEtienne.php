<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href=" css/style.css">
<link rel="stylesheet" href="style.css">
<body>
  <style>
    #maine{
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
  background: rgb(63,94,251);
background: radial-gradient(circle, rgba(63,94,251,1) 0%, rgba(252,70,107,1) 100%);
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
.know-more{
  background-color: orange;
  color: white ;
  font-weight: BOLD;
  padding: auto;
}
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
    
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
      <form class="d-flex">
        <input id="search-button" class="form-control p-2" type="search" placeholder="film or series" aria-label="Search">
        <button  class="btn btn-outline-success" type="submit">FIND</button>
      </form>
      
      </ul>
</div>
</div>
</nav>
 
    
 


  
     
   
<div id="maine">
  //affichage des fiches de films   
</div>
<script>
//API
//------------------------ creation des const de l'url-------------------------------
const API_KEY = 'api_key=92a6e3e8847a6472bbf29ab8fa36f02c';
const BASE_URL = 'https://api.themoviedb.org/3/';
const API_URL= BASE_URL + 'discover/movie?sort_by=popularity.desc&'+ API_KEY;
const IMG_URL = 'https://image.tmdb.org/t/p/w500/';

const maine = document.getElementById('maine');
//------------------fonction de recuperation des infos de l'API--------------------
 

//fonction recherche sur Submit button
const API_GENRE = 'https://api.themoviedb.org/3/search/movie?api_key=92a6e3e8847a6472bbf29ab8fa36f02c&query='
let input_search;
let url_genre;

fetch('https://api.themoviedb.org/3/search/movie?api_key=92a6e3e8847a6472bbf29ab8fa36f02c&query=er')
.then(res => res.json())
.then(res => console.log(res))

document.getElementById("search-button").addEventListener('keyup', (eve) =>{
  input_search = eve.target.value;
  url_genre = API_GENRE + input_search;
  
  if(input_search == "")
    url_genre = API_URL;

  let maine = document.getElementById("maine")
  let child = maine.lastElementChild;
  while(child){
    maine.removeChild(child);
    child = maine.lastElementChild;
  }

  console.log(url_genre)
  fetch(url_genre).then(res => res.json())
  .then(data => {
    list_data = data.results;
    list_data.forEach(movie =>{
      movie_title = movie.title;

      //afficher le film si il contient une partie de l'input
      if(movie_title.toLowerCase().includes(input_search.toLowerCase())){
        const {title, poster_path, vote_average, overview, release_date , original_language, id } = movie;

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
                
                    <h3>Résumé</h3>
                    ${overview}
                    <br/> 
                  
                    <button class="know-more" id="${id}">  Know More</button> <br/> 
                    
                </div>
            
            `;


      maine.appendChild(movieEl);

      
      }
      
      // else{
      //   console.log("ID ......" + movie.id)
      //   console.log("TITLE .... " + movie.title)
      //   let id_movie = movie.id;
      //   let parent = document.getElementById(id_movie).parentElement.parentElement;
      //   parent.remove();
      // }

      
    
    })
  })
  console.log("SEARCH : " + input_search);
  //toute la div parent à supprimer
  
  
})

/////////////////
function getColor(vote){
  if(vote>= 8){
    return ' ';

  }else if(vote>=7){
    return 'warning';
  }else{
    return'danger';
  }
};



//get movie genre list
//const API_KEY = 'api_key=92a6e3e8847a6472bbf29ab8fa36f02c';
const URL_GENRE_LIST = 'https://api.themoviedb.org/3/genre/movie/list?' + API_KEY + '&language=en-US';
let movie_genre_list = {};

async function getMovieGenre(url){
  return fetch(url).then(res => res.json())
  .then(data => {
    return data.genres;
  });
}

async function getListOfGenre(){
  const LIST_OF_GENRE = await getMovieGenre(URL_GENRE_LIST)

  let list = {}
  LIST_OF_GENRE.forEach(genre => {
    let movie_id = genre.id;
    let movie_genre = genre.name;
    
    list[movie_id] = movie_genre;
  })

  return list
}

movie_genre_list =  getListOfGenre()

// movie_genre_list.then(function show(res){
//   console.log(res)
// })

movie_genre_list.then(function make_listGenre_in_navbar(resultat){

  //créer le menu déroulant avec la liste des genres
  for(const ID in resultat){
    let ul = document.getElementsByClassName("dropdown-menu")[0];
    let addGenre = '<li><a class="dropdown-item" href="#" id='+ resultat[ID] +'>'+ resultat[ID] +'</a></li> <li><hr class="dropdown-divider"></li>'
    ul.innerHTML += addGenre;
  }

  //montre les films avec le genre choisi
  for(const ID in resultat){
    document.getElementById(ID).addEventListener("click", function afficher_film_genre(eve){
      console.log(eve)
    })
  }
})





</script>
</body>
</html>