<?php
$db_host = "am1shyeyqbxzy8gc.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
     $db_name = "j1rnkoxbib66gpzb";
     $db_user = "tzydn5gc0aphefx2";
     $db_password = "mhl49nx2829za1jy";
    
     $connection = mysqli_connect('am1shyeyqbxzy8gc.cbetxkdyhwsb.us-east-1.rds.amazonaws.com', 'tzydn5gc0aphefx2', 'mhl49nx2829za1jy');
    
mysqli_select_db($connection,$db_name) or die("Error al seleccionar la base de datos:".mysqli_error());
    @mysqli_query("SET NAMES 'utf8'");

$sql_query = "SELECT * FROM contactos;";
$result = mysqli_query($connection,$sql_query);
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
  $rows[] = $r;
}
print json_encode($rows);
?>