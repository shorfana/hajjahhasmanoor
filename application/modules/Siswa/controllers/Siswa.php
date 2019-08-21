<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Siswa extends MY_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('Siswa_model');
            $this->load->library('form_validation');
        }

        public function index()
        {

          $datasiswa=$this->Siswa_model->get_all();//panggil ke modell
          $datafield=$this->Siswa_model->get_field();//panggil ke modell

           $data = array(
             'content'=>'siswa/siswa/siswa_list',
             'sidebar'=>'siswa/sidebar',
             'css'=>'siswa/siswa/css',
             'js'=>'siswa/siswa/js',
             'datasiswa'=>$datasiswa,
             'datafield'=>$datafield,
             'module'=>'siswa',
             'titlePage'=>'siswa',
             'controller'=>'siswa'
            );
          $this->template->load($data);
        }


        public function create(){
           $data = array(
             'content'=>'siswa/siswa/siswa_form',
             'sidebar'=>'siswa/sidebar',
             'action'=>'siswa/siswa/create_action',
             'module'=>'siswa',
             'titlePage'=>'siswa',
             'controller'=>'siswa'
            );
          $this->template->load($data);
        }

        public function edit($nik_siswa){
          $dataedit=$this->Siswa_model->get_by_id($nik_siswa);
           $data = array(
             'content'=>'siswa/siswa/siswa_edit',
             'sidebar'=>'siswa/sidebar',
             'action'=>'siswa/siswa/update_action',
             'dataedit'=>$dataedit,
             'module'=>'siswa',
             'titlePage'=>'siswa',
             'controller'=>'siswa'
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
					'id_ortu' => $this->input->post('id_ortu',TRUE),
					'no_induk' => $this->input->post('no_induk',TRUE),
					'nama_siswa' => $this->input->post('nama_siswa',TRUE),
					'jenis_kelamin' => $this->input->post('jenis_kelamin',TRUE),
					'tempat_lahir' => $this->input->post('tempat_lahir',TRUE),
					'tanggal_lahir' => $this->input->post('tanggal_lahir',TRUE),
					'alamat' => $this->input->post('alamat',TRUE),
					'tahun_masuk' => $this->input->post('tahun_masuk',TRUE),
					'tingkat' => $this->input->post('tingkat',TRUE),
					'status_tempat_tinggal' => $this->input->post('status_tempat_tinggal',TRUE),
					'warga_negara' => $this->input->post('warga_negara',TRUE),
					'agama' => $this->input->post('agama',TRUE),
					'nik_ayah' => $this->input->post('nik_ayah',TRUE),
					'nik_ibu' => $this->input->post('nik_ibu',TRUE),

);

            $this->Siswa_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('siswa/siswa'));
        }
    }




    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($this->input->post('id', TRUE));
        } else {
            $data = array(
					'id_ortu' => $this->input->post('id_ortu',TRUE),
					'no_induk' => $this->input->post('no_induk',TRUE),
					'nama_siswa' => $this->input->post('nama_siswa',TRUE),
					'jenis_kelamin' => $this->input->post('jenis_kelamin',TRUE),
					'tempat_lahir' => $this->input->post('tempat_lahir',TRUE),
					'tanggal_lahir' => $this->input->post('tanggal_lahir',TRUE),
					'alamat' => $this->input->post('alamat',TRUE),
					'tahun_masuk' => $this->input->post('tahun_masuk',TRUE),
					'tingkat' => $this->input->post('tingkat',TRUE),
					'status_tempat_tinggal' => $this->input->post('status_tempat_tinggal',TRUE),
					'warga_negara' => $this->input->post('warga_negara',TRUE),
					'agama' => $this->input->post('agama',TRUE),
					'nik_ayah' => $this->input->post('nik_ayah',TRUE),
					'nik_ibu' => $this->input->post('nik_ibu',TRUE),

);

            $this->Siswa_model->update($this->input->post('nik_siswa', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('siswa/siswa'));
        }
    }

    public function delete($nik_siswa)
    {
        $row = $this->Siswa_model->get_by_id($nik_siswa);

        if ($row) {
            $this->Siswa_model->delete($nik_siswa);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('siswa/siswa'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('siswa/siswa'));
        }
    }

    public function _rules()
    {
      $this->form_validation->set_rules('id_ortu', 'id_ortu', 'trim|required');
      $this->form_validation->set_rules('no_induk', 'no_induk', 'trim|required');
      $this->form_validation->set_rules('nama_siswa', 'nama_siswa', 'trim|required');
      $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'trim|required');
      $this->form_validation->set_rules('tempat_lahir', 'tempat_lahir', 'trim|required');
      $this->form_validation->set_rules('tanggal_lahir', 'tanggal_lahir', 'trim|required');
      $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
      $this->form_validation->set_rules('tahun_masuk', 'tahun_masuk', 'trim|required');
      $this->form_validation->set_rules('tingkat', 'tingkat', 'trim|required');
      $this->form_validation->set_rules('status_tempat_tinggal', 'status_tempat_tinggal', 'trim|required');
      $this->form_validation->set_rules('warga_negara', 'warga_negara', 'trim|required');
      $this->form_validation->set_rules('agama', 'agama', 'trim|required');
      $this->form_validation->set_rules('nik_ayah', 'nik_ayah', 'trim|required');
      $this->form_validation->set_rules('nik_ibu', 'nik_ibu', 'trim|required');


    	$this->form_validation->set_rules('nik_siswa', 'nik_siswa', 'trim');
    	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

    }

}
