jQuery.noConflict();
jQuery(document).ready(function ($) {
  function lightboxPhoto() {
    jQuery("a[data-gal^='prettyPhoto']").prettyPhoto({
      animationSpeed: 'fast',
      slideshow: 3000,
      theme: 'facebook',
      show_title: false,
      overlay_gallery: false,
      counter_separator_label: ' из '
    });
  }

  if (jQuery().prettyPhoto) {
    lightboxPhoto();
  }
  if (jQuery().quicksand) {
    var $data = $(".portfolio-area").clone();
    $('.portfolio-categ li').click(function (e) {
      $(".filter li").removeClass("active");
      var filterClass = $(this).attr('class').split(' ').slice(-1)[0];
      if (filterClass == 'all') {
        var $filteredData = $data.find('.portfolio-item2');
      } else {
        var $filteredData = $data.find('.portfolio-item2[data-type=' + filterClass + ']');
      }
      $(".portfolio-area").quicksand($filteredData, {duration: 600, adjustHeight: 'auto'},
        function () {
          lightboxPhoto();
        });
      $(this).addClass("active");
      return false;
    });
  }
});