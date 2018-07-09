$(document).ready(function(){
  
  //////////////////////////Carousel//
  
  $('.carousel').carousel(
  {
    dist: 0,
    padding: 0,
    fullWidth: true,
    indicators: true,
    duration: 100,
  }
  );
  
  //////////////////////////swipeable//
  
  $('#tabs-swipe-demo').tabs({ onShow: function(tab) { console.log(tab); } });
  
  //////////////////////////MODAL//
  
  //Inicializa todos los modales   
  $('.modal').modal();
  //o Haciendo click en el disparador del modal
  $('.trigger-modal').modal();
  $('.tabs').tabs();
  $('.sidenav').sidenav();
});

autoplay()   
function autoplay() {
    $('.carousel').carousel('next');
    setTimeout(autoplay, 2000);
}



