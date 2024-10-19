<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$fname = filter_input(INPUT_POST, 'fname', FILTER_UNSAFE_RAW);
	$lname = filter_input(INPUT_POST, 'lname', FILTER_UNSAFE_RAW);
	$company = filter_input(INPUT_POST, 'company', FILTER_UNSAFE_RAW);
	$tel = filter_input(INPUT_POST, 'tel', FILTER_UNSAFE_RAW);
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
	$reason = filter_input(INPUT_POST, 'reason', FILTER_UNSAFE_RAW);
	if ($reason == 1) {
		$service = filter_input(INPUT_POST, 'service', FILTER_UNSAFE_RAW);
	} else if ($reason == 2) {
		$product = filter_input(INPUT_POST, 'product', FILTER_UNSAFE_RAW);
	}
	$message = filter_input(INPUT_POST, 'message', FILTER_UNSAFE_RAW);

	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		header("Location: ../../Contact.php?mail=invalid_email");
		exit();
	}

	$name = $fname . ' ' . $lname;
	$mailTo = "die-tae@hotmail.com";
	$subject = "Nuevo contacto: " . $reason;
	
	$txt = "Nuevo correo de: $name\n";
	$txt .= "Correo: $email\n";
	$txt .= "Teléfono: $tel\n";
	$txt .= "Compañía: $company\n";
	$txt .= "Asunto: $reason\n";
	if ($service) {
		$txt .= "Servicio: $service\n";
	}
	if ($product) {
		$txt .= "Producto: $product\n";
	}
	$txt .= "\nMensaje:\n$message";

	$headers = array(
		'From' => $email,
		'Reply-To' => $email,
		'X-Mailer' => 'PHP/' . phpversion()
	);

	if (mail($mailTo, $subject, $txt, $headers)) {
		header("Location: ../../Contact.php?mail=sent");
	} else {
		header("Location: ../../Contact.php?mail=error");
	}
} else {
	header("Location: ../../Contact.php?mail=error");
}
exit();
?>
