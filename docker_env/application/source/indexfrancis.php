<?php require "./include/signin.php" ?>
<?php require "./include/signup.php" ?>
<?php require "./include/clientinfo.php" ?>
<?php require "./include/functions.php" ?>
<!DOCTYPE html>
<html lang="en">
<?php require "head.php" ?>
<link rel="stylesheet" href=" css/style.css">
<link rel="stylesheet" href="style.css">

<body>
    <style>
        #main {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .movie {
            width: 300px;
            margin: 1rem;
            border-radius: 3px;
            box-shadow: 0.2px 4px 5px rgba(0, 0, 0.1);
            background-color: rgba(92, 202, 202, 0.307);
            position: relative;
            overflow: hidden;

        }

        .movie img {
            width: 100%;

        }

        .movie-info {
            color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0.5rem 1rem 1rem;
            letter-spacing: 0.5px;
        }

        .movie-info h3 {
            margin-top: 0;
        }

        .movie-info span {
            background-color: darkgreen;
            padding: 0.25rem 0.5rem;
            border-radius: 10px;
            box-shadow: 0.2px 4px 5px rgba(0, 0, 0.1);
            font-weight: bold;
        }

        .movie-info span.green {
            background-color: darkgreen;
            padding: 0.25rem 0.5rem;
            border-radius: 10px;
            box-shadow: 0.2px 4px 5px rgba(0, 0, 0.1);
            font-weight: bold;
        }

        .overview {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgb(63, 94, 251);
            background: radial-gradient(circle, rgba(63, 94, 251, 1) 0%, rgba(252, 70, 107, 1) 100%);
            padding: 1rem;
            max-height: 100%;
            transform: translateY(+200%);
            transition: transform 0.4s ease-in;

        }

        .movie:hover .overview {

            transform: translateY(0);
        }

        .carousel-item {
            width: 100%;
        }

        ul {
            list-style-type: none;

        }

        .know-more {
            background-color: orange;
            color: white;
            font-weight: BOLD;
            padding: auto;
        }

        /* CSS DES TRAILERS  */
        /* The Overlay (background) */
        .overlay {
            /* Height & width depends on how you want to reveal the overlay (see JS below) */
            height: 100%;
            width: 0;
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            left: 0;
            top: 0;
            background-color: rgb(0, 0, 0);
            /* Black fallback color */
            background-color: rgba(0, 0, 0, 0.9);
            /* Black w/opacity */
            overflow-x: hidden;
            /* Disable horizontal scroll */
            transition: 0.5s;
            /* 0.5 second transition effect to slide in or slide down the overlay (height or width, depending on reveal) */
        }

        /* Position the content inside the overlay */
        .overlay-content {
            position: relative;
            top: 25%;
            /* 25% from the top */
            width: 100%;
            /* 100% width */
            text-align: center;
            /* Centered text/links */
            margin-top: 30px;
            /* 30px top margin to avoid conflict with the close button on smaller screens */
        }

        /* The navigation links inside the overlay */
        .overlay a {
            padding: 8px;
            text-decoration: none;
            font-size: 36px;
            color: #818181;
            display: block;
            /* Display block instead of inline */
            transition: 0.3s;
            /* Transition effects on hover (color) */
        }

        /* When you mouse over the navigation links, change their color */
        .overlay a:hover,
        .overlay a:focus {
            color: #f1f1f1;
        }

        /* Position the close button (top right corner) */
        .overlay .closebtn {
            position: absolute;
            top: 20px;
            right: 45px;
            font-size: 60px;
        }

        /* When the height of the screen is less than 450 pixels, change the font-size of the links and position the close button again, so they don't overlap */
        @media screen and (max-height: 450px) {
            .overlay a {
                font-size: 20px
            }


            .overlay .closebtn {
                font-size: 40px;
                top: 15px;
                right: 35px;
            }
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

    <!-- ----------------DEBUT ----------------------BAR     DE   NAVIGATION-----------------------------------------------------------------------------------------------------------------------------------------  -->

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
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Thriller</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Science Fiction</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Horror</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                        </ul>
                    </li>

                </ul>
                <form class="d-flex">
                    <input class="form-control p-2" type="search" placeholder="film or series" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">FIND</button>
                </form>
                <ul l class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalu">
                        <div class="modal fade" id="exampleModalu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                        <button type="button" class="btn btn-primary">Se deconnecter</button>²
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- SIGN IN SIGN OUT -->
                    </li>
                    <li>
                        <a class="nav-link active" aria-current="page" href="#"><img src="https://img.icons8.com/external-wanicon-flat-wanicon/64/000000/external-exit-hotel-wanicon-flat-wanicon.png" width="35px" /></a>
                    </li>
                </ul>
            </div>
            <ul>
                <li>
                    <?php require "index1.php"; ?>
                </li>
            </ul>
        </div>
    </nav>
    <!-- ----------------FIN ----------------------BAR     DE   NAVIGATION-----------------------------------------------------------------------------------------------------------------------------------------  -->





    <!-- ----------------CODE API ---------------------- ----------------------------------------------------------------------------------------------------------------------------------------  -->

    <?php
    //phpinfo() .' <br>'; 
    //-----------------------DEBUT premier TABLEAU- --------------------------------------------------
    $ch = curl_init();
    $urlimg = "https://image.tmdb.org/t/p/w500";
    $key = "api_key=92a6e3e8847a6472bbf29ab8fa36f02c";
    $url = "https://api.themoviedb.org/3/discover/movie?sort_by=popularity.desc&api_key=92a6e3e8847a6472bbf29ab8fa36f02c";
    $urlmoviesVideos1 = "https://api.themoviedb.org/3/movie/";
    $urlmoviesVideos2 = "/videos?";
    $urlmoviesVideos3 = $urlmoviesVideos1 . '' . $id . '' . $urlmoviesVideos2 . '' . $key;
    // api best movie htttps://api.themoviedb.org/3/movie/512195/videos?92a6e3e8847a6472bbf29ab8fa36f02c
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $resp = curl_exec($ch);
    $data = json_decode($resp);

    //echo '<pre>'; print_r($data); echo '</pre>';


    $moviesArray = $data->results;
    //echo '<pre>'; print_r($moviesArray[0]); echo '</pre> </br>';
    //echo '<pre>'; print_r($moviesArray[0] -> id); echo '</pre>';
    //-----------------------FIN PREMIER TABLEAU-----------------------------------------------------------------------------------------------
    curl_close($ch);
    //-----------------------DEBUT DEUXIEME TABLEAU--------------------------------------------------------------------------------------------
    $ch2 = curl_init();
    $urlimg2 = "https://image.tmdb.org/t/p/w500";
    $key2 = "api_key=92a6e3e8847a6472bbf29ab8fa36f02c";

    $url2 = "https://api.themoviedb.org/3/discover/movie?certification_country=US&certification=R&sort_by=vote_average.desc&api_key=92a6e3e8847a6472bbf29ab8fa36f02c";

    // api best movie
    curl_setopt($ch2, CURLOPT_URL, $url2);
    curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);

    $resp2 = curl_exec($ch2);
    $data2 = json_decode($resp2);

    //echo '<pre>'; print_r($data); echo '</pre>';


    $moviesArray2 = $data2->results;
    //echo '<pre>'; print_r($moviesArray[0]); echo '</pre> </br>';
    //echo '<pre>'; print_r($moviesArray[0] -> id); echo '</pre>';

    //var_dump($moviesArray2); //affichage tableuad 


    curl_close($ch2);
    // ------------------FIN DEUXIEME TABLEAU  --------------------------------------------------------------------------
    ?>
    <!-- --------------------------CAROUSEL--------------------------------------------------------------------------------- -->
    <div id="carousel">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">

                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <!-- ---------------- ----------------------BOUCLE BOUTON DE CHAQUE IMG DS CAROUSEL -----------------------------------------------------------------------------------------------------------------------------------------  -->

                <?php for ($i = 3; $i <= 19; $i++) {
                    echo '<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="' . $i . ' " aria-label="Slide ' . $i . '" ></button>';
                } ?>


            </div> <!-- ----------------DEBUT ----------------------CAROUSEL-----------------------------------------------------------------------------------------------------------------------------------------  -->

            <div class="carousel-inner " style"margin=auto ">
    <div class=" carousel-item active ">
    <div class=" d-flex flex-row ">
       <!-- ----------------------DEBUT----------------IMAGE CAROUSEL ITEM ACTIVE -----------------------------------------------------------------------------------------------------------------------------------------  -->

    <img  class=" p-2 "  src=" <?php echo $urlimg . '' . $moviesArray2[rand(0, 19)]->poster_path; ?>" alt="jkl">
                <img class="p-2 " src="<?php echo $urlimg . '' . $moviesArray2[rand(0, 19)]->poster_path; ?>" alt="jkl">
                <img class="p-2  " src="<?php echo $urlimg . '' . $moviesArray2[rand(0, 19)]->poster_path; ?>" alt="jkl">
                <img class="p-2  " src="<?php echo $urlimg . '' . $moviesArray2[rand(0, 19)]->poster_path; ?>" alt="jkl">
                <!-- -------------------------FIN-------------IMAGE CAROUSEL ITEM ACTIVE -----------------------------------------------------------------------------------------------------------------------------------------  -->

            </div>
        </div>
        <!-- --------------------------------------BOUCLE IMG POUR CAROUSSEL  -----------------------------------------------------------------------------------------------------------------------------------------  -->


        <?php
        for ($i = 0; $i <= 9; $i++) {

        ?> <?php echo '<div class="carousel-item   " id ="' . $moviesArray[$i]->original_title . ' " >'; ?>
            <div class="d-flex flex-row ">
                <div class=" p-2  "> <img src="<?php echo $urlimg . '' . $moviesArray[$i + 5]->poster_path; ?>" alt="jkl"> </div>
                <!-- <div class="p-2 ">    <img src="<?php echo $urlimg . '' . $moviesArra2[$i + 6]->poster_path; ?>" alt="jkl1"></div>  -->
                <div class="p-2 "> <img src="<?php echo $urlimg . '' . $moviesArray2[$i + 8]->poster_path; ?>" alt="jkl2"></div>
                <div class="p-2 "> <img src="<?php echo $urlimg . '' . $moviesArray2[$i + 10]->poster_path; ?>" alt="jkl3"></div>
                <div class="p-2 "> <img src="<?php echo $urlimg . '' . $moviesArray2[$i + 4]->poster_path; ?>" alt="jkl4"></div>
                <div class="p-2 "> <img src="<?php echo $urlimg . '' . $moviesArray2[$i + 3]->poster_path; ?>" alt="jkl5"></div>
                <div class="p-2 "> <img src="<?php echo $urlimg . '' . $moviesArray2[$i + 2]->poster_path; ?>" alt="jkl6"></div>
                <div class="p-2 "> <img src="<?php echo $urlimg . '' . $moviesArray2[$i + 1]->poster_path; ?>" alt="jkl7"></div>
            </div>
        <? php;
            echo  '</div>';
        } ?>
        <!-- ----------------------------------------BOUTON CAROUSEL ---------------------------------------------- -->
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    </div>
    <div id="main">
        <!-- --------------------------------------BOUCEL AFFICHAGE FICHES DES FILM -----------------------------------------------------------------------------------------------------------------------------------------  -->

        <?php


        for ($i = 0; $i <= 19; $i++) {

        ?> <?php echo '<div class="movie" id ="' . $moviesArray[$i]->original_title . ' " >'; ?>

            <img src="<?php echo $urlimg . '' . $moviesArray[$i]->poster_path; ?>" alt="èoèèèç">
            <div class="movie-info">

                <h3><?php echo  $moviesArray[$i]->original_title; ?> </h3>
                <span class=" "><?php echo  $moviesArray[$i]->vote_average; ?> </span>
            </div>

            <div class="overview  bg-success  rounded text-light">

                <h3>Résumé</h3>
                <?php echo  ' ' . $moviesArray[$i]->overview; ?>

                <br />
                <div class="dateRelease"> </div>
                <button class="know-more btn btn-dark" onClick="openNav() , clic(this.id) " id="<?php echo  $tester = $moviesArray[$i]->id; ?>"> <?php echo $moviesArray[$i]->id; ?></button>
            </div>
    </div>
<?php };
        echo  '</div>'; ?>
</div>

<!-- HTML OverLAY VIDEOS TEST-----------------------------------------------------------------------------------------------------------------  -->
<div id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="overlay-content">
        <div id="popo" class="text-white ">


        </div>
    </div>
</div>

<script>
    // -----------------------creation du liens du trailers -------------------------------------------------------------
    let idFIlms;

    function clic(idFIlms) {
        document.getElementById('popo').innerHTML = "affichage du idFIlms :" + idFIlms + " ";
        let films = document.createElement('div class="text-white');
        films.innerHTML = " ";


    }

    // JAVASCRIPT---------- OverLAY VIDEOS TEST-----------------------------------------------------------------------------------------------------------------  -->

    function openNav() {
        document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
        document.getElementById("myNav").style.width = "0%";
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>