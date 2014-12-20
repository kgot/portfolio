$(document).ready(function() {
	$('#exampleModal').on('show.bs.modal', function (event) {
	  var button = $(event.relatedTarget) // Button that triggered the modal
	  var recipient = button.data('email') // Extract info from data-* attributes
	  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
	  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
	  var modal = $(this)
	  modal.find('.modal-title').text('New message to ' + recipient)
	  modal.find('.modal-body input').val(recipient)
	})	
	/*
	 * Enable smooth scrolling
	 */
	$('a[href*=#]').click(function(){
      $('html, body').animate({
          scrollTop: $( $(this).attr('href') ).offset().top
      }, 500)
    return false;
    })
	/*
	 * Enable scroll-to-top button
	 */
	$(window).scroll(function () {
       if($('.jumbotron').is(':in-viewport')){
          $('#btn-scroll-top').fadeOut('slow')
       }else{ // If not visible
          $('#btn-scroll-top').fadeIn('slow')
       }
	})
}) // document ready
