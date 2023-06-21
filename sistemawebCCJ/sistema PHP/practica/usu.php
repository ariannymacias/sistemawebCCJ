<?php


    
    
    
        $consulta = "SELECT e.id_usuarios, e.nombre_usuario, clave, id_status, id_nivel  FROM usuarios e INNER JOIN status l INNER JOIN niveles p ON p. = e.id_usuario WHERE p.id_nivel = l.id_status";
        $resultado = $conexion->selectAll($consulta);
        return $res;
    
    
    
        $verificar = "SELECT * FROM usuarios WHERE id_niveles = '$id_niveles' AND id_status = $id_status AND estado = 1";
        $existe = $this->select($verificar);
        if (empty($existe)) {
            $query = "INSERT INTO usuarios (nombre_usuario, clave, id_status, id_nivel) VALUES (?,?,?,?,?,?)";
            $datos = array($nombre_usuario, $clave, $id_status, $id_nivel);
            $data = $this->insert($query, $datos);
            
        } else {
            $res = "existe";
        }
        return $res;
    

