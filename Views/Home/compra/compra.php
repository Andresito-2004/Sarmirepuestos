<?php
require ('../../../Conexion.php');
require ('../inicio/Conexion2.php');
$con = conectar(); 
if (isset($_GET['opcion'])) {
    $id= $_GET['opcion'];
    $sql = "SELECT Cod_pro,Nom_pro ,Prec_Pro, 
    Des_pro FROM producto WHERE Cod_pro= '$id' ";
    $query=mysqli_query($con,$sql);
    $row1=mysqli_fetch_assoc($query);
}
$sql = "SELECT Cod_pro,Nom_pro FROM producto";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_all($query);
?>



<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script type="text/javascript" src="../../../Config/jsPDF-1.3.2/dist/jspdf.min.js"> </script>
<script type="text/javascript">
function genPDF(){

var doc = new jsPDF();
doc.text(20,20,'gracias por tu compra');
doc.addPage();
doc.text(20,20,'gracias por tu compra');
doc.save('SARMIREPUESTOS.pdf');




}

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="../../../js/invoice.js"></script>
<script type="text/javascript"> 

function buscar(){
    var opcion = document.getElementById('names').value;
    window.location.href = 'http://localhost/sarmirepuestos/views/Home/compra/compra.php?opcion='+opcion;
}
</script>
</head>
<body>
    

<!-- jQuery -->
<title>SARMIREPUESTOS S.A </title>


<div class="container content-invoice">
<form action="" id="invoice-form" method="post" class="invoice-form" role="form" novalidate> 
<div class="load-animate animated fadeInUp">
<div class="row"> 
    <Center><h2 class="title">FACTURA SARMIREPUESTOS S.A</h2></Center>              
</div>
<input id="currency" type="hidden" value="$">

<div class="row">
<?php include '../inicio/conexion2.php';
session_start();
                      $name =  $_SESSION['username'];
                      $contra = $_SESSION['contra'] ;
                      $con=$conexion;
                      $productos = "SELECT Cod_Usu,Nom_Usu,Ape_Usu,Cel_Usu,Dir_Usu FROM usuario where Usu_Usu =  '$name' and  Cla_Usu= '$contra'";
                      $query=mysqli_query($con,$productos);
                      $row3=mysqli_fetch_array($query); ?>
    <strong><h3> Datos personales: </strong></h3><br>
   <strong><h4>Nombre: </strong><?php echo $row3['Nom_Usu'];echo '  '; echo $row3['Ape_Usu']; ?></h4>  
   <strong><h4>Celular: </strong><?php echo $row3['Cel_Usu']; ?></h4>
   <strong><h4>Dirección: </strong><?php echo $row3['Dir_Usu']; ?></h4>
   <br>

</div> <br>             
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
     <table class="table table-bordered table-hover" id="invoiceItem">   
        <tr>
            <th width="2%"><input id="checkAll" class="formcontrol" type="checkbox"></th>
            <th width="25%">Nombre Producto</th>
            <th width="30%">Descripción</th>
            <th width="5%">Cantidad</th>
            <th width="15%">Precio</th>                             
            <th width="35%">Total</th>
        </tr>                           
        <tr>
            <td><input class="itemRow" type="checkbox"></td>
            <td width="38%">

                <form name="combo" action="getDescripcion.php" method="POST">
                <fieldset>
                    <select class="form-control quantity" name="names" id="names" onchange="return buscar();">
                    <?php if(isset($row1) ){?>
                    <option value="<?php echo $row1['Cod_pro'];?>"><?php echo $row1['Nom_pro'];?></option>
                    <?php }?>
                    <option value=""></option>
                  <?php  
                 foreach ($row as $key => $value) {?>
                    <option value="<?php echo $value['0'];?>"><?php echo $value['1'];?></option> 
                    <?php  } ?>
                </select>
        </td>       <?php if(isset($row1) ){?> 
            <td><input class="form-control quantity" value="<?php echo $row1['Des_pro'];?>" readonly='readonly'></td> 
            <?php }
            else{?>
            <td><input class="form-control quantity" value=""></td> <?php }?>
            
            <td><input class="form-control quantity" value="1"></td>
           <?php if(isset($row1) ){?> 
            <td><input  class="form-control price" value="$ <?php echo $row1['Prec_Pro'];?>" readonly='readonly'></td>
            <?php }?>
            <td><input type="number" name="total[]" id="total_1" class="form-control total" autocomplete="off" readonly='readonly' value="<?php echo $row1['Prec_Pro'];?>"></td>
         </fieldset>
        </tr>
        
    </form>                
    </table>
</div>
</div>
<div class="row">
</div>
<div class="row">   
<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
    <div class="form-group">     
    </div>
    <br>
    <div class="form-group">                       
    </div>
</div>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
    <span class="form-inline">               
        <div class="form-group">
            <label>Total:  &nbsp;</label>
            <div class="input-group">
                <div class="input-group-addon currency">$</div>
                <input value="" type="number" class="form-control" name="totalAftertax" id="totalAftertax" placeholder="50000000" readonly='readonly'><br>
            </div>      
        </div>
    </span><br>
    

</div>
</div>

<div class="clearfix"></div>                
</div><br>
    
<center>
    <button class="btn btn-danger delete" id="removeRows" type="button">- Borrar</button>
    <button class="btn btn-success" id="addRows" type="button">+ Agregar Más</button><br><br>
    <a href="salir.php"class="btn btn-primary">Salir</a>
    <a href="javascript:genPDF()" class="btn btn-primary">Guardar factura</a>
</form>         
</div>
</div>
</body>