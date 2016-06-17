<?php
session_start();
if (!$_SESSION['lang'] and $_GET['lang']){
	$_SESSION['lang']=$_GET['lang'];
}
//si se cambia de idioma reasignar la var glob y reinicia el cont
if ($_GET['lang']){
	if ($_SESSION['lang'] and $_SESSION['lang']<>$_GET['lang']){
		$_SESSION['lang']=$_GET['lang'];	
	}
}
if (!$_SESSION['lang'] and !$_GET['lang']){
	$_SESSION['lang'] = "espanol";
}
//define titulos de los idiomas y vinculos al opuesto
if ($_SESSION['lang'] == 'espanol'){
	
	$lang = "";
	$vinc_lang = "english";
}
else{
	$lang = "_eng";
	$vinc_lang = "espanol";
}
$idioma = $_SESSION['lang'];
include("php/dbconect.php");
include("php/$idioma.sev.php");
include("php/menus-links.sev.php");
// $_GET["sc"] ES EL ID DE LA SUBCATEGORIA
//ESTO ES PARA QUE LA PAGINA SOLO SE MUESTRE SI VIENE DE CATALOGO.PHP
//ESTE ES EL POST QUE VIENE CON LA INFO DE LA BUSQUEDA
if ($_GET["busqueda"]){
	$buscador= str_replace(" ", "%", $_GET["busqueda"]);
}
if ($_POST["textfield"]){
	$buscador = str_replace(" ", "%", $_POST["textfield"]);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<title>RALLY</title>
<link href="css/styles.css" rel="stylesheet" type="text/css">
<!--<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>-->
<script type="text/javascript" src="scripts/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery-ui-1.8.18.custom.min.js"></script>
</head>
<body>
<div align="center">
	<!-- HEADER -->
    <div class="headers">
	    <!-- LOGO -->
	    <div class="logo">
        	<a href="index.php"><img src="imagenes/logo.jpg" width="304" height="123" alt="" style="border:none;"/></a>
    	</div><!-- LOGO -->
        <!-- BUSCADOR DISTRIB -->
        <div class="buscadores" style="margin-right:22px;">
			<img src="imagenes/f-partes<?php echo $lang; ?>.jpg" width="223" height="60"  alt=""/>
			<form id="form1" name="form1" method="post" action="resultados.php" style="text-align:right;">
			<input name="textfield" type="text" class="campos" id="textfield" placeholder="RS">
			<input type="submit" name="submit" id="submit" value=" " class="boton" style="background:url(imagenes/bot-buscar<?php echo $lang; ?>.jpg);">
			</form>
		</div><!-- BUSCADOR DISTRIB -->
<!-- BUSCADOR DISTRIB -->
        <div class="buscadores" style="margin-right:59px;">
<!--			<img src="imagenes/f-distrib<?php //echo $lang; ?>.jpg" width="223" height="60"  alt=""/>
			<form id="form1" name="form1" method="post" action="distribuidores.php" style="text-align:right;">
			<input type="text" name="dist" class="campos" id="textfield">
			<input type="submit" name="submit" id="submit" class="boton" value=" " style="background:url(imagenes/bot-buscar<?php //echo $lang; ?>.jpg);">
			</form> -->
		</div><!-- BUSCADOR DISTRIB -->
    </div><!-- HEADER -->
    <!-- CONT MENU LANG RED-SOCIAL -->
  <div class="cont-menu-lan-rs" align="center">
    	<!-- MENU -->
        <div class="menu">
			<ul>
            <table border="0" cellpadding="0" cellspacing="0">
            	<tr>
					<?php echo menu($lang,'cat'); ?>
				</tr>
            </table>
            </ul>
        </div><!-- MENU -->
        <!-- LANG -->
		<div class="cont-lang">
        <a href="?sc=<?php echo $_GET["sc"]; ?>&lang=<?php echo $vinc_lang; ?>&busqueda=<?php echo $buscador; ?>" ><img src="imagenes/lang<?php echo $lang; ?>.png" width="77" height="27" alt=""/></a></div><!-- LANG -->

    </div><!-- CONT MENU LANG RED-SOCIAL -->
<!-- --------------------------------------------------------------------------------- -->
    <!-- CONT-PPAL -->
    <div class="cont-bg-ppal">
		<!-- MENU -->
	    <div class="menu-lat" style="">
        	<ul>
<?php 
//busqueda de los datos SUBCATEGORIAS para el menu
$res_sub = $mysqli->query("SELECT * FROM sub_cat ORDER BY subcat");
while ($row = $res_sub->fetch_array(MYSQLI_ASSOC)){
	if ($_GET["sc"] == $row["id_subcat"]){
		$resaltador=' style="background-color:#939598;"';
	}
	else{
		$resaltador='';
	}
	echo '<a href="catalogo-prod.php?sc='.$row["id_subcat"].'"><li'.$resaltador.'><div class="boton-cat">'.$row['subcat'.$lang].'</div></li></a>';
}

$res_s = $mysqli->query("SELECT * FROM sub_cat WHERE id_subcat='".$_GET["sc"]."'");
while ($rw = $res_s->fetch_array(MYSQLI_ASSOC)){
	$subcat=$rw["subcat"];	
}
?>
            </ul>
        </div><br clear="all" />
	    <!-- MENU -->
        <!-- CONTENIDO -->
		<div class="contenido" align="left">
<?php
if ($lang == '_eng'){
	$mas='MORE +';
	$menos = 'LESS -';
}
else{
	$mas='MAS +';
	$menos='MENOS -';
}
$tot_prod = $mysqli->query("SELECT id_prod FROM referencias WHERE ref like '%".$buscador."%' OR referencia like '%".$buscador."%' GROUP BY id_prod");
$total_prod = $tot_prod->num_rows;

//SI HAY AL MENOS UN PRODUCTO HACE LA BUSQUEDA
if ($total_prod >= 1){
	$res_prod = $mysqli->query("SELECT * FROM referencias WHERE ref like '%".$buscador."%' OR referencia like '%".$buscador."%' GROUP BY id_prod");
	//GUARDA LAS ID EN UN ARREGLO
	$total=0;
	while($res= $res_prod->fetch_array(MYSQLI_ASSOC)){
	$array[] = $res["id_prod"];
	$total++;
	}
}
//var_dump($array);
//foreach ($array as $i => $value) {
//    echo '<br>'.$value;
//}

//SI HAY AL MENOS UN PRODUCTO
if ($total_prod >= 1){
	//comienza buscando las id de las marcas
	$mv_res = $mysqli->query("SELECT * FROM marca_vehic ORDER BY marc_v");
	$con_mv=0;
	while ($mv = $mv_res->fetch_array(MYSQLI_ASSOC)){
			//chequea si hay productos de esa marca - SOLO CHEKEA PRODUCTOS PORQUE  PORQUE LA VARIABLE QUEDA INABILITADA PARA EL FETCH ARRAY
		$chk_mv = $mysqli->query("SELECT * FROM producto,aplicaciones WHERE producto.id_prod=aplicaciones.id_prod AND aplicaciones.id_mv='".$mv["id_mv"]."'");
	
		//si hay al menos un producto de esa marca pone LA MARCA
		if ($chk_mv->num_rows >= 1){
			$con_mv++;
			//busca la inf de los productos - opcion con categoria seleccionada -
			$prod_res = $mysqli->query("SELECT DISTINCT * FROM producto,aplicaciones WHERE producto.id_prod=aplicaciones.id_prod AND aplicaciones.id_mv='".$mv["id_mv"]."' GROUP BY producto.id_prod");
			
			//cuenta los productos
			$con_prod=0;
			//extrae la inf de los productos
			while ($prod = $prod_res->fetch_array(MYSQLI_ASSOC)){
				$id_prod=$prod["id_prod"];
				$id_subcat=$prod["id_subcat"];
				$coincidente=0;
				foreach ($array as $i => $value) {
					if($id_prod == $value){
						$coincidente++;
					}
				}
				if ($coincidente == 1){
					$mostrar='style="display:inline-block;"';
					$con_prod++;
				}
				else{
					$mostrar= 'style="display:none;"';
				}
				if ($con_prod == 1 and $coincidente == 1){
					echo '<script type="text/javascript">$(function(){function verMas(){$( "#escondido'.$con_mv.'" ).fadeIn(800);document.getElementById(\'mas'.$con_mv.'\').style.display=\'none\';document.getElementById(\'menos'.$con_mv.'\').style.display=\'inline\';};function verMenos(){$( "#escondido'.$con_mv.'" ).fadeOut(800);document.getElementById(\'menos'.$con_mv.'\').style.display=\'none\';document.getElementById(\'mas'.$con_mv.'\').style.display=\'inline\';};$( "#mas'.$con_mv.'" ).click(function(){verMas();return false;});$( "#menos'.$con_mv.'" ).click(function(){verMenos();return false;});});</script>';
					echo '<br clear="all" />'."\n";
					echo '<!-- CONT-MARCA- VISIBLE -->'."\n";
					echo '<div class="cont-prod-vis">'."\n";
					echo '	<!-- MARCA -->'."\n";
					echo '	<div class="marca">'.$mv["marc_v"].'</div><!-- MARCA -->'."\n";
				}
				if ($con_prod == 5){
					echo '</div><!-- CONT-MARCA- VISIBLE -->'."\n";
					echo '<!-- MAS -->'."\n";
					echo '<div class="mas">'."\n";
					echo '<input type="button" id="mas'.$con_mv.'" class="bot-mas" value="'.$mas.'" /><input type="button" id="menos'.$con_mv.'" class="bot-menos" value="'.$menos.'" />'."\n";
					echo '</div><!-- MAS -->'."\n";
					echo '<!-- CONT-MARCA OCULTO-->'."\n";
					echo '<div class="cont-prod-hid" id="escondido'.$con_mv.'">'."\n";
				}
				if ($con_prod >= 0){
					echo '<!-- PRODUCTO '.$con_prod.' -->'."\n";
					echo '<a href = "producto.php?prod='.$id_prod.'&sc='.$id_subcat.'" target="_blank"><!-- PRODUCTOS --><div class="productos" '.$mostrar.'>'."\n";
					//EXTRAE LAS IMAGENES
					$res_img_peq= $mysqli->query("SELECT * FROM prod_img WHERE id_prod='".$id_prod."' ORDER BY posicion");
					$row_img = $res_img_peq->fetch_array(MYSQLI_ASSOC);
					echo '<img src="prod-imgs/'.$row_img["carpeta"].'/'.$row_img["img_peq"].'" width="135" height="135" alt=""/><div>'.$prod["ref"].'<br />'."\n";
					if ($lang == "_eng"){
						echo '<span style="font-size:10px; text-transform:uppercase;">'.substr($prod["descrip_eng"],0,40).'</span></div></div><!-- PRODUCTOS --></a>'."\n";
					}
					else{
						echo '<span style="font-size:10px; text-transform:uppercase;">'.substr($prod["descrip"],0,40).'</span></div></div><!-- PRODUCTOS --></a>'."\n";
					}
					echo '<!-- PRODUCTO '.$con_prod.' -->'."\n";
				}
			}
			//SI HAY MENOS DE 4 PRODUCTOS
			if ($con_prod <= 4 and $con_prod <> 0){
				echo '</div><!-- CONT-MARCA- VISIBLE --><br clear="all" />'."\n";
			}
			//SI HAY MAS DE CUATRO PRODUCTOS PONE FIN AL DIV OCULTO
			if ($con_prod >= 5){
				echo '<br clear="all" />'."\n";
				echo '</div><!-- CONT-MARCA OCULTO--><br clear="all" />'."\n";
			}
		}
	}
}
else{
	if ($lang == "_eng"){
		$mensaje= "NO MATCH PRODUCTS: ";
	}
	else{
		$mensaje= 'NO HAY PRODUCTOS QUE COINCIDAN CON: ';
	}
	echo '<div style="font-size:18px; font-weight:bold; text-align:center; color:#444;"><br />'.$mensaje.$buscador.'</div>';
}
?>        
<br clear="all" /></div><br clear="all" />
       <!-- CONTENIDO -->
        <br clear="all" />
     </div><!-- CONT-PPAL -->
    <!-- CONT PIE -->
	<div class="pie" align="center">
    	<?php echo pie("$lang"); ?>
    </div><!-- CONT PIE -->
</div>
</body>
</html>