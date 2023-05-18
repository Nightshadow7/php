<?php
  class Producto{
    private $nombre;
    private $precio;
    private $peso;
    private $categoria;
    private $estado;
    private $color;
    private $lote;
    
    public function __construct($nombre,$precio,$peso,$categoria,$estado,$color,$lote){
      $this->nombre = $nombre;
      $this->precio = $precio;
      $this->peso = $peso;
      $this->categoria = $categoria;
      $this->estado = $estado;
      $this->color = $color;
      $this->lote = $lote;  
    }

    public function getNombre(){
      return $this->nombre;
    }
    public function getPrecio(){
      return $this->precio;
    }
    public function getPeso(){
      return $this->peso;
    }
    public function getCategoria(){
      return $this->categoria;
    }
    public function getEstado(){
      return $this->estado;
    }
    public function getColor(){
      return $this->color;
    }
    public function getLote(){
      return $this->lote;
    }

    public function setNombre($nombre){
      $this->nombre = $nombre;
    }
    public function setPrecio($precio){
      $this->precio = $precio;
    }
    public function setPeso($peso){
      $this->peso = $peso;
    }
    public function setCategoria($categoria){
      $this->categoria = $categoria;
    }
    public function setEstado($estado){
      $this->estado = $estado;
    }
    public function setColor($color){
      $this->color = $color;
    }
    public function setLote($lote){
      $this->lote = $lote;
    }

  }

  $producto = new Producto("a",1,1,"e","a","s",1);
  echo "PRODUCTOS<br>";
  $producto -> setNombre("Negros");
  $producto -> setPrecio(200000);
  $producto -> setPeso(50);
  $producto -> setCategoria("Esclavos");
  $producto -> setEstado("Nuevos");
  $producto -> setColor("Prieto");
  $producto -> setLote(2004);
  
  echo "Producto a la venta ".$producto->getNombre()."<br>";
  echo "Precio: $".$producto->getPrecio()." Pesos<br>";
  echo "Peso: ".$producto->getPeso()."Kg<br>";
  echo "Categoria: ".$producto->getCategoria()."<br>";
  echo "Estado: ".$producto->getEstado()."<br>";
  echo "Color: ".$producto->getColor()."<br>";
  echo "Año de fabricacion: ".$producto->getLote()."<br>";

?>
