// import {create_paragraph,     movie_overview} from "./function_fetch.js";
import {
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
} from "./data_fetch.js";

// let url = "https://api.themoviedb.org/3/movie/550?api_key=45bf6592c14a965b33549f4cc7e6c664";
let url = "https://api.themoviedb.org/3/movie/565?api_key=babab9fa7fdffa6e0bee8208ab4b74ae";

let overview =      await movie_overview(url);
let title =         await movie_title(url);
let homepage =      await movie_homepage(url);
let language =      await movie_original_language(url);
let poster =        await movie_poster(url);
let popularity =    await movie_popularity(url);
let budget =        await movie_budget(url);
let vote_count =    await movie_vote_count(url);
let vote_average=   await movie_vote_average(url);
let genre =         await movie_genres(url);

console.log(overview);
console.log(title);
console.log(homepage);
console.log(genre);

