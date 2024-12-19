<?php
try {
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$servicesJson = file_get_contents('../data/services.json');
		$productsJson = file_get_contents('../data/products.json');
		$servicesData = json_decode($servicesJson, true);
		$productsData = json_decode($productsJson, true);
		$reasonsData = [
			'servicio' => 'Consulta sobre servicio',
			'producto' => 'Consulta sobre producto',
			'consulta-general' => 'Consulta general', 
			'soporte' => 'Soporte',
			'otro' => 'Otro'
		];
		$messages = [
			'error' => 'Error al enviar el correo.',
			'fname' => 'Nombre faltante.',
			'lname' => 'Apellido faltante.',
			'email' => 'Correo electrónico inválido o faltante.',
			'reason' => 'Asunto inválido o faltante.',
			'service' => 'Servicio inválido o faltante.',
			'product' => 'Producto inválido o faltante.',
			'other' => 'Asunto faltante.',
			'message' => 'Mensaje faltante.'
		];

		$initParams = http_build_query([
			'nombre' => $_POST['fname'],
			'apellido' => $_POST['lname'],
			'empresa' => $_POST['company'],
			'telefono' => $_POST['tel'],
			'correo' => $_POST['email'],
			'mensaje' => $_POST['message'],
			'asunto' => $_POST['reason'],
			'servicio' => $_POST['service'],
			'producto' => $_POST['product'],
			'otro' => $_POST['other']
		]);

		$fname = $_POST['fname'] ?? throw new Exception("fname");
		$lname = $_POST['lname'] ?? throw new Exception("lname");

		$company = $_POST['company'];
		$tel = $_POST['tel'];
		$email = $_POST['email'] ?? throw new Exception("email");
		
		$reasonValue = $_POST['reason'];
		$reason = $reasonsData[$reasonValue] ?? throw new Exception("reason");

		$serviceValue = $_POST['service'];
		$service = null;
		if ($reasonValue === 'servicio') {
			foreach ($servicesData['services'] as $serviceItem) {
				if ($serviceItem['spname'] === $serviceValue) {
					$service = $serviceItem['headerTitle'];
					break;
				}
			}
			$service = $service ?? throw new Exception("service");
		}

		$productValue = $_POST['product'];
		$product = null;
		if ($reasonValue === 'producto') {
			foreach ($productsData['products'] as $productItem) {
				if ($productItem['spname'] === $productValue) {
					$product = $productItem['headerTitle'];
					break;
				}
			}
			$product = $product ?? throw new Exception("product");
		}

		if ($reasonValue === 'otro') {
			$other = $_POST['other'] ?? throw new Exception("other");
		}

		$message = $_POST['message'];
	
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			throw new Exception("email");
		}

		echo "First Name: " . $fname . "<br>";
		echo "Last Name: " . $lname . "<br>";
		echo "Company: " . $company . "<br>";
		echo "Phone: " . $tel . "<br>";
		echo "Email: " . $email . "<br>";
		echo "Message: " . $message . "<br>";
		echo "ReasonValue: " . $reasonValue . "<br>";
		echo "Reason: " . $reason . "<br>";
		echo "ServiceValue: " . $serviceValue . "<br>";
		echo "Service: " . $service . "<br>";
		echo "ProductValue: " . $productValue . "<br>";
		echo "Product: " . $product . "<br>";
		echo "Other: " . $other . "<br>";
	
		// $name = $fname . ' ' . $lname;
		// $mailTo = "die-tae@hotmail.com";
		// $subject = "Nuevo contacto: " . $reason;
		
		// $txt = "Nuevo correo de: $name\n";
		// $txt .= "Correo: $email\n";
		// $txt .= "Teléfono: $tel\n";
		// $txt .= "Compañía: $company\n";
		// $txt .= "Asunto: $reason\n";
		// if ($serviceValue) {
		// 	$txt .= "Servicio: $service\n";
		// }
		// if ($productValue) {
		// 	$txt .= "Producto: $product\n";
		// }
		// $txt .= "\nMensaje:\n$message";
	
		// $headers = array(
		// 	'From' => $email,
		// 	'Reply-To' => $email,
		// 	'X-Mailer' => 'PHP/' . phpversion()
		// );
		
		// mail($mailTo, $subject, $txt, $headers);
	
		// header("Location: ../../../contacto/?mail=sent");
	
		// if (mail($mailTo, $subject, $txt, $headers)) {
		// 	header("Location: ../?mail=sent");
		// } else {
		// 	header("Location: ../?mail=error");
		// }
	} else {
		throw new Exception("error");
	}
} catch (Exception $e) {
	$error = $e->getMessage();
	$errorMsg = $messages[$error];
	$errorParams = http_build_query([
		'mail' => 'error',
		'mailError' => $error,
		'mailMsg' => $errorMsg
	]);
	header("Location: ../../../contacto/?" . $initParams . "&" . $errorParams);
	exit();
}
?>