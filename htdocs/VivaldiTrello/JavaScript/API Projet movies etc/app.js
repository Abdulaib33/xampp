// Remplace par ta propre clé API TMDb
const API_KEY = '25c8b24a9e487be305253cef6b1b558c'; // Remplace par ta clé API réelle
const API_URL = 'https://api.themoviedb.org/3';

// Fonction pour récupérer les films populaires
async function fetchPopularMovies() {
    const url = `${API_URL}/movie/popular?api_key=${API_KEY}&language=fr-FR&page=1`;

    try {
        const response = await fetch(url);
        const data = await response.json();
        return data.results; // Retourne les résultats des films populaires
    } catch (error) {
        console.error('Erreur lors de la récupération des films populaires:', error);
        return [];
    }
}

// Fonction pour récupérer les séries populaires
async function fetchPopularTVShows() {
    const url = `${API_URL}/tv/popular?api_key=${API_KEY}&language=fr-FR&page=1`;

    try {
        const response = await fetch(url);
        const data = await response.json();
        return data.results; // Retourne les résultats des séries populaires
    } catch (error) {
        console.error('Erreur lors de la récupération des séries populaires:', error);
        return [];
    }
}

// Fonction pour récupérer les genres de films
async function fetchMovieGenres() {
    const url = `${API_URL}/genre/movie/list?api_key=${API_KEY}&language=fr-FR`;

    try {
        const response = await fetch(url);
        const data = await response.json();
        return data.genres; // Retourne les genres de films
    } catch (error) {
        console.error('Erreur lors de la récupération des genres de films:', error);
        return [];
    }
}

// Fonction pour récupérer les genres de séries
async function fetchTVGenres() {
    const url = `${API_URL}/genre/tv/list?api_key=${API_KEY}&language=fr-FR`;

    try {
        const response = await fetch(url);
        const data = await response.json();
        return data.genres; // Retourne les genres de séries
    } catch (error) {
        console.error('Erreur lors de la récupération des genres de séries:', error);
        return [];
    }
}

// Fonction pour afficher les films populaires
function displayPopularMovies(movies) {
    const movieList = document.getElementById('movie-list');
    movieList.innerHTML = ''; // Vide la section avant d'ajouter de nouveaux films

    movies.forEach(movie => {
        const movieElement = document.createElement('div');
        movieElement.classList.add('movie-item');
        
        // Ajouter une image pour chaque film
        const movieImage = document.createElement('img');
        movieImage.src = `https://image.tmdb.org/t/p/w500${movie.poster_path}`;
        movieImage.alt = movie.title;
        
        // Ajouter un titre pour chaque film
        const movieTitle = document.createElement('h3');
        movieTitle.textContent = movie.title;

        // Ajouter l'image et le titre à l'élément du film
        movieElement.appendChild(movieImage);
        movieElement.appendChild(movieTitle);

        // Ajouter l'élément du film à la liste des films
        movieList.appendChild(movieElement);
    });
}

// Fonction pour afficher les séries populaires
function displayPopularTVShows(tvShows) {
    const tvShowList = document.getElementById('tv-show-list');
    tvShowList.innerHTML = ''; // Vide la section avant d'ajouter de nouvelles séries

    tvShows.forEach(tvShow => {
        const tvShowElement = document.createElement('div');
        tvShowElement.classList.add('tv-show-item');
        
        // Ajouter une image pour chaque série
        const tvShowImage = document.createElement('img');
        tvShowImage.src = `https://image.tmdb.org/t/p/w500${tvShow.poster_path}`;
        tvShowImage.alt = tvShow.name;

        // Ajouter un titre pour chaque série
        const tvShowTitle = document.createElement('h3');
        tvShowTitle.textContent = tvShow.name;

        // Ajouter l'image et le titre à l'élément de la série
        tvShowElement.appendChild(tvShowImage);
        tvShowElement.appendChild(tvShowTitle);

        // Ajouter l'élément de la série à la liste des séries
        tvShowList.appendChild(tvShowElement);
    });
}

// Fonction pour afficher les genres de films
function displayMovieGenres(genres) {
    const genreList = document.getElementById('genre-list');
    genreList.innerHTML = ''; // Vide la section avant d'ajouter de nouveaux genres

    genres.forEach(genre => {
        const genreElement = document.createElement('div');
        genreElement.classList.add('genre-item');
        
        // Ajouter le nom du genre
        const genreName = document.createElement('p');
        genreName.textContent = genre.name;

        // Ajouter le genre à la liste
        genreElement.appendChild(genreName);
        genreList.appendChild(genreElement);
    });
}

// Fonction pour afficher les genres de séries
function displayTVGenres(genres) {
    const tvGenreList = document.getElementById('tv-genre-list');
    tvGenreList.innerHTML = ''; // Vide la section avant d'ajouter de nouveaux genres

    genres.forEach(genre => {
        const genreElement = document.createElement('div');
        genreElement.classList.add('genre-item');
        
        // Ajouter le nom du genre
        const genreName = document.createElement('p');
        genreName.textContent = genre.name;

        // Ajouter le genre à la liste
        genreElement.appendChild(genreName);
        tvGenreList.appendChild(genreElement);
    });
}


// Fonction d'initialisation
async function init() {
    try {
        const movies = await fetchPopularMovies();
        console.log('Films populaires:', movies);
        displayPopularMovies(movies); // Affiche les films populaires sur la page

        const tvShows = await fetchPopularTVShows();
        console.log('Séries populaires:', tvShows);
        displayPopularTVShows(tvShows); // Affiche les séries populaires sur la page

        const movieGenres = await fetchMovieGenres();
        console.log('Genres de films:', movieGenres);
        displayMovieGenres(movieGenres); // Affiche les genres de films sur la page

        const tvGenres = await fetchTVGenres();
        console.log('Genres de séries:', tvGenres);
        displayTVGenres(tvGenres); // Affiche les genres de séries sur la page

    } catch (error) {
        console.error('Erreur générale:', error);
    }
}

window.onload = init;