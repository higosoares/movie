$(document).ready(function() {
    $('.delete-category').on('click', function(e) {
        category.delete(e);
        e.preventDefault();
    });
});
