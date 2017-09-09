<?php class Home_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }
    //////////////////////////////////////////////// agua //////////////////////////////////////////////////

    public function getusuarios()
    {
        $this->db->select('*');
        $query = $this->db->get('users');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return 0;
    }

    public function getgroups()
    {
        $this->db->select('');
        $query = $this->db->get('groups');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return 0;
    }
    public function insert_groups($datos)
    {
        $fecha = date('Y-m-d H:i:s');
        $data  = array(
            'name'        => $datos['name'],
            'description' => $datos['description'],
        );
        return $this->db->insert('groups', $data);
    }

    public function getAgua()
    {
        $this->db->select('*');
        $this->db->order_by("created", "desc");
        $query = $this->db->get('ni_agua');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return 0;
    }
    public function insert_agua($datos)
    {
        $fecha = date('Y-m-d H:i:s');
        $data  = array(
            'ant_CA'    => $datos['ant_CA'],
            'des_CA'    => $datos['des_CA'],
            'dureza'    => $datos['dureza'],
            'dis_total' => $datos['dis_total'],
            'des_agua'  => $datos['des_agua'],
            'status'    => 1,
            'created'   => $fecha,
            'modified'  => $fecha,
            'usuario'   => $this->session->userdata('username'),
        );
        return $this->db->insert('ni_agua', $data);
    }

    //////////////////////////////////////////////// perfil //////////////////////////////////////////////////
    public function getPerfil()
    {
        $this->db->select('*');
        $query = $this->db->get('users');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return 0;
    }
    //////////////////////////////////////////////// computadoras //////////////////////////////////////////////////
    public function getComputadora()
    {
        $this->db->select('*');
        $query = $this->db->get('computadora');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return 0;
    }
    public function insert_computadora($datos)
    {
        $fecha = date('Y-m-d H:i:s');
        $data  = array(
            'codpc'    => $datos['codpc'],
            'nombre'   => $datos['nombre'],
            'foto'     => $datos['foto'],
            'respon'   => $datos['respon'],
            'obser'    => $datos['obser'],
            'pro'      => $datos['pro'],
            'ram'      => $datos['ram'],
            'tmp'      => $datos['tmp'],
            'py'       => $datos['py'],
            'ti'       => $datos['ti'],
            'me'       => $datos['me'],
            'yb'       => $datos['yb'],
            'ye'       => $datos['ye'],
            'ytt'      => $datos['ytt'],
            'ytb'      => $datos['ytb'],
            'yv'       => $datos['yv'],
            'status'   => 1,
            'created'  => $fecha,
            'modified' => $fecha,
        );
        return $this->db->insert('computadora', $data);
    }
    ///////////////////////////////////////////////// inventario ///////////////////////////////////////////////

    public function getInventario()
    {
        $this->db->select('*');
        $query = $this->db->get('inventario');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return 0;
    }
    public function insert_inventario($datos)
    {
        $fecha = date('Y-m-d H:i:s');
        $data  = array(
            'codpc'    => $datos['codpc'],
            'nombre'   => $datos['nombre'],
            'foto'     => $datos['foto'],
            'respon'   => $datos['respon'],
            'status'   => 1,
            'created'  => $fecha,
            'modified' => $fecha,
        );
        return $this->db->insert('inventario', $data);
    }
    //////////////////////////////////////////////// lineAS ////////////////////////////////////////////////////

    public function getLineas()
    {
        $this->db->select('*');
        $query = $this->db->get('lineas');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return 0;
    }

    public function getLineasview()
    {
        $this->db->select('');
        $query = $this->db->get('lineas');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return 0;
    }

    public function insert_lineas($datos)
    {
        $fecha = date('Y-m-d H:i:s');
        $data  = array(
            'linea'    => $datos['linea'],
            'status'   => 1,
            'created'  => $fecha,
            'modified' => $fecha,
        );
        return $this->db->insert('lineas', $data);
    }
    //////////////////////////////////////////////-categorias Telefono-/////////////////////////////////////////
    public function getCate()
    {
        $this->db->select('*');
        $query = $this->db->get('categoria');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return 0;
    }

    public function getCategoriaview()
    {
        $this->db->select('*');
        $query = $this->db->get('categoria');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return 0;
    }

    public function insert_cate($datos)
    {
        $fecha = date('Y-m-d H:i:s');
        $data  = array(
            'categoria' => $datos['categoria'],
            'status'    => 1,
            'created'   => $fecha,
            'modified'  => $fecha,
        );
        return $this->db->insert('categoria', $data);
    }

    //////////////////////////////////////////////productos ////////////////////////////////////////////////////

    public function getProductos()
    {
        $this->db->select('*');
        $query = $this->db->get('productos');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return 0;
    }

    public function insert_productos($datos)
    {
        $fecha = date('Y-m-d H:i:s');
        $data  = array(
            'clave'      => $datos['clave'],
            'descrip'    => $datos['descrip'],
            'descripc'   => $datos['descripc'],
            'unidad'     => $datos['unidad'],
            'linea'      => $datos['linea'],
            'lista1'     => $datos['lista1'],
            'lista2'     => $datos['lista2'],
            'lista3'     => $datos['lista3'],
            'lista4'     => $datos['lista4'],
            'lista5'     => $datos['lista5'],
            'desc_lis_1' => $datos['desc_lis_1'],
            'desc_lis_2' => $datos['desc_lis_2'],
            'desc_lis_3' => $datos['desc_lis_3'],
            'desc_lis_4' => $datos['desc_lis_4'],
            'desc_lis_5' => $datos['desc_lis_5'],
            'impuesto'   => $datos['impuesto'],
            'cant'       => $datos['cant'],
            'boni'       => $datos['boni'],
            'recboni'    => $datos['recboni'],
            'precio_com' => $datos['precio_com'],
            'status'     => 1,
            'created'    => $fecha,
            'modified'   => $fecha,
        );
        return $this->db->insert('productos', $data);
    }

////////////////////////////////////////////// deshabilitar Global ///////////////////////////////////////////////////////////////////////
    public function desactivar_global($ID, $tablename)
    {
        $data = array(
            'status' => 0,
        ); // mandamos el ID del regitro a buscar y la tabla a buscar
        $this->db->where('id', $ID);
        $this->db->update($tablename, $data);
        if ($this->db->affected_rows() == '1') {
            return true;
        } else {
            return false;
        }
    }

    public function activar_global($ID, $tablename)
    {
        $data = array(
            'status' => 1,
        ); // mandamos el ID del regitro a buscar y la tabla a buscar
        $this->db->where('id', $ID);
        $this->db->update($tablename, $data);
        if ($this->db->affected_rows() == '1') {
            return true;
        } else {
            return false;
        }
    }

////////////////////////////////////// get Registros ////////////////////////////////////////////////////////////////////////////////
    public function getRegPro($ID, $tablename)
    {
        // mandamos el ID del regitro a buscar y la tabla a buscar
        $this->db->select('*');
        $this->db->where('id', $ID);
        $query = $this->db->get($tablename);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return 0;
    }
    public function getReglin($ID, $tablename)
    {
        // mandamos el ID del regitro a buscar y la tabla a buscar
        $this->db->select('*');
        $this->db->where('id', $ID);
        $query = $this->db->get($tablename);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return 0;
    }
    public function getRegGroup($ID, $tablename)
    {
        // mandamos el ID del regitro a buscar y la tabla a buscar
        $this->db->select('*');
        $this->db->where('id', $ID);
        $query = $this->db->get($tablename);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return 0;
    }
    public function getRegcat($ID, $tablename)
    {
        // mandamos el ID del regitro a buscar y la tabla a buscar
        $this->db->select('*');
        $this->db->where('id', $ID);
        $query = $this->db->get($tablename);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return 0;
    }

    public function getReguser($ID, $tablename)
    {
        // mandamos el ID del regitro a buscar y la tabla a buscar
        $this->db->select('*');
        $this->db->where('id', $ID);
        $query = $this->db->get($tablename);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return 0;
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function getTelefonos()
    {
        $this->db->select('*');
        $query = $this->db->get('telefonos');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return 0;
    }
    public function insert_telefonos($datos)
    {
        $fecha = date('Y-m-d H:i:s');
        $data  = array(
            'nombre'    => $datos['nombre'],
            'telefono'  => $datos['telefono'],
            'categoria' => $datos['categoria'],
            'status'    => 1,
            'created'   => $fecha,
            'modified'  => $fecha,
        );
        return $this->db->insert('telefonos', $data);
    }

    public function editar_global($ID, $tablename, $data)
    {
        // mandamos el ID del regitro a buscar y la tabla a buscar
        $this->db->where('id', $ID);
        $this->db->update($tablename, $data);
        if ($this->db->affected_rows() == '1') {
            return true;
        } else {
            return false;
        }
    }
    public function getListap()
    {
        $this->db->select('*');
        $query = $this->db->get('listap');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return 0;
    }
    public function insert_listap($datos)
    {
        $fecha = date('Y-m-d H:i:s');
        $data  = array(
            'nlista1'  => $datos['nlista1'],
            'nlista2'  => $datos['nlista2'],
            'nlista3'  => $datos['nlista3'],
            'nlista4'  => $datos['nlista4'],
            'nlista5'  => $datos['nlista5'],
            'status'   => 1,
            'created'  => $fecha,
            'modified' => $fecha,
        );
        return $this->db->insert('listap', $data);
    }

}
