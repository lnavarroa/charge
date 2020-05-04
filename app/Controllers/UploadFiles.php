<?php namespace App\Controllers;

class UploadFiles extends BaseController
{
	public function index()
	{
		$data = [
                'title' => 'UploadFile',
                'welcome' => 'Upload a file',
        ];

		echo view('templates/head',$data);
		echo view('templates/header',$data);
		echo view('templates/uploadfiles');
		echo view('templates/footer');
		//$path = $this->request->getFile('userfile')->store();
	}


	public function uploads()
	{
		//$files = $this->request->getFiles('uploadf');
		$file = $this->request->getFile('userfile');
		
		if($imagefile = $this->request->getFiles())
		{
   			foreach($imagefile['images'] as $img)
   			{
      			if ($img->isValid() && ! $img->hasMoved())
      			{
           			$newName = $img->getRandomName();
           			$img->move(WRITEPATH.'uploads', $newName);
      			}
   			}
		}
		echo "upload";
	}

	//--------------------------------------------------------------------

}
