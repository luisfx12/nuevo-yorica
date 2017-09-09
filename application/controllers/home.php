<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

session_start();
class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->ion_auth->logged_in()) {
            $this->load->model("home_model", "model");} else {
            redirect(base_url() . "index.php/auth/login");
        }

    }

    public function index()
    {
        //echo '<pre>'; print_r($this->session->userdata); echo '</pre>';

        $data['contenido'] = 'paginas/home';
        $this->load->view('includes/template', $data);

    }
    //////////////////////////////////////////////computadoras ///////////////////////////////////////////////////////////
    public function computadora()
    {
        $data['computadora'] = $this->model->getComputadora();
        $data['contenido']   = 'admin/rep_computadora';
        $this->load->view('includes/template', $data);
    }
    public function form_computadora()
    {
        $data['contenido'] = 'admin/form_computadora';
        $this->load->view('includes/template', $data);
    }
    public function pro_computadora()
    {
        //si se ha hecho submit en el formulario...
        //print_r($_POST); exit();
        if (isset($_POST['grabar'])) {
            //creamos nuestras reglas de validaci?n,
            //required=campo obligatorio||valid_email=validar correo||xss_clean=evitamos inyecciones de c?digo
            $this->form_validation->set_rules('codpc', 'codigo de pc', 'required|xss_clean');
            $this->form_validation->set_rules('nombre', 'Nombre de pc', 'required|xss_clean');
            $this->form_validation->set_rules('pro', 'Procesador', 'required|xss_clean');
            $this->form_validation->set_rules('ram', ' Memoria ram', 'required|xss_clean');
            $this->form_validation->set_rules('respon', 'Responsable', 'required|xss_clean');
            $this->form_validation->set_rules('obser', 'observaciones', 'required|xss_clean');
            $this->form_validation->set_rules('tmp', 'teclado - mouse - pantalla ', 'required|xss_clean');

            //$this->form_validation->set_rules('foto', 'Imagen', 'required|xss_clean');
            //comprobamos si los datos son correctos, el comod?n %s nos mostrar? el nombre del campo
            //que ha fallado
            $this->form_validation->set_message('required', 'El  %s es requerido');
            $this->form_validation->set_message('valid_email', 'El %s no es vÃ¡lido');
            //si el formulario no pasa la validaci?n lo devolvemos a la p?gina
            //pero esta vez le mostramos los errores al lado de cada campo
            if ($this->form_validation->run() == false) {
                $this->form_computadora();
                //en caso de que la validaci?n sea correcta cogemos las variables y las env?amos
                //al modelo
            } else {
                //$archivo = $_FILES['foto']['name'];
                if ($_FILES["userfile"]['name'] == '') {
                    $imagen = "sin_foto.png";
                } else {
                    $config['upload_path']   = './assets/computadora';
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size']      = '1000';
                    $config['max_width']     = '2000';
                    $config['max_height']    = '1000';
                    $this->load->library('upload', $config);
                    if (!$this->upload->do_upload()) {
                        echo $this->upload->display_errors();
                        exit();
                    } else {
                        $imagen = $_FILES["userfile"]['name'];
                    }
                }

                $datos['codpc']  = $this->input->post("codpc");
                $datos['nombre'] = $this->input->post("nombre");
                $datos['respon'] = $this->input->post("respon");
                $datos['foto']   = $imagen;
                $datos['obser']  = $this->input->post("obser");
                $datos['pro']    = $this->input->post("pro");
                $datos['ram']    = $this->input->post("ram");
                $datos['tmp']    = $this->input->post("tmp");
                $datos['py']     = $this->input->post("py");
                $datos['ti']     = $this->input->post("ti");
                $datos['me']     = $this->input->post("me");
                $datos['yb']     = $this->input->post("yb");
                $datos['ye']     = $this->input->post("ye");
                $datos['ytt']    = $this->input->post("ytt");
                $datos['ytb']    = $this->input->post("ytb");
                $datos['yv']     = $this->input->post("yv");
                //print_r($_POST); exit();

                $insert = $this->model->insert_computadora($datos);
                //si el modelo hace la inserci?n en la base de datos nos devolver? a la siguiente url
                //en la que seg?n nuestro formulario debe mostrarse el mensaje de confirmaci?n.
                redirect('home/computadora', 'refresh');
            }
        }
    }

    ////////////////////////////////////// estado Computadoras ////////////////////////////////////////////////////////////

    public function CompActivar($ID)
    {
        // En esta función traemos los datos del registro $ID y lo cargamos en una vista
        $tablename     = "computadora";
        $data['datos'] = $this->model->activar_global($ID, $tablename);
        redirect('home/computadora', 'refresh');
    }
    public function CompEliminar($ID)
    {
        // En esta función traemos los datos del registro $ID y lo cargamos en una vista
        $tablename     = "computadora";
        $data['datos'] = $this->model->desactivar_global($ID, $tablename);
        redirect('home/computadora', 'refresh');
    }
    ///////////////////////////////////////////////// update Computadoras /////////////////////////////////////////////////

    public function compEditForm($ID)
    {
        // En esta función traemos los datos del registro $ID y lo cargamos en una vista
        $tablename     = "computadora";
        $data['datos'] = $this->model->getRegPro($ID, $tablename);
        //print_r($data['datos']); exit();
        $data['contenido'] = 'admin/update_productos';
        $this->load->view('includes/template', $data);
    }
    public function pro_editcomp($ID)
    {
        $tablename = "computadora";
        // utilizaras el mismo codigo de guardar para cada apartado (solo copia) con exepcion del que te marcaré.
        if (isset($_POST['grabar'])) {
            $this->form_validation->set_rules('titulo', 'Titulo', 'required|xss_clean');
            $this->form_validation->set_rules('texto', 'texto', 'required|xss_clean');
            $this->form_validation->set_message('required', 'El  %s es requerido');
            $this->form_validation->set_message('valid_email', 'El %s no es vÃ¡lido');
            if ($this->form_validation->run() == false) {
                $this->compEditForm($ID);
            } else {
                if ($_FILES["userfile"]['name'] == '') { // checa los modificaciones que hice aqui (borre la variable imagen cuando va vacio la foto)
                } else {
                    $config['upload_path']   = './assets/noticias';
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size']      = '100000';
                    $config['max_width']     = '200000';
                    $config['max_height']    = '100000';
                    $this->load->library('upload', $config);
                    if (!$this->upload->do_upload()) {
                        echo $this->upload->display_errors();
                        exit();
                    } else {
                        $imagen        = $_FILES["userfile"]['name'];
                        $datos['foto'] = $imagen; // pase la variable $datos fotos solo para que se cargue cuando hay foto
                    }
                }
                $datos['titulo'] = $this->input->post("titulo");
                $datos['texto']  = $this->input->post("texto");
                $insert          = $this->model->editar_global($ID, $tablename, $datos); // Este le cambiaras por el que se tiene en en insertar al copiar.
                redirect('home/computadora', 'refresh');
            }

        }
    }
    ///////////////////////////////////////////////// perfil //////////////////////////////////////////////////////////////
    public function perfil()
    {
        $data['perfil']    = $this->model->getPerfil();
        $data['contenido'] = 'admin/perfil';
        $this->load->view('includes/template', $data);
    }
    public function form_perfil()
    {
        $data['contenido'] = 'admin/form_perfil';
        $this->load->view('includes/template', $data);
    }
    public function pro_perfil()
    {
        //si se ha hecho submit en el formulario...
        //Print_r($_POST); exit();
        if (isset($_POST['grabar'])) {

            //creamos nuestras reglas de validaci?n,
            //required=campo obligatorio||valid_email=validar correo||xss_clean=evitamos inyecciones de c?digo
            $this->form_validation->set_rules('clave', 'clave', 'required|xss_clean');
            $this->form_validation->set_rules('descrip', 'descripcion ', 'required|xss_clean');
            $this->form_validation->set_rules('descripc', 'Descripcion corta', 'required|xss_clean');
            $this->form_validation->set_rules('unidad', 'unidad', 'required|xss_clean');

            //$this->form_validation->set_rules('foto', 'Imagen', 'required|xss_clean');
            //comprobamos si los datos son correctos, el comod?n %s nos mostrar? el nombre del campo
            //que ha fallado
            $this->form_validation->set_message('required', 'El  %s es requerido');
            $this->form_validation->set_message('valid_email', 'El %s no es vÃ¡lido');

            //si el formulario no pasa la validaci?n lo devolvemos a la p?gina
            //pero esta vez le mostramos los errores al lado de cada campo
            if ($this->form_validation->run() == false) {
                $this->form_productos();

                //en caso de que la validaci?n sea correcta cogemos las variables y las env?amos
                //al modelo
            } else {

                $datos['clave']    = $this->input->post("clave");
                $datos['descrip']  = $this->input->post("descrip");
                $datos['descripc'] = $this->input->post("descripc");
                $datos['unidad']   = $this->input->post("unidad");
                $datos['linea']    = $this->input->post("linea");

                $insert = $this->model->insert_productos($datos);
                //si el modelo hace la inserci?n en la base de datos nos devolver? a la siguiente url
                //en la que seg?n nuestro formulario debe mostrarse el mensaje de confirmaci?n.
                redirect('home/productos', 'refresh');
            }
        }
    }

    ///////////////////////////////////////////// productos //////////////////////////////////////////////////////////////
    public function productos()
    {
        $data['producto']  = $this->model->getProductos();
        $data['lineas']    = $this->model->getLineasview();
        $data['contenido'] = 'admin/rep_productos';
        $this->load->view('includes/template', $data);
    }

    public function form_productos()
    {
        $data['contenido'] = 'admin/form_productos';
        $data['lineas']    = $this->model->getLineasview();
        $this->load->view('includes/template', $data);
    }
    public function pro_productos()
    {
        //si se ha hecho submit en el formulario...
        //Print_r($_POST); exit();
        if (isset($_POST['grabar'])) {
            //creamos nuestras reglas de validaci?n,
            //required=campo obligatorio||valid_email=validar correo||xss_clean=evitamos inyecciones de c?digo
            $this->form_validation->set_rules('clave', 'Clave', 'required|xss_clean');
            $this->form_validation->set_rules('descrip', 'Descripcion ', 'required|xss_clean');
            $this->form_validation->set_rules('descripc', 'Descripcion Corta', 'required|xss_clean');
            $this->form_validation->set_rules('unidad', 'Unidad', 'required|xss_clean');
            $this->form_validation->set_rules('linea', 'Linea', 'required|xss_clean');
            //$this->form_validation->set_rules('foto', 'Imagen', 'required|xss_clean');
            //comprobamos si los datos son correctos, el comod?n %s nos mostrar? el nombre del campo
            //que ha fallado
            $this->form_validation->set_message('required', ' %s es requerido');
            $this->form_validation->set_message('valid_email', 'El %s no es vÃ¡lido');

            //si el formulario no pasa la validaci?n lo devolvemos a la p?gina
            //pero esta vez le mostramos los errores al lado de cada campo
            if ($this->form_validation->run() == false) {
                $this->form_productos();
                //en caso de que la validaci?n sea correcta cogemos las variables y las env?amos
                //al modelo
            } else {
                $datos['clave']      = $this->input->post("clave");
                $datos['descrip']    = $this->input->post("descrip");
                $datos['descripc']   = $this->input->post("descripc");
                $datos['unidad']     = $this->input->post("unidad");
                $datos['lista1']     = $this->input->post("lista1");
                $datos['lista2']     = $this->input->post("lista2");
                $datos['lista3']     = $this->input->post("lista3");
                $datos['lista4']     = $this->input->post("lista4");
                $datos['lista5']     = $this->input->post("lista5");
                $datos['desc_lis_1'] = $this->input->post("desc_lis_1");
                $datos['desc_lis_2'] = $this->input->post("desc_lis_2");
                $datos['desc_lis_3'] = $this->input->post("desc_lis_3");
                $datos['desc_lis_4'] = $this->input->post("desc_lis_4");
                $datos['desc_lis_5'] = $this->input->post("desc_lis_5");
                $datos['linea']      = $this->input->post("linea");
                $datos['cant']       = $this->input->post("cant");
                $datos['impuesto']   = $this->input->post("impuesto");
                $datos['boni']       = $this->input->post("boni");
                $datos['recboni']    = $this->input->post("recboni");
                $datos['precio_com'] = $this->input->post("precio_com");

                $insert = $this->model->insert_productos($datos);
                //si el modelo hace la inserci?n en la base de datos nos devolver? a la siguiente url
                //en la que seg?n nuestro formulario debe mostrarse el mensaje de confirmaci?n.
                redirect('home/productos', 'refresh');
            }
        }
    }
    /////////////////////////////////////////// carga inventario/////////////////////////////////////////////

    public function inventario()
    {
        $data['inventario'] = $this->model->getProductos();
        $data['contenido']  = 'admin/rep_inventario';
        $this->load->view('includes/template', $data);
    }

    public function form_inventario()
    {
        $data['contenido'] = 'admin/form_productos';
        $data['lineas']    = $this->model->getLineasview();
        $this->load->view('includes/template', $data);
    }
    public function pro_inventario()
    {
        //si se ha hecho submit en el formulario...
        //Print_r($_POST); exit();
        if (isset($_POST['grabar'])) {
            //creamos nuestras reglas de validaci?n,
            //required=campo obligatorio||valid_email=validar correo||xss_clean=evitamos inyecciones de c?digo
            $this->form_validation->set_rules('clave', 'Clave', 'required|xss_clean');
            $this->form_validation->set_rules('descrip', 'Descripcion ', 'required|xss_clean');
            $this->form_validation->set_rules('descripc', 'Descripcion Corta', 'required|xss_clean');
            //$this->form_validation->set_rules('foto', 'Imagen', 'required|xss_clean');
            //comprobamos si los datos son correctos, el comod?n %s nos mostrar? el nombre del campo
            //que ha fallado
            $this->form_validation->set_message('required', ' %s es requerido');
            $this->form_validation->set_message('valid_email', 'El %s no es vÃ¡lido');
            //si el formulario no pasa la validaci?n lo devolvemos a la p?gina
            //pero esta vez le mostramos los errores al lado de cada campo
            if ($this->form_validation->run() == false) {
                $this->form_inventario();
                //en caso de que la validaci?n sea correcta cogemos las variables y las env?amos
                //al modelo
            } else {
                $datos['clave']    = $this->input->post("clave");
                $datos['descrip']  = $this->input->post("descrip");
                $datos['descripc'] = $this->input->post("descripc");
                $datos['unidad']   = $this->input->post("unidad");
                $datos['lista1']   = $this->input->post("lista1");
                $insert            = $this->model->insert_inventario($datos);
                //si el modelo hace la inserci?n en la base de datos nos devolver? a la siguiente url
                //en la que seg?n nuestro formulario debe mostrarse el mensaje de confirmaci?n.
                redirect('home/inventario', 'refresh');
            }
        }
    }

    //////////////////////////////////////// estado  Productos  //////////////////////////////////////////

    public function ProActivar($ID)
    {
        // En esta función traemos los datos del registro $ID y lo cargamos en una vista
        $tablename     = "productos";
        $data['datos'] = $this->model->activar_global($ID, $tablename);
        redirect('home/productos', 'refresh');
    }
    public function ProEliminar($ID)
    {
        // En esta función traemos los datos del registro $ID y lo cargamos en una vista
        $tablename     = "productos";
        $data['datos'] = $this->model->desactivar_global($ID, $tablename);
        redirect('home/productos', 'refresh');
    }

    /////////////////////////////////////////// Update productos ////////////////////////////////////////////

    public function ProEditForm($ID)
    {
        // En esta función traemos los datos del registro $ID y lo cargamos en una vista
        $tablename      = "productos";
        $data['datos']  = $this->model->getRegPro($ID, $tablename);
        $data['lineas'] = $this->model->getLineasview();
        //print_r($data['datos']); exit();
        $data['contenido'] = 'admin/update_productos';
        $this->load->view('includes/template', $data);
    }
    public function pro_editPro($ID)
    {
        $tablename = "productos";
        // utilizaras el mismo codigo de guardar para cada apartado (solo copia) con exepcion del que te marcaré.
        if (isset($_POST['grabar'])) {
            $this->form_validation->set_rules('clave', 'clave', 'required|xss_clean');
            $this->form_validation->set_rules('descrip', 'descrip', 'required|xss_clean');
            $this->form_validation->set_rules('descripc', 'descripc', 'required|xss_clean');
            $this->form_validation->set_rules('cant', 'cant', 'required|xss_clean');
            $this->form_validation->set_rules('recboni', 'recboni', 'required|xss_clean');
            $this->form_validation->set_rules('unidad', 'unidad', 'required|xss_clean');
            $this->form_validation->set_rules('impuesto', 'impuesto', 'required|xss_clean');
            $this->form_validation->set_rules('precio_com', 'precio_com', 'required|xss_clean');
            $this->form_validation->set_rules('linea', 'linea', 'required|xss_clean');
            $this->form_validation->set_message('required', 'El  %s es requerido');
            $this->form_validation->set_message('valid_email', 'El %s no es vÃ¡lido');
            if ($this->form_validation->run() == false) {
                $this->ProEditForm($ID);
            } else {

                $datos['clave']      = $this->input->post("clave");
                $datos['descrip']    = $this->input->post("descrip");
                $datos['descripc']   = $this->input->post("descripc");
                $datos['unidad']     = $this->input->post("unidad");
                $datos['lista1']     = $this->input->post("lista1");
                $datos['lista2']     = $this->input->post("lista2");
                $datos['lista3']     = $this->input->post("lista3");
                $datos['lista4']     = $this->input->post("lista4");
                $datos['lista5']     = $this->input->post("lista5");
                $datos['desc_lis_1'] = $this->input->post("desc_lis_1");
                $datos['desc_lis_2'] = $this->input->post("desc_lis_2");
                $datos['desc_lis_3'] = $this->input->post("desc_lis_3");
                $datos['desc_lis_4'] = $this->input->post("desc_lis_4");
                $datos['desc_lis_5'] = $this->input->post("desc_lis_5");
                $datos['linea']      = $this->input->post("linea");
                $datos['cant']       = $this->input->post("cant");
                $datos['impuesto']   = $this->input->post("impuesto");
                $datos['boni']       = $this->input->post("boni");
                $datos['recboni']    = $this->input->post("recboni");
                $datos['precio_com'] = $this->input->post("precio_com");

                $insert = $this->model->editar_global($ID, $tablename, $datos); // Este le cambiaras por el que se tiene en en insertar al copiar.
                redirect('home/productos', 'refresh');
            }

        }
    }
    ///////////////////////////////////////////////////////////Directorio ////////////////////////////////////////////////
    public function telefonos()
    {

        $data['categorias'] = $this->model->getCategoriaview();
        $data['telefonos']  = $this->model->getTelefonos();
        $data['contenido']  = 'admin/rep_telefonos';
        $this->load->view('includes/template', $data);
    }
    public function form_telefonos()
    {
        $data['contenido']  = 'admin/form_telefonos';
        $data['categorias'] = $this->model->getCategoriaview();
        $this->load->view('includes/template', $data);
    }
    public function pro_telefono()
    {
        //si se ha hecho submit en el formulario...
        //print_r($_POST); exit();
        if (isset($_POST['grabar'])) {
            //creamos nuestras reglas de validaci?n,
            //required=campo obligatorio||valid_email=validar correo||xss_clean=evitamos inyecciones de c?digo
            $this->form_validation->set_rules('nombre', 'Nombre', 'required|xss_clean');
            $this->form_validation->set_rules('telefono', 'Telefono', 'required|xss_clean');
            $this->form_validation->set_rules('categoria', 'Categoria', 'required|xss_clean');
            $datos['nombre']    = $this->input->post("nombre");
            $datos['telefono']  = $this->input->post("telefono");
            $datos['categoria'] = $this->input->post("categoria");
            //$this->form_validation->set_rules('foto', 'Imagen', 'required|xss_clean');
            //comprobamos si los datos son correctos, el comod?n %s nos mostrar? el nombre del campo
            //que ha fallado
            $this->form_validation->set_message('required', 'El  %s es requerido');
            $this->form_validation->set_message('valid_email', 'El %s no es vÃ¡lido');
            if ($this->form_validation->run() == false) {
                $this->form_telefonos();

            } else {
                //si el formulario no pasa la validaci?n lo devolvemos a la p?gina
                //pero esta vez le mostramos los errores al lado de cada campo
                $this->form_validation->set_rules('nombre', 'Nombre', 'required|xss_clean');
                $this->form_validation->set_rules('telefono', 'Telefono', 'required|xss_clean');
                $this->form_validation->set_rules('categoria', 'Categoria', 'required|xss_clean');
                $datos['nombre']    = $this->input->post("nombre");
                $datos['telefono']  = $this->input->post("telefono");
                $datos['categoria'] = $this->input->post("categoria");
                $insert             = $this->model->insert_telefonos($datos);
                //si el modelo hace la inserci?n en la base de datos nos devolver? a la siguiente url
                //en la que seg?n nuestro formulario debe mostrarse el mensaje de confirmaci?n.
                redirect('home/telefonos', 'refresh');
            }
        }
    }
    ///////////////////////////////////////////////////////lineas //////////////////////////////////////////////////////

    public function lineas()
    {
        $data['linea']     = $this->model->getLineas();
        $data['contenido'] = 'admin/rep_linea';
        $this->load->view('includes/template', $data);
    }
    //function form_linea(){
    //   $data['contenido'] = 'admin/form_linea';
    //    $this->load->view('includes/template',$data);
    //}
    public function pro_lineas()
    {
        //si se ha hecho submit en el formulario...
        //print_r($_POST); exit();
        //if(isset($_POST['grabar']))
        //{
        //creamos nuestras reglas de validaci?n,
        //required=campo obligatorio||valid_email=validar correo||xss_clean=evitamos inyecciones de c?digo
        //$this->form_validation->set_rules('linea', 'linea', 'required|xss_clean');
        //$this->form_validation->set_rules('foto', 'Imagen', 'required|xss_clean');
        //comprobamos si los datos son correctos, el comod?n %s nos mostrar? el nombre del campo
        //que ha fallado
        //$this->form_validation->set_message('required', 'El  %s es requerido');
        //$this->form_validation->set_message('valid_email', 'El %s no es vÃ¡lido');
        //si el formulario no pasa la validaci?n lo devolvemos a la p?gina
        //pero esta vez le mostramos los errores al lado de cada campo
        //  if($this->form_validation->run() == FALSE)
        //{
        //    $this->lineas();

        //}else{
        $datos['linea'] = $this->input->post("linea");
        $insert         = $this->model->insert_lineas($datos);
        //si el modelo hace la inserci?n en la base de datos nos devolver? a la siguiente url
        //en la que seg?n nuestro formulario debe mostrarse el mensaje de confirmaci?n.
        redirect('home/lineas', 'refresh');
        //}
        //}
    }
    /////////////////////////////////////////categoria -Telefono///////////////////////////////////////
    public function categorias()
    {
        $data['categoria'] = $this->model->getCate();
        $data['contenido'] = 'admin/rep_categoria';
        $this->load->view('includes/template', $data);
    }
    //function form_categoria(){
    //    $data['contenido'] = 'admin/form_categoria';
    //    $this->load->view('includes/template',$data);
    //}
    public function pro_categoria()
    {
        //si se ha hecho submit en el formulario...

        $datos['categoria'] = $this->input->post("categoria");

        $insert = $this->model->insert_cate($datos);
        //si el modelo hace la inserci?n en la base de datos nos devolver? a la siguiente url
        //en la que seg?n nuestro formulario debe mostrarse el mensaje de confirmaci?n.
        redirect('home/categorias', 'refresh');

    }
    ////////////////////////////////////////// estado CAtegoria ///////////////////////////////////////////////////////////

    public function catActivar($ID)
    {
        // En esta función traemos los datos del registro $ID y lo cargamos en una vista
        $tablename     = "categoria";
        $data['datos'] = $this->model->activar_global($ID, $tablename);
        redirect('home/categorias', 'refresh');
    }
    public function catEliminar($ID)
    {
        // En esta función traemos los datos del registro $ID y lo cargamos en una vista
        $tablename     = "categoria";
        $data['datos'] = $this->model->desactivar_global($ID, $tablename);
        redirect('home/categorias', 'refresh');
    }

    //////////////////////////////////////// estado  lineas  //////////////////////////////////////////

    public function linActivar($ID)
    {
        // En esta función traemos los datos del registro $ID y lo cargamos en una vista
        $tablename     = "lineas";
        $data['datos'] = $this->model->activar_global($ID, $tablename);
        redirect('home/lineas', 'refresh');
    }
    public function linEliminar($ID)
    {
        // En esta función traemos los datos del registro $ID y lo cargamos en una vista
        $tablename     = "lineas";
        $data['datos'] = $this->model->desactivar_global($ID, $tablename);
        redirect('home/lineas', 'refresh');
    }
    //////////////////////////////////////////// estado telefonos///////////////////////////////////////

    public function TelActivar($ID)
    {
        // En esta función traemos los datos del registro $ID y lo cargamos en una vista
        $tablename     = "telefonos";
        $data['datos'] = $this->model->activar_global($ID, $tablename);
        redirect('home/telefonos', 'refresh');
    }
    public function TelEliminar($ID)
    {
        // En esta función traemos los datos del registro $ID y lo cargamos en una vista
        $tablename     = "telefonos";
        $data['datos'] = $this->model->desactivar_global($ID, $tablename);
        redirect('home/telefonos', 'refresh');
    }

    /////////////////////////////////////////// Update lineas  ////////////////////////////////////////////

    public function linEditForm($ID)
    {
        // En esta función traemos los datos del registro $ID y lo cargamos en una vista
        $tablename     = "lineas";
        $data['datos'] = $this->model->getReglin($ID, $tablename);
        //print_r($data['datos']); exit();
        $data['contenido'] = 'admin/update_lineas';
        $this->load->view('includes/template', $data);
    }
    public function pro_editlin($ID)
    {
        $tablename = "lineas";
        // utilizaras el mismo codigo de guardar para cada apartado (solo copia) con exepcion del que te marcaré.
        if (isset($_POST['grabar'])) {
            $this->form_validation->set_rules('linea', 'linea', 'required|xss_clean');
            $this->form_validation->set_message('required', 'El  %s es requerido');
            $this->form_validation->set_message('valid_email', 'El %s no es vÃ¡lido');
            $datos['linea'] = $this->input->post("linea");
            $insert         = $this->model->editar_global($ID, $tablename, $datos); // Este le cambiaras por el que se tiene en en insertar al copiar.
            redirect('home/lineas', 'refresh');
        }

    }
    /////////////////////////////////////////////// update Users //////////////////////////////////////////////////
    public function userEditForm($ID)
    {
        // En esta función traemos los datos del registro $ID y lo cargamos en una vista
        $tablename     = "user";
        $data['datos'] = $this->model->getRegusuario($ID, $tablename);
        //print_r($data['datos']); exit();
        $data['contenido'] = 'admin/update_users';
        $this->load->view('includes/template', $data);
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////// update categoria /////////////////////////////////////////////////////////
    public function catEditForm($ID)
    {
        // En esta función traemos los datos del registro $ID y lo cargamos en una vista
        $tablename     = "categoria";
        $data['datos'] = $this->model->getRegcat($ID, $tablename);
        //print_r($data['datos']); exit();
        $data['contenido'] = 'admin/update_categoria';
        $this->load->view('includes/template', $data);
    }
    public function cat_edit($ID)
    {
        $tablename = "categoria";
        // utilizaras el mismo codigo de guardar para cada apartado (solo copia) con exepcion del que te marcaré.
        if (isset($_POST['grabar'])) {
            $this->form_validation->set_rules('categoria', 'categoria', 'required|xss_clean');
            $this->form_validation->set_message('required', 'El  %s es requerido');
            $this->form_validation->set_message('valid_email', 'El %s no es vÃ¡lido');
            $datos['categoria'] = $this->input->post("categoria");
            $insert             = $this->model->editar_global($ID, $tablename, $datos); // Este le cambiaras por el que se tiene en en insertar al copiar.
            redirect('home/categorias', 'refresh');
        }

    }
////////////////////////////////////////////// bitacora Agua//////////////////////////////////////////////////////////////
    public function bitacora()
    {
        $data['agua']      = $this->model->getAgua();
        $data['contenido'] = 'admin/rep_agua';
        $this->load->view('includes/template', $data);
    }
    public function form_agua()
    {
        $data['contenido'] = 'admin/form_agua';
        $this->load->view('includes/template', $data);
    }
    public function pro_agua()
    {
        //si se ha hecho submit en el formulario...

        $datos['ant_CA']    = $this->input->post("ant_CA");
        $datos['des_CA']    = $this->input->post("des_CA");
        $datos['dureza']    = $this->input->post("dureza");
        $datos['dis_total'] = $this->input->post("dis_total");
        $datos['des_agua']  = $this->input->post("des_agua");
        $insert             = $this->model->insert_agua($datos);
        //si el modelo hace la inserci?n en la base de datos nos devolver? a la siguiente url
        //en la que seg?n nuestro formulario debe mostrarse el mensaje de confirmaci?n.
        redirect('home/bitacora', 'refresh');

    }
    /////////////////////////////////////////////////usuarios ///////////////////////////////////////////////////////////
    public function usuarios()
    {
        $data['usuarios']  = $this->model->getusuarios();
        $data['contenido'] = 'admin/rep_usuarios';
        $this->load->view('includes/template', $data);
    }
    public function form_user()
    {
        $data['grupos']    = $this->model->getgroups();
        $data['contenido'] = 'admin/form_user';
        $this->load->view('includes/template', $data);
    }
    /////////////////////////////////////////////////configuracio ///////////////////////////////////////////////////////////
    public function configuracion()
    {
        $data['contenido'] = 'admin/configuracion';
        $this->load->view('includes/template', $data);
    }
    /////////////////////////////////////////////////logotipo ///////////////////////////////////////////////////////////
    public function logotipo()
    {
        $data['logotipo']  = $this->model->getlogotipo();
        $data['contenido'] = 'admin/configuracion';
        $this->load->view('includes/template', $data);
    }
    public function pro_logotipo()
    {
        //si se ha hecho submit en el formulario...
        //print_r($_POST); exit();

        if (isset($_POST['grabar'])) {
            //creamos nuestras reglas de validaci?n,
            //required=campo obligatorio||valid_email=validar correo||xss_clean=evitamos inyecciones de c?digo

            //comprobamos si los datos son correctos, el comod?n %s nos mostrar? el nombre del campo
            //que ha fallado
            //si el formulario no pasa la validaci?n lo devolvemos a la p?gina
            //pero esta vez le mostramos los errores al lado de cada campo

            if ($_FILES["userfile"]['name'] == '') {
                $imagen = "sin_foto.png";
            } else {
                $config['upload_path'] = './assets/logotipo';

                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '10000';
                $config['max_width']     = '2000';
                $config['max_height']    = '1000';
                $this->load->library('upload', $config);

                $imagen = $_FILES["userfile"]['name'];

            }

            $datos['img'] = $imagen;
            $insert       = $this->model->insert_logotipo($datos);
            //si el modelo hace la inserci?n en la base de datos nos devolver? a la siguiente url
            //en la que seg?n nuestro formulario debe mostrarse el mensaje de confirmaci?n.
            redirect('home/logotipo', 'refresh');

        }
    }
    ///////////////////////////////// update telefonos ///////////////////////////////////////////////////////////////
    public function TelEditForm($ID)
    {
        // En esta función traemos los datos del registro $ID y lo cargamos en una vista
        $tablename          = "telefonos";
        $data['datos']      = $this->model->getRegPro($ID, $tablename);
        $data['categorias'] = $this->model->getCategoriaview();
        //print_r($data['datos']); exit();
        $data['contenido'] = 'admin/update_telefonos';
        $this->load->view('includes/template', $data);
    }
    public function Tel_editPro($ID)
    {
        $tablename = "telefonos";
        // utilizaras el mismo codigo de guardar para cada apartado (solo copia) con exepcion del que te marcaré.
        if (isset($_POST['grabar'])) {
            $this->form_validation->set_rules('nombre', 'Nombre', 'required|xss_clean');
            $this->form_validation->set_rules('telefono', 'Telefono', 'required|xss_clean');
            $this->form_validation->set_rules('categoria', 'Categoria', 'required|xss_clean');
            $this->form_validation->set_message('required', 'El  %s es requerido');
            $this->form_validation->set_message('valid_email', 'El %s no es vÃ¡lido');
            if ($this->form_validation->run() == false) {
                $this->TelEditForm($ID);
            } else {
                $datos['nombre']    = $this->input->post("nombre");
                $datos['telefono']  = $this->input->post("telefono");
                $datos['categoria'] = $this->input->post("categoria");

                $insert = $this->model->editar_global($ID, $tablename, $datos); // Este le cambiaras por el que se tiene en en insertar al copiar.
                redirect('home/telefonos', 'refresh');
            }

        }
    }
    //////////////////////////////////////////// listas de precio /////////////////////////////////////////////////////////////

    public function form_listap()
    {
        $data['listap']    = $this->model->getListap();
        $data['contenido'] = 'admin/form_listap';
        $this->load->view('includes/template', $data);
    }
    public function pro_listap()
    {
        //si se ha hecho submit en el formulario...

        if (isset($_POST['grabar'])) {
            //creamos nuestras reglas de validaci?n,
            //required=campo obligatorio||valid_email=validar correo||xss_clean=evitamos inyecciones de c?digo
            $this->form_validation->set_rules('nlista1', 'nlista1', 'required|xss_clean');
            $this->form_validation->set_rules('nlista2', 'nlista2', 'required|xss_clean');
            $this->form_validation->set_rules('nlista3', 'nlista3', 'required|xss_clean');
            $this->form_validation->set_rules('nlista4', 'nlista4', 'required|xss_clean');
            $this->form_validation->set_rules('nlista5', 'nlista5', 'required|xss_clean');
            //comprobamos si los datos son correctos, el comod?n %s nos mostrar? el nombre del campo
            //que ha fallado
            $this->form_validation->set_message('required', 'El  %s es requerido');
            $this->form_validation->set_message('valid_email', 'El %s no es vÃ¡lido');
            //si el formulario no pasa la validaci?n lo devolvemos a la p?gina
            //pero esta vez le mostramos los errores al lado de cada campo
            if ($this->form_validation->run() == false) {
                $this->form_listap();
                //en caso de que la validaci?n sea correcta cogemos las variables y las env?amos
                //al modelo
            } else {
                $datos['nlista1'] = $this->input->post("nlista1");
                $datos['nlista2'] = $this->input->post("nlista2");
                $datos['nlista3'] = $this->input->post("nlista3");
                $datos['nlista4'] = $this->input->post("nlista4");
                $datos['nlista5'] = $this->input->post("nlista5");
                $insert           = $this->model->insert_listap($datos);
                //si el modelo hace la inserci?n en la base de datos nos devolver? a la siguiente url
                //en la que seg?n nuestro formulario debe mostrarse el mensaje de confirmaci?n.
                redirect('home/listap', 'refresh');
            }
        }
    }

    ///////////////////////////////////////grupos //////////////////////////////////////////////////

    /* public function grupos()
{
$data['grupos']    = $this->model->getgroups();
$data['contenido'] = 'admin/rep_grupos';
$this->load->view('includes/template', $data);
}

public function form_group()
{
$data['contenido'] = 'admin/form_group';
$this->load->view('includes/template', $data);
}
public function pro_group()
{
//si se ha hecho submit en el formulario...
//print_r($_POST); exit();
if (isset($_POST['grabar'])) {
//creamos nuestras reglas de validaci?n,
//required=campo obligatorio||valid_email=validar correo||xss_clean=evitamos inyecciones de c?digo
$this->form_validation->set_rules('name', 'name', 'required|xss_clean');
$this->form_validation->set_rules('description', 'description', 'required|xss_clean');
$datos['name']        = $this->input->post("name");
$datos['description'] = $this->input->post("description");

//$this->form_validation->set_rules('foto', 'Imagen', 'required|xss_clean');
//comprobamos si los datos son correctos, el comod?n %s nos mostrar? el nombre del campo
//que ha fallado
$this->form_validation->set_message('required', 'El  %s es requerido');
$this->form_validation->set_message('valid_email', 'El %s no es vÃ¡lido');
if ($this->form_validation->run() == false) {
$this->form_group();

} else {
//si el formulario no pasa la validaci?n lo devolvemos a la p?gina
//pero esta vez le mostramos los errores al lado de cada campo
$this->form_validation->set_rules('name', 'name', 'required|xss_clean');
$this->form_validation->set_rules('description', 'description', 'required|xss_clean');
$datos['name']        = $this->input->post("name");
$datos['description'] = $this->input->post("description");
$insert               = $this->model->insert_groups($datos);

//si el modelo hace la inserci?n en la base de datos nos devolver? a la siguiente url
//en la que seg?n nuestro formulario debe mostrarse el mensaje de confirmaci?n.
redirect('home/grupos', 'refresh');
}
}
}

public function groupEditForm($ID)
{
// En esta función traemos los datos del registro $ID y lo cargamos en una vista
$tablename     = "groups";
$data['datos'] = $this->model->getRegGroup($ID, $tablename);
//print_r($data['datos']); exit();
$data['contenido'] = 'admin/update_grupo';
$this->load->view('includes/template', $data);
}

public function grupo_edit($ID)
{
$tablename = "groups";
// utilizaras el mismo codigo de guardar para cada apartado (solo copia) con exepcion del que te marcaré.
if (isset($_POST['grabar'])) {
$this->form_validation->set_rules('name', 'name', 'required|xss_clean');
$this->form_validation->set_rules('description', 'description', 'required|xss_clean');
$this->form_validation->set_message('required', 'El  %s es requerido');
$this->form_validation->set_message('valid_email', 'El %s no es vÃ¡lido');
$datos['name']        = $this->input->post("name");
$datos['description'] = $this->input->post("description");
$insert               = $this->model->editar_global($ID, $tablename, $datos); // Este le cambiaras por el que se tiene en en insertar al copiar.
redirect('home/grupos', 'refresh');
}

}*/
}

//////////////////////////////////  ///////////////////////////////////////////////////////////////
