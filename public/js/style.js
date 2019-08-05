$(document).ready(function () {
    $('.to-top').on('click', function (e) {
      $('html,body').animate({scrollTop: 0}, 'slow');
    });

});

$(document).scroll(function(e){
  let positionTop = $(this).scrollTop();
  let positionFooter = $('footer').offset().top;
  let scrollTop = false;

  if (positionTop >= positionFooter - 600) {
    $('.to-top').show();
    scrollTop = true;
  } else {
    if (scrollTop = true) {
        $('.to-top').hide();
    }
  }
});
