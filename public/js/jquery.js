$('body').hide();

let request = {};

function filter(e)
{

  request[e.getAttribute('data-filter')] = e.getAttribute('data-value');

  console.log(request);
  $.ajax({
    type: "GET",
    url: e.getAttribute('href'),
    data: request,

    dataType: "json",
    success: function (response) {
      console.log(response);
    }
  });
}

$(() => {

  console.log('done');
  $("#loader").hide();
  $('body').show();

  $("#menu-button").on( 'click', function (e) {
    $("#nav-list").slideToggle();
    $("#nav-list").css('display', 'flex');
    $('#menu-button').toggleClass('change');
  });

  $('#user-button').on( 'click', (e) => {
    e.preventDefault();
    $('#user-list').slideToggle();
  })

  $('#hd-library-trigger').on({

    mouseenter: () => {
      if($(window).width() >= 1024){
        $('#hd-library-list').toggle(100);
        $('#hd-library-trigger .arrow.down').toggleClass('rotate-[225deg]');
      };
    },

    mouseleave: () => {
      if($(window).width() >= 1024){
        $('#hd-library-list').toggle(200);
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
