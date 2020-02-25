$(document).ready(function() {

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

});