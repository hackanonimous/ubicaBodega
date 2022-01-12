<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo COMPANY;?></title>
  <!--Links-->
  <?php include "./vistas/inc/link.php";?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<?php
		$peticionAjax=false;
		require_once "./controladores/vistasControlador.php";
		$IV=new vistasControlador();
		$vistas=$IV->obtener_vistas_controlador();
		if ($vistas=="login" || $vistas=="404") {
			require_once "./vistas/contenidos/".$vistas."-view.php";
		} else {
	 ?>
<div class="wrapper">

  <!--barra de navegacion superior-->
  <?php include "./vistas/inc/navBar.php";?>
  <!--barra de navegacion lateral izquierda-->
  <?php include "./vistas/inc/navLateral.php";?>
  <!-- Area de trabajo contenido central -->
  <div class="content-wrapper">
    <!--Contenido central de pagina-->
    <?php
				include $vistas;
			?>
  </div>
  <!-- /.Area de trabajo contenido central -->
  <!-- Pie de pagina -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2021-2022 <a href="https://www.facebook.com/jalvarezescobar/">Jalvarez</a>.</strong>
    Derechos Reservados.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 2.0.0
    </div>
  </footer>
  <!-- /.Pie de pagina -->
</div>
<!-- ./wrapper -->

<!--scripts-->
<?php 
		}
		include "./vistas/inc/script.php";
	?>
</body>
</html>
