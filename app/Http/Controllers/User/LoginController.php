<?php

/*
 *
 */
namespace App\Http\Controllers\User;
use  App\Http\Controllers\ApiController;
use  Illuminate\Http\Request;

class LoginController extends ApiController
{

	public function index(){
		return $this->response(200,'test');
	}
}