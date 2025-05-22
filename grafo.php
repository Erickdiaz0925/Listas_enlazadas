<?php

class Grafo {
    public $Vertice;
    public $Arista;
    
    public function __construct() {
        $this->Vertice = array();
        $this->Arista = array();
    }
    
    public function AgregarVertices($Vertice): void {
        $this->Vertice[] = $Vertice;
        $this->Arista[$Vertice] = array();
    }

    public function AgregarArista($Vertice1 ,$Vertice2 )
    {
        $this->Arista[$Vertice1][]= $Vertice2;
        $this->Arista[$Vertice2][]= $Vertice1;
    }

    public function ImprimirArista()
    {
        foreach($this->Vertice as $Vertice)
        {
        echo $Vertice." Esta conectado ";
            foreach($this->Arista[$Vertice] as $Item)
            {
            echo $Item.",";
            }
        echo "<br>";
        }
    }
}
    $MiGrafo = new Grafo();
    $MiGrafo->AgregarVertices("A");
    $MiGrafo->AgregarVertices("B");
    $MiGrafo->AgregarVertices("C");
    $MiGrafo->AgregarVertices("D");
    $MiGrafo->AgregarVertices("E");
    
    $MiGrafo->AgregarArista("A","B");
    $MiGrafo->AgregarArista("B","C");
    $MiGrafo->AgregarArista("C","D");
    $MiGrafo->AgregarArista("D","E");
    $MiGrafo->AgregarArista("E","A");

    $MiGrafo->ImprimirArista();

?>
