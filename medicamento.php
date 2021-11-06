<?php include('header.php')?>
    <section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1 class="Titulo">Bienvenido al formulario de medicamentos</h1>
			</div>

			<div class="articulo">
				<article>
				<form action="/action_page.php" method="get">
					<label for="fname">Nombre del medicamento:</label>
					<input type="text" id="fname" name="fname"><br><br>
					<label for="lname">Descripcion:</label>
					<input type="text" id="lname" name="lname"><br><br>
					<label for="lname">Costo:</label>
					<input type="text" id="lname" name="lname"><br><br>
					<label for="lname">Proveedor:</label>
					<input type="text" id="lname" name="lname"><br><br>
					<input type="submit" value="Enviar">
				</form>
				</article>
			</div>

		</div>
	</section>
	<?php include('footer.php')?>
</body>
</html>