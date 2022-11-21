<?php
	defined('ABSPATH') or die( "Bye bye" );

	//Comprueba que tienes permisos para acceder a esta pagina
	if (! current_user_can ('manage_options')) wp_die (__ ('No tienes suficientes permisos para acceder a esta página.'));
?>

<div class="wrap">
	<h2>
		<?php _e( 'Pasarela de Pago', 'esqueleto' ) ?>
	</h2>
	<form action="">
		<label for="">Nombre de usuario</label> <br>
		<input type="text"> <br>
		<label for="">Apellidos de usuario</label> <br>
		<input type="text"> <br>
		<label for="">Numero de tarjeta</label> <br>
		<input type="text"> <br>
		<label for="">Fecha de caducidad</label> <br>
		<input type="text"> <br>
		<label for="">CVC</label> <br>
		<input type="text"> <br> <br>
		<button>Procesar</button>
	</form>
</div>

