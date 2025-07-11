fetch('php/fetch_movies.php')
  .then(response => response.json())
  .then(movies => {
    const container = document.getElementById("movie-list");
    container.innerHTML = movies.map(m =>
      `<div><a href="video.html?src=${m.filename}">${m.title}</a></div>`
    ).join('');
  });
