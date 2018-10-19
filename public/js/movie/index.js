$(document).ready(function() {
    $.get('/movies', function (data) {

        var browse = $('.browse-inner');
        console.log(browse);
        $.each(data, function (index, mun) {

        });
    });
});