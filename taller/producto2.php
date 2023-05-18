<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Productos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<div class="fluid p-3">
    <h2>PRODUCTOS</h2>
    <button type="button" class="btn btn-outline-primary m-3"><a href="./producto1.php" class="text-decoration-none">Producto 1</a> </button>
    <button type="button" class="btn btn-outline-secondary m-3"><a href="./producto2.php" class="text-decoration-none">Producto 2</a></button>
    <button type="button" class="btn btn-outline-success m-3"><a href="./producto3.php" class="text-decoration-none">Producto 3</a></button>
  </div>
</body>
</html>

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
  $producto -> setNombre("Audifonos");
  $producto -> setPrecio(30000);
  $producto -> setPeso(0.5);
  $producto -> setCategoria("Personal");
  $producto -> setEstado("Segunda");
  $producto -> setColor("Rojo");
  $producto -> setLote(2019);
  
  echo "Producto a la venta ".$producto->getNombre()."<br>";
  echo "Precio: $".$producto->getPrecio()." Pesos<br>";
  echo "Peso: ".$producto->getPeso()."Kg<br>";
  echo "Categoria: ".$producto->getCategoria()."<br>";
  echo "Estado: ".$producto->getEstado()."<br>";
  echo "Color: ".$producto->getColor()."<br>";
  echo "Año de fabricacion: ".$producto->getLote()."<br>";

?>