<?php

	$errors = array();

	// Check if nombre has been entered
	if (!isset($_POST['nombre'])) {
		$errors['nombre'] = 'Por favor ingrese su NOMBRE';
	}

	// Check if apellido has been entered
	if (!isset($_POST['apellido'])) {
		$errors['apellido'] = 'Por favor ingrese su APELLIDO';
	}

		// Check if telefono has been entered
	if (!isset($_POST['telefono'])) {
		$errors['telefono'] = 'Por favor ingrese su TELEFONO';
	}

		// Check if ciudad has been entered
	if (!isset($_POST['ciudad'])) {
		$errors['ciudad'] = 'Por favor ingrese su CIUDAD';
	}

	// Check if email has been entered and is valid
	if (!isset($_POST['correo']) || !filter_var($_POST['correo'], FILTER_VALIDATE_EMAIL)) {
		$errors['correo'] = 'Por favor ingrese su CORREO';
	}

		// Check if cirugia has been entered
	if (!isset($_POST['cirugia'])) {
		$errors['cirugia'] = 'Por favor ingrese la CIRUGIA que le interesa';
	}

	//Check if mensaje has been entered
	if (!isset($_POST['mensaje'])) {
		$errors['mensaje'] = 'Por favor ingrese su MENSAJE';
	}

	$errorOutput = '';

	if(!empty($errors)){

		$errorOutput .= '<div class="alert alert-danger alert-dismissible" role="alert">';
 		$errorOutput .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';

		$errorOutput  .= '<ul>';

		foreach ($errors as $key => $value) {
			$errorOutput .= '<li>'.$value.'</li>';
		}

		$errorOutput .= '</ul>';
		$errorOutput .= '</div>';

		echo $errorOutput;
		die();
	}



	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$telefono = $_POST['telefono'];
	$ciudad = $_POST['ciudad'];
	$correo = $_POST['correo'];
	$cirugia = $_POST['cirugia'];
	$mensaje = $_POST['mensaje'];
	$from = $correo;
	$to = 'fantasymax@gmail.com';  // please change this email id contacto@estetica-paillet.com.ar
	$subject = 'Contacto desde la web';

	$body = "De: $nombre\n Apellido: $apellido\n Vive en: $ciudad\n Teléfono: $telefono\n Correo: $correo\n Cirugia interesada: $cirugia\n Mensaje:\n $mensaje";

	$headers = "From: ".$from;


	//send the email
	$result = '';
	if (mail ($to, $subject, $body, $headers)) {
		$result .= '<div class="alert alert-success alert-dismissible" role="alert">';
 		$result .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
		$result .= '¡Muchas gracias! Nos pondremos en contacto.';
		$result .= '</div>';

		echo $result;
		die();
	}

	$result = '';
	$result .= '<div class="alert alert-danger alert-dismissible" role="alert">';
	$result .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
	$result .= 'Ocurrio un error durante el envio. Por favor intente de nuevo';
	$result .= '</div>';

	echo $result;
