$( document ).ready(function() {
    $("[rel='tooltip']").tooltip();    
 
    $('.thumbnail').hover(
        function(){
            $(this).find('.caption').slideDown(250); //.fadeIn(250)
        },
        function(){
            $(this).find('.caption').slideUp(250); //.fadeOut(205)
        }
    ); 
});

jQuery(document).on('submit', '#formlg', function(event){
	event.preventDefault();

	jQuery.ajax({
		url: '../assets/validar.php',
		type: 'POST',
		dataType: 'json',
		data: $(this).serialize(),
		beforeSend: function()
		{
			$('.btn').val('Conectando....');
		}
	})

	.done(function(respuesta)
	{
		console.log(respuesta);

		if(!respuesta.error)
		{
			location.href="../perfil";
		} 
		else 
		{
			$('.error').slideDown('slow');
			setTimeout(function()
			{
				$('.error').slideUp('slow');
			},3000);
			$('.btn').val('Ingresar');
		}
	})

	.fail(function(resp){
		console.log(resp.responseText);
	})

	.always(function(){
		console.log("complete");
	});
});

  /* Demo purposes only */
  $(".hover").mouseleave(
    function () {
      $(this).removeClass("hover");
    }
  );