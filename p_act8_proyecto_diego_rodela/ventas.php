<?php include('header.php') ?>
<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>¡Te damos la bienvenida al portal Ventas!</h1>
			</div>

			<div class="articulo">
				<h2>Introdusca los datos que se le solicitan sobre el vehiculo que deseas vender</h2><br><br>
				<form action="welcome.php" method="post">
				Forma de pago disponible:<br>
				Credito <input type = "radio" name = "name" value = "Credito">
				Contado <input type = "radio" name = "name" value = "Contado">
				Ambos <input type = "radio" name = "name" value = "Credito"><br><br>

				Modelo del auto que desea vender: <input type="text" nombre="nombre"><br><br>
				Color del auto que desea vender: <input type="text" nombre="nombre"><br><br>
				Millas del auto que desea vender: <input type="text" nombre="nombre"><br><br>
				Precio al que desea vender el auto: <input type="text" nombre="nombre"><br><br>
				Pago por mes que desea: <input type="text" nombre="nombre"><br><br>
				
				<input type="submit">
				</form>
			</div>
            <?php include('sidebar.php') ?>
        </div>
</section>
<?php include('footer.php') ?>
