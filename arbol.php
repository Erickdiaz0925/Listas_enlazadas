<?php

	class Nodo {
	  public $valor;
	  public $izquierdo;
	  public $derecho;
	  
	  public function __construct($valor){
	    $this->valor = $valor;
	    $this->izquierdo= null;
	    $this->derecho = null;
	  }
	  
	}
	
	class ArbolBinario  {
	  
	private $raiz;
	
	public function __construct() {
	 $this->raiz = null;   
	  
	  }

	  public function insertar($valor){
	 $this->raiz = $this->insertarRec($this->raiz, $valor);
	  
	  }
	
	  private function insertarRec($nodo,$valor) {
	    if ($nodo == null) {
	      return new Nodo($valor);
	       } 
	     if ($valor < $nodo->valor){
       $nodo->izquierdo = $this->insertarRec($nodo->izquierdo, $valor);
	     } else if ($valor> $nodo->valor){
	       $nodo->derecho = $this->insertarRec($nodo->derecho, $valor);
	     }
	     
	     return $nodo;
}

public function inOrden(){
  $this->inOrdenRec($this->raiz);
  echo PHP_EOL;
}

private function inOrdenRec($nodo) {
  if ($nodo !== null) {
    $this->inOrdenRec($nodo->izquierdo);
    echo $nodo->valor." ";
   $this->inOrdenRec($nodo->derecho);
  }
}

public function preOrden() {
  $this->preOrdenRec($this->raiz);
  echo PHP_EOL;
}

private function preOrdenRec($nodo) {
  if ($nodo !== null) {
    echo $nodo->valor." ";
    $this->preOrdenRec($nodo->izquierdo);
    $this->preOrdenRec($nodo->derecho);
  }
}
public function postOrden() {
  $this->postOrdenRec ($this->raiz);
  echo PHP_EOL;
}

private function postOrdenRec($nodo) {
  if ($nodo !== null) {
    
    $this->postOrdenRec($nodo->izquierdo);
    $this->postOrdenRec($nodo->derecho);
    echo $nodo->valor." ";
  }
}
}

$arbol = new ArbolBinario();
$arbol->insertar(50);
$arbol->insertar(30);
$arbol->insertar(77);
$arbol->insertar(25);
$arbol->insertar(40);
$arbol->insertar(69);
$arbol->insertar(88);

echo "Recorrido inorden\n";
$arbol->inOrden();
echo "Recorrido preorden\n";
$arbol->preOrden();
echo "Recorrido postorden\n";
$arbol->postOrden();

?>
