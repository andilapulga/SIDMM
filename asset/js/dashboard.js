
$(document).ready(function() {
    $('#slide_flip_controls').on('click', 'span', function(){
      $("#slide_flip_images").css("transform","translateX("+$(this).index() * -600+"px)");
      $("#slide_flip_controls span").removeClass("selected");
      $(this).addClass("selected");
    });
  });