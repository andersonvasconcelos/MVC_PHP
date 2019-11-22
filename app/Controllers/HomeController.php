<?php 
namespace Controllers;
use \Core\Controller;

/**
 * Controller principal
 */
class HomeController extends Controller
{
	public function index()
	{	
		$dados = array('pagina' => 'Página Home');
		$this->template('home', $dados);
	}
}
