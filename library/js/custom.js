jQuery(document).ready(function ($) {

function getUrlParameter(sParam)
  {
      var sPageURL = window.location.search.substring(1);
      var sURLVariables = sPageURL.split('&');
      for (var i = 0; i < sURLVariables.length; i++) 
      {
          var sParameterName = sURLVariables[i].split('=');
          if (sParameterName[0] == sParam) 
          {
              return sParameterName[1];
          }
      }
  }

    var container = $('.isotope-grid');
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
       
        container.isotope({
            // options
            itemSelector: '.item',
            layoutMode: 'fitRows',
            filter:  filter_id

        });

 });

   var search = getUrlParameter('search');

   if (typeof search !== 'undefined') {
    search.toLowerCase();
    var search_tag = '.' + search + ' ';

     container.isotope({
              // options
              itemSelector: '.item',
              layoutMode: 'fitRows',
              filter:  search_tag

     });
   } 
});