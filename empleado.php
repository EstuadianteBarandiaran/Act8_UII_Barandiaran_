<?php include('header.php')?>
    <section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1 class="Titulo">Bienvenido al formulario de empleados</h1>
			</div>

			<div class="articulo">
				<article>
				<form action="/action_page.php" method="get">
					<label for="fname">Nombre:</label>
					<input type="text" id="fname" name="fname"><br><br>
					<label for="lname">Apellidos:</label>
					<input type="text" id="lname" name="lname"><br><br>
					<label for="lname">Curp:</label>
					<input type="text" id="lname" name="lname"><br><br>
					<label for="lname">Direccion:</label>
					<input type="text" id="lname" name="lname"><br><br>
					<label for="lname">Edad:</label>
					<input type="text" id="lname" name="lname"><br><br>
					<label for="lname">Correo Electronico:</label>
					<input type="text" id="lname" name="lname"><br><br>
					<label for="lname">Telefono:</label>
					<input type="text" id="lname" name="lname"><br><br>
					<input type="submit" value="Enviar">
				</form>				</article>
			</div>

		</div>
	</section>
	<?php include('footer.php')?>
</body>
</html>