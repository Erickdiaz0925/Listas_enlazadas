<?php 

 

class Nodo { 

    public $data; 

    public $next; 

 

    public function __construct($data) { 

        $this->data = $data; 

        $this->next = null; 

    } 

} 

 

class ListaEnlazada { 

    public $inicio; 

 

    public function __construct() { 

        $this->inicio = null; 

    } 

 

    public function insertar($data): void { 

        $otronodo = new Nodo($data); 

        $otronodo->next = $this->inicio; 

        $this->inicio = $otronodo; 

    } 

 

    public function imprimirHTML(): void { 

        $nodoprinci = $this->inicio; 

        echo "<ul>"; 

 

        while ($nodoprinci != null) { 

            echo "<li>" . $nodoprinci->data . "</li>"; 

            $nodoprinci = $nodoprinci->next; 

        } 

 

        echo "</ul>"; 

    } 

} 

 

// Uso de la lista 

$lista = new ListaEnlazada(); 

 

$lista->insertar("Peras"); 

$lista->insertar("Mangos"); 

$lista->insertar("Narajas"); 

$lista->insertar("Manzanas"); 

$lista->insertar("Duraznos"); 

 

$lista->imprimirHTML(); 

 

?> 