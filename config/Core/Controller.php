<?php 
namespace Core;
/**
 * 
 */
class Controller
{
	public function view($name, $data = array())
	{
		extract($data);
		require 'public/views/'.$name.'.php';
	}
		public function template($name, $data = array())
	{
		extract($data);
		require 'public/views/tmp/template.php';
	}
}