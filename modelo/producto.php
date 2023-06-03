<?php

class Producto
{
    public $Id;
    public $Nombre;
    public $Precio;
    public $Stock;
    public $TipoProducto;
    
    

    public function MostrarDatos () 
    {
        echo 'Id: ' . $this->Id . '<br>';
        echo 'Nombre: ' . $this->Nombre . '<br>';
        echo 'Raza: ' . $this->Precio . '<br>';
        echo 'Stock: ' . $this->Stock . '<br>';

        echo '--------------------------------' .'<br>';
        echo 'Tipo de Producto:' .'<br>';
        echo 'Id: ' . $this->TipoProducto->Id . '<br>';
        echo 'Descripcion: ' . $this->TipoProducto->Descripcion . '<br>';
   
    }
}