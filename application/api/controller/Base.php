<?php

namespace app\api\controller;

use think\Controller;
use app\common\lib\Aes;
use app\common\ApiException;
class Base extends Controller{
	// public $headers;
	public function _initialize()
	{
		// $this->headers = request()->header();
		$this->checkSign();
	}

	public function checkSign()
	{
		$headers = request()->header();
		throw new ApiException("Error Processing Request");
	}
}