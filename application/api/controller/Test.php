<?php

namespace app\api\controller;

class Test extends Base()
{

	public function index()
	{
		$data = [
			'ss'=>'sss',
			'dddd'=>'dddd',
		];
		return show(0, 'ok', $data, 200);
	}
}