<?php
    function Conectarse()
    {
    $host='db1.co361bfxv0nr.us-east-1.rds.amazonaws.com';
    $usuariodb='root';
    $passwdb='12341234';
    $nombredb="db1";
    if (!($link=mysqli_connect($host,$usuariodb,$passwdb)))
{
echo "Error conectando a la base de datos.";
exit();
}
if (!mysqli_select_db($link,$nombredb))
{
echo "Error seleccionando la base de datos, verifique que el nombre de usuario utilizado este asociado a la base de datos.";
exit();
}
return $link;
    }
    $link=Conectarse();
echo "Conexión con la base de datos conseguida.";
?>
<!DOCTYPE html>
<html lang="sp">
<head>
    <title>EC2 Server Angel</title>
</head>
<body>
    <center><h5>Hola, Servidor EC2</h5></center>
    
</body>

</html>