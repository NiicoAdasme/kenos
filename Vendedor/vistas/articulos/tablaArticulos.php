
<?php 
	require_once "../../clases/Conexion.php";
	$c= new conectar();
	$conexion=$c->conexion();
	$sql="SELECT art.nombre_pro,
					art.descripcion_pro,
					art.inventario,
					art.precio,
					cat.nombre_tipo,
					art.codigo_pro
		  from productos art, 
		       tipo_producto cat
		 where  art.codigo_tpro=cat.codigo_tpro";
	$result=pg_query($conexion,$sql);

 ?>

<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
	<caption><label>Articulos</label></caption>
	<tr>
		<td>Nombre</td>
		<td>Descripcion</td>
		<td>Cantidad</td>
		<td>Precio</td>
		<td>Categoria</td>
		<td>Editar</td>
		<td>Eliminar</td>
	</tr>

	<?php while($ver=pg_fetch_row($result)): ?>

	<tr>
		<td><?php echo $ver[0]; ?></td>
		<td><?php echo $ver[1]; ?></td>
		<td><?php echo $ver[2]; ?></td>
		<td><?php echo $ver[3]; ?></td>
		<td><?php echo $ver[4]; ?></td>
		<td>
			<span  data-toggle="modal" data-target="#abremodalUpdateArticulo" class="btn btn-warning btn-xs" onclick="agregaDatosArticulo('<?php echo $ver[5] ?>')">
				<span class="glyphicon glyphicon-pencil"></span>
			</span>
		</td>
		<td>
			<span class="btn btn-danger btn-xs" onclick="eliminaArticulo('<?php echo $ver[5] ?>')">
				<span class="glyphicon glyphicon-remove"></span>
			</span>
		</td>
	</tr>
<?php endwhile; ?>
</table>