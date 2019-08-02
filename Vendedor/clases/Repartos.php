<?php

    class repartos{
        public function tomarReparto($idusuario){
            $c=new conectar();
			$conexion=$c->conexion();

			$sql="UPDATE venta set estado='Reparto' 
					where id_venta='$idusuario'";
			return pg_query($conexion,$sql);
        }
    }


?>