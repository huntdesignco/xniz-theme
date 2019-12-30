$(document).scroll(function() {
  var y = $(document).scrollTop(), //get page y value 
  header = $("#primary-nav"); // your div id
  height = header.height();

  bar_height = $("#wpadminbar").height();
  if (bar_height == '') { bar_height = 0; }
  
  if (y >= height)  {
    header.css({"position" : "fixed", "top" : '0px', "left" : "0", "width" : "100%", "z-index" : "9999"});
  } 
  else {
    header.css("position", "static");
  }
});

$(document).ready(function() {
  var divs = $('.hero-overlay');   //this selects the divs of class 'fade' (multiple)
  
  $(window).on('scroll', function() {   //this selects the window and attaches to the scroll event.  when scroll occurs, the inline function is called
    var st = $(this).scrollTop();   //gets the vertical position of the current element
    divs.css({ //this changes the css of the divs from before (specifically margin-top and opacity
        'opacity' : 1 - st/300
    }); 
  });
});