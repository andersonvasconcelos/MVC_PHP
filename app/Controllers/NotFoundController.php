<?php 
namespace Controllers;
use \Core\Controller;

/**
 * Controller 404 caso nao exista o controller ou o metodo
 */
class NotFoundController extends Controller
{
	public function index()
	{
		echo 'Pagina não encontrada';
	}
}