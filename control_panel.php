<<<<<<< HEAD

<?php
	include "head.php";
	include "conectar.php";

	$sql = "SELECT * FROM usuarios WHERE `email`='".$_SESSION['email']."'";
	$res = $conn -> query($sql);
	$row = $res -> fetch_array();

	if ($row['IsAdministrador']==1){

		echo "<li><a href='alta_reputacion_pantalla.php'> Configurar reputaciones<a></li><br> ";
		echo "<li><a href='mostrar_recaudaciones.php'> Ver recaudaciones<a></li><br> ";
		echo "<li><a href='ventana_categorias.php'> Configurar categorias<a></li><br> ";
		echo "<li><a href='mostrar_ranking.php'> Ver tabla de puntuaciones<a></li><br> ";




	}
?>

=======
p
<?php
	include "head.php";
	include "conectar.php";

	$sql = "SELECT * FROM usuarios WHERE `email`='".$_SESSION['email']."'";
	$res = $conn -> query($sql);
	$row = $res -> fetch_array();

	if ($row['IsAdministrador']==1){

		echo "<li><a href='alta_reputacion_pantalla.php'> Configurar reputaciones<a></li><br> ";
		echo "<li><a href='COMPLEATAR'> Ver recaudaciones<a></li><br> ";
		echo "<li><a href='ventana_categorias.php'> Configurar categorias<a></li><br> ";
		echo "<li><a href='COMPLEATAR'> Ver ganancias entre fechas<a></li><br> ";
		echo "<li><a href='COMPLEATAR'> Ver tabla de puntuaciones<a></li><br> ";




	}
?>

>>>>>>> origin/master
