$(document).ready(function() {
    $('#movie_edit').submit(function(e) {
        movie.edit(this.action, $(this).serialize());
        e.preventDefault();
    });
});
