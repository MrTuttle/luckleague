jQuery(document).ready(function ($) {


    var $container = $('.isotope-grid');
    var isotope = $('#isotope li');
    // init

  $(isotope).on('click', 'a', function(event) {
      event.preventDefault();

         $(isotope).find('a').removeClass("current");

         $(this).addClass("current");
  });
   


    $(isotope).on('click', function (event) {
        event.preventDefault();


        var filter_id = '.' + $(this).attr('id') + ' ';

        $container.isotope({
            // options
            itemSelector: '.item',
            layoutMode: 'fitRows',
            filter: filter_id

        });



    });

});