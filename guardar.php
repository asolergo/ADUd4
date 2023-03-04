
<?php
 

 
$con = mysqli_connect('localhost', 'root','root','ADUd4',);
if (!$con) {
  echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
  echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
  echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
  exit;
}

// get the post records
 
$txtContent = $_POST['contenido'];
 

 
// database insert SQL code
$sql = "DELETE FROM Tabla"; 
$rs = mysqli_query($con, $sql);



$sql2 = "INSERT INTO Tabla(texto) VALUES ('$txtContent')";
 
// insert in database
 
$rs2 = mysqli_query($con, $sql2);

if ($rs2){
  echo "<script>alert('Texto guardado');window.location.href='index.html';</script>"; 
}
else {
  echo("<script>alert('Texto no guardado');window.location.href='index.html';</script>");
}


 
?>