// let url = "https://api.themoviedb.org/3/movie/550?api_key={api_key}";
// let url = "https://api.themoviedb.org/3/movie/550?api_key=45bf6592c14a965b33549f4cc7e6c664";

const fetch_movie_API = (url) =>{
    const info = fetch(url)
    .then(res => res.json())
    .then(movie_data => {
        return movie_data;
    })

    return info;
}

// console.log(fetch_movie_API(url).then(res => console.log(res.overview)));

async function movie_overview(url){
    let overview = await fetch_movie_API(url).then(info => {
        return info.overview;
    })
    return overview;
}

async function movie_title(url){
    let title = await fetch_movie_API(url).then(info => {
        return info.title;
    })
    return title;
}

async function movie_homepage(url){
    let homepage = await fetch_movie_API(url).then(info => {
        return info.homepage;
    })
    return homepage;
}

async function movie_original_language(url){
    let original_language = await fetch_movie_API(url).then(info => {
        return info.original_language;
    })
    return original_language;
}

async function movie_poster(url){
    let poster_path = await fetch_movie_API(url).then(info => {
        return info.poster_path;
    })
    return "https://image.tmdb.org/t/p/original/" + poster_path;
}

async function movie_popularity(url){
    let popularity = await fetch_movie_API(url).then(info => {
        return info.popularity;
    })
    return popularity;
}

async function movie_budget(url){
    let budget = await fetch_movie_API(url).then(info => {
        return info.budget;
    })
    return budget;
}

async function movie_vote_count(url){
    let vote_count = await fetch_movie_API(url).then(info => {
        return info.vote_count;
    })
    return vote_count;
}

async function movie_vote_average(url){
    let vote_average = await fetch_movie_API(url).then(info => {
        return info.vote_average;
    })
    return vote_average;
}

async function movie_genres(url){
    let genres = await fetch_movie_API(url).then(info => {
        return info.genres;
    })
    return genres;
}


// console.log(await movie_genres(url));


export {
    movie_overview, 
    movie_title, 
    movie_homepage, 
    movie_original_language,
    movie_poster,
    movie_popularity,
    movie_budget,
    movie_vote_count,
    movie_vote_average,
    movie_genres
}


