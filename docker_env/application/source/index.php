<?php require "./include/signin.php" ?>
<?php require "./include/signup.php" ?>

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
            border: 10px solid transparent;
            width: 300px;
            margin: 1rem;
            border-radius: 10px;
            box-shadow: 0.2px 4px 5px rgba(0, 0, 0.1);
            background-color: rgba(92, 202, 202, 0.307);
            position: relative;
            overflow: hidden;

        }

        .movie:hover {
            width: 310px;
            transition: width 0.3s linear 0s;
            border: 2px solid transparent;
            transition: border 0.5s ease-in-out 0s;
            -webkit-box-shadow: 7px 13px 25px 5px #2c0707 inset;
            -moz-box-shadow: 7px 13px 25px 5px #2c0707 inset;
            box-shadow: 7px 13px 25px 5px #2c0707 inset;
            -webkit-box-shadow: 7px 13px 25px 5px #000000;
            -moz-box-shadow: 7px 13px 25px 5px #000000;
            box-shadow: 7px 13px 25px 5px #000000;


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
            background-color: #fff;
            padding: 1rem;
            max-height: 100%;
            transform: translateY(+200%);
            transition: transform 0.4s ease-in;

        }

        .movie:hover .overview {

            transform: translateY(0);
        }

        ul {
            list-style-type: none;

        }

        .hide {
            display: none;
        }

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

        #carousel {
            margin-top: 100px;
        }

        .navigationel {
            background: transparent !important;

        }

        .navigationel:hover {
            background: black !important;
            transition: width 0.1s linear 0s, background-color 3s ease-in-out 0 0s;
        }

        #cfgd img {
            border-width: 1px;
            border-style: solid;
            border-radius: 50px;
        }

        #cfgd img:hover {
            border: 7px solid transparent;
            transition: border 0.5s ease-in-out 0s;
            -webkit-box-shadow: 7px 13px 25px 5px #2c0707 inset;
            -moz-box-shadow: 7px 13px 25px 5px #2c0707 inset;
            box-shadow: 7px 13px 25px 5px #2c0707 inset;
            -webkit-box-shadow: 7px 13px 25px 5px #000000;
            -moz-box-shadow: 7px 13px 25px 5px #000000;
            box-shadow: 7px 13px 25px 5px #000000;


        }

        .p-2 img {
            border-width: 1px;
            border-style: solid;
            border-radius: 50px;
            transform: border
        }

        .p-2 img:hover {
            border: 7px solid transparent;
            transition: border 0.5s ease-in-out 0s;
            -webkit-box-shadow: 7px 13px 25px 5px #2c0707 inset;
            -moz-box-shadow: 7px 13px 25px 5px #2c0707 inset;
            box-shadow: 7px 13px 25px 5px #2c0707 inset;
            -webkit-box-shadow: 7px 13px 25px 5px #000000;
            -moz-box-shadow: 7px 13px 25px 5px #000000;
            box-shadow: 7px 13px 25px 5px #000000;


        }

        #carousel {
            margin-top: 100px;
            
        }
    </style>

    <!-- navbar -->


    <nav class="navbar navbar-expand-sm navigationel  bg-transparent navbar-dark  ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Getflix</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 flex-1">
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
                    <input id="search-button" class="form-control p-2" type="search" placeholder="film or series" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">FIND</button>
                </form>
                <div class=" ml-auto">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0  align-self-end">
                        <li class="nav-item <?php toogle1() ?>" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog " role="document">
                                    <div class="modal-content text-white bg-dark ">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Deconnexion</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body ">
                                            <h1>Cher <?php echo pre($_SESSION['firstname']); ?> , voulez-vous vraiment nous quitter ?!</h1>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">annuler</button>
                                            <button type="button" class="btn btn-primary" href=""><a href="./include/logout.php" class="text-white">Se déconnecter</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="nav-link active" aria-current="page" href="#"><img src="https://img.icons8.com/external-wanicon-flat-wanicon/64/000000/external-exit-hotel-wanicon-flat-wanicon.png" width="35px" /></a>
                        </li>

                        <li class="nav-item <?php toogle1() ?>">
                            <a class="nav-link" href="profil.php"><img src="https://img.icons8.com/external-wanicon-flat-wanicon/64/000000/external-profile-user-interface-wanicon-flat-wanicon.png" width="35px" /></a>
                            <?php if ($_SESSION['id']) {
                            echo '<div = class"align-self-center"> <li class="text-white bold nav-item align-self-center"> Bonjour ' . $_SESSION['firstname'] . ' !</li></div>';
                        } ?>
                        </li>
                        
                    </ul>
                </div>
                <?php require "index1.php"; ?>
            </div>
        </div>
    </nav>


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
    <div id="carousel" class="container-fluid ">
        <div id="carouselExampleIndicators" class="carousel slide " data-bs-ride="carousel">
            <div class="carousel-indicators hide">

                <button type="button " data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>

                <!-- ---------------- ---------------------- BOUCLE BOUTON DE CHAQUE IMG DS CAROUSEL -----------------------------------------------------------------------------------------------------------------------------------------  -->

                <?php for ($i = 3; $i <= 19; $i++) {
                    echo '<button class="bg-transparent " type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="' . $i . ' " aria-label="Slide ' . $i . '" ></button>';
                } ?>


            </div> <!-- ----------------DEBUT ----------------------CAROUSEL-----------------------------------------------------------------------------------------------------------------------------------------  -->

            <div class="carousel-inner " style="margin=auto">
                <div class=" carousel-item active  ">
                    <div id="cfgd" class=" d-flex flex-row ">
                        <!-- ----------------------DEBUT----------------IMAGE CAROUSEL ITEM ACTIVE -----------------------------------------------------------------------------------------------------------------------------------------  -->
                        <?php
                        $rand = rand(0, 8);
                        $rande = rand(0, 8);
                        $randee = rand(0, 8);
                        $randeee = rand(0, 8);
                        for ($i = 19; $i > 10; $i--) {

                            echo '<div class="p-2 " onClick="clic(this.id)" id="' . $tester = $moviesArray2[$i - $rand]->id . '"><img   src="' . $urlimg . '' . $moviesArray2[$i - $rand]->poster_path . '" alt="jkl"></div>';
                            echo '<div class="p-2 " onClick="clic(this.id)" id="' . $tester = $moviesArray2[$i - $rande]->id . '"><img    src="' . $urlimg . '' . $moviesArray2[$i - $rande]->poster_path . '" alt="jkl"></div>';
                            echo '<div class="p-2 " onClick="clic(this.id)" id="' . $tester = $moviesArray2[$i - $randee]->id . '"><img   src="' . $urlimg . '' . $moviesArray2[$i - $randee]->poster_path . '" alt="jkl"></div>';
                            echo '<div class="p-2 " onClick="clic(this.id)" id="' . $tester = $moviesArray2[$i - $randeee]->id . '"><img    src="' . $urlimg . '' . $moviesArray2[$i - $randeee]->poster_path . '" alt="jkl"></div>';
                            echo '<img   src="' . $urlimg . '' . $moviesArray[$i - $rand]->poster_path . '" alt="jkl">';
                        }
                        ?>

                        <!-- -------------------------FIN-------------IMAGE CAROUSEL ITEM ACTIVE -----------------------------------------------------------------------------------------------------------------------------------------  -->

                    </div>
                </div>
                <!-- --------------------------------------BOUCLE IMG POUR CAROUSSEL  -----------------------------------------------------------------------------------------------------------------------------------------  -->


                <?php
                for ($i = 0; $i <= 20; $i++) {

                ?> <?php echo '<div class="carousel-item  " id ="' . $moviesArray[$i]->original_title . ' " >'; ?>
                    <div class="d-flex flex-row ">




                        <div class="p-2 " onClick="clic(this.id)" id="<?php echo  $tester = $moviesArray[$i + 8]->id; ?>"> <img src="<?php echo $urlimg . '' . $moviesArray[$i + 8]->poster_path; ?>" alt="jkl2"></div>
                        <div class="p-2 " onClick="clic(this.id)" id="<?php echo  $tester = $moviesArray[$i + 10]->id; ?>"> <img src="<?php echo $urlimg . '' . $moviesArray[$i + 10]->poster_path; ?>" alt="jkl3"></div>
                        <div class="p-2 " onClick="clic(this.id)" id="<?php echo  $tester = $moviesArray[$i + 4]->id; ?>"> <img src="<?php echo $urlimg . '' . $moviesArray[$i + 4]->poster_path; ?>" alt="jkl4"></div>
                        <div class="p-2 " onClick="clic(this.id)" id="<?php echo  $tester = $moviesArray[$i + 3]->id; ?>"> <img src="<?php echo $urlimg . '' . $moviesArray[$i + 3]->poster_path; ?>" alt="jkl5"></div>
                        <div class="p-2 " onClick="clic(this.id)" id="<?php echo  $tester = $moviesArray[$i + 2]->id; ?>"> <img src="<?php echo $urlimg . '' . $moviesArray[$i + 2]->poster_path; ?>" alt="jkl6"></div>
                        <div class="p-2 " onClick="clic(this.id)" id="<?php echo  $tester = $moviesArray[$i + 1]->id; ?>"> <img src="<?php echo $urlimg . '' . $moviesArray[$i + 1]->poster_path; ?>" alt="jkl7"></div>
                    </div>

                <?php echo '</div>';
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

        <!--                                               CHANGEMENT BORIS  -->
        <script type='text/javascript'>
            function test4() {



                alert('You  must be logged ! ');

            }
        </script>




        <div id="main">
            <!-- --------------------------------------BOUCEL AFFICHAGE FICHES DES FILM -----------------------------------------------------------------------------------------------------------------------------------------  -->

            <?php


            for ($i = 0; $i <= 19; $i++) {

            ?> <?php echo '<div class="movie" id ="' . $moviesArray[$i]->original_title . ' " >'; ?>

                <img src="<?php echo $urlimg . '' . $moviesArray[$i]->poster_path; ?>" alt="èoèèèç">
                <div class="movie-info ">

                    <h3><?php echo  $moviesArray[$i]->original_title; ?> </h3>
                    <span class=" "><?php echo  $moviesArray[$i]->vote_average; ?> </span>
                </div>

                <div class="   overview  bg-dark  rounded text-light">

                    <h3>Résumé</h3>
                    <?php echo  ' ' . $moviesArray[$i]->overview; ?>

                    <br /> 
                    <div class="dateRelease"> </div>
                    <div class="<?php toogle1();?>">
                    <button class="know-more btn btn-dark" onClick="clic(this.id)" id="<?php echo  $tester = $moviesArray[$i]->id; ?>"> <?php echo $moviesArray[$i]->id; ?> Watch It</button>
                    </div>

                </div>
        </div>
    <?php };
            echo  '</div>'; ?>
    </div>

    <!-- HTML OverLAY VIDEOS TEST-----------------------------------------------------------------------------------------------------------------  -->
    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn pt-5" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
            <div id="popo" class="text-white ">
                <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/fBNz5xF-Kx4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->

            </div>
        </div>
    </div>

    <script>
        // -----------------------creation du liens du trailers -------------------------------------------------------------
        let idFIlms;
        let filminfos = "http://api.themoviedb.org/3/movie/" + idFIlms + "/videos?api_key=92a6e3e8847a6472bbf29ab8fa36f02c";










        function clic(idFIlms) {
            document.getElementById("myNav").style.width = "100%";
            fetch("http://api.themoviedb.org/3/movie/" + idFIlms + "/videos?api_key=92a6e3e8847a6472bbf29ab8fa36f02c")
                .then(res => res.json())
                .then(videoData => (
                    document.getElementById("popo").innerHTML = `<iframe width="1120" height="630" src="https://www.youtube.com/embed/${videoData.results[0].key}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`
                ))
                .catch(error => console.log("ERROR"))






        }

        // JAVASCRIPT---------- OverLAY VIDEOS TEST-----------------------------------------------------------------------------------------------------------------  -->



        function closeNav() {
            document.getElementById("myNav").style.width = "0%";
            document.getElementById("popo").innerHTML = "";
        }

        //fonction recherche sur Submit button
        const API_KEY = 'api_key=92a6e3e8847a6472bbf29ab8fa36f02c';
        const BASE_URL = 'https://api.themoviedb.org/3/';
        const API_URL = BASE_URL + 'discover/movie?sort_by=popularity.desc&' + API_KEY;
        const IMG_URL = 'https://image.tmdb.org/t/p/w500/';

        const API_GENRE = 'https://api.themoviedb.org/3/search/movie?api_key=92a6e3e8847a6472bbf29ab8fa36f02c&query='
        let input_search;
        let url_genre;

        fetch('https://api.themoviedb.org/3/search/movie?api_key=92a6e3e8847a6472bbf29ab8fa36f02c&query=er')
            .then(res => res.json())
            .then(res => console.log(res))

        document.getElementById("search-button").addEventListener('keyup', (eve) => {
            input_search = eve.target.value;
            url_genre = API_GENRE + input_search;

            if (input_search == "")
                url_genre = API_URL;

            let main = document.getElementById("main")
            let child = main.lastElementChild;
            while (child) {
                main.removeChild(child);
                child = main.lastElementChild;
            }

            console.log(url_genre)
            fetch(url_genre).then(res => res.json())
                .then(data => {
                    console.log("MOVIE " + data)
                    list_data = data.results;
                    list_data.forEach(movie => {

                        movie_title = movie.title;

                        //afficher le film si il contient une partie de l'input
                        if (movie_title.toLowerCase().includes(input_search.toLowerCase())) {
                            const {
                                title,
                                poster_path,
                                vote_average,
                                overview,
                                release_date,
                                original_language,
                                id
                            } = movie;

                            //creation de la div
                            const movieEl = document.createElement('div');
                            //creation de la classe
                            movieEl.classList.add('movie');
                            movieEl.innerHTML = `
                <img  src="${poster_path? IMG_URL + poster_path: "http://via.placeholder.com/1080x1580" }" alt="${title}">
                <div class="movie-info">
                
                    <h3>${title}</h3>
                    <span class="bg-${getColor(vote_average)}">${vote_average}</span>
                </div>
               
                <div class="overview  bg-dark rounded text-light">
                
                    <h3>Résumé</h3>
                    ${overview}
                    <br/> 
                  
                    <button class="know-more btn btn-dark " onclick="clic('${id}')" id="${id}">  Watch It</button> <br/> 
                    
                </div>
            
            `;


                            main.appendChild(movieEl);


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

        function getColor(vote) {
            if (vote >= 8) {
                return ' ';

            } else if (vote >= 7) {
                return 'warning';
            } else {
                return 'danger';
            }
        };
    </script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


</body>

</html>