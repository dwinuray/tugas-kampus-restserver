<?php

use chriskacerguis\RestServer\RestController;

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends RestController {

	
	
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	

	public function index_get()
	{	
		$data = array(

			'status'	=> TRUE,
			'data'		=> "Okei"
		);
		$this->response( $data, RestController::HTTP_OK );
	}
}
