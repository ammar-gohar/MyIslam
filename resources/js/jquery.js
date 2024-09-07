$('body').hide();
$(() => {

  $("#loader").hide();
  $('body').show();

  $("#menu-button").on( 'click', function (e) {
    e.preventDefault();
    $("#nav-list").slideToggle();
    $("#nav-list").css('display', 'flex');
    $(e.target).toggleClass('rotate-180')
  });

  $('#user-button').on( 'click', (e) => {
    e.preventDefault();
    $('#user-list').slideToggle();
  })

  $('#hd-library-trigger').on({

    mouseenter: () => {
      if($(window).width() >= 1024){
        $('#hd-library-list').toggle();
        $('#hd-library-trigger .arrow.down').toggleClass('rotate-[225deg] duration-200');
      };
    },

    mouseleave: () => {
      if($(window).width() >= 1024){
        $('#hd-library-list').toggle();
        $('#hd-library-trigger .arrow.down').toggleClass('rotate-[225deg]');
      };
    },

    click: () => {
      if($(window).width() < 1024){
        $('#hd-library-list').toggle();
      };
    },

  });

});
