<?php 
	
	require_once "../../clases/Conexion.php";
	$c= new conectar();
	$conexion=$c->conexion();


	$sql="SELECT v.id_venta,
					v.fecha_venta,
					v.cantidad,
					p.nombre_pro,
					c.direccion,
					c.comuna
			from venta v,
				 productos p,
				 cliente c
			where p.codigo_pro=v.codigo_pro
			and c.id_cliente=v.id_cliente
			and v.estado='Pendiente'";
	$result=pg_query($conexion,$sql);
11
 ?>

<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
	<caption><label>Repartos</label></caption>
	<tr>
		<td>Codigo venta</td>
		<td>Fecha Venta</td>
		<td>Producto</td>
		<td>Cantidad</td>
		<td>Direccion</td>
		<td>Ciudad</td>
		<td>Tomar Reparto</td>
	</tr>

	<?php while($ver=pg_fetch_row($result)): ?>

	<tr>
		<td><?php echo $ver[0]; ?></td>
		<td><?php echo $ver[1]; ?></td>
		<td><?php echo $ver[2]; ?></td>
		<td><?php echo $ver[3]; ?></td>
		<td><?php echo $ver[4]; ?></td>
		<td><?php echo $ver[5]; ?></td>
		<td>
			<span class="btn btn-primary btn-xs" onclick="tomarReparto('<?php echo $ver[0]; ?>')">
				<span class="glyphicon glyphicon-ok"></span>
			</span>
		</td>
	</tr>
<?php endwhile; ?>
</table>