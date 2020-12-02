$(document).ready(function(){
  $('.accordion-item__trigger').click(function(){
    $(this).next('.accordion-item__content').slideToggle();
  });
});