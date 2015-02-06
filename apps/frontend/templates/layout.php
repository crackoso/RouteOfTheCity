<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<?php include_http_metas() ?>
		<?php include_metas() ?>
		<?php include_title() ?>
		<link rel="shortcut icon" href="/favicon.ico" />
		<?php include_stylesheets() ?>
		<?php include_javascripts() ?>
	</head>
	<body>
		<?php if ($sf_user->isAuthenticated()) {
			
		?>
		
		<a class="xses" href="<?php echo url_for('@sf_guard_signout') ?>">Cerrar Sesi&oacute;n </a>
		<?php 
		if($this->getModuleName()!='inicio'){
		?>
		<a class="backh" style="text-transform:capitalize;" href="<?php echo url_for('@homepage') ?>">Home</a>

		<ul class="menunav">

			<li>
				<a href="<?php echo url_for('ruta/index') ?>">Ruta</a>
			</li>

			<li>
				<a href="<?php echo url_for('ubicacion/index') ?>">Ubicaci&oacute;n</a>
			</li>

			<li>
				<a href="<?php echo url_for('rutaUbicaciones/index') ?>">Ruta-Ubicaciones </a>
			</li>

		</ul>
		<?php 				
			}
		?>

		<!--
		<ul class="menunav">

		<li>
		<a href="<?php //echo url_for('@homepage') ?>">Home</a>
		</li>

		<li>
		<a href="<?php //echo url_for('ruta/index') ?>">Ruta</a>
		</li>

		<li>
		<a href="<?php //echo url_for('ubicacion/index') ?>">Ubicaci&oacute;n</a>
		</li>

		<li>
		<a href="<?php //echo url_for('rutaUbicaciones/index') ?>">Ruta-Ubicaciones </a>
		</li>

		<li>
		<a href="<?php //echo url_for('@sf_guard_signout') ?>">Cerrar Sesi&oacute;n </a>
		</li>

		</ul>
		-->
		<?php } ?>
		<br><br><br>
		<?php echo $sf_content ?>
	</body>
</html>
