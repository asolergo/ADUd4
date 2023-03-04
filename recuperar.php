
<?php
 
$con = mysqli_connect('localhost', 'root','root','ADUd4',);
if (!$con) {
  echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
  echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
  echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
  exit;
}

// insert in database
$sql2 = "SELECT texto FROM Tabla";
$rs2 = mysqli_query($con, $sql2);

if ($rs2){
  $i = mysqli_fetch_array($rs2);
  $j = $i["texto"];
  echo "<script>alert('Texto recuperado: $j');window.location.href='index.html';</script>"; 
}
else {
  echo("<script>alert('Texto no guardado');window.location.href='index.html';</script>");
}
 
?>