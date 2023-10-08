<!DOCTYPE html>
<html>
<head>
    <title>Detalle de Producto</title>
</head>
<body>
<?php
    $id = $_GET['id'];
    $conexion=mysqli_connect("localhost","root","perraloca1","parcial2");               
    $SQL="select * from productos,categorias where IdCategoria2=IdCategoria and IdProducto=$id";
    $dato = mysqli_query($conexion, $SQL);
    $fila=mysqli_fetch_array($dato)
?>
<br><?php echo $fila['IdProducto']; ?>
<br><?php echo $fila['Nombre']; ?>
<br><?php echo $fila['Precio']; ?>
<br><?php echo $fila['Stock']; ?>
<br><?php echo $fila['Descripcion']; ?>
<br><?php echo $fila['Producto']; ?>
<br><a href="productos.blade.php" ><b>Regresar a Productos</b></a>
</body>
</html>
