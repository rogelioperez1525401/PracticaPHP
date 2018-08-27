<html>
 <head>
  <title>Pagina PHP</title>
 </head>

 <body>

 <?php 
//usando variables
 $var0="Bienvenido a mi pagina web, donde se usan, variables, estructuras de control y arreglos";
$var1="Mi nombre es";
$var2="Rogelio Perez";
$var5="y tengo";
$var3=21;
$var6="años";

echo"$var0<br><br> "; 
echo "$var1  $var2 $var5 $var3 $var6 <br><br>"; 

//usando Arrays predefinidos
$array = array("Rogelio ", "Perez ", "Edad ", 21);

echo $array[0];
echo $array[1];
echo $array[2];
echo $array[3];

//usando arrays personalizados
$personalizado = array ("clave1" => "<br> <br>Rogelio", "clave2" =>21 );
echo $personalizado ["clave1"];
echo $personalizado ["clave2"];

//caso con switch

$variable =1;
switch ($variable){
case 0:
echo "<br> <br>
variable no encontrada";
break;
case 1:
echo "<br> <br>variable a la que pertenece";
break;
default:
echo "no es ninguna variable";
}

//Usando IF

$var=10;
if ($var >5 ){
	echo "<br> Se cumplio la condicion ";
}

?>
 </body>
</html>
