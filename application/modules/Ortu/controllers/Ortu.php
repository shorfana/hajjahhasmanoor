<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Ortu extends MY_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('Ortu_model');
            $this->load->library('form_validation');
        }

        public function index()
        {

          $dataortu=$this->Ortu_model->get_all();//panggil ke modell
          $datafield=$this->Ortu_model->get_field();//panggil ke modell

           $data = array(
             'content'=>'ortu/ortu/orangtua_list',
             'sidebar'=>'ortu/sidebar',
             'css'=>'ortu/ortu/css',
             'js'=>'ortu/ortu/js',
             'dataortu'=>$dataortu,
             'datafield'=>$datafield,
             'module'=>'ortu',
             'titlePage'=>'ortu',
             'controller'=>'ortu'
            );
          $this->template->load($data);
        }


        public function create(){
           $data = array(
             'content'=>'ortu/ortu/orangtua_form',
             'sidebar'=>'ortu/sidebar',
             'action'=>'ortu/ortu/create_action',
             'module'=>'ortu',
             'titlePage'=>'ortu',
             'controller'=>'ortu'
            );
          $this->template->load($data);
        }

        public function edit($id_ortu){
          $dataedit=$this->Ortu_model->get_by_id($id_ortu);
           $data = array(
             'content'=>'ortu/ortu/orangtua_edit',
             'sidebar'=>'ortu/sidebar',
             'action'=>'ortu/ortu/update_action',
             'dataedit'=>$dataedit,
             'module'=>'ortu',
             'titlePage'=>'ortu',
             'controller'=>'ortu'
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
					'nik_ayah' => $this->input->post('nik_ayah',TRUE),
					'nama_ayah' => $this->input->post('nama_ayah',TRUE),
					'nik_ibu' => $this->input->post('nik_ibu',TRUE),
					'nama_ibu' => $this->input->post('nama_ibu',TRUE),
					'jmlh_penghasilan_ayah' => $this->input->post('jmlh_penghasilan_ayah',TRUE),
					'jmlh_penghasilan_ibu' => $this->input->post('jmlh_penghasilan_ibu',TRUE),
					'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah',TRUE),
					'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu',TRUE),
					'agama_ayah' => $this->input->post('agama_ayah',TRUE),
					'agama_ibu' => $this->input->post('agama_ibu',TRUE),
					'ttl_ayah' => $this->input->post('ttl_ayah',TRUE),
					'ttl_ibu' => $this->input->post('ttl_ibu',TRUE),
					'pendidikan_terakhir_ayah' => $this->input->post('pendidikan_terakhir_ayah',TRUE),
					'pendidikan_terakhir_ibu' => $this->input->post('pendidikan_terakhir_ibu',TRUE),
					
);

            $this->Ortu_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('ortu/ortu'));
        }
    }




    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($this->input->post('id', TRUE));
        } else {
            $data = array(
					'nik_ayah' => $this->input->post('nik_ayah',TRUE),
					'nama_ayah' => $this->input->post('nama_ayah',TRUE),
					'nik_ibu' => $this->input->post('nik_ibu',TRUE),
					'nama_ibu' => $this->input->post('nama_ibu',TRUE),
					'jmlh_penghasilan_ayah' => $this->input->post('jmlh_penghasilan_ayah',TRUE),
					'jmlh_penghasilan_ibu' => $this->input->post('jmlh_penghasilan_ibu',TRUE),
					'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah',TRUE),
					'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu',TRUE),
					'agama_ayah' => $this->input->post('agama_ayah',TRUE),
					'agama_ibu' => $this->input->post('agama_ibu',TRUE),
					'ttl_ayah' => $this->input->post('ttl_ayah',TRUE),
					'ttl_ibu' => $this->input->post('ttl_ibu',TRUE),
					'pendidikan_terakhir_ayah' => $this->input->post('pendidikan_terakhir_ayah',TRUE),
					'pendidikan_terakhir_ibu' => $this->input->post('pendidikan_terakhir_ibu',TRUE),
					
);

            $this->Ortu_model->update($this->input->post('id_ortu', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('ortu/ortu'));
        }
    }

    public function delete($id_ortu)
    {
        $row = $this->Ortu_model->get_by_id($id_ortu);

        if ($row) {
            $this->Ortu_model->delete($id_ortu);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('ortu/ortu'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('ortu/ortu'));
        }
    }

    public function _rules()
    {
$this->form_validation->set_rules('nik_ayah', 'nik_ayah', 'trim|required');
$this->form_validation->set_rules('nama_ayah', 'nama_ayah', 'trim|required');
$this->form_validation->set_rules('nik_ibu', 'nik_ibu', 'trim|required');
$this->form_validation->set_rules('nama_ibu', 'nama_ibu', 'trim|required');
$this->form_validation->set_rules('jmlh_penghasilan_ayah', 'jmlh_penghasilan_ayah', 'trim|required');
$this->form_validation->set_rules('jmlh_penghasilan_ibu', 'jmlh_penghasilan_ibu', 'trim|required');
$this->form_validation->set_rules('pekerjaan_ayah', 'pekerjaan_ayah', 'trim|required');
$this->form_validation->set_rules('pekerjaan_ibu', 'pekerjaan_ibu', 'trim|required');
$this->form_validation->set_rules('agama_ayah', 'agama_ayah', 'trim|required');
$this->form_validation->set_rules('agama_ibu', 'agama_ibu', 'trim|required');
$this->form_validation->set_rules('ttl_ayah', 'ttl_ayah', 'trim|required');
$this->form_validation->set_rules('ttl_ibu', 'ttl_ibu', 'trim|required');
$this->form_validation->set_rules('pendidikan_terakhir_ayah', 'pendidikan_terakhir_ayah', 'trim|required');
$this->form_validation->set_rules('pendidikan_terakhir_ibu', 'pendidikan_terakhir_ibu', 'trim|required');


	$this->form_validation->set_rules('id_ortu', 'id_ortu', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

    }

}