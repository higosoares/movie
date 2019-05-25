$(document).ready(function() {
    $('#movie_register').submit(function(e) {
        movie.register(this.action, $(this).serialize());
        e.preventDefault();
    });
});
