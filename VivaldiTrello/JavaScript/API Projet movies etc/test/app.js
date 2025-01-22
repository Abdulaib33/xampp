// KEY AND URL, but how did i know this is the URL, i have no idea, i have ask everywhere but no ones knows they just copy code, it's so annoying

const API_KEY = "25c8b24a9e487be305253cef6b1b558c"
const API_URL = "https://api.themoviedb.org/3"

// FONCTION TO GET THE POPULAR MOVIES
async function PopularMoviesFetch() { // NEVER FORGET TO CALL THE FONCTION OR ELSE YOU WILL THINK THAT YOU ARE STUOPIEDE
    const url = `${API_URL}/movie/popular?api_key=${API_KEY}&language=fr-FR&page=1`;
    // The Second works also, i have found it by my own on the official doc 
    // const url = `${API_URL}/discover/movie?api_key=${API_KEY}&include_adult=false&include_video=false&language=en-US&page=1&sort_by=popularity.desc`;

    try {
        const response = await fetch(url)
        const data = await response.json()
        console.log(data)
        return data.results
    } catch (error) {
        console.error('Erreur lors de la récupération des films populaires:', error);
        return [];
    } finally {
        console.log("EVERYTHING IS WORKING ")
    }
}

function PopularMoviesDisplay(movies) {
    const movieList = document.getElementById("movie-list")
    movieList.innerHTML = ""

    movies.forEach(movies1 => {
        const movieElement = document.createElement("div")
        movieElement.classList.add("movie-item")

        // Ajouter une image pour chaque film
        const movieImage = document.createElement("img")
        movieImage.src = `https://image.tmdb.org/t/p/w500${movies1.poster_path}`
        movieImage.alt = movies1.title

        // Ajouter un titre pour chaque film
        const movieTitle = document.createElement("h3")
        movieTitle.textContent = movies1.title

        // Ajouter l'image et le titre à l'élément du film 
        movieElement.appendChild(movieImage)
        movieElement.appendChild(movieTitle)

        // ENSUITE L'AJOUTER AU DIV QU'ON A CREER
        movieList.appendChild(movieElement)

    })
}

async function init() {

    const movies = await PopularMoviesFetch()
    console.log(`Films Populaires :`, movies) // OUBLIE PAS DE LE CONCACTENAIS AVEC UN "," 
    PopularMoviesDisplay(movies)

}

init()  // window.onload = init