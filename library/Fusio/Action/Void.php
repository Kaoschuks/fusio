<?php

namespace Fusio\Action;

use Fusio\ActionAbstract;
use Fusio\Parameter;
use PSX\Http\Request;

class Void extends ActionAbstract
{
	public function execute(Request $request, array $parameters)
	{
	}

	public function getParameters()
	{
		return array();
	}
}
