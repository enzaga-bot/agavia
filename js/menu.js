$(document).ready(function(){
	  $('#btn-menu').click(function(){
	    if ( $ ('#01').attr ('class') == 'visible') {
	      $ ('#01').removeClass('visible').addClass('invisible');
	      $ ('#02').removeClass('invisible').addClass('visible');
	      $ ('.menu-link').css({'left': '0'});
	    } else {
	     $ ('#01').removeClass('invisible').addClass('visible');
	      $ ('#02').removeClass('visible').addClass('invisible');
	      $ ('.menu-link').css({'left': '-100%'});
	    }
	  })
	})