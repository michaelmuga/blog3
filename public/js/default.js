$(document).ready(function() {
	$('[data-toggle="offcanvas"]').click(function(){
		$('#side-menu').toggleClass('hidden-xs');
		
	})
	
})


$('#myAffix').affix({
  offset: {
    top: 100,
    bottom: function () {
      return (this.bottom = $('.footer').outerHeight(true))
    }
  }
})

$('#myAffix1').affix({
  offset: {
    top: 100,
    bottom: function () {
      return (this.bottom = $('.footer').outerHeight(true))
    }
  }
})


$('ul.nav li.dropdown, gotinvolved').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});






$(document).ready(function() {
  var s = $(".navbar-default ");
  var pos = s.position();            
  $(window).scroll(function() {
    var windowpos = $(window).scrollTop();
    if (windowpos >= 840) {
      s.addClass("navbar-dgs");
    } else {
            s.removeClass("navbar-dgs");
        
    }
  });
});