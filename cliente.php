<?php include('header.php') ?>
<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>¡Te damos la bienvenida al portal Cliente!</h1>
			</div>

			<div class="articulo">
				<h2>Introduzca los datos que se le solicitan</h2><br><br>
				<form action="welcome.php" method="post">
				Nombres: <input type="text" nombre="nombre"><br><br>
				Apellidos: <input type="text" apellidos="apellidos"><br><br>
				E-mail: <input type="text" email="email"><br><br>
				Número de teléfono: <input type="text" telefono="telefono"><br><br>
				Mujer <input type = "radio" name = "genero" value = "mujer">
                Hombre <input type = "radio" name = "genero" value = "hombre">
				<input type="submit">
				</form>
			</div>
            <?php include('sidebar.php') ?>
        </div>
</section>
<?php include('footer.php') ?>