$(function() {

  //Cache Selectors
  const $body = $('body');
  const $window = $(window);
  const $pull = $('.pull');
  const $menu = $('.menu');

  $('.pull').on('click', function(){
   
    $(this).toggleClass('close');
    $menu.toggleClass('visible');
    $body.toggleClass('overflow');
   
  });


});
