<?php 
namespace Models;
use \Core\Model;

/**
 * 
 */
class Home extends Model
{
	public function getAll()
	{
		$sql = "SELECT nome, endereco, cep, email FROM alunos";
		$sql = $this->db->query();
		
		if ($sql->rowCount() > 0) {
			$sql = $sql->fetchAll();
		}
		return $sql;
	}
}