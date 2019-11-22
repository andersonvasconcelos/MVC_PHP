<?php 
namespace Core;
/**
 * 
 */
class Core
{
	public function start()
	{
		$url = '/';

		if (isset($_GET['url']) && $_GET['url'] != '/') {
			$url .= $_GET['url'];
		}
			$params = array();

			if (!empty($url) && $url != '/') 
			{
				$url = explode('/', $url);
				array_shift($url);

				$control = $url[0].'Controller';
				array_shift($url);

				if (!empty($url[0]) && $url[0] != '/') 
				{
					$action = $url[0];
					array_shift($url);
				} else{$action = 'index';}

				if (count($url) > 0) {$params = $url;}
			} else{
				$control = 'HomeController';
				$action = 'index';
			}

			$control = ucfirst($control);
			$prefix = '\Controllers\\';
			

			if (!file_exists('app/Controllers/'.$control.'.php') || 
				!method_exists($prefix.$control, $action)) {
				
				$control = 'NotFoundController';
				$action = 'index';
			}

			$controller = $prefix.$control;
			$c = new $controller();

			call_user_func_array(array($c, $action), $params);			
	}
}