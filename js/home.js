 $(function() {

  $boardlist.slick({
    dots: true,
    infinite: false,
    arrows: false,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 3,
    centerMode: false,
    responsive: [
    {
      breakpoint: 861,
      settings: {
        centerMode: false,
        slidesToShow: 2,
        slidesToScroll: 2,
        arrows: 0,
        dots: true
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: false,
        arrows: 0,
        dots: true
      }
    }
    ]
  });

 

});
