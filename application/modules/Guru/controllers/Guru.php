<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Guru extends MY_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('Guru_model');
            $this->load->library('form_validation');
        }

        public function index()
        {

          $dataguru=$this->Guru_model->get_all();//panggil ke modell
          $datafield=$this->Guru_model->get_field();//panggil ke modell

           $data = array(
             'content'=>'guru/guru/guru_list',
             'sidebar'=>'guru/sidebar',
             'css'=>'guru/guru/css',
             'js'=>'guru/guru/js',
             'dataguru'=>$dataguru,
             'datafield'=>$datafield,
             'module'=>'guru',
             'titlePage'=>'guru',
             'controller'=>'guru'
            );
          $this->template->load($data);
        }


        public function create(){
           $data = array(
             'content'=>'guru/guru/guru_form',
             'sidebar'=>'guru/sidebar',
             'action'=>'guru/guru/create_action',
             'module'=>'guru',
             'titlePage'=>'guru',
             'controller'=>'guru'
            );
          $this->template->load($data);
        }

        public function edit($id_guru){
          $dataedit=$this->Guru_model->get_by_id($id_guru);
           $data = array(
             'content'=>'guru/guru/guru_edit',
             'sidebar'=>'guru/sidebar',
             'action'=>'guru/guru/update_action',
             'dataedit'=>$dataedit,
             'module'=>'guru',
             'titlePage'=>'guru',
             'controller'=>'guru'
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
					'nama_guru' => $this->input->post('nama_guru',TRUE),
					'nik' => $this->input->post('nik',TRUE),
					'nip' => $this->input->post('nip',TRUE),
					
);

            $this->Guru_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('guru/guru'));
        }
    }




    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($this->input->post('id', TRUE));
        } else {
            $data = array(
					'nama_guru' => $this->input->post('nama_guru',TRUE),
					'nik' => $this->input->post('nik',TRUE),
					'nip' => $this->input->post('nip',TRUE),
					
);

            $this->Guru_model->update($this->input->post('id_guru', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('guru/guru'));
        }
    }

    public function delete($id_guru)
    {
        $row = $this->Guru_model->get_by_id($id_guru);

        if ($row) {
            $this->Guru_model->delete($id_guru);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('guru/guru'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('guru/guru'));
        }
    }

    public function _rules()
    {
$this->form_validation->set_rules('nama_guru', 'nama_guru', 'trim|required');
$this->form_validation->set_rules('nik', 'nik', 'trim|required');
$this->form_validation->set_rules('nip', 'nip', 'trim|required');


	$this->form_validation->set_rules('id_guru', 'id_guru', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

    }

}