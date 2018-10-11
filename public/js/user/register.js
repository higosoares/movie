$(document).ready(function() {
    $('#user_register').submit(function(e) {
        user.register(this.action, $(this).serialize());
        e.preventDefault();
    });
});