<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "Script started.<br>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	echo "POST request received.<br>";

	echo "POST data:<br>";
    print_r($_POST);
    echo "<br>";

	$fname = filter_input(INPUT_POST, 'fname', FILTER_UNSAFE_RAW);
	$lname = filter_input(INPUT_POST, 'lname', FILTER_UNSAFE_RAW);
	$company = filter_input(INPUT_POST, 'company', FILTER_UNSAFE_RAW);
	$tel = filter_input(INPUT_POST, 'tel', FILTER_UNSAFE_RAW);
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
	$message = filter_input(INPUT_POST, 'message', FILTER_UNSAFE_RAW);
	$reason = null;
	$service = null;
	$product = null;

	echo "Sanitized data:<br>";
    echo "Name: $fname $lname<br>";
    echo "Email: $email<br>";

	$reasonValue = filter_input(INPUT_POST, 'reason', FILTER_UNSAFE_RAW);
	switch ($reasonValue) {
		case '1':
			$reason = 'Consulta sobre servicio';
			$serviceValue = filter_input(INPUT_POST, 'service', FILTER_UNSAFE_RAW);
			switch ($serviceValue) {
				case '1':
					$service = 'Migración de Acervos';
					break;
				case '2':
					$service = 'Implementación de Sistemas';
					break;
				case '3':
					$service = 'Limpieza de datos';
					break;
				default:
					// header("Location: ../../../contacto/?mail=invalid_service");
					echo "Invalid service.<br>";
					exit();
			}
			break;
		case '2':
			$reason = 'Consulta sobre producto';
			$productValue = filter_input(INPUT_POST, 'product', FILTER_UNSAFE_RAW);
			switch ($productValue) {
				case '1':
					$product = 'Panini';
					break;
				case '2':
					$product = 'ACF Technologies';
					break;
				case '3':
					$product = 'Couchbase';
					break;
				case '4':
					$product = 'Security Scorecard';
					break;
				case '5':
					$product = 'Corsight';
					break;
				case '6':
					$product = 'TASSTA';
					break;
				default:
					// header("Location: ../../../contacto/?mail=invalid_product");
					echo "Invalid product.<br>";
					exit();
			}
			break;
		case '3':
			$reason = 'Consulta general';
			break;
		case '4':
			$reason = 'Soporte';
			break;
		case '5':
			$reason = 'Otro';
			break;
		default:
			// header("Location: ../../../contacto/?mail=invalid_reason");
			echo "Invalid reason.<br>";
			exit();
	}

	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		// header("Location: ../../../contacto/?mail=invalid_email");
		echo "Invalid email address.<br>";
		exit();
	}

	echo "Reason: $reason<br>";
	echo "Service: $service<br>";
	echo "Product: $product<br>";

	$name = $fname . ' ' . $lname;
	$mailTo = "die-tae@hotmail.com";
	$subject = "Nuevo contacto: " . $reason;
	
	$txt = "Nuevo correo de: $name\n";
	$txt .= "Correo: $email\n";
	$txt .= "Teléfono: $tel\n";
	$txt .= "Compañía: $company\n";
	$txt .= "Asunto: $reason\n";
	if (isset($service)) {
		$txt .= "Servicio: $service\n";
	}
	if (isset($product)) {
		$txt .= "Producto: $product\n";
	}
	$txt .= "\nMensaje:\n$message";

	echo "Email content prepared.<br>";

	$headers = array(
		'From' => $email,
		'Reply-To' => $email,
		'X-Mailer' => 'PHP/' . phpversion()
	);

	if (mail($mailTo, $subject, $txt, $headers)) {
		// header("Location: ../../../contacto/?mail=sent");
		echo "Email sent.<br>";
	} else {
		// header("Location: ../../../contacto/?mail=error");
		echo "Error sending email.<br>";
	}
} else {
	// header("Location: ../../../contacto/?mail=error");
	echo "No POST request received.<br>";
}
exit();
?>
