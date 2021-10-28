<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class FilaTest extends TestCase{
	
	public function testInserir(){
		
		$array = new fila();

		$array->inserir(1);
		$array->inserir(2);
		$array->inserir(3);
		

	 	$this->assertEquals($array->total_de_itens(), 3);


			
							
	}
	
	

	public function testRemover(){

		$array = new fila();

		$array->inserir(1);
		$array->inserir(2);
		$array->inserir(3);
		$array->inserir(4);
		$array->inserir(5);

		$itemRemovido = $array->remover();

		$this->assertEquals($itemRemovido,1);

			
	}
}




?>