<?php

namespace app\api\controller;
use app\common\Aes;
class Test extends Base
{

	public function index()
	{
		
		return show(0, 'ok', $this->headers, 201);
	}
}