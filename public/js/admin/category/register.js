$(document).ready(function() {
    $('#register_category').submit(function(e) {
        category.register(this.action, $(this).serialize());
        e.preventDefault();
    });
});
