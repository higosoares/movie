$(document).ready(function() {

    $('#edit_category').submit(function(e) {
        category.edit(this.action, $(this).serialize());
        e.preventDefault();
    });
});
