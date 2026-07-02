<?php
// Pasien Controller
defined('BASEPATH') or exit('No direct script access allowed');

class Pasien extends MainController {
  // Pasien Controller Construct
  public function __construct(){
    // Parent Construct
    parent::__construct();
    // Model
    $this->load->model('pasien_model', 'psnmdl');
  }

  public function index(){
    // Main Controller u Tampilan Main
    if (!permissible('pasien', 'is_view')) {
      blokir();
    }
    // File
    $this->data['title'] = 'Panel Data Pasien';
    $this->data['sub_page'] = 'pasien/index';
    $this->data['main_menu'] = 'pasien';
    $this->load->view('layout/layout', $this->data);
  }

  public function tables(){
    // Data Table Int Paging
    if (!permissible('pasien', 'is_view')) {
      blokir();
    }
    // Model Hasil
    $result = $this->psnmdl->getAllData();
    // Make it Profile
    echo json_encode($result);
  }

  public function insert(){
    // Halaman File Input
    if (!permissible('pasien', 'is_add')) {
      blokir();
    }
    // File
    $this->data['title'] = 'Tambah Pasien';
    $this->data['sub_page'] = 'pasien/insert';
    $this->data['main_menu'] = 'pasien';
    $this->load->view('layout/layout', $this->data);
  }

  public function publish() {
    // Publish Data Patient
    if (!permissible('pasien', 'is_add')) {
      blokir();
    }
    // Input Array
    $inputs = $this->input->post();
    // Upload File : Filename + Patient + Timestamp
    $patient = preg_replace('/[^A-Za-z0-9]+/', '_', trim($inputs['fullname']));
    $timestamp = date('Ymd_His');
    if (isset($_FILES['urlfiles']) && $_FILES['urlfiles']['error'] === UPLOAD_ERR_OK) {
      $extension = pathinfo($_FILES['urlfiles']['name'], PATHINFO_EXTENSION);
      $filename = pathinfo($_FILES['urlfiles']['name'], PATHINFO_FILENAME);
      $file = $filename . '_' . $patient . '_' . $timestamp . ($extension ? '.' . $extension : '');
      // Input File Upload to Array
      if (move_uploaded_file($_FILES['urlfiles']['tmp_name'], "uploads/profile/" . $file)) {
        $inputs['urlfiles'] = $file;
      }
    }
    // Publish Data
    $result = $this->psnmdl->publishPatient($inputs);
    // Define Variable
    $status  = $result ? 'success' : 'error';
    $message = $result ? 'Input Pasien Berhasil !' : 'Gagal Input Pasien !';
    alerta($status, $message);
    // Kembali
    redirect(base_url('pasien'));
  }

  public function detail($id){
    // Main Controller u Tampilan Detail Pasien
    if (!permissible('pasien', 'is_view')) {
      blokir();
    }
    // Detail PID
    $this->data['results'] = $this->psnmdl->detailByPID($id);
    // File
    $this->data['title'] = 'Panel Detail Pasien';
    $this->data['sub_page'] = 'pasien/detail';
    $this->data['main_menu'] = 'pasien';
    $this->load->view('layout/layout', $this->data);
  }

  public function update($id){
    // Main Controller u Publish Data Baru Pasien
    if (!permissible('pasien', 'is_edit')) {
      blokir();
    }
    // Multi Variable Input
    $inputs = $this->input->post();
    $patient = preg_replace('/[^A-Za-z0-9]+/', '_', trim($inputs['fullname']));
    $timestamp = date('Ymd_His');
    // Upload File : Filename + Patient + Timestamp if File is Available
    if (isset($_FILES['urlfiles']) && $_FILES['urlfiles']['error'] === UPLOAD_ERR_OK) {
      $extension = pathinfo($_FILES['urlfiles']['name'], PATHINFO_EXTENSION);
      $filename = pathinfo($_FILES['urlfiles']['name'], PATHINFO_FILENAME);
      $file = $filename . '_' . $patient . '_' . $timestamp . ($extension ? '.' . $extension : '');
      if (move_uploaded_file($_FILES['urlfiles']['tmp_name'], "uploads/profile/" . $file)) {
        $inputs['urlfiles'] = $file;
      }
    }
    // Model & Hasil
    $result = $this->psnmdl->modifyPatient($inputs, $id);
    $status = $result ? 'success' : 'error';
    $message = $result ? 'Update Pasien Berhasil !' : 'Gagal Update Pasien !';
    alerta($status, $message);
    // Hasil Kembali
    $url = base_url('pasien/detail/' . $id);
    redirect($url);
  }

  // Pasien Controller Delete : Hapus Data Pasien. Masalah ? Data Sign In Credential & Tabel Terkait
}