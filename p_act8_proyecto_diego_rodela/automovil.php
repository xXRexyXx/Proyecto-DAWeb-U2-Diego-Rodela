<?php include('header.php') ?>
<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>¡Te damos la bienvenida al portal Automovil!</h1>
			</div>

			<div class="articulo">
				<h2>Introdusca los datos que se le solicitan</h2><br><br>
				<form action="welcome.php" method="post">
				Marca del auto: <input type="text" marca="marca"><br><br>
				Traccion del automovil: <input type="text" traccion="traccion"><br><br>
				Modelo del automovil: <input type="text" modelo="modelo"><br><br>
				Año del modelo: <select name="modelo">
							<option>2015</option>
							<option>2016</option>
							<option>2017</option>
							<option>2018</option>
							<option>2019</option>
							<option>2020</option>
							<option>2021</option>
							<option>2022</option>
							</select></p><br><br>
				Interiores de piel: 
				Si <input type = "radio" name = "si/no" value = "si">
                No <input type = "radio" name = "si/no" value = "no">
				<input type="submit">
				</form>
			</div>
            <?php include('sidebar.php') ?>
        </div>
</section>
<?php include('footer.php') ?>
