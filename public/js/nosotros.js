$(document).ready(function(){

  function hideToggleMuteBtn()
  {
    $('.toggle-mute-btn').removeClass('hovered');
  }

  setInterval(hideToggleMuteBtn,1000); 

  
  $("header").click( function (e)
  { 
    e.preventDefault();
    if($("video").prop('muted') == true) 
    { 
      $("video").prop('muted', false);
      $('#icon-mute').addClass('fa-volume-up');
      $('#icon-mute').removeClass('fa-volume-mute');
    }
    else 
    { 
      $("video").prop('muted', true);
      $('#icon-mute').removeClass('fa-volume-up');
      $('#icon-mute').addClass('fa-volume-mute');
    } 
    }); 

})