$(document).ready(function() {
    $('#user_edit').submit(function(e) {
        user.edit(this.action, $(this).serialize());
        e.preventDefault();
    });
});