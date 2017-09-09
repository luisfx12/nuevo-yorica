
<?php if (!defined('BASEPATH')) {
    // exit('No direct script access allowed');
}

/*class Login extends CI_Controller
{

public function __construct()
{
parent::__construct();

}

public function index()
{
if ($this->session->userdata('logged_in')) {
redirect('admin', 'refresh');
} else {
$this->load->helper(array('form'));
$data['contenido'] = 'login_view';
$this->load->view('includes/template', $data);
}

}

public function logout()
{
//$this->session->unset_userdata('logged_in');
//session_destroy();
$data = array('logged_in' => false, 'name' => '');
$this->session->unset_userdata($data);
redirect('home', 'refresh');
}

}*/