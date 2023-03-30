  







  if (window.matchMedia("(min-width:400px)").matches) {
    $(document).ready(function(){
      $(window).scroll(function() { // check if scroll event happened
        if ($(document).scrollTop() > 90 ) { // check if user scrolled more than 50 from top of the browser 
          // if yes, then change the color of class "navbar-fixed-top" to white (#f8f8f8)
            $("header").addClass("diminuir-menu");







        } else {


            $("header").removeClass("diminuir-menu");




        }
      });
    });}



  if (window.matchMedia("(max-width:980px)").matches) {
    $(document).ready(function(){
      $(window).scroll(function() { // check if scroll event happened
        if ($(document).scrollTop() > 200 ) { // check if user scrolled more than 50 from top of the browser 
          // if yes, then change the color of class "navbar-fixed-top" to white (#f8f8f8)
            $("header").addClass("diminuir-menu-mobile");







        } else {


            $("header").removeClass("diminuir-menu-mobile");




        }
      });
    });}    
