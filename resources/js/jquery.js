$(() => {

  $("#loader").hide();

  $("#menu-button").click(function (e) {
    e.preventDefault();
    $("#nav-list").slideToggle();
    $("#nav-list").css('display', 'flex');
    $(e.target).toggleClass('rotate-180')
  });

  $('#user-button').click((e) => {
    e.preventDefault();
    $('#user-list').slideToggle();
  })

  $('#hd-library-trigger').on({

    mouseenter: () => {
      $('#hd-library-list').show();
    },

    mouseleave: () => {
      $('#hd-library-list').hide();
    },

    mouseleave: () => {
      $('#hd-library-list').toggle();
    },

  });

});
