<?php

class producto_Model  {

public $db;
Private $producto;

public function __construct(){
    include('../Conexion.php');
    $this->db = conectar();;
    $this->producto = array();
    }

public function get_producto(){
$sql = "SELECT * FROM producto";
$resultado = $this->db->query($sql);
while ($row = $resultado->fetch_assoc()) 
    {
    $this->producto[]  = $row;
    }
return $this->producto;

    }
    public function insertar($nombre, $precio, $descripcion, $Estado){
			
        $resultado = $this->db->query("INSERT INTO producto VALUES ('','$nombre', '$precio', '$descripcion', '$Estado')");
        
    }
    
    public function modificar($id, $nombre, $precio, $descripcion, $Estado){
        
        $resultado = $this->db->query("UPDATE producto SET Nom_pro='$nombre', Prec_pro='$precio', des_pro='$descripcion', Est_pro='$Estado' WHERE Cod_pro = '$id'");			
    }
    
    public function eliminar($id){
        
        $resultado = $this->db->query("DELETE FROM producto WHERE Cod_pro = '$id'");
        
    }
    
    public function get_Productos($id)
    {
        $sql = "SELECT * FROM producto WHERE Cod_pro='$id' LIMIT 1";
        $resultado = $this->db->query($sql);
        $row = $resultado->fetch_assoc();

        return $row;
    }
} 
?>
}





?>