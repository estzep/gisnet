<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$company = $_POST['company'];
	$tel = $_POST['tel'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$reasonValue = $_POST['reason'];
	$serviceValue = $_POST['service'];
	$productValue = $_POST['product'];
	$otherValue = $_POST['other'];

	// $reason = null;
	// $service = null;
	// $product = null;
	// switch ($reasonValue) {
	// 	case '1':
	// 		$reason = 'Consulta sobre servicio';
	// 		switch ($serviceValue) {
	// 			case '1':
	// 				$service = 'Migración de Acervos';
	// 				break;
	// 			case '2':
	// 				$service = 'Implementación de Sistemas';
	// 				break;
	// 			case '3':
	// 				$service = 'Limpieza de datos';
	// 				break;
	// 			default:
	// 				header("Location: ../?mail=invalid_service");
	// 				exit();
	// 		}
	// 		break;
	// 	case '2':
	// 		$reason = 'Consulta sobre producto';
	// 		switch ($productValue) {
	// 			case '1':
	// 				$product = 'Panini';
	// 				break;
	// 			case '2':
	// 				$product = 'ACF Technologies';
	// 				break;
	// 			case '3':
	// 				$product = 'Couchbase';
	// 				break;
	// 			case '4':
	// 				$product = 'Security Scorecard';
	// 				break;
	// 			case '5':
	// 				$product = 'Corsight';
	// 				break;
	// 			case '6':
	// 				$product = 'TASSTA';
	// 				break;
	// 			default:
	// 				header("Location: ../?mail=invalid_product");
	// 				exit();
	// 		}
	// 		break;
	// 	case '3':
	// 		$reason = 'Consulta general';
	// 		break;
	// 	case '4':
	// 		$reason = 'Soporte';
	// 		break;
	// 	case '5':
	// 		$reason = 'Otro';
	// 		break;
	// 	default:
	// 		header("Location: ../?mail=invalid_reason");
	// 		exit();
	// }

	// // if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	// // 	header("Location: ../?mail=invalid_email");
	// // 	exit();
	// // }

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

	header("Location: ../?mail=sent");

	// if (mail($mailTo, $subject, $txt, $headers)) {
	// 	header("Location: ../?mail=sent");
	// } else {
	// 	header("Location: ../?mail=error");
	// }
} else {
	header("Location: ../?mail=error");
}
?>
