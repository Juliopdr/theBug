<?php

include "conf/define/url.php";

class pageUser
{

	public function __construct()
	{
		require HEADER;

	}

	public function loadUser()
	{
		$url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_STRING);

		$url = (!$url)? HOME : "tpl/pageUser/pages/{$url}.html";

		if(!file_exists($url)):
			
			throw new Exception("Ops, Algo deu errado!!", 1);

		endif;

		return $url;
			
	}

	public function __destruct()
	{
		require FOOTER;
	}
}