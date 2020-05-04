<?php namespace App\Controllers;

class MetasploitStylus extends BaseController
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

	//--------------------------------------------------------------------

}
