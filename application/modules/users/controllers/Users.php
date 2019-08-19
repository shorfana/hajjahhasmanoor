<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Users extends MY_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('Users_model');
            $this->load->library('form_validation');
        }

        public function index()
        {

          $datausers=$this->Users_model->get_all();//panggil ke modell
          $datafield=$this->Users_model->get_field();//panggil ke modell

           $data = array(
             'content'=>'users/users/users_list',
             'sidebar'=>'users/sidebar',
             'css'=>'users/users/css',
             'js'=>'users/users/js',
             'datausers'=>$datausers,
             'datafield'=>$datafield,
             'module'=>'users',
             'titlePage'=>'users',
             'controller'=>'users'
            );
          $this->template->load($data);
        }


        public function create(){
           $data = array(
             'content'=>'users/users/users_form',
             'sidebar'=>'users/sidebar',
             'action'=>'users/users/create_action',
             'module'=>'users',
             'titlePage'=>'users',
             'controller'=>'users'
            );
          $this->template->load($data);
        }

        public function edit($id){
          $dataedit=$this->Users_model->get_by_id($id);
           $data = array(
             'content'=>'users/users/users_edit',
             'sidebar'=>'users/sidebar',
             'action'=>'users/users/update_action',
             'dataedit'=>$dataedit,
             'module'=>'users',
             'titlePage'=>'users',
             'controller'=>'users'
            );
          $this->template->load($data);
        }
public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
					'name' => $this->input->post('name',TRUE),
					'username' => $this->input->post('username',TRUE),
					'password' => $this->input->post('password',TRUE),
					'email' => $this->input->post('email',TRUE),
					'phone' => $this->input->post('phone',TRUE),
					'provinsi' => $this->input->post('provinsi',TRUE),
					'kota' => $this->input->post('kota',TRUE),
					'address' => $this->input->post('address',TRUE),
					'usertype' => $this->input->post('usertype',TRUE),
					'active' => $this->input->post('active',TRUE),
					'photo' => $this->input->post('photo',TRUE),
					'photo_type' => $this->input->post('photo_type',TRUE),
					'ip_address' => $this->input->post('ip_address',TRUE),
					'salt' => $this->input->post('salt',TRUE),
					'activation_code' => $this->input->post('activation_code',TRUE),
					'forgotten_password_code' => $this->input->post('forgotten_password_code',TRUE),
					'forgotten_password_time' => $this->input->post('forgotten_password_time',TRUE),
					'remember_code' => $this->input->post('remember_code',TRUE),
					'last_login' => $this->input->post('last_login',TRUE),
					'created_on' => $this->input->post('created_on',TRUE),
					'modified' => $this->input->post('modified',TRUE),
					'verifikasi' => $this->input->post('verifikasi',TRUE),

);

            $this->Users_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('users/users'));
        }
    }




    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($this->input->post('id', TRUE));
        } else {
            $data = array(
					'name' => $this->input->post('name',TRUE),
					'username' => $this->input->post('username',TRUE),
					'password' => $this->input->post('password',TRUE),
					'email' => $this->input->post('email',TRUE),
					'phone' => $this->input->post('phone',TRUE),
					'provinsi' => $this->input->post('provinsi',TRUE),
					'kota' => $this->input->post('kota',TRUE),
					'address' => $this->input->post('address',TRUE),
					'usertype' => $this->input->post('usertype',TRUE),
					'active' => $this->input->post('active',TRUE),
					'photo' => $this->input->post('photo',TRUE),
					'photo_type' => $this->input->post('photo_type',TRUE),
					'ip_address' => $this->input->post('ip_address',TRUE),
					'salt' => $this->input->post('salt',TRUE),
					'activation_code' => $this->input->post('activation_code',TRUE),
					'forgotten_password_code' => $this->input->post('forgotten_password_code',TRUE),
					'forgotten_password_time' => $this->input->post('forgotten_password_time',TRUE),
					'remember_code' => $this->input->post('remember_code',TRUE),
					'last_login' => $this->input->post('last_login',TRUE),
					'created_on' => $this->input->post('created_on',TRUE),
					'modified' => $this->input->post('modified',TRUE),
					'verifikasi' => $this->input->post('verifikasi',TRUE),

);

            $this->Users_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('users/users'));
        }
    }

    public function delete($id)
    {
        $row = $this->Users_model->get_by_id($id);

        if ($row) {
            $this->Users_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('users/users'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('users/users'));
        }
    }

    public function _rules()
    {
      $this->form_validation->set_rules('name', 'name', 'trim|required');
      $this->form_validation->set_rules('username', 'username', 'trim|required');
      $this->form_validation->set_rules('password', 'password', 'trim|required');
      $this->form_validation->set_rules('email', 'email', 'trim|required');
      $this->form_validation->set_rules('phone', 'phone', 'trim|required');
      $this->form_validation->set_rules('provinsi', 'provinsi', 'trim|required');
      $this->form_validation->set_rules('kota', 'kota', 'trim|required');
      $this->form_validation->set_rules('address', 'address', 'trim|required');
      $this->form_validation->set_rules('usertype', 'usertype', 'trim|required');
      $this->form_validation->set_rules('active', 'active', 'trim|required');
      $this->form_validation->set_rules('photo', 'photo', 'trim|required');
      $this->form_validation->set_rules('photo_type', 'photo_type', 'trim|required');
      $this->form_validation->set_rules('ip_address', 'ip_address', 'trim|required');
      $this->form_validation->set_rules('salt', 'salt', 'trim|required');
      $this->form_validation->set_rules('activation_code', 'activation_code', 'trim|required');
      $this->form_validation->set_rules('forgotten_password_code', 'forgotten_password_code', 'trim|required');
      $this->form_validation->set_rules('forgotten_password_time', 'forgotten_password_time', 'trim|required');
      $this->form_validation->set_rules('remember_code', 'remember_code', 'trim|required');
      $this->form_validation->set_rules('last_login', 'last_login', 'trim|required');
      $this->form_validation->set_rules('created_on', 'created_on', 'trim|required');
      $this->form_validation->set_rules('modified', 'modified', 'trim|required');
      $this->form_validation->set_rules('verifikasi', 'verifikasi', 'trim|required');


	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

    }

}
