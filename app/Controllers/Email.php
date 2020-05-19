<?php namespace App\Controllers;

class Email extends BaseController
{
	public function index()
	{

	}

	public function send()
	{

		if(isset( $_POST['name']))
		$name = utf8_decode($_POST['name']);

		if(isset( $_POST['email']))
		$email = utf8_decode($_POST['email']);

		if(isset( $_POST['celu']))
		$celu = utf8_decode($_POST['celu']);

		if(isset( $_POST['message']))
		$message = utf8_decode($_POST['message']);

		if(isset( $_POST['subject']))
		$subject = utf8_decode($_POST['subject']);

		if ($name === ''){
		echo "Campo obligatorio.";
		die();
		}

		if ($email === ''){
		echo "Campo obligatorio.";
		die();
		} else {
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
		echo "Formato de email inválido.";
		die();
		}

		if ($celu === ''){
		echo "Campo obligatorio.";
		die();
		}

		}
		if ($subject === ''){
		echo "Campo obligatorio.";
		die();
		}
		if ($message === ''){
		echo "Campo obligatorio.";
		die();
		}
		$tel=utf8_decode("Teléfono");
		$content="From: $name \nEmail: $email \n$tel: $celu \nMessage: $message";
		$recipient = "lnav@tutanota.com";
		$mailheader = "From: $email \r\n";
		mail($recipient, $subject, $content, $mailheader) or die("Error!");
		echo "Email enviado con exito, muchas gracias por contactarnos.";
		
	}
	//--------------------------------------------------------------------
}
