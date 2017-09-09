<?php

class Catalogo_model extends CI_Model
{

    public function construct()
    {
        parent::__construct();
    }

    public function filas()
    {
        $consulta = $this->db->get('productos');
        return $consulta->num_rows();
    }

    public function total_productos_paginados($por_pagina, $segmento)
    {
        $consulta = $this->db->get('productos', $por_pagina, $segmento);
        if ($consulta->num_rows() > 0) {
            foreach ($consulta->result() as $fila) {
                $data[] = $fila;
            }
            return $data;
        }
    }

    public function porId($id)
    {
        $this->db->where('id', $id);
        $productos = $this->db->get('productos');
        foreach ($productos->result() as $producto) {
            $data[] = $producto;
        }
        if ($producto->opciones) {
            $producto->opciones = explode(',', $producto->opciones);
        }
        return $producto;
    }
}
/*application/models/catalogo_model.php
 * el modelo
 */
