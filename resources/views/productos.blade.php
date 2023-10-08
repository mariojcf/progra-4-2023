<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Categorias</title>

</head>
<body>
<table class="table table-dark table-striped table_id">

<thead>    
<tr>
<th>IdProducto</th>
<th>Nombre</th>
<th>Precio</th>
<th>Stock</th>
<th>Descripcion</th>
<th>Categoria</th>
<th>Ver detalle</th>
</tr>
</thead>
<tbody>

<?php

    $conexion=mysqli_connect("localhost","root","perraloca1","parcial2");               
    $SQL="select * from productos,categorias where IdCategoria2=IdCategoria";
    $dato = mysqli_query($conexion, $SQL);

if($dato -> num_rows >0){
while($fila=mysqli_fetch_array($dato)){ 
?>
<tr>

<td><?php echo $fila['IdProducto']; ?></td>
<td><?php echo $fila['Nombre']; ?></td>
<td><?php echo $fila['Precio']; ?></td>
<td><?php echo $fila['Stock']; ?></td>
<td><?php echo $fila['Descripcion']; ?></td>
<td><?php echo $fila['Producto']; ?></td>
<td><a  href="detalle.blade.php?id=<?php echo $fila['IdProducto']?> ">Ver detalle</a></td>
</tr>


<?php
} // finaliza el whiles
}else{

?>
<tr class="text-center">
<td colspan="16">No existen registros</td>
</tr>
<?php
}
?>
</body>
</table>

</div>
<a   href="categorias.blade.php" ><b>Regresar a categorias</b></a>
</body>
</html>
