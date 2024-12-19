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

		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$company = $_POST['company'];
		$tel = $_POST['tel'];
		$email = $_POST['email'];
		$reasonValue = $_POST['reason'];
		$serviceValue = $_POST['service'];
		$productValue = $_POST['product'];
		$other = $_POST['other'];
		$message = $_POST['message'];

		$initParams = http_build_query([
			'nombre' => $fname,
			'apellido' => $lname,
			'empresa' => $company,
			'telefono' => $tel,
			'correo' => $email,
			'mensaje' => $message,
			'asunto' => $reasonValue,
			'servicio' => $serviceValue,
			'producto' => $productValue,
			'otro' => $other
		]);

		$reason = $reasonsData[$reasonValue];
		$service = null;
		foreach ($servicesData['services'] as $serviceItem) {
			if ($serviceItem['spname'] === $serviceValue) {
				$service = $serviceItem['headerTitle'];
				break;
			}
		}
		$product = null;
		foreach ($productsData['products'] as $productItem) {
			if ($productItem['spname'] === $productValue) {
				$product = $productItem['headerTitle'];
				break;
			}
		}
	
		// echo "First Name: " . $fname . "<br>";
		// echo "Last Name: " . $lname . "<br>";
		// echo "Company: " . $company . "<br>";
		// echo "Phone: " . $tel . "<br>";
		// echo "Email: " . $email . "<br>";
		// echo "Message: " . $message . "<br>";
		// echo "ReasonValue: " . $reasonValue . "<br>";
		// echo "Reason: " . $reason . "<br>";
		// echo "ServiceValue: " . $serviceValue . "<br>";
		// echo "Service: " . $service . "<br>";
		// echo "ProductValue: " . $productValue . "<br>";
		// echo "Product: " . $product . "<br>";
		// echo "Other: " . $other . "<br>";
	
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			throw new Exception("Correo electrónico inválido.");
		}
	
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
		$msg = "Error al enviar el correo.";
		throw new Exception($msg);
	}
} catch (Exception $e) {
	$params = http_build_query([
		'mail' => 'error',
		'mailMsg' => $e->getMessage()
	]);
	header("Location: ../../../contacto/?" . $params);
	exit();
}
?>