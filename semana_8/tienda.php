<html>
  <head>
    <title>Tienda</title>
<div class="container">
		<div class="colums">
			<div class="colums is-4">
				<h2 class="title is-1">Carrito de compras</h2>
				<label class="label">Cantidad</label>
				<input type="number" name="cantidad_1" id="cantidad1" class="input" min="1" max="10">
				<p class="help">(Selecciona minimo un producto)</p>
				<label class="label">PRODUCTOS</label>
				<div class="select is-primary">
					<select class="select" name="producto_1" id="producto1">
                        <option>-Selecciona un producto-</option>
                        <option value="20000">Matebook D14</option>
                        <option value="7000">Xiaomi Redmi Note 9 Pro</option>
                        <option value="3000">Moto C</option>
                        <option value="800">Mi Band 5</option>
                        <option value="10000">Google Hub</option>
                        <option value="40000">Iphone 12 Pro Max</option>
                        <option value="15000"> PlayStation 5</option>
                        <option value="22999">HP All in One D452</option>
                    </select>
				</div>
				<br>
				<button class="button is-primary" onclick="agregar()" id="agregar1" name="agregar_1">AGREGAR</button>
				<br>
				<label class="label">Carrito de compras</label>
				<textarea class="textarea" name="carritocompras_1" id="carritocompras1"></textarea>
				<label class="label">Total</label>
				<input type="number" name="total_1" id="total1" class="input" value="0" readonly>
			<p class="help">Para generar un nueva compra da click en el boton (NUEVA COMPRA) </p>
				<button class="button is-primary" onclick="nueva()" id="nuevo1" name="nuevo_1">NUEVA COMPRA</button>
      </div>
		</div>
	</div>
</body>
</html>