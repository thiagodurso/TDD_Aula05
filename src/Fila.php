<?php

class fila
{
	private $fila;

	public function __construct(){				
		
			 $this->fila = array();
	}
	/*
	fila vazia : []
	inserir( 1 ); -> [ 1 ]
	inserir( 2 ); -> [ 1, 2 ]
	inserir( 3 ); -> [ 1, 2, 3 ]
	*/
	public function inserir( $dado ){				
	
		array_push($this->fila, $dado);
	}
	
	public function remover() {
				
		$removido = array_shift($this->fila);
		return $removido;
		
		
	}	
	// Funciona como o remover() mas não remove o ultimo dado
	public function topo(){
		
		$primeiroelemento =  $this->fila[0];
		return $primeiroelemento;
	}
	
	public function total_de_itens(){
		
		$tamanho = count($this->fila);
		return $tamanho;
	}


	
}

	
?>
