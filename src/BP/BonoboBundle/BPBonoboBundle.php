<?php

namespace BP\BonoboBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class BPBonoboBundle extends Bundle
{
	public function getParent()
	{
		return 'FOSUserBundle';
	}
}
