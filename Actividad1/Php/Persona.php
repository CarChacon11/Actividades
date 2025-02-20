<?php
class Persona {
    public $nombre;
    public function saludar() {
        return "Hola, soy " . $this->nombre;
    }
}
$persona = new Persona();
$persona->nombre = "Carmen";
echo $persona->saludar(); 
?>