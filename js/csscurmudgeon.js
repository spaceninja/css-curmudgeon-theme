jQuery(document).ready(function($) {

  // http://stackoverflow.com/questions/2661540/detecting-the-operating-system-using-jquery-or-css
  // Detect Operating System
  if( navigator.platform.match( /win/i )) {
    $('html').addClass('win');
  } else if(navigator.platform.match( /mac/i )) {
    $('html').addClass('mac');
  } else {
    $("html").addClass( navigator.platform );
  }

});