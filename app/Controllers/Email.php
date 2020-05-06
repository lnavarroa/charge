<?php namespace App\Controllers;

class Email extends BaseController
{
	public function index()
	{
		$data = [
                'title' => 'MetasploitStylus',
                'welcome' => 'Bienvenido',
                'metasplitbrand' => 'MetasploitStylusbrand'
        ];
		echo view('templates/head',$data);
		echo view('templates/header',$data);
		echo view('layouts/stylus',$data);

		//echo view('templates/header',$data);
		//echo view('templates/navbar',$data);
		//echo view('templates/carousel');
		//echo view('templates/cards');
		//echo view('templates/content');
		//echo view('templates/footer');
	}

	public function send()
	{

		if(isset( $_POST['name']))
		$name = $_POST['name'];
		if(isset( $_POST['email']))
		$email = $_POST['email'];
		if(isset( $_POST['message']))
		$message = $_POST['message'];
		if(isset( $_POST['subject']))
		$subject = $_POST['subject'];

		$content="From: $name \n Email: $email \n Message: $message";
		$recipient = "lnav@tutanota.com";
		$mailheader = "From: $email \r\n";
		mail($recipient, $subject, $content, $mailheader) or die("Error!");
		echo "Email enviado con exito, muchas gracias por contactarnos.";

	}
	//--------------------------------------------------------------------

}
