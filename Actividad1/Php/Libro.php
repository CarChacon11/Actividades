<?php
class Libro {
    public $titulo;
    public $autor;

    public function __construct($titulo, $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
    }

    public function mostrarInfo() {
        return "Libro: {$this->titulo}, Autor: {$this->autor}";
    }
}

$libro = new Libro("Cien años de soledad", "Gabriel García Márquez");
echo $libro->mostrarInfo();
?>