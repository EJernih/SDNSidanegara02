$(window).on('load', function () {
  const elem = document.querySelector('.mansory');
  new Masonry(elem, {
    itemSelector: '.mansory-item',
    columnWidth: 200,
    gutter: 20,
    columnWidth: '.mansory-sizer',
    percentPosition: true,
  });

  $('.btn-to-top').click(function () {
    $('html', 'body').animate(
      {
        scrollTop: 0,
      },
      1500,
      'easeInOutExpo'
    );
  });

  AOS.init();

  const galeriIsotope = $('.galeri-container').isotope({
    itemSelector: '.galeri-item',
  });

  $('.galeri-filters li').click(function () {
    $('.galeri-filters li').removeClass('filter-active');
    $('.galeri-filters li').removeClass('text-white');
    $(this).addClass('filter-active');
    $(this).addClass('text-white');

    galeriIsotope.isotope({
      filter: $(this).data('filter'),
    });

    AOS.init();
  });
});
