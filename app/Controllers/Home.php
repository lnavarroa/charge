<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
                'title' => 'Charge',
                'welcome' => 'Bienvenido',
                'navbrand' => 'Charge'
        ];
		echo view('templates/head',$data);
		echo view('templates/header',$data);
		echo view('templates/navbar',$data);
		echo view('charge');
		echo view('ventajas');
		echo view('suscripcion');
		echo view('contacto');
		//echo view('templates/cards');
		//echo view('templates/content');
		echo view('templates/footer');
	}

	//--------------------------------------------------------------------

}
